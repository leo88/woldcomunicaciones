<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar ingreso o egreso</title>
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
                        	
<?php include("controlador/cotros.php"); ?>
	<h3>Editar otros</h3>

	<form action="index.php?pag=11&id=<?= $idreporte?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>" required>
			<input type="hidden" name="idreporte" value="<?= $idreporte ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>" required>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Valor:</label>
            <input type="number" class="form-control" name="valor" value="<?php if($consultaedit[0]['salida_total'] == 0){
            	echo $consultaedit[0]['entrada_total'];
            	}else{echo $consultaedit[0]['salida_total']; }?>">       
		</div>
		
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-danger" value="Sale"> 
            <input type="submit" name="Entra" class="btn btn-success" value="Entra">
        </div>		
		<br>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=11" class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>