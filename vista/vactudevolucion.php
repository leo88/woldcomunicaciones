		<body class="fondo">        
		    <div class="edit">
                        	
<?php include("controlador/cdevolucion.php"); ?>
	<div class="eti">Editar Devolucion</div>
	<form action="home.php?pag=18&id=<?= $iddevolucion?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo" value="<?= $consultaedit[0]['motivo'] ?>" required>
			<input type="hidden" name="iddevolucion" value="<?= $iddevolucion ?>">
			<input type="hidden" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for=""><span style="color:red;">* </span>Numero de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" value="<?= $consultaedit[0]['numero_compra']  ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros" required>
		</div>
		<div class="form-group col-lg-6">
			<label for=""><span style="color:red;">* </span>Costo:</label>
            <input type="number" class="form-control" name="costo" value="<?= $consultaedit[0]['costo']  ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros" required>
		</div>
		<div class="form-group col-lg-6"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=18" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>              
</body>
	