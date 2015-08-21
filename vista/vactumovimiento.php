<?php include("controlador/cmovimiento.php"); ?>

<div class="row-fluid">
	<h1>Editar Movimiento</h1>

	<form action="index.php?pag=16&id=<?= $idproduc?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad_min'] ?>" required>
			<input type="hidden" name="idmovimiento" value="<?= $idmovimiento ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Total Valor movimiento:</label>
            <input type="number" class="form-control" name="valor" value="<?= $consultaedit[0]['valor_min']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripción:</label>
            <input type=text  list=descripcion name="descripcion" value="<?= $consultaedit[0]['descripcion'] ?>" required>
                <datalist id=descripcion >
                   <option> movimiento
                   <option> Recargas
                </datalist>        
		</div>
		<div class="form-group col-lg-6">
			<label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=5" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>