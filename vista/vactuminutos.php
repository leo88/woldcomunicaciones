	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Minutos</title>
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
                        	
<?php include("controlador/cminutos.php"); ?>
	<h3>Editar minutos</h3>

	<form action="index.php?pag=5&id=<?= $idminutos?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cantidad minutos:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad'] ?>" required>
			<input type="hidden" name="idminutos" value="<?= $idminutos ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>">
			<input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
            <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=5" class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>