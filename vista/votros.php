<?php include('controlador/cotros.php'); ?>

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
            <input type="submit" name="sale" class="btn btn-success" value="Sale">
            <input type="hidden" name="valor" value="valor">  
            <input type="submit" name="entra" class="btn btn-danger" value="Entra">
            <input type="hidden" name="valor" value="valor"> 
        </div>
	</form>
</div>
<?php $consultaminutos = $minutos->consultar_minutos(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Minutos</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cantidad Minutos</th>
				<th>Valor total</th>
				<th>Descripcion</th>
				<th>Fecha</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultaminutos);$i++): ?>
				<tr>
					<td><?= $consultaminutos[$i]['idminutos'] ?></td>
					<td><?= $consultaminutos[$i]['cantidad_min'] ?></td>
					<td><?= $consultaminutos[$i]['valor_min'] ?></td>
					<td><?= $consultaminutos[$i]['descripcion'] ?></td>
					<td><?= $consultaminutos[$i]['fecha'] ?></td>
					<td><a href="index.php?pag=6&id=<?= $consultaminutos[$i]['idminutos'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idminutoseli" value="<?= $consultaminutos[$i]['idminutos'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
