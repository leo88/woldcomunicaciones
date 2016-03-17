<?php include("controlador/ccompraproduc.php"); ?>

<div class="row-fluid">
	<h1>Editar minutos</h1>

	<form action="index.php?pag=5&id=<?= $idproduc?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cantidad minutos:</label>
            <input type="number" class="form-control" name="numero_compra" value="<?= $consultaedit[0]['numero_compra'] ?>" required>			
		</div>
		<div class="form-group col-lg-6">
			<label for="">Total Valor Minutos:</label>
            <input type="number" class="form-control" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripción:</label>
            <input type=number class="form-control" name="valor" value="<?= $consultaedit[0]['valor'] ?>" required>                  
		</div>
		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=5" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>