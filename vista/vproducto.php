
<?php include("controlador/cproducto.php"); ?>
				
<div class="container-fluid lol">
<div class="eti">Producto</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group campo">
			<label for=""><span style="color:red;">* </span>Referencia:</label>
			<input type="text" class="form-control" name="referencia" maxlength="100" required>      
		</div>
		<div class="form-group campo">
			<label for=""><span style="color:red;">* </span>Tipo de Dispositivo:</label>
				<input type="text" class="form-control" name="nombre" placeholder="Que tipo es el producto" pattern="[A-z ]{2,40}" title="Solo se permiten letras máximo 40 caracteres" required>     
		</div>
		<div class="form-group campo">
			<label for=""><span style="color:red;">* </span>Marca:</label>
			<input type="text" class="form-control" name="marca" pattern="[A-z ]{2,20}" title="Solo se permiten letras máximo 20 caracteres" required >         
		</div>
		<div class="form-group campo">
			<label for=""><span style="color:red;">* </span>Precio:</label>
			<input type="number" class="form-control" name="precio" required >     
		</div>		
		<div class="form-group campo"> <br>          		
			<button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
		</div>
		</form>
			<div class="btn-toolbar campo" role="toolbar">             
				<a href="home.php?pag=19"><button type="button" class="btn btn-default">Volver a Compra</button></a>
				<span class="campo"></span>
				<a href="home.php?pag=21"><button type="button" class="btn btn-default">Volver a Reposicion</button></a> 
			</div>	 
		</div>
		<?php $consultaproducto = $producto->consultar_producto(); ?>
		<div id='no-more-tables'>
			<table class="table table-bordered table-hover" id="example">
		 		<thead>
           		<tr>
              		<th colspan="3">Listado de Productos</th>
           		</tr>
           		<tr>
           		    <th>Referencia</th>
					<th>Clase</th>
					<th>Marca</th>
					<th>Precio</th>
					<th>Edición</th>
					<!--<th>Eliminación</th>-->
           		</tr>
        		</thead>
        		<tbody>
        		<?php for($i=0;$i<count($consultaproducto);$i++): ?>
					<tr>
						<td data-title='Referencia'><?= $consultaproducto[$i]['referencia'] ?></td>
						<td data-title='Clase'><?= $consultaproducto[$i]['nombre'] ?></td>
						<td data-title='Marca'><?= $consultaproducto[$i]['marca'] ?></td>
						<td data-title='Precio'>$ <?= number_format($consultaproducto[$i]['precio']) ?></td>
						<td data-title='Edición'><a href="home.php?pag=4&id=<?= $consultaproducto[$i]['referencia'] ?>" class="btn btn-primary"><span class="icon-pencil2"></a></td>
									<!--<td>
										<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
											<input type="hidden" name="idproduceli" value="<?= $consultaproducto[$i]['referencia'] ?>">
											<input type="submit" class="btn btn-danger" value="Eliminar">
										</form>
									</td>-->
					</tr>
				<?php endfor; ?>
        	</tbody>
        	</table>
        </div>
	</div><!--/row-->
<br/><br/>  
	
