<body class="fondo">        
	<div class="edit">
                        	
	<?php include("controlador/cminutos.php"); ?>
	<div class="eti">Editar minutos</div>

	<form action="home.php?pag=5&id=<?= $idminutos?>" method="POST">
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Cantidad minutos:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad'] ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros" required>
			<input type="hidden" name="idminutos" value="<?= $idminutos ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>">
			<input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
            <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">
            <input type="hidden" name="actu" value="actu">
		</div>
		<br>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">	
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=5" class="btn btn-success">Volver</a>
        </div>
	</form>
  	</div><!--container-fluid-->
</body>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#registrar').addClass('active');
    });
</script>