<body class="fondo">    
<div class="edit">                        	
<?php include("controlador/ccompra.php"); ?>
	<div class="eti">Generador Codigo de Barras</div>
	<form action="vista/prosesbarcode.php" method="POST">
		<div class="form-group col-lg-6 offset-lg-4">
            <label for=""><span style="color:red;">* </span>Numero de Compra:</label>
            <input type="text" class="form-control" name="bar" value="<?= $consultaedit[0]['numero_compra'] ?>" readonly>
		</div>
		<div class="form-group col-lg-6 offset-lg-4"><br>
            <input type="submit" class="btn btn-success" value="Generar codigo de barras">
			<a href="home.php?pag=19" class="btn btn-success">Volver</a>
        </div>
	</form>
  </div> 		                 
</body>