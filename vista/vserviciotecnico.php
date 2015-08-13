<?php include("controlador/cserviciotecnico.php"); ?>
   

<div class="container-fluid">
	<h1>Insertar Servicio Tecnico</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Marca:</label>
            <input type="text" class="form-control" name="marca" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Descripcion del servicio:</label>
            <input type="text" class="form-control" name="descripcion_st" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Observacion:</label>
            <input type="text" class="form-control" name="observacion" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Costo del servicio:</label>
            <input type="number" class="form-control" name="costo_st" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Precio al cliente:</label>
            <input type="number" class="form-control" name="precio_cliente" required >       
		</div>
				<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">ID del cliente:</label>
            <input type="number" class="form-control" name="id_cliente" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">ID del Emplado:</label>
            <input type="text" class="form-control" name="empleado" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Abono:</label>
            <input type="text" class="form-control" name="abono" required >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaserviciotecnico = $serviciotecnico->consultar_serviciotecnico(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Servicio Tecnico</th>
			</tr>
			<tr>
				<th>No. Orden</th>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Referencia</th>
				<th>Descripcion</th>
				<th>Observacion</th>
				<th>Costo servicio</th>
				<th>Precio cliente</th>
				<th>Fecha</th>
				<th>ID clente</th>
				<th>ID empleado</th>
				<th>Abono</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaserviciotecnico);$i++): ?>
				<tr>
					<td><?= $consultaserviciotecnico[$i]['numero_orden'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['nombre'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['marca'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['referencia'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['descripcion_st'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['observacion'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['costo_st'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['precio_cliente'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['fecha'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['id_cliente'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['empleado'] ?></td>
					<td><?= $consultaserviciotecnico[$i]['abono'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultaserviciotecnico[$i]['numero_orden'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserviteceli" value="<?= $consultaserviciotecnico[$i]['numero_orden'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
