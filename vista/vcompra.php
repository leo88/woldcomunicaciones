
<div class="row-fluid">
<!-- inicio compra -->
<div class="span4">	
 <?php include("controlador/ccompra.php"); ?>
    <div class="container-fluid lol">
        <div class="eti">Registrar Compra</div>
        <form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for="">Proveedor:</label> 
            <select name="proveedor" class="form-control" >
				<option value=0>Seleccione proveedor</option>
				<?php for($j=0;$j<count($proveedor2);$j++): ?>
					<option value="<?= $proveedor2[$j]['idproveedor'] ?>"><?= $proveedor2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>         
		</div>
		<div class="form-group campo">
           <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>">         
		</div>
        <div class="form-group campo"> <br>
              <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-checkmark"></span></button>
        </div>
	</form>	
    </div>
    <!-- Tabla donde se muestra la informacion ingresada-->
    <?php $consultacompra = $compra->consultar_compra(); ?>
    <div class="table-responsive">
        <table class="table">
		<thead>
			<tr>
				<th colspan="12">Ultima Compra</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Proveedor</th>
				<th>Fecha</th>
			</tr>
		</thead>
		<tbody>
				<?php for($j=0;$j<count($consultacompra);$j++): 
				$proveedor1 = $compra->sel_proveedor1($consultacompra[$j]['proveedor']);
			?>
				<tr>
				<td><?= $consultacompra[$j]['numero_compra'] ?></td>
					<td><?= $proveedor1[0]['nombre'] ?></td>
					<td><?= $consultacompra[$j]['fecha'] ?></td>
					<!--<td><a href="home.php?pag=6&idc=<?= $consultacompra[$j]['numero_compra'] ?>" class="btn btn-primary">Editar</a></td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	</div>
</div>
<!-- final venta -->
          	
<!-- inicio movimiento -->
<div class="span4">			      
<?php include('controlador/cmovimiento.php'); ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Movimiento</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
           <input type="hidden" name="motivo" value="Compra" required>
            <label for="">Referencia:</label>
            <select name="referencia" class="form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,6}" title="Solo validos numeros" required>        
		</div>
        <div class="form-group campo"><br>         
           <button type="submit" name="Entra" class="btn btn-warning" value="+"><span class="icon-plus"></span></button>
        </div>        
	</form>	           
</div>
<?php $consultamovimiento = $movimiento->consultar_movimiento_c(); ?>               
                
					<div id=''>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo movimiento por compra</th>
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
            
 <!-- inicio ventaxproducto -->
<div class="span4">			      
<?php include("controlador/ccompraproduc.php"); ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Valor</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{1,10}" title="Solo validos numeros" required> 
            <input type="hidden" name="numero_compra" value="<?= $numero_compra2[0]['numero_compra'] ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">     
		</div>
		 <div class="form-group campo"><br>
            <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-credit"></span></button>
        </div>
        <div class="campo">
         Si el producto que va a comprar no esta esta en el inventario actualmente, antes de hacer la compra <a href="home.php?pag=3">Registre la referencia</a> 
         </div>  
	</form>			 
</div>
<?php $consultacompraproduc = $compraproduc->consultar_compraproduc_u(); ?>
                
                
                
					<div id='margentabla'>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo Valor</th>
            </tr>
            <tr>
                <th>ID Compra</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
				<th>Edición</th>
            </tr>
        </thead>
        <tbody>
         <?php for($i=0;$i<count($consultacompraproduc);$i++): ?>
				<tr>
					<td><?= $consultacompraproduc[$i]['numero_compra'] ?></td>
					<td><?= $consultacompraproduc[$i]['movimiento'] ?></td>
					<td><?= $consultacompraproduc[$i]['valor'] ?></td>
					<td><a href="home.php?pag=23&id=<?= $consultacompraproduc[$i]['numero_compra'] ?>&idm=<?= $consultacompraproduc[$i]['movimiento']?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>



		        </div>
<!-- final ventaxproducto -->	           	        	        
		        <!--/span-->

          
		      </div><!--/row-->

				<br/><br/>    

<div class="row-fluid"><!--spoiler de informacion-->
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Acerca de la compra</label>
<div class="spoiler">
      <div class="info">
              <h5>¿Como realizo una compra?</h5>
               <ul>
                   <li>Ingresar los datos de la compra (Proveedor y Fecha) y registrarlos con el boton <span class="icon-checkmark tama"></span> este paso se realiza una vez por cada compra</li>
                   <li>Ingresar los datos del movimiento (Referencia y Cantidad) y registrarlos con el boton <span class="icon-plus tama2"></span> este paso se puede repetir varias veces por cada compra</li>
                   <li>Ingresar el dato del valor (Valor Unitario) y registrarlo con el boton <span class="icon-credit tama"></span>  este paso se puede repetir varias veces por cada compra</li>
               </ul>
        <span style="font-weight: bold">Nota:</span> No intente registrar todos los movimentos uno tras otro y luego todos los valores correspondientes a estos, asegurese de registrar un formulario a la vez ya que siempre debe registrar el valor despues de haber registrado el movimiento. 
      </div>
    </div>
</div>
<br><br>

