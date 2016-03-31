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
	
	<?php $consultaotros = $otros->consultar_otros(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Otros</th>
			</tr>
			<tr>
				<th>ID Reporte</th>
				<th>Fecha</th>
				<th>Descripcion</th>
				<th>Salida</th>
				<th>Entrada</th>			
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaotros);$i++): ?>
				<tr>
					<td><?= $consultaotros[$i]['idreporte'] ?></td>
					<td><?= $consultaotros[$i]['fecha'] ?></td>					
					<td><?= $consultaotros[$i]['descripcion'] ?></td>
					<td><?= $consultaotros[$i]['salida_total'] ?></td>
					<td><?= $consultaotros[$i]['entrada_total'] ?></td>					
					<td><a href="index.php?pag=12&id=<?= $consultaotros[$i]['idreporte'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreporteeli" value="<?= $consultaotros[$i]['idreporte'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
