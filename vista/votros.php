<?php include('controlador/cotros.php'); 
?>

<div class="container-fluid">
	<h1>Insertar Otros</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha">       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Descripción:</label>
            <textarea name="descripcion" rows="4" cols="30"> </textarea>    
		</div>
		<div class="form-group col-lg-6">
            <label for="">Valor:</label>
            <input type="number" class="form-control" name="valor">       
		</div>
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-success" value="Sale"> 
            <input type="submit" name="Entra" class="btn btn-danger" value="Entra">
        </div>
	</form>
</div>
