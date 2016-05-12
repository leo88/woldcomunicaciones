
<?php include("controlador/cempleado.php"); ?>

<div class="container-fluid lol">
<div class="eti">Empleado</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Cédula de Ciudadania:</label>
            <input type="text" class="form-control" name="idempleado" pattern="[0-9]{5,10}" title="Se requiere un numero de identificación valido sin espacios"required> 
            <input type="hidden" name="estado" value="Activo">  
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Nombre del empleado:</label>
            <input type="text" class="form-control" name="nombre" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>     
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Sueldo:</label>
            <input type="number" class="form-control" name="sueldo" maxlength="11" required>       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Dirección del empleado:</label>
            <input type="text" class="form-control" name="direccion" maxlength="50" required >  
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Ciudad de residencia:</label>
            <input type="text" class="form-control" name="ciudad" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 30 caracteres" required>       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Teléfono del empleado:</label>
            <input type="text" class="form-control" name="telefono_emple"pattern="[0-9]{5,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">   
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
           <label for="">Teléfono de referencia:</label>
            <input type=text class="form-control" name="telefono_refe" pattern="[0-9]{5,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
           <label for="">Email:</label>
            <input type="email" class="form-control" name="email">   
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for="">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha" value="<?= date('Y-m-d'); ?>">    
		</div>
		 <div class="form-group col-xs-4 col-xs-offset-4 col-sm-6 col-md-6 col-lg-4 col-lg-offset-5"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultaempleado = $empleado->consultar_empleado(); ?>
<div id='no-more-tables'>
	<table class="table table-bordered table-hover" id="example">
		<thead>
            <tr>
                <th colspan="3">Listado de Empleados</th>
            </tr>
            <tr>
                <th>Cedula</th>
				<th>Nombre</th>
				<th>Sueldo Mensual</th>
				<th>Direccion</th>
				<th>Residencia</th>
				<th>Teléfono</th>
				<th>Teléfono de referencia</th>
				<th>Email</th>
				<th>Fecha Ingreso</th>
				<th>Estado</th>
				<th>Edición</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaempleado);$i++): ?>
				<tr>
					<td data-title='Cedula'><?= $consultaempleado[$i]['idempleado'] ?></td>
					<td data-title='Nombre'><?= $consultaempleado[$i]['nombre'] ?></td>
					<td data-title='Sueldo'>$ <?= number_format($consultaempleado[$i]['sueldo']) ?></td>
					<td data-title='Direccion'><?= $consultaempleado[$i]['direccion'] ?></td>
					<td data-title='Ciudad de residencia'><?= $consultaempleado[$i]['ciudad'] ?></td>
					<td data-title='Teléfono'><?= $empleado->formato_telefono_general($consultaempleado[$i]['telefono_emple']) ?></td>
					<td data-title='Teléfono de referencia'><?= $empleado->formato_telefono_general($consultaempleado[$i]['telefono_refe']) ?></td>
					<td data-title='Email'><?= $consultaempleado[$i]['email'] ?></td>
					<td data-title='Fecha Ingreso'><?= $consultaempleado[$i]['fecha_ingreso'] ?></td>
					<td data-title='Estado'><?= $consultaempleado[$i]['estado'] ?></td>
                    <td data-title='Edición'><a href="index.php?pag=10&id=<?= $consultaempleado[$i]['idempleado'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idempleeli" value="<?= $consultaempleado[$i]['idempleado'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
        </tbody>
	</table>
	</div>
	</div>
<br>