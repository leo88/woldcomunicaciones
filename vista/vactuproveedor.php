	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Proveedor</title>
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
                        	
<?php include("controlador/cproveedor.php"); ?>
	<h3>Editar Proveedor</h3>

	<form action="index.php?pag=7&id=<?= $idprovee?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Identificacion proveedor::</label>
			<input type="text" class="form-control" name="idproveedor" value="<?= $consultaedit[0]['idproveedor'] ?>" readonly>
			<input type="hidden" name="idprovee" value="<?= $idprovee ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Nombre proveedor:</label>
            <input type="text" class="form-control" name="nombre"  value="<?= $consultaedit[0]['nombre']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">contacto:</label>
            <input type="text" class="form-control" name="contacto" value="<?= $consultaedit[0]['contacto'] ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono proveedor:</label>
            <input type="number" class="form-control" name="telefono" value="<?= $consultaedit[0]['telefono']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono contacto:</label>
            <input type="number" class="form-control" name="telefono2"  value="<?= $consultaedit[0]['telefono2']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= $consultaedit[0]['email'] ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=" class="btn btn-success">Volver</a>
        </div>
	</form> 
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>