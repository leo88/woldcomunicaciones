	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Devolucion</title>
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
                        	
<?php include("controlador/cdevolucion.php"); ?>
	<h3>Editar Devolucion</h3>

	<form action="index.php?pag=18&id=<?= $iddevolucion?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo" value="<?= $consultaedit[0]['motivo'] ?>" required>
			<input type="hidden" name="iddevolucion" value="<?= $iddevolucion ?>">
			<input type="hidden" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Numero de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" value="<?= $consultaedit[0]['numero_compra']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Costo:</label>
            <input type="text" class="form-control" name="costo" value="<?= $consultaedit[0]['costo']  ?>" >
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=18" class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>