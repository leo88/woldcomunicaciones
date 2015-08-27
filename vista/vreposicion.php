<?php include('controlador/creposicion.php'); ?>

<div class="container-fluid">
	<h1>Insertar Reposicion</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Movimiento:</label>
            <input type="number" class="form-control" name="movimiento">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">No. Compra:</label>
            <input type="number" class="form-control" name="numero_compra">       
		</div>	
				
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>
<?php $consultareposicion = $reposicion->consultar_reposicion(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">reposicion</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Movimiento</th>
				<th>No. Compra</th>				
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultareposicion);$i++): ?>
				<tr>
					<td><?= $consultareposicion[$i]['idreposicion'] ?></td>
					<td><?= $consultareposicion[$i]['movimiento'] ?></td>
					<td><?= $consultareposicion[$i]['numero_compra'] ?></td>					
					<td><a href="index.php?pag=6&id=<?= $consultareposicion[$i]['idreposicion'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreposicioneli" value="<?= $consultareposicion[$i]['idreposicion'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
