<?php include('controlador/cminutos.php'); ?>

<div class="container-fluid">
	<h1>Insertar Minutos</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cantidad minutos:</label>
            <input type="number" class="form-control" name="cantidad">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Total Valor Minutos:</label>
            <input type="number" class="form-control" name="valor">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Descripción:</label>
            <input type=text list=descripcion name="descripcion">
                <datalist id=descripcion >
                   <option> Minutos
                   <option> Recargas
                </datalist>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha">       
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>
<?php $consultaminutos = $minutos->consultar_minutos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Minutos</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cantidad Minutos</th>
				<th>Valor total</th>
				<th>Descripcion</th>
				<th>Fecha</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=count;$i<count($consultaminutos);$i++): ?>
				<tr>
					<td><?= $consultaminutos[$i]['idminutos'] ?></td>
					<td><?= $consultaminutos[$i]['cantidad_min'] ?></td>
					<td><?= $consultaminutos[$i]['valor_min'] ?></td>
					<td><?= $consultaminutos[$i]['descripcion'] ?></td>
					<td><?= $consultaminutos[$i]['fecha'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultaminutos[$i]['idminutos'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idminutoseli" value="<?= $consultaminutos[$i]['idminutos'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
