<?php include("controlador/ccompra.php"); ?>
   

<div class="container-fluid">
	<h1>Insertar Compra</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Proveedor:</label> 
            <select name="proveedor" class="form-control" required>
				<option value=0>Seleccione proveedor</option>
				<?php for($i=0;$i<count($proveedor2);$i++): ?>
					<option value="<?= $proveedor2[$i]['idproveedor'] ?>"><?= $proveedor2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>