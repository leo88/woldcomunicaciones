<div class="row-fluid">
<!-- inicio venta -->
<div class="span4">	
  <?php include("controlador/cventa.php"); ?>
    <div class="container-fluid lol">
        <div class="eti">Registrar Venta</div>
        <form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Cliente:</label><br> 
            <select name="cliente" class="chzn-select form-control" >
				<option value=0>Seleccione cliente</option>
				<?php for($j=0;$j<count($cliente2);$j++): ?>
					<option value="<?= $cliente2[$j]['idcliente'] ?>"><?= $cliente2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>      
		</div>
		<div class="form-group campo">
           <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly required>          
		</div>
		<div class="form-group campo">
           <label for=""><span style="color:red;">* </span>Empleado:</label> 
            <select name="empleado" class="form-control" >
				<option value=0>Seleccione empleado</option>
				<?php for($j=0;$j<count($empleado2);$j++): ?>
					<option value="<?= $empleado2[$j]['idempleado'] ?>"><?= $empleado2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>           
		</div>
        <div class="form-group campo"> <br> 
              <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-checkmark"></span></button>
        </div>
	</form>	
    </div>
    <!-- Tabla donde se muestra la informacion ingresada-->
    <?php $consultaventa = $venta->consultar_venta(); ?>
    <div class="table-responsive">
        <table class="table">
		<thead>
			<tr>
				<th colspan="12">Ultima venta</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Fecha</th>
				<th>Empleado</th>
			</tr>
		</thead>
		<tbody>
				<?php for($j=0;$j<count($consultaventa);$j++): 
				$cliente1 	= $venta->sel_cliente1($consultaventa[$j]['idcliente']);
				$empleado1 	= $venta->sel_empleado1($consultaventa[$j]['idempleado']);
			?>
				<tr>
					<td><?= $consultaventa[$j]['numero_venta'] ?></td>
					<td><?= $cliente1[0]['nombre'] ?></td>
					<td><?= $consultaventa[$j]['fecha'] ?></td>
					<td><?= $empleado1[0]['nombre'] ?></td>
					<!--<td><a href="home.php?pag=25&idv=<?= $consultaventa[$j]['numero_venta'] ?>" class="btn btn-primary">Editar</a></td>-->
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
          <input type="hidden" name="motivo" value="Venta" required>
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
            <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,9}" min="0" title="Solo validos numeros" required>  
		</div>
        <div class="form-group campo"><br> 
           <button type="submit" name="Sale" class="btn btn-warning" value="-"><span class="icon-minus"></span></button>
        </div>
	</form>	           
</div>
<?php $consultamovimiento = $movimiento->consultar_movimiento_v(); ?>                
                
					<div id=''>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo movimiento por venta</th>
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
<?php include("controlador/cventaproduc.php"); ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Valor</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{1,10}" title="Solo validos numeros" min="0" required> 
            <input type="hidden" name="numero_venta" value="<?= $numero_venta2[0]['numero_venta'] ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">    
		</div>
		 <div class="form-group campo"><br> 
            <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-credit"></span></button>
        </div>
	</form>
	<br><br><br>		 
</div>
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc_u(); ?>
                
                
                
					<div id='margentabla'>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo Valor</th>
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
					<td><?= $consultaventaproduc[$i]['numero_venta'] ?></td>
					<td><?= $consultaventaproduc[$i]['movimiento'] ?></td>
					<td><?= "$ ".number_format($consultaventaproduc[$i]['precio_venta']) ?></td>
					<td><a href="home.php?pag=27&id=<?= $consultaventaproduc[$i]['numero_venta'] ?>&idm=<?= $consultaventaproduc[$i]['movimiento']?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>
		<div class="col-lg-3 col-md-offset-6">
			<a href="home.php?pag=40" class="btn btn-primary">Vista Impresión <span class="glyphicon glyphicon-print"></span></a>
		</div>
		        </div>
<!-- final ventaxproducto -->	           	        	        
		        <!--/span-->

          
		      </div><!--/row-->

				<br/><br/>    

		   
<div class="row-fluid"><!--spoiler de informacion-->
    <input type="checkbox"  id="spoiler2" /> 
      <label for="spoiler2" >Acerca de la venta</label>
    <div class="spoiler">
      <div class="info">
              <h5>¿Como realizo una venta?</h5>
               <ul>
                   <li>Ingresar los datos de la venta (Cliente, Fecha y Empleado) y registrarlos con el boton <span class="icon-checkmark tama"></span> este paso se realiza una vez por cada venta</li>
                   <li>Ingresar los datos del movimiento (Referencia y Cantidad) y registrarlos con el boton <span class="icon-minus tama2"></span> este paso se puede repetir varias veces por cada venta</li>
                   <li>Ingresar el dato del valor (Valor Unitario) y registrarlo con el boton <span class="icon-credit tama"></span>  este paso se puede repetir varias veces por cada venta</li>
               </ul>
        <span style="font-weight: bold">Nota:</span> No intente registrar todos los movimentos uno tras otro y luego todos los valores correspondientes a estos, asegurese de registrar un formulario a la vez ya que siempre debe registrar el valor despues de haber registrado el movimiento. 
      </div>
    </div>
</div>
<br><br>
