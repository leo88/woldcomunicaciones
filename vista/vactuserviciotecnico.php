	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Servicio Tecnico</title>
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

<?php include("controlador/cserviciotecnico.php"); ?>
	<h1>Editar Servicio Tecnico</h1>

	<form action="index.php?pag=13&id=<?= $numero_orden?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre:</label>
			<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre'] ?>" required>
			<input type="hidden" name="numero_orden" value="<?= $numero_orden ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Marca:</label>
			<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Referencia:</label>
			<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion Servicio:</label>
			<input type="text" class="form-control" name="descripcion_st" value="<?= $consultaedit[0]['descripcion_st'] ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Observacion:</label>
			<input type="text" class="form-control" name="observacion" value="<?= $consultaedit[0]['observacion'] ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Costo del servicio:</label>
			<input type="number" class="form-control" name="costo_st" value="<?= $consultaedit[0]['costo_st']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Precio Cliente:</label>
			<input type="number" class="form-control" name="precio_cliente" value="<?= $consultaedit[0]['precio_cliente']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>" required>
            <input type="hidden" class="form-control" name="id_cliente" value="<?= $consultaedit[0]['id_cliente']  ?>">
            <input type="hidden" class="form-control" name="empleado" value="<?= $consultaedit[0]['empleado']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Abono:</label>
			<input type="number" class="form-control" name="abono" value="<?= $consultaedit[0]['abono']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=13" class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>