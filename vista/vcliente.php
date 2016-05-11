
<?php include('controlador/ccliente.php'); ?>


<div class="container-fluid lol">
<div class="eti">Cliente</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group campo">
            <label for="">Nombre Cliente:</label>
            <input type="text" class="form-control" name="nombre" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>       
		</div>
		<div class="form-group campo">
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" pattern="[0-9]{7,20}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">       
		</div>
		<div class="form-group campo">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion" maxlength="50">       
		</div>
		<div class="form-group campo">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email" maxlength="30">       
		</div>
		<div class="form-group campo">
            <label for="">Detalle:</label>
            <input class="form-control" type="text" list="detalle" name="detalle" placeholder="Se define si es cliente" required>
                <datalist id="detalle" >
                   <option> Cliente </option>
                   <option> Traspaso </option>
                </datalist>       
		</div>
		 <div class="form-group campo"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultacliente = $cliente->consultar_cliente(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Clientes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Detalle</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacliente);$i++): ?>
                <tr>
                    <td data-title='ID'><?= $consultacliente[$i]['idcliente'] ?></td>
                    <td data-title='Nombre'><?= $consultacliente[$i]['nombre'] ?></td>
                    <td data-title='Teléfono'><?= $cliente->formato_telefono_general($consultacliente[$i]['telefono']) ?></td>
                    <td data-title='Dirección'><?= $consultacliente[$i]['direccion'] ?></td>
                    <td data-title='E-mail'><?= $consultacliente[$i]['email'] ?></td>
                    <td data-title='Detalle'><?= $consultacliente[$i]['detalle'] ?></td>                  
                    <td data-title='Edición'><a href="home.php?pag=22&id=<?= $consultacliente[$i]['idcliente'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
                </tr>
            <?php endfor; ?>
            
        </tbody>
    </table>	
    </div>
<br><br/>

		    