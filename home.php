
<?php  include("modelo/mseguridad.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wold Comunicaciones</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="shortcut icon" href="imagen/icono4.png">-->
	
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>  	
  	<link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	<link rel="stylesheet" href="css/tablaResponsive.css"/>
	<link rel="stylesheet" href="css/datatable.css"/>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="fonts/style.css">        
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/chosen-bootstrap.css">
	<script src="js/chosen.jquery.js"></script>
    <script src="js/script.js"></script>
	<script src="js/jquery-1.12.3.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/jquery-datatable.js"></script>
  	
</head>
<body>
<?php
    $perfil = $_SESSION['perfil'];
    $usuario = $_SESSION['usuario'];
?> 
	<nav class="navbar navbar-default">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="home.php">Wold Comunicaciones</a>
    		</div>
    		<?php 
    			$perfilusuario = isset($_SESSION["perfil"]) ? $_SESSION["perfil"]:NULL;
			?>	
			<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="home.php">Home</a></li>
      				<li class="dropdown">
      					<a class="dropdown-toggle" data-toggle="dropdown" href="">Registrar
      					<span class="caret"></span></a>
      					<ul class="dropdown-menu">
      						<?php if ($perfil=='Administrador'): ?>
      						<li><a href="home.php?pag=9">Empleados</a></li>
      						<li><a href="home.php?pag=29">Valor del minuto</a></li>
      						<?php endif ?> 
      						<li><a href="home.php?pag=5">Minutos</a></li>
      						<li><a href="home.php?pag=31">Recargas</a></li>
      						<li><a href="home.php?pag=11">Ingresos y Egresos varios</a></li>
      						<li><a href="home.php?pag=2">Clientes</a></li>
      					</ul>
      				</li>
      				<li class="dropdown">
      					<a class="dropdown-toggle" data-toggle="dropdown" href="">Venta
      					<span class="caret"></span></a>
      					<ul class="dropdown-menu">
      						<?php if ($perfil=='Administrador'): ?>
      						<li><a href="home.php?pag=16">Movimiento</a></li>
      						<li><a href="home.php?pag=26">Venta por Producto</a></li>
      						<?php endif ?> 
      						<li><a href="home.php?pag=24">Ventas</a></li>
      					</ul>
      				</li>
      				<li class="dropdown">
      					<a class="dropdown-toggle" data-toggle="dropdown" href="">Servicio Técnico
      					<span class="caret"></span></a>
      					<ul class="dropdown-menu">
      						<li><a href="home.php?pag=16">Registro del Servicio</a></li>
      						<li><a href="home.php?pag=25">Servicio Tecnico Entregado</a></li>
      					</ul>
      				</li>
      				<?php if ($perfil=='Administrador'): ?>
      				<li class="dropdown">
      					<a class="dropdown-toggle" data-toggle="dropdown" href="">Productos
      					<span class="caret"></span></a>
      					<ul class="dropdown-menu">
      						<li><a href="home.php?pag=3">Producto</a></li>
      						<li><a href="home.php?pag=7">Proveedor</a></li>
      						<li><a href="home.php?pag=19">Compra</a></li>
      						<li><a href="home.php?pag=16">Movimiento</a></li>
      						<li><a href="home.php?pag=20">Compra por Producto</a></li>
      						<li><a href="home.php?pag=21">Reposición</a></li>
      						<li><a href="home.php?pag=18">Devolución</a></li>
      					</ul>
      				</li>
      				<?php endif ?>
      				<li class="dropdown">
      					<a class="dropdown-toggle" data-toggle="dropdown" href="">Informes
      					<span class="caret"></span></a>
      					<ul class="dropdown-menu">
      						<?php if ($perfil=='Administrador'): ?>
      						<li><a href="home.php?pag=9">Compras</a></li>
      						<li><a href="home.php?pag=9">Ventas</a></li>
      						<li><a href="home.php?pag=29">Devolucion y reposición</a></li>
      						<li><a href="home.php?pag=29">Contabilidad</a></li>
      						<?php endif ?> 
      						<li><a href="home.php?pag=5">Existencia</a></li>
      						<li><a href="home.php?pag=31">Servicio Técnico</a></li>
      					</ul>
      				</li> 
      				<li><a href="#">Page 1</a></li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
    				<div class="navbar-brand"><small><strong><?php echo ucfirst($usuario); ?></strong></small></div>
                    <?php if ($perfil=='Administrador'): ?>
      				<li><a href="#"><span class="glyphicon glyphicon-user"></span> Nuevo</a></li>
      				<?php endif ?>
     				<li><a href="vista/vsalir.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
   				</ul>
   			</div>
  		</div>
	</nav>
	<div class="container">
		<nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="home.php">Home</a></li>
	              <li><a href="home.php?pag=2">clientes</a></li>
	              <li><a href="home.php?pag=3">producto</a></li>
	              <li><a href="home.php?pag=5">minutos</a></li>
	              <li><a href="home.php?pag=7">proveedor</a></li>
	              <li><a href="home.php?pag=9">Empleado</a></li>
	              <li><a href="home.php?pag=11">Otros</a></li>
	              <li><a href="home.php?pag=13">Servivcio Tecnico</a></li>
	              <li><a href="home.php?pag=15">Servivcio Tecnico Entregado</a></li>
	              <li><a href="home.php?pag=16">Movimiento</a></li>
	              <li><a href="home.php?pag=18">Devolucion Irregular</a></li>
	              <li><a href="home.php?pag=19">Compra</a></li>
	              <li><a href="home.php?pag=20">Compra por producto</a></li>
	              <li><a href="home.php?pag=21">Reposcion</a></li>
	              <li><a href="home.php?pag=24">Venta</a></li>
	              <li><a href="home.php?pag=26">Venta por Producto</a></li>
	              <li><a href="home.php?pag=29">Minutos valor</a></li>
	              <li><a href="home.php?pag=31">Recargas</a></li>
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav>	
    </div>
    <div class="container">  		
		<?php
			$page = isset($_GET['pag']) ? $_GET['pag'] : NULL;
			if ($page == 2) 
			{
                include("vista/vcliente.php");
			}
            if ($page == 3) 
			{
                include("vista/vproducto.php");
			}
            if ($page == 4) 
			{
                include("vista/vactuproducto.php");
			}
            if ($page == 5) 
			{
                include("vista/vminutos.php");
			}
            if ($page == 6) 
			{
                include("vista/vactuminutos.php");
			}
            if ($page == 7) 
			{
                include("vista/vproveedor.php");
			}
            if ($page == 8) 
			{
                include("vista/vactuproveedor.php");
			}
            if ($page == 9) 
			{
                include("vista/vempleado.php");
			}
            if ($page == 10) 
			{
                include("vista/vactuempleado.php");
			}
             if ($page == 11) 
			{
                include("vista/votros.php");
			}
            if ($page == 12) 
			{
                include("vista/vactuotros.php");
			}
            if ($page == 13) 
			{
                include("vista/vserviciotecnico.php");
			}
            if ($page == 14) 
			{
                include("vista/vactuserviciotecnico.php");
			}
            if ($page == 15) 
			{
                include("vista/vservicioentregado.php");
			}
            if ($page == 16) 
			{
                include("vista/vmovimiento.php");
			}			
            if ($page == 17) 
			{
                include("vista/vactumovimiento.php");
			}
            if ($page == 18) 
			{
                include("vista/vdevolucion.php");
			}
			 if ($page == 19) 
			{
                include("vista/vcompra.php");
			}
            if ($page == 20) 
			{
                include("vista/vcompraproduc.php");
			}
            if ($page == 21) 
			{
                include("vista/vreposicion.php");
			}
            if ($page == 22) 
			{
                include("vista/vactucliente.php");
			}
            if ($page == 23) 
			{
                include("vista/vactucompraproduc.php");
			}
			if ($page == 24) 
			{
                include("vista/vventa.php");
			}
            if ($page == 25) 
			{
                include("vista/vactuventa.php");//no esta creado
			}
			if ($page == 26) 
			{
                include("vista/vventaproduc.php");
			}
            if ($page == 27) 
			{
                include("vista/vactuventaproduc.php");
			}
			if ($page == 28) 
			{
                include("vista/vactudevolucion.php");
			}
			if ($page == 29) 
			{
                include("vista/vminutosvalor.php");
			}
			if ($page == 30) 
			{
                include("vista/vactuminutosvalor.php");
			}
			if ($page == 31) 
			{
                include("vista/vrecargas.php");
			}
			if ($page == 32) 
			{
                include("vista/vacturecargas.php");
			}
		?>
    </div>
    <!--Script para control de la tabla-->
			<script type="text/javascript">
				//para buscar en las tablas
				$(document).ready(function() {
				    $('#example').dataTable( {
				        "bPaginate": true,
				        "bLengthChange": true,
				        "bFilter": true,
				        "bSort": false,
				        "bInfo": true,
				        "bAutoWidth": true
				    } );
				} );	
			</script>	
</body>
</html>