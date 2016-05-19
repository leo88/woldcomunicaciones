<?php include('controlador/cminutos.php'); ?>

	<div class="container-fluid lol">
		<div class="eti">Minutos</div>
		<form class="blanco" action="" method="POST">
			<div class="form-group col-md-6 col-lg-4">
		        <label for=""><span style="color:red;">* </span>Fecha:</label>
		        <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" required>           
			</div>
			<div class="form-group col-md-6 col-lg-4">
		        <label for=""><span style="color:red;">* </span>Cantidad:</label>
		        <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,10}" min="0" title="Solo validos numeros" required>
		        <input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
		        <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">      
			</div>
			<div class="form-group col-md-12 col-lg-4"> <br>          		
		        <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
		    </div>
		</form>
	</div>
	<?php $consultaminutos = $minutos->consultar_minutos(); ?>
	<div id='no-more-tables'>
		<table class="table table-bordered table-hover" id="example">
		  	<thead>
           	<tr>
           	    <th colspan="3">Listado de Minutos</th>
           	</tr>
           	<tr>
           	    <th>ID</th>
				<th>Fecha Minutos</th>
				<th>Cantidad</th>
				<th>compra</th>
				<th>venta</th>
				<th>Utilidad</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
           	</tr>
       		</thead>
       	<tbody>
        <?php for($i=0;$i<count($consultaminutos);$i++): ?>
			<tr>
				<td data-title='ID'><?= $consultaminutos[$i]['idminutos'] ?></td>
				<td data-title='Fecha Minutos'><?= $consultaminutos[$i]['fecha'] ?></td>
				<td data-title='Cantidad'><?= $consultaminutos[$i]['cantidad'] ?></td>
				<td data-title='compra'>$ <?= number_format($consultaminutos[$i]['compra']) ?></td>
				<td data-title='venta'>$ <?= number_format($consultaminutos[$i]['venta']) ?></td>
				<td data-title='Utilidad'>$ <?= number_format($consultaminutos[$i]['utilidad']) ?></td>
				<td data-title='Edición'><a href="home.php?pag=6&id=<?= $consultaminutos[$i]['idminutos'] ?>" class="btn btn-primary"><span class="icon-pencil2"></a></td>
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
<br/><br/>