
<body class="fondo">        
    <div class="edit">
                        	
  		<?php include("controlador/cproducto.php"); ?>
		<div class="eti">Editar Producto</div>

		<form action="home.php?pag=3&id=<?= $idproduc?>" method="POST">
			<div class="form-group col-md-6 col-lg-6">
        	    <label for=""><span style="color:red;">* </span>Referencia:</label>
				<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly>
				<input type="hidden" name="refe" value="<?= $idproduc ?>">
        	    <input type="hidden" name="actu" value="actu">
			</div>
			<div class="form-group col-md-6 col-lg-6">
				<label for=""><span style="color:red;">* </span>Clase:</label>
				<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre']  ?>" pattern="[A-z ]{2,40}" title="Solo se permiten letras máximo 40 caracteres" required>
			</div>
			<div class="form-group col-md-6 col-lg-6">
				<label for=""><span style="color:red;">* </span>Marca:</label>
				<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca'] ?>" pattern="[A-z ]{2,20}" title="Solo se permiten letras máximo 20 caracteres" required>
			</div>
			<div class="form-group col-md-6 col-lg-6">
				<label for=""><span style="color:red;">* </span>Precio:</label>
				<input type="number" class="form-control" name="precio" value="<?= $consultaedit[0]['precio']  ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros" required>
			</div>
			<div class="form-group col-md-12 col-lg-12">
        	    <input type="submit" class="btn btn-success" value="Editar">
				<a href="home.php?pag=3" class="btn btn-success">Volver</a>
        	</div>
		</form>
    </div> 
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#producto').addClass('active');
    });
</script>