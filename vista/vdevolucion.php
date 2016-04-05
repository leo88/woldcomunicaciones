<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="css/miestilo.css" media="screen">

</head>

<body>

<?php include("controlador/cdevolucion.php"); ?>
<?php include('controlador/cmovimiento.php'); ?>

<div class="formulario">
	<h1>Insertar Movimiento</h1>
	<form action="" method="POST">		
		<div class="form-group col-lg-6">
            <input type="hidden" name="motivo" value="Devolución">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required>       
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

<?php $consultamovimiento = $movimiento->consultar_movimiento_d(); ?>
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

   

<div class="container-fluid">
	<h1>Insertar Devolucion</h1>

	<form action="" method="POST">
		
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Número de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" required > 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Costo retorno:</label>
            <input type="text" class="form-control" name="costo" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultadevolucion = $devolucion->consultar_devolucion(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Devolucion Irregular</th>
			</tr>
			<tr>
				<th>Id Devolucion</th>
				<th>Id Movimiento</th>
				<th>Fecha</th>
				<th>Motivo</th>
				<th>Numero de Compra</th>
				<th>Costo retorno</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultadevolucion);$i++): 
				$movimiento1 = $devolucion->sel_movimiento1($consultadevolucion[$i]['movimiento']);
			?>
				<tr>
					<td><?= $consultadevolucion[$i]['iddevolucion'] ?></td>
					<td><?= $consultadevolucion[$i]['movimiento'] ?></td>
					<td><?= $consultadevolucion[$i]['fecha'] ?></td>
					<td><?= $consultadevolucion[$i]['motivo'] ?></td>
					<td><?= $consultadevolucion[$i]['numero_compra'] ?></td>
					<td><?= $consultadevolucion[$i]['costo'] ?></td>
					<td><a href="index.php?pag=28&id=<?= $consultadevolucion[$i]['iddevolucion'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="iddevoeli" value="<?= $consultadevolucion[$i]['iddevolucion'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
</body>

</html>
