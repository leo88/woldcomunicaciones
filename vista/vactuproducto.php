
<body class="fondo">        
    <div class="edit">
                        	
  		<?php include("controlador/cproducto.php"); ?>
		<h3>Editar Producto</h3>

		<form action="home.php?pag=3&id=<?= $idproduc?>" method="POST">
			<div class="form-group col-lg-6">
        	    <label for="">Referencia:</label>
				<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly>
				<input type="hidden" name="refe" value="<?= $idproduc ?>">
        	    <input type="hidden" name="actu" value="actu">
			</div>
			<div class="form-group col-lg-6">
				<label for="">Clase:</label>
				<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre']  ?>" pattern="[A-z ]{2,40}" title="Solo se permiten letras máximo 40 caracteres" required>
			</div>
			<div class="form-group col-lg-6">
				<label for="">Marca:</label>
				<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca'] ?>" required>
			</div>
			<div class="form-group col-lg-6">
				<label for="">Precio:</label>
				<input type="number" class="form-control" name="precio" value="<?= $consultaedit[0]['precio']  ?>" required>
			</div>
			<div class="form-group col-lg-12">
        	    <input type="submit" class="btn btn-success" value="Editar">
				<a href="home.php?pag=3" class="btn btn-success">Volver</a>
        	</div>
		</form>
    </div> 
</body>
