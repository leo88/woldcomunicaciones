
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="css/miestilo.css" media="screen">

</head>

<body>

<?php include('controlador/cmovimiento.php'); ?>
<?php include("controlador/ccompra.php"); ?>

<div  class="formulario" >
	<h1>Insertar Compra</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Proveedor:</label> 
            <select name="proveedor" class="form-control" >
				<option value=0>Seleccione proveedor</option>
				<?php for($j=0;$j<count($proveedor2);$j++): ?>
					<option value="<?= $proveedor2[$j]['idproveedor'] ?>"><?= $proveedor2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </form>

<?php $consultacompra = $compra->consultar_compra(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Compra</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Proveedor</th>
				<th>Fecha</th>
		</thead>
		<tbody>
			<?php for($j=0;$j<count($consultacompra);$j++): 
				$proveedor1 = $compra->sel_proveedor1($consultacompra[$j]['proveedor']);
			?>
				<tr>
					<td><?= $consultacompra[$j]['numero_compra'] ?></td>
					<td><?= $proveedor1[0]['nombre'] ?></td>
					<td><?= $consultacompra[$j]['fecha'] ?></td>
					<td><a href="index.php?pag=6&idc=<?= $consultacompra[$j]['numero_compra'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idcompraeli" value="<?= $consultacompra[$j]['numero_compra'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
	
		
			
				
						
<div class="formulario">
	<h1>Insertar Movimiento</h1>
	<form action="" method="POST">		
		<div class="form-group col-lg-6">
            <input type="hidden" name="motivo" value="Compra" required>
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" required>       
		</div>		
		 <div class="form-group col-lg-6">
			<br>            
            <input type="submit" name="Entra" class="btn btn-danger" value="+">
        </div>
	</form>

<?php $consultamovimiento = $movimiento->consultar_movimiento_c(); ?>
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
				<th>Eliminación</th>
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
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idmovimientoeli" value="<?= $consultamovimiento[$i]['idmovimiento'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>

<?php include("controlador/ccompraproduc.php"); ?>

<div class="formulario">
	<h1>compra X producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required> 
            <input type="hidden" name="numero_compra" value="<?= $numero_compra2[0]['numero_compra'] ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">      
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </form>

<?php $consultacompraproduc = $compraproduc->consultar_compraproduc_u(); ?>
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
</div>

</body>

</html>


