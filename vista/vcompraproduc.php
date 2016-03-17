<?php include("controlador/ccompraproduc.php"); ?>
   

<div class="container-fluid">
	<h1>Insertar Compra por producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Numero de compra:</label> 
            <select name="numero_compra" class="form-control" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_compra2);$i++): ?>
					<option value="<?= $numero_compra2[$i]['numero_compra'] ?>"><?= $numero_compra2[$i]['numero_compra'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" required>
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </form>
</div>
<?php $consultacompraproduc = $compraproduc->consultar_compraproduc(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Compra</th>
			</tr>
			<tr>
				<th>ID Compra</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultacompraproduc);$i++): ?>
				<tr>
					<td><?= $consultacompraproduc[$i]['numero_compra'] ?></td>
					<td><?= $consultacompraproduc[$i]['movimiento'] ?></td>
					<td><?= $consultacompraproduc[$i]['valor'] ?></td>
					<td><a href="index.php?pag=23&id=<?= $consultacompraproduc[$i]['numero_compra'] ?>&idm=<?= $consultacompraproduc[$i]['movimiento']?>" class="btn btn-primary">Editar</a></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
