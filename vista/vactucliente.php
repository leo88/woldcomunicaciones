<body class="fondo"> 
<div class="edit">
                        	
<?php include("controlador/ccliente.php"); ?>
	<div class="eti">Editar Cliente</div>

	<form action="home.php?pag=2&id=<?= $idcliente?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre'] ?>" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>
			<input type="hidden" name="idcliente" value="<?= $idcliente ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono:</label>
            <input type="text" class="form-control" name="telefono" value="<?= $consultaedit[0]['telefono']  ?>" pattern="[0-9]{7,20}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Direccion:</label>
            <input type="text" class="form-control" name="direccion" value="<?= $consultaedit[0]['direccion']  ?>" maxlength="50">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Email:</label>
            <input type="text" class="form-control" name="email" value="<?= $consultaedit[0]['email']  ?>" maxlength="30">
		</div>		
		<div class="form-group col-lg-6">
			<label for="">Detalle:</label>
            <input class="form-control" type=text  list=descripcion name="detalle" value="<?= $consultaedit[0]['detalle'] ?>" placeholder="Se define si es cliente">
                <datalist id="descripcion">
                   <option> Cliente</option>
                   <option> Transpaso</option>
                </datalist>        
		</div>	
		<div class="form-group col-lg-6"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=2" class="btn btn-success">Volver</a>
        </div>
	</form>  
   </div> 		                 
</body>