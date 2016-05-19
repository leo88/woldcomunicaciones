<body class="fondo">    
<div class="edit"> 
<?php include("controlador/crecargas.php"); ?>

<div class="row-fluid">
<div class="eti">Editar Datos de las Recargas</div>
	<form action="home.php?pag=31&id=<?= $idrecarga?>" method="POST">
		<div class="form-group col-lg-6">
            <label><span style="color:red;">* </span>Venta Recargas:</label>
            <input type="number" class="form-control" name="venta_recarga" value="<?= $consultaedit[0]['venta_recarga'] ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros" required>
			<input type="hidden" name="idrecarga" value="<?= $idrecarga ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=31" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>
</div>
</body>