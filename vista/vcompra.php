<?php include("controlador/ccompra.php"); ?>
<?php include('controlador/cmovimiento.php'); ?>
<?php include("controlador/ccompraproduc.php"); ?>   

<div class="container-fluid">
	<h1>Insertar Compra</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Proveedor:</label> 
            <select name="proveedor" class="form-control" >
				<option value=0>Seleccione proveedor</option>
				<?php for($i=0;$i<count($proveedor2);$i++): ?>
					<option value="<?= $proveedor2[$i]['idproveedor'] ?>"><?= $proveedor2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
</div>
<!-- //////////////////////////////////////////////////////////-->

<div class="container-fluid">
	<h1>Insertar Movimiento</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type=text list=descripcion name="motivo" >
                <datalist id=descripcion >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist> 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" >       
		</div>		
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-success" value="-"> 
            <input type="submit" name="Entra" class="btn btn-danger" value="+">
        </div>
	</form>
</div>
<!-- //////////////////////////////////////////////////////////-->

<div class="container-fluid">
	<h1>Insertar Compra por producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Numero de compra:</label> 
            <select name="numero_compra" class="form-control" >
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_compra2);$i++): ?>
					<option value="<?= $numero_compra2[$i]['numero_compra'] ?>"><?= $numero_compra2[$i]['numero_compra'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" >
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </div>