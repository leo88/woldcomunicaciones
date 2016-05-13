<div class="row-fluid">
<!-- inicio movimiento -->
<div class="span6">	
   <?php include('controlador/cmovimiento.php'); ?>
    <div class="container-fluid lol">
        <div class="eti">Insertar Movimiento</div>
        <form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <input type="hidden" name="motivo" value="Reposición" required>
            <label for=""><span style="color:red;">* </span>Referencia:</label><br>
            <select name="referencia" class="chzn-select form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>   
		</div>
		<div class="form-group campo">
          <label for=""><span style="color:red;">* </span>Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,6}" title="Solo validos numeros" required>      
		</div>
		 <div class="form-group campo"> <br>  
           <button type="submit" name="Sale" class="btn btn-danger" value="-"><span class="icon-minus"></span></button>  
           <button type="submit" name="Entra" class="btn btn-success" value="+"><span class="icon-plus"></span></button> 
        </div>
	</form>	
    <div class="campo">
                Si el producto que va a reponer no esta esta en el inventario actualmente, por favor registre la referencia antes de hacer la reposicion
                <a href="home.php?pag=3">Registrar referencia</a> 
            </div>
    </div>
    <?php $consultamovimiento = $movimiento->consultar_movimiento_r(); ?>
    <div class="table-responsive">
        <table class="table">
		<thead>
			<tr>
				<th>Ultimo Movimiento de Reposicion</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
			</tr>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultamovimiento);$i++): ?>
				<tr>
					<td><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td><?= $consultamovimiento[$i]['cantidad'] ?></td>					
					<td><a href="home.php?pag=17&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idmovimientoeli" value="<?= $consultamovimiento[$i]['idmovimiento'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	</div>
</div>
<!-- final movimiento -->
          	
<!-- inicio reposicion -->
<div class="span6">			      
<?php include('controlador/creposicion.php'); ?>
    
<div class="container-fluid lol">
<div class="eti">Insertar Reposicion</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">
		</div>
		<div class="form-group campo">
           <label for=""><span style="color:red;">* </span>No. Compra:</label>
            <input type="number" class="form-control" name="numero_compra" pattern="[0-9]{1,6}" title="Solo validos numeros" required>       
		</div>
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha">        
		</div>
		 <div class="form-group campo"> <br>
           <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>  
        </div>
	</form>	           
</div>
<?php $consultareposicion = $reposicion->consultar_reposicion(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Reposiciones</th>
            </tr>
            <tr>
                <th>ID</th>
				<th>Movimiento</th>
				<th>No. Compra</th>	
				<th>Fecha</th>				
				<!--<th>Edición</th>
				<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultareposicion);$i++): ?>
				<tr>
					<td data-title='ID'><?= $consultareposicion[$i]['idreposicion'] ?></td>
					<td data-title='Movimiento'><?= $consultareposicion[$i]['movimiento'] ?></td>
					<td data-title='No. Compra'><?= $consultareposicion[$i]['numero_compra'] ?></td>
					<td data-title='Fecha'><?= $consultareposicion[$i]['fecha'] ?></td>					
					<!--<td><a href="home.php?pag=6&id=<?= $consultareposicion[$i]['idreposicion'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreposicioneli" value="<?= $consultareposicion[$i]['idreposicion'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>



		        </div><!--/span-->

		      </div><!--/row-->

				<br/><br/>    