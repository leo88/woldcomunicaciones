<?php include('controlador/cusuario.php'); ?>

<div class="container-fluid lol">
<div class="eti">Usuario</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-lg-3">
            <label for=""><span style="color:red;">* </span>Nombre de Usuario:</label>
            <input type="text" class="form-control" name="username" pattern="[A-z ]{2,30}" title="Solo se permiten letras máximo 30 caracteres" required>       
		</div>
		<div class="form-group col-lg-3">
            <label for=""><span style="color:red;">* </span>Contraseña:</label>
            <input type="password" class="form-control" name="password" required>       
		</div>
		<div class="form-group col-lg-3">
            <label for=""><span style="color:red;">* </span>Perfil:</label>
            <select name="tipo_user" class="form-control">
                <option value="">Seleccione</option>
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
            </select>     
		</div>
		 <div class="form-group col-lg-3"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultausuario = $usuario->consultar_usuario(); ?>
<div id='no-more-tables'>
	<table class="table table-bordered table-hover" id="example">
	   <thead>
            <tr>
                <th colspan="12">Listado de usuarios</th>
            </tr>
            <tr>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>Perfil</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultausuario);$i++): ?>
                <tr>
                    <td data-title='Nombre'><?= $consultausuario[$i]['username'] ?></td>
                    <td data-title='Contraseña'><?= $consultausuario[$i]['password'] ?></td>
                    <td data-title='Perfil'><?= $consultausuario[$i]['tipo_user'] ?></td>
                </tr>
            <?php endfor; ?>
            
        </tbody>
    </table>	
    </div>
    </div><!--/row-->
<br/><br/>