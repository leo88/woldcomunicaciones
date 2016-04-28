<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Producto</title>
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
                        	
  <?php include("controlador/cproducto.php"); ?>
	<h3>Editar Producto</h3>

	<form action="index.php?pag=3&id=<?= $idproduc?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
			<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly>
			<input type="hidden" name="refe" value="<?= $idproduc ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Clase:</label>
			<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Marca:</label>
			<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca'] ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Precio:</label>
			<input type="number" class="form-control" name="precio" value="<?= $consultaedit[0]['precio']  ?>" >
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=3" class="btn btn-success">Volver</a>
        </div>
	</form>

                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>