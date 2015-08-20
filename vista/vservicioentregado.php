<?php include("controlador/cservicioentregado.php"); ?>

<script src="js/jquery-1.9.1.js"></script>

    <script>
    $(function(){
 	$('#orden').change(function() {
    	selectedOption = $('option:selected', this);
    	var a = parseInt($('input[name=saldo1]').val( selectedOption.data('precio')));
    	var b = parseInt($('input[name=saldo2]').val( selectedOption.data('abono')));
    	$('input[name=saldo_cancel]').val( selectedOption.data('precio')- selectedOption.data('abono'));
	}).change();
});

    </script>



<div class="container-fluid">
	<h1>Insertar servicioentregado</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">No. Orden:</label>
             <select name="numero_orden" id="orden" class="form-control" required>
				<option value=0>Seleccione No. Orden</option>
				<?php for($i=0;$i<count($numorden2);$i++): ?>
					<option value="<?= $numorden2[$i]['numero_orden'];?>" data-precio="<?= $numorden2[$i]['precio_cliente'] ?>" data-abono="<?= $numorden2[$i]['abono'] ?>"><?= $numorden2[$i]['numero_orden'] ?></option>
				<?php endfor; ?>
			</select>        
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Saldo1:</label>
            <input type="text" class="form-control" value="2" name="saldo1" id="sal1" readonly>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Saldo2:</label>
            <input type="text" class="form-control" value="1" name="saldo2" id="sal2" readonly>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Saldo:</label>
            <input type="text" class="form-control" name="saldo_cancel" id="saldo" readonly >       
		</div>
		<div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaservicioentregado = $servicioentregado->consultar_servicioentregado(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Servicio Tecnico Entregado</th>
			</tr>
			<tr>
				<th>No. Orden</th>
				<th>Fecha</th>
				<th>Saldo</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaservicioentregado);$i++): 
            $numorden1 = $servicioentregado->sel_orden1($consultaservicioentregado[$i]['numero_orden']);
            
            ?>
				<tr>
					<td><?= $numorden1[0]['numero_orden'] ?></td>
					<td><?= $consultaservicioentregado[$i]['fecha'] ?></td>
					<td><?= $consultaservicioentregado[$i]['saldo_cancel'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultaservicioentregado[$i]['numero_orden'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserventeli" value="<?= $consultaservicioentregado[$i]['numero_orden'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
