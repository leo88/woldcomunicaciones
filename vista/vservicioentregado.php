<?php include("controlador/cservicioentregado.php"); ?>

<div class="container-fluid">
	<h1>Insertar servicioentregado</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">No. Orden:</label>
             <select name="numero_orden" class="form-control" required>
				<option value=0>Seleccione No. Orden</option>
				<?php for($i=0;$i<count($numorden2);$i++): ?>
					<option value="<?= $numorden2[$i]['numero_orden'] ?>"><?= $numorden2[$i]['numero_orden'] ?></option>
				<?php endfor; ?>
			</select>        
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Saldo:</label>
            <input type="number" class="form-control" name="saldo_cancel" required >       
		</div>
		<div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaservicioentregado = $servicioentregado->consultar_servicioentregado(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Servicio Tecnico Entregado</th>
			</tr>
			<tr>
				<th>No. Orden</th>
				<th>Fecha</th>
				<th>Saldo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaservicioentregado);$i++): 
            $numorden1 = $servicioentregado->sel_orden1($consultaservicioentregado[$i]['numero_orden']);
            
            ?>
				<tr>
					<td><?= $numorden1[0]['numero_orden'] ?></td>
					<td><?= $consultaservicioentregado[$i]['fecha'] ?></td>
					<td><?= $consultaservicioentregado[$i]['saldo_cancel'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultaservicioentregado[$i]['numero_orden'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserventeli" value="<?= $consultaservicioentregado[$i]['numero_orden'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
