<?php include('controlador/cminutos.php'); ?>

<div class="container-fluid">
	<h1>Insertar Minutos</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad">
            <input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
            <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">  
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>

<?php $consultaminutos = $minutos->consultar_minutos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Minutos</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>fecha Minutos</th>
				<th>Cantidad</th>
				<th>compra</th>
				<th>venta</th>
				<th>utilidad</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaminutos);$i++): ?>
				<tr>
					<td><?= $consultaminutos[$i]['idminutos'] ?></td>
					<td><?= $consultaminutos[$i]['fecha'] ?></td>
					<td><?= $consultaminutos[$i]['cantidad'] ?></td>
					<td><?= "$ ".$consultaminutos[$i]['compra'] ?></td>
					<td><?= "$ ".$consultaminutos[$i]['venta'] ?></td>
					<td><?= "$ ".$consultaminutos[$i]['utilidad'] ?></td>
					<td><a href="index.php?pag=6&id=<?= $consultaminutos[$i]['idminutos'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idminutoseli" value="<?= $consultaminutos[$i]['idminutos'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
