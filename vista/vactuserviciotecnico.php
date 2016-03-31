<?php include("controlador/cserviciotecnico.php"); ?>

<div class="row-fluid">
	<h1>Editar Servicio Tecnico</h1>

	<form action="index.php?pag=13&id=<?= $idproduc?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre:</label>
			<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre'] ?>" readonly>
			<input type="hidden" name="refe" value="<?= $idproduc ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Marca:</label>
			<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Referencia:</label>
			<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion Servicio:</label>
			<input type="text" class="form-control" name="descripcion_st" value="<?= $consultaedit[0]['descripcion_st'] ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Observacion:</label>
			<input type="text" class="form-control" name="observacion" value="<?= $consultaedit[0]['observacion'] ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Costo del servicio:</label>
			<input type="number" class="form-control" name="costo_st" value="<?= $consultaedit[0]['costo_st']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Precio Cliente:</label>
			<input type="number" class="form-control" name="precio_cliente" value="<?= $consultaedit[0]['precio_cliente']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">ID del cliente:</label>
            <select name="id_cliente" class="form-control"  required>
				<option ><?= $consultaedit[0]['id_cliente']  ?></option>
				<?php for($i=0;$i<count($cliente2);$i++): ?>
					<option value="<?= $cliente2[$i]['idcliente'] ?>"><?= $cliente2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Empleado:</label>
            <select name="empleado" class="form-control" required>
				<option value="<?= $consultaedit[0]['empleado']  ?>"></option>
				<?php for($i=0;$i<count($empleado2);$i++): ?>
					<option value="<?= $empleado2[$i]['idempleado'] ?>"><?= $empleado2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>      
		</div>
		<div class="form-group col-lg-6">
			<label for="">Abono:</label>
			<input type="number" class="form-control" name="abono" value="<?= $consultaedit[0]['abono']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=13" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>