<?php include('controlador/cmovimiento.php'); ?>
<div class="formulario">
	<h1>Insertar Movimiento</h1>
	<form action="" method="POST">		
		<div class="form-group col-lg-6">
            <input type="hidden" name="motivo" value="Reposición" required>
            <label for="">Referencia:</label>
            <select name="referencia" class="form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>      
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

<?php $consultamovimiento = $movimiento->consultar_movimiento_r(); ?>
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
				<!--<th>Eliminación</th>-->
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

<?php include('controlador/creposicion.php'); ?>

<div class="container-fluid">
	<h1>Insertar Reposicion</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">        
		</div>
		<div class="form-group col-lg-6">
            <label for="">No. Compra:</label>
            <input type="number" class="form-control" name="numero_compra">       
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
				<th>Fecha</th>				
				<!--<th>Edición</th>
				<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultareposicion);$i++): ?>
				<tr>
					<td><?= $consultareposicion[$i]['idreposicion'] ?></td>
					<td><?= $consultareposicion[$i]['movimiento'] ?></td>
					<td><?= $consultareposicion[$i]['numero_compra'] ?></td>
					<td><?= $consultareposicion[$i]['fecha'] ?></td>					
					<!--<td><a href="index.php?pag=6&id=<?= $consultareposicion[$i]['idreposicion'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreposicioneli" value="<?= $consultareposicion[$i]['idreposicion'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>

<div>
    Si el producto que va a reponer no esta esta en el inventario actualmente, por favor registre la referencia antes de hacer la reposicion
    <a href="index.php?pag=3">Registrar referencia</a> 
</div>