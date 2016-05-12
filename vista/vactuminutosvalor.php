<body class="fondo">       
<div class="edit">
<?php include("controlador/cminutosvalor.php"); ?>
	<div class="eti">Editar valores de minuto</div>

	<form action="home.php?pag=29&id=<?= $idminutosvalor?>" method="POST">
		<div class="form-group col-lg-6">
            <label for=""><span style="color:red;">* </span>Costo compra:</label>
            <input type="number" class="form-control" name="costo_compra" value="<?= $consultaedit[0]['costo_compra'] ?>" required>
			<input type="hidden" name="idminutosvalor" value="<?= $idminutosvalor ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
            <label for=""><span style="color:red;">* </span>Valor venta:</label>
            <input type="number" class="form-control" name="valor_venta" value="<?= $consultaedit[0]['valor_venta'] ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
            <a href="home.php?pag=29" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
</body>