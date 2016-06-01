<?php include('controlador/cmovimiento.php'); ?>

<?php $consultamovimiento = $movimiento->consultar_movimiento_venta(); ?>
<div id='no-more-tables'>
	<table class="table table-bordered table-hover" id="example">
		<thead>
            <tr>
                <th colspan="12">Listado de Movimientos</th>
            </tr>
            <tr>
                <th>ID</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamovimiento);$i++): ?>
				<tr>
					<td data-title='ID'><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td data-title='Motivo'><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td data-title='Referencia'><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td data-title='Cantidad'><?= $consultamovimiento[$i]['cantidad'] ?></td>					
					<td data-title='Edición'><a href="home.php?pag=17&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idmovimientoeli" value="<?= $consultamovimiento[$i]['idmovimiento'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
        </tbody>
	</table>
</div>
<br/><br/>    
