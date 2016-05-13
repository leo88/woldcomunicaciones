		      
<?php include('controlador/cmovimiento.php'); ?>


<!--<div class="container-fluid lol">
<div class="eti">Registrar Movimiento</div>
	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" list="descripcion" name="motivo" required>
                <datalist id="descripcion" >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist>       
		</div>
		<div class="form-group campo">
            <label for="">Referencia:</label>
            <select name="referencia" class="chzn-select form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,9}" title="Solo validos numeros" required>      
		</div>
		 <div class="form-group campo"> <br>
            <input type="submit" name="Entra" class="btn btn-success" value="+">          		
            <input type="submit" name="Sale"  class="btn btn-danger"  value="-">             
        </div>
	</form>
</div>-->
<?php $consultamovimiento = $movimiento->consultar_movimiento(); ?>
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
