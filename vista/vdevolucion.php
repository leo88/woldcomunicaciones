<?php include("controlador/cdevolucion.php"); ?>
   

<div class="container-fluid">
	<h1>Insertar Devolucion</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Número de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" required > 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Costo:</label>
            <input type="text" class="form-control" name="costo" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultadevolucion = $devolucion->consultar_devolucion(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Devolucion Irregular</th>
			</tr>
			<tr>
				<th>Id Devolucion</th>
				<th>Id Movimiento</th>
				<th>Fecha</th>
				<th>Motivo</th>
				<th>Numero de Compra</th>
				<th>Costo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultadevolucion);$i++): 
				$movimiento1 = $devolucion->sel_movimiento1($consultadevolucion[$i]['movimiento']);
			?>
				<tr>
					<td><?= $consultadevolucion[$i]['iddevolucion'] ?></td>
					<td><?= $consultadevolucion[$i]['movimiento'] ?></td>
					<td><?= $consultadevolucion[$i]['fecha'] ?></td>
					<td><?= $consultadevolucion[$i]['motivo'] ?></td>
					<td><?= $consultadevolucion[$i]['numero_compra'] ?></td>
					<td><?= $consultadevolucion[$i]['costo'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultadevolucion[$i]['iddevolucion'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="iddevoeli" value="<?= $consultadevolucion[$i]['iddevolucion'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>