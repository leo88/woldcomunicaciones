	<!DOCTYPE html>
		<html lang="es">		
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Editar Empleado</title>
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
                        	
<?php include("controlador/cempleado.php"); ?>
	<h3>Editar Empleado</h3>

	<form action="index.php?pag=9&id=<?= $idemple?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cédula de Ciudadania:</label>
            <input type="text" class="form-control" name="idempleado" value="<?= $consultaedit[0]['idempleado'] ?>" readonly>
			<input type="hidden" name="idemple" value="<?= $idemple ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Nombre del empleado:</label>
            <input type="text" class="form-control" name="nombre"  value="<?= $consultaedit[0]['nombre']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Sueldo:</label>
            <input type="number" class="form-control" name="sueldo" value="<?= $consultaedit[0]['sueldo'] ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Dirección del empleado:</label>
            <input type="text" class="form-control" name="direccion" value="<?= $consultaedit[0]['direccion']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Ciudad de residencia:</label>
            <input type="text" class="form-control" name="ciudad"  value="<?= $consultaedit[0]['ciudad']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Teléfono del empleado:</label>
            <input type="text" class="form-control" name="telefono_emple" value="<?= $consultaedit[0]['telefono_emple'] ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Teléfono de referencia:</label>
            <input type=text class="form-control" name="telefono_refe" value="<?= $consultaedit[0]['telefono_refe']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= $consultaedit[0]['email']  ?>">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha_ingreso']  ?>">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Estado:</label> 
            <input type=text list=estado name="estado" value="<?= $consultaedit[0]['estado']  ?>"required>
                <datalist id="estado">
                   <option> Activo </option>
                   <option> Inactivo </option>
                </datalist> 
                Escribir Inactivo en caso de que el empleado no este laborando      
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=9"class="btn btn-success">Volver</a>
        </div>
	</form>
                      </div> 		                 
		            </div>
		        </div><!--/row-->	
		   </div><!--container-fluid-->

		</body>
	</html>