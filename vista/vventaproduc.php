<?php include("controlador/cventaproduc.php"); ?>
 
<div class="container-fluid">
	<h1>Insertar Venta por producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Numero de venta:</label> 
            <select name="numero_venta" class="form-control" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_venta2);$i++): ?>
					<option value="<?= $numero_venta2[$i]['numero_venta'] ?>"><?= $numero_venta2[$i]['numero_venta'] ?></option>
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
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Venta</th>
			</tr>
			<tr>
				<th>ID Venta</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
				<th>Edición</th>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaventaproduc);$i++): ?>
				<tr>
					<td><?= $consultaventaproduc[$i]['numero_venta'] ?></td>
					<td><?= $consultaventaproduc[$i]['movimiento'] ?></td>
					<td><?= $consultaventaproduc[$i]['precio_venta'] ?></td>
					<td><a href="index.php?pag=27&id=<?= $consultaventaproduc[$i]['numero_venta'] ?>&idm=<?= $consultaventaproduc[$i]['movimiento']?>" class="btn btn-primary">Editar</a></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>