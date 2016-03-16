<?php include('controlador/cmovimiento.php'); ?>
<div class="container-fluid">
	<h1>Insertar Movimiento</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type=text list=descripcion name="motivo" required>
                <datalist id=descripcion >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist> 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" required>       
		</div>		
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-success" value="-"> 
            <input type="submit" name="Entra" class="btn btn-danger" value="+">
        </div>
	</form>
</div>

<?php $consultamovimiento = $movimiento->consultar_movimiento(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">movimiento</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultamovimiento);$i++): ?>
				<tr>
					<td><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td><?= $consultamovimiento[$i]['cantidad'] ?></td>					
					<td><a href="index.php?pag=17&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idmovimientoeli" value="<?= $consultamovimiento[$i]['idmovimiento'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>