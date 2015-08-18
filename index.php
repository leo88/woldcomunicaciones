<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba_cs</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/miestilo.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="index.php">Home</a></li>
	              <li><a href="index.php?pag=2">clientes</a></li>
	              <li><a href="index.php?pag=3">producto</a></li>
	              <li><a href="index.php?pag=5">minutos</a></li>
	              <li><a href="index.php?pag=7">proveedor</a></li>
	              <li><a href="index.php?pag=9">Empleado</a></li>
	              <li><a href="index.php?pag=11">Otros</a></li>
	              <li><a href="index.php?pag=13">Servivcio Tecnico</a></li>
	              <li><a href="index.php?pag=15">Servivcio Tecnico Entregado</a></li>
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav>	
    </div>
    <div class="container">  		
		<h1>Wold comunicaciones</h1>
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
		?>
	</div>
</body>
</html>