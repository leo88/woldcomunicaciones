<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="css/miestilo.css" media="screen">
</head>
<body>
<?php include('controlador/cmovimiento.php'); ?>
<?php include("controlador/cventa.php"); ?>

<div  class="formulario" >
	<h1>Insertar Venta</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cliente:</label> 
            <select name="cliente" class="form-control" >
				<option value=0>Seleccione cliente</option>
				<?php for($j=0;$j<count($cliente2);$j++): ?>
					<option value="<?= $cliente2[$j]['idcliente'] ?>"><?= $cliente2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Empleado:</label> 
            <select name="empleado" class="form-control" >
				<option value=0>Seleccione empleado</option>
				<?php for($j=0;$j<count($empleado2);$j++): ?>
					<option value="<?= $empleado2[$j]['idempleado'] ?>"><?= $empleado2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
        
    </form>
<!-- Tabla donde se muestra la informacion ingresada-->
<?php $consultaventa = $venta->consultar_venta(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">venta</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Fecha</th>
				<th>Empleado</th>
		</thead>
		<tbody>
			<?php for($j=0;$j<count($consultaventa);$j++): 
				$cliente1 	= $venta->sel_cliente1($consultaventa[$j]['idcliente']);
				$empleado1 	= $venta->sel_empleado1($consultaventa[$j]['idempleado']);
			?>
				<tr>
					<td><?= $consultaventa[$j]['numero_venta'] ?></td>
					<td><?= $cliente1[0]['nombre'] ?></td>
					<td><?= $consultaventa[$j]['fecha'] ?></td>
					<td><?= $empleado1[0]['nombre'] ?></td>
					<!--<td><a href="index.php?pag=25&idv=<?= $consultaventa[$j]['numero_venta'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idventaeli" value="<?= $consultaventa[$j]['numero_venta'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

<div class="formulario">
	<h1>Insertar Movimiento</h1>
	<form action="" method="POST">		
		<div class="form-group col-lg-6">
            <input type="hidden" name="motivo" value="Venta" required>
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
            <input type="submit" name="Sale" class="btn btn-danger" value="-">
        </div>
	</form>

<?php $consultamovimiento = $movimiento->consultar_movimiento_v(); ?>
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

<?php include("controlador/cventaproduc.php"); ?>

<div class="formulario">
	<h1>Venta por producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>
            <input type="hidden" name="numero_venta" value="<?= $numero_venta2[0]['numero_venta'] ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </form>
</div>
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc_u(); ?>
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

