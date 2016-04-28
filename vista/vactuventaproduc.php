	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Venta por producto</title>
	        <meta name="description" content="??">
            
	        <link rel="stylesheet" href="css/normalize.css">
	        <link rel="stylesheet" href="css/main.css">
	        <link rel="stylesheet" href="css/bootstrap.css"/>
	        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	        <link rel="stylesheet" href="css/tablaResponsive.css"/>
	        <link rel="stylesheet" href="css/datatable.css"/>
	        <link rel="stylesheet" href="css/estilo.css">
	        <link rel="stylesheet" href="fonts/style.css">	       
	       
	    </head>	
		<body class="fondo">        
		    <div class="container-fluid"> 
                <div class="row-fluid">		        
		            <div class="span12">
                      <div class="edit">
                        	
<?php include("controlador/cventaproduc.php"); ?>
	<h3>Editar Venta por Producto</h3>
	<!-- 
		La variable id sera el identificador del registro que se esta actualizando
		en este caso id y idm seran las dos llaves primarias de la tabla compraxproducto.
	 -->
	<form action="index.php?pag=26&id=<?= $id_venta?>&idm=<?= $id_movi ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Numero de Venta:</label>
            <input type="number" class="form-control" name="numero_venta" value="<?= $consultaedit[0]['numero_venta'] ?>" readonly>	
            <input type="hidden" name="numero_vent" value="<?= $id_venta ?>">
            <input type="hidden" name="id_movimiento" value="<?= $id_movi ?>">
            <input type="hidden" name="actu" value="actu">		
		</div>
		<div class="form-group col-lg-6">
			<label for="">Movimiento:</label>
            <input type="number" class="form-control" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" value="<?= $consultaedit[0]['precio_venta'] ?>" required>                  
		</div>
		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=26" class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>