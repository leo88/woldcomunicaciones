
<?php include("controlador/cempleado.php"); ?>

<div class="container-fluid lol">
<div class="eti">Empleado</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Cédula de Ciudadania:</label>
            <input type="text" class="form-control" name="idempleado" pattern="[0-9]{5,10}" title="Se requiere un numero de identificación valido sin espacios"required> 
            <input type="hidden" name="estado" value="Activo">  
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Nombre del empleado:</label>
            <input type="text" class="form-control" name="nombre" placeholder="No utlizar la letra 'ñ' ni tildes" pattern="[A-z ]{2,50}" title="Solo se permiten letras, no se permite la letra 'ñ' ni tildes, máximo 50 caracteres" required>     
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Sueldo:</label>
            <div class="input-group">
  				<span class="input-group-addon">$</span>
  				<input type="number" class="form-control" name="sueldo" min="0" maxlength="11" required>
			</div>     
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Dirección del empleado:</label>
            <input type="text" class="form-control" name="direccion" maxlength="50" required >  
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Ciudad de residencia:</label>
            <input type="text" class="form-control" name="ciudad" pattern="[A-z ]{2,50}" title="Solo se permiten letras, no se permite la letra 'ñ' ni tildes, máximo 30 caracteres" required>       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
            <label for=""><span style="color:red;">* </span>Teléfono del empleado:</label>
            <input type="text" class="form-control" name="telefono_emple" pattern="[0-9]{5,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres" required>   
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
           <label for=""><span style="color:red;">* </span>Teléfono de referencia:</label>
            <input type=text class="form-control" name="telefono_refe" pattern="[0-9]{5,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres" required>
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-4">
           <label for="">Email:</label>
            <input type="email" class="form-control" name="email" maxlength="70">   
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-4">
            <label for=""><span style="color:red;">* </span>Perfil:</label>
            <select name="perfil" class="form-control" required>
                <option value="">Seleccione una Opción</option>
                <option value="1">Administrador</option>
                <option value="2">Tecnico</option>
                <option value="3" selected>Vendedor</option>
            </select>
            <input type="hidden" class="form-control" name="fecha" value="<?= date('Y-m-d'); ?>" required>
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
                <th colspan="12">Listado de Empleados</th>
            </tr>
            <tr>
                <th>Cedula</th>
				<th>Nombre</th>
				<th>Sueldo Mensual</th>
				<th>Direccion</th>
				<th>Residencia</th>
				<th>Teléfono Personal</th>
				<th>Teléfono de referencia</th>
				<th>Email</th>
				<th>Fecha de Registro al Sistema</th>
				<th>Estado</th>
				<th>Perfil</th>
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
					<td data-title='Fecha de Registro al Sistema'><?= $consultaempleado[$i]['fecha_ingreso'] ?></td>
					<td data-title='Estado'><?= $consultaempleado[$i]['estado'] ?></td>
					<td data-title='Perfil'><?= $consultaempleado[$i]['perfil'] ?></td>
                    <td data-title='Edición'><a href="home.php?pag=10&id=<?= $consultaempleado[$i]['idempleado'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
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
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#registrar').addClass('active');
    });
</script>