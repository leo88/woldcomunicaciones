
		      
<?php include("controlador/cventaproduc.php"); ?>


<div class="container-fluid lol">
<div class="eti">Insertar Venta por producto</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for="">Numero de venta:</label> 
            <select name="numero_venta" class="form-control" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_venta2);$i++): ?>
					<option value="<?= $numero_venta2[$i]['numero_venta'] ?>"><?= $numero_venta2[$i]['numero_venta'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" required>
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
           <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{1,10}" title="Solo validos numeros" required>  
		</div>	
		 <div class="form-group campo"> <br> 
           <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Ventas por Producto</th>
            </tr>
            <tr>
                <th>ID Venta</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
				<th>Edición</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaventaproduc);$i++): ?>
				<tr>
					<td data-title='ID Venta'><?= $consultaventaproduc[$i]['numero_venta'] ?></td>
					<td data-title='ID Movimiento'><?= $consultaventaproduc[$i]['movimiento'] ?></td>
					<td data-title='Valor Unirario'><?= "$ ".number_format($consultaventaproduc[$i]['precio_venta']) ?></td>
					<td data-title='Edición'><a href="home.php?pag=27&id=<?= $consultaventaproduc[$i]['numero_venta'] ?>&idm=<?= $consultaventaproduc[$i]['movimiento']?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>
</div><!--/row-->
<br/><br/>   