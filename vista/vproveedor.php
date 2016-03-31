<?php include("controlador/cproveedor.php"); ?>

<div class="container-fluid">
	<h1>Insertar proveedor</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Identificacion proveedor:</label>
            <input type="text" class="form-control" name="idproveedor" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Nombre proveedor:</label>
            <input type="text" class="form-control" name="nombre" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">contacto:</label>
            <input type="text" class="form-control" name="contacto">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Telefono proveedor:</label>
            <input type="number" class="form-control" name="telefono" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Telefono contacto:</label>
            <input type="number" class="form-control" name="telefono2">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Email:</label>
            <input type="email" class="form-control" name="email">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Descripcion:</label>
            <input type=text list=descripcion name="descripcion" required>
                <datalist id=descripcion >
                   <option> Local
                   <option> Proveedor
                </datalist> 
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaproveedor = $proveedor->consultar_proveedor(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Proveedor</th>
			</tr>
			<tr>
				<th>Identificaion proveeedor</th>
				<th>Nombre proveedor</th>
				<th>Contacto</th>
				<th>Telefono proveedor</th>
				<th>Telefono contacto</th>
				<th>Email</th>
				<th>Descripcion</th>
				<th>Edición</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaproveedor);$i++): ?>
				<tr>
					<td><?= $consultaproveedor[$i]['idproveedor'] ?></td>
					<td><?= $consultaproveedor[$i]['nombre'] ?></td>
					<td><?= $consultaproveedor[$i]['contacto'] ?></td>
					<td><?= $consultaproveedor[$i]['telefono'] ?></td>
					<td><?= $consultaproveedor[$i]['telefono2'] ?></td>
					<td><?= $consultaproveedor[$i]['email'] ?></td>
					<td><?= $consultaproveedor[$i]['descripcion'] ?></td>
					<td><a href="index.php?pag=8&id=<?= $consultaproveedor[$i]['idproveedor'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idproveeli" value="<?= $consultaproveedor[$i]['idproveedor'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
