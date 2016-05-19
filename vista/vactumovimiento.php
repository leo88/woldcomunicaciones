<body class="fondo">        
   	<div class="edit">
   	<?php include("controlador/cmovimiento.php"); ?>

	<div class="eti">Editar Movimiento</div>
	<form action="home.php?pag=16&id=<?= $idproduc?>" method="POST">
	    <div class="form-group col-sm-6 col-md-6 col-lg-6">
			<label for=""><span style="color:red;">* </span>Motivo:</label>
            <input type="text"  list="descripcion" class="form-control" name="motivo" value="<?= $consultaedit[0]['motivo'] ?>" readonly>
                <datalist id="descripcion">
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist>        
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Referencia:</label>
            <input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly required>
			<input type="hidden" name="idmovimiento" value="<?= $idmovimiento ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
			<label for=""><span style="color:red;">* </span>Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad']  ?>" pattern="[0-9]{1,11}" min="0" title="Solo validos numeros"required>
		</div>		
		<div class="form-group col-sm-6 col-md-6 col-lg-6"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="home.php?pag=16" class="btn btn-success">Volver</a>
        </div>
	</form>                     	
	</div> 
</body>
	