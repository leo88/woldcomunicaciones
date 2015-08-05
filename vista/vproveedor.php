<?php include('controlador/cproveedor.php'); ?>

<div class="container-fluid">
	<h1>Insertar proveedor</h1>

	<form action="" method="POST">
        <div class="form-group col-lg-6">
            <label for="">Nit o Cedula de Ciudadania:</label>
            <input type="text" class="form-control" name="idproveedor" required>       
		</div>
	    <div class="form-group col-lg-6">
            <label for="">Nombre de la empresa o proveedor:</label>
            <input type="text" class="form-control" name="nombre" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Contacto:</label>
            <input type="text" class="form-control" name="contacto">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Telefono de la empresa o proveedor:</label>
            <input type="text" name="telefono" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Telefono del contacto:</label>
            <input type="text" name="telefono2">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Email:</label>
            <input type="email" class="form-control" name="email">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Descripción:</label>
		    <input type=text list=descripcion name="descripcion">
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
</div>
<?php $consultaproveedor = $proveedor->consultar_proveedor(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">proveedor</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Nombre de la empresa o proveedor</th>
				<th>Contacto</th>
				<th>Telefono de la empresa o proveedor</th>
				<th>Telefono del contacto</th>
				<th>Email</th>
				<th>Descripcion</th>
				<th>Edición</th>
				<th>Eliminación</th>
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
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idproveedoreli" value="<?= $consultaproveedor[$i]['idproveedor'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
