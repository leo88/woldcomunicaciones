
<?php include("controlador/cproducto.php"); ?>
				
<div class="container-fluid lol">
<div class="eti">Producto</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-3">
			<label for=""><span style="color:red;">* </span>Referencia:</label>
			<input type="text" class="form-control" name="referencia" maxlength="100" required>      
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-3">
			<label for=""><span style="color:red;">* </span>Tipo de Dispositivo:</label>
				<input type="text" class="form-control" name="nombre" placeholder="Que tipo es el producto" pattern="[A-z ]{2,40}" title="Solo se permiten letras máximo 40 caracteres" required>     
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-3">
			<label for=""><span style="color:red;">* </span>Marca:</label>
			<input type="text" class="form-control" name="marca" pattern="[A-z ]{2,20}" title="Solo se permiten letras máximo 20 caracteres" required >         
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-3">
			<label for=""><span style="color:red;">* </span>Precio:</label>
			<div class="input-group">
  				<span class="input-group-addon">$</span>
  				<input type="number" class="form-control" name="precio" pattern="[0-9]{1,10}" min="0" title="Solo validos numeros" required>
			</div>    
		</div>		
		<div class="form-group col-xs-4 col-xs-offset-4 col-sm-6 col-md-3 col-lg-4 col-lg-offset-5"> <br>          		
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
              		<th colspan="12">Listado de Productos</th>
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
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#producto').addClass('active');
    });
</script>	
