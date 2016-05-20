<body class="fondo">        
    <div class="edit">
                        	
<?php include("controlador/cotros.php"); ?>
	<div class="eti">Editar otros</div>

	<form action="home.php?pag=11&id=<?= $idreporte?>" method="POST">
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>" required readonly>
			<input type="hidden" name="idreporte" value="<?= $idreporte ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
			<label for=""><span style="color:red;">* </span>Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>" maxlength="100" required>
		</div>
		
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="number" class="form-control" name="valor" value="<?php if($consultaedit[0]['salida_total'] == 0){
            	echo $consultaedit[0]['entrada_total'];
            	}else{echo $consultaedit[0]['salida_total']; }?>" pattern="[0-9]{0,11}" min="0" title="Solo se permiten valores reales" required>       
		</div>
		
		 <div class="form-group col-sm-6 col-md-6 col-lg-6">
			<br>
            <button type="submit" name="Sale" class="btn btn-danger" value="Sale"><span class="glyphicon glyphicon-minus"></span></button> 
            <button type="submit" name="Entra" class="btn btn-success" value="Entra"><span class="glyphicon glyphicon-plus"></span></button>
            <a href="home.php?pag=11" class="btn btn-success">Volver</a>
        </div>
	</form>
	</div> 		                 
</body>