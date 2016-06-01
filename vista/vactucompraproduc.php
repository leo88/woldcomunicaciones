<body class="fondo">    
<div class="edit">                        	
<?php include("controlador/ccompraproduc.php"); ?>
	<div class="eti">Editar Compra por Producto</div>
	<!-- 
		La variable id sera el identificador del registro que se esta actualizando
		en este caso id y idm seran las dos llaves primarias de la tabla compraxproducto.
	 -->
	<form action="home.php?pag=20&id=<?= $id_compra?>&idm=<?= $id_movi ?>" method="POST">
		<div class="form-group col-lg-6">
            <label for=""><span style="color:red;">* </span>Numero de Compra:</label>
            <input type="number" class="form-control" name="numero_compra" value="<?= $consultaedit[0]['numero_compra'] ?>" readonly>	
            <input type="hidden" name="numero_comp" value="<?= $id_compra ?>">
            <input type="hidden" name="id_movimiento" value="<?= $id_movi ?>">
            <input type="hidden" name="actu" value="actu">		
		</div>
		<div class="form-group col-lg-6">
			<label for=""><span style="color:red;">* </span>Movimiento:</label>
            <input type="number" class="form-control" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="number" class="form-control" name="valor" value="<?= $consultaedit[0]['valor'] ?>" pattern="[0-9]{1,10}" min="0" title="Solo validos numeros" required>                  
		</div>
		
		<div class="form-group col-lg-6"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=20" class="btn btn-success">Volver</a>
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