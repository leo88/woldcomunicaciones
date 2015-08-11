<?php include("controlador/cempleado.php"); ?>

<div class="container-fluid">
	<h1>Insertar empleado</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cédula de Ciudadania:</label>
            <input type="text" class="form-control" name="idempleado" required> 
            <input type="hidden" name="estado" value="Activo">  
		</div>
		<div class="form-group col-lg-6">
            <label for="">Nombre del empleado:</label>
            <input type="text" class="form-control" name="nombre" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Sueldo:</label>
            <input type="number" class="form-control" name="sueldo" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Dirección del empleado:</label>
            <input type="text" class="form-control" name="direccion" required >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Ciudad de residencia:</label>
            <input type="text" class="form-control" name="ciudad" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Teléfono del empleado:</label>
            <input type="text" class="form-control" name="telefono_emple" required>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Teléfono de referencia:</label>
            <input type=text class="form-control" name="telefono_refe" required>
		</div>
		<div class="form-group col-lg-6">
            <label for="">Email:</label>
            <input type="email" class="form-control" name="email">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha">       
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
	<?php $consultaempleado = $empleado->consultar_empleado(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Lista de Empleados</th>
			</tr>
			<tr>
				<th>Cedula de Ciudad</th>
				<th>Nombre</th>
				<th>sueldo</th>
				<th>Direccion</th>
				<th>Ciudad de residencia</th>
				<th>Teléfono</th>
				<th>Teléfono de referencia</th>
				<th>Email</th>
				<th>Fecha</th>
				<th>Estado</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaempleado);$i++): ?>
				<tr>
					<td><?= $consultaempleado[$i]['idempleado'] ?></td>
					<td><?= $consultaempleado[$i]['nombre'] ?></td>
					<td><?= $consultaempleado[$i]['sueldo'] ?></td>
					<td><?= $consultaempleado[$i]['direccion'] ?></td>
					<td><?= $consultaempleado[$i]['ciudad'] ?></td>
					<td><?= $consultaempleado[$i]['telefono_emple'] ?></td>
					<td><?= $consultaempleado[$i]['telefono_refe'] ?></td>
					<td><?= $consultaempleado[$i]['email'] ?></td>
					<td><?= $consultaempleado[$i]['fecha_ingreso'] ?></td>
					<td><?= $consultaempleado[$i]['estado'] ?></td>
					<td><a href="index.php?pag=10&id=<?= $consultaempleado[$i]['idempleado'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idempleeli" value="<?= $consultaempleado[$i]['idempleado'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
