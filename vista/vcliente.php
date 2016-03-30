<?php include('controlador/ccliente.php'); ?>

<div class="container-fluid">
	<h1>Insertar Cliente</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre Cliente:</label>
            <input type="text" class="form-control" name="nombre">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Detalle:</label>
            <input type="text" list="detalle" name="detalle">
                <datalist id="detalle" >
                   <option> Cliente </option>
                   <option> Traspaso </option>
                </datalist>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>
<?php $consultacliente = $cliente->consultar_cliente(); ?>
    <table class="table">
        <thead>
            <tr>
                <th colspan="3">Cliente</th>
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
                    <td><?= $consultacliente[$i]['idcliente'] ?></td>
                    <td><?= $consultacliente[$i]['nombre'] ?></td>
                    <td><?= $consultacliente[$i]['telefono'] ?></td>
                    <td><?= $consultacliente[$i]['direccion'] ?></td>
                    <td><?= $consultacliente[$i]['email'] ?></td>
                    <td><?= $consultacliente[$i]['detalle'] ?></td>                  
                    <td><a href="index.php?pag=17&id=<?= $consultacliente[$i]['idcliente'] ?>" class="btn btn-primary">Editar</a></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>