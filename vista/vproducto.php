<?php include("controlador/cproducto.php"); ?>

<div class="container-fluid">
	<h1>Insertar producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Clase del producto:</label>
            <input type="text" class="form-control" name="nombre" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Marca:</label>
            <input type="text" class="form-control" name="marca" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Precio:</label>
            <input type="number" class="form-control" name="precio" required >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaproducto = $producto->consultar_producto(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Producto</th>
			</tr>
			<tr>
				<th>Referencia</th>
				<th>Clase</th>
				<th>Marca</th>
				<th>Precio</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaproducto);$i++): ?>
				<tr>
					<td><?= $consultaproducto[$i]['referencia'] ?></td>
					<td><?= $consultaproducto[$i]['nombre'] ?></td>
					<td><?= $consultaproducto[$i]['marca'] ?></td>
					<td>$ <?= $consultaproducto[$i]['precio'] ?></td>
					<td><a href="index.php?pag=4&id=<?= $consultaproducto[$i]['referencia'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idproduceli" value="<?= $consultaproducto[$i]['referencia'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	<a href="index.php?pag=19">Regresar a Compra</a> 
	<a href="index.php?pag=21">Regresar a Reposicion</a> 
</div>
