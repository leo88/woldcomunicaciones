
<?php include("controlador/ccompraproduc.php"); ?>


<!--<div class="container-fluid lol">
<div class="eti">Insertar Compra por producto</div>
	

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Numero de compra:</label> 
            <select name="numero_compra" class="form-control" pattern="[0-9]{1,10}" title="Solo validos numeros" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_compra2);$i++): ?>
					<option value="<?= $numero_compra2[$i]['numero_compra'] ?>"><?= $numero_compra2[$i]['numero_compra'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Movimiento:</label> 
            <select name="movimiento" class="form-control" required>
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{1,10}" title="Solo validos numeros" required>       
		</div>
		 <div class="form-group campo"> <br>
           <button  type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
    </form>
</div>-->
<?php $consultacompraproduc = $compraproduc->consultar_compraproduc(); ?>

					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
						<thead>
			<tr>
				<th colspan="12">Compra</th>
			</tr>
			<tr>
				<th>ID Compra</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
				<th>Edición</th>
		</thead>		
			
		<tbody>
			<?php for($i=0;$i<count($consultacompraproduc);$i++): ?>
				<tr>
					<td data-title='ID Compra'><?= $consultacompraproduc[$i]['numero_compra'] ?></td>
					<td data-title='ID Movimiento'><?= $consultacompraproduc[$i]['movimiento'] ?></td>
					<td data-title='Valor Unirario'><?= "$ ".number_format($consultacompraproduc[$i]['valor']) ?></td>
					<td data-title='Edición'><a href="home.php?pag=23&id=<?= $consultacompraproduc[$i]['numero_compra'] ?>&idm=<?= $consultacompraproduc[$i]['movimiento']?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
		</tbody>
						</table>
					</div>

<br><br>