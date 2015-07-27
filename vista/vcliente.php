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
            <input type=text list=detalle name="detalle">
                <datalist id=detalle >
                   <option> Cliente
                   <option> Traspaso
                </datalist>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>