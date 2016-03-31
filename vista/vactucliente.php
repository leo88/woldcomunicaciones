<?php include("controlador/ccliente.php"); ?>

<div class="row-fluid">
	<h1>Editar Cliente</h1>

	<form action="index.php?pag=2&id=<?= $idcliente?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre'] ?>" required>
			<input type="hidden" name="idcliente" value="<?= $idcliente ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono:</label>
            <input type="text" class="form-control" name="telefono" value="<?= $consultaedit[0]['telefono']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Direccion:</label>
            <input type="text" class="form-control" name="direccion" value="<?= $consultaedit[0]['direccion']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Email:</label>
            <input type="text" class="form-control" name="email" value="<?= $consultaedit[0]['email']  ?>" >
		</div>		
		<div class="form-group col-lg-6">
			<label for="">Detalle:</label>
            <input type=text  list=descripcion name="detalle" value="<?= $consultaedit[0]['detalle'] ?>" >
                <datalist id=descripcion >
                   <option> Cliente</option>
                   <option> Transpaso</option>
                </datalist>        
		</div>		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=2" class="btn btn-success">Volver</a>
        </div>
	</form>
	
</div>