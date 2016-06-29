<div class="row-fluid">
<!-- inicio venta -->
<div class="span4">	
  <?php include 'controlador/cventa.php'; ?>

  <?php
  	$displayForm = True;
  	if(isset($_POST['submit']) or isset($_POST['Sale'])){
  		$displayForm = False;
  ?>
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
  	<?php 
  		} 
  		if($displayForm){
  	?>
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
              <button type="submit" name="submit" class="btn btn-success" value="Insertar"><span class="icon-checkmark"></span></button>
        </div>
	</form>	
    </div>
<?php } ?>
</div>
<!-- final venta -->
          	
<!-- inicio movimiento -->
<div class="span4">			      
<?php include 'controlador/cmovimiento.php'; ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Movimiento</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
          	<input type="hidden" name="motivo" value="Venta" required>
          	<input type="hidden" name="idgeneral" value="<?= $idgeneral2[0]['numero_venta'] ?>">
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
		<div class="form-group campo">
           <label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{0,9}" min="0" title="Solo numeros validos" required>  
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
                <th>ID Venta</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Valor</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
          <?php for($i=0;$i<count($consultamovimiento);$i++): ?>
				<tr>
					<td><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td><?= $consultamovimiento[$i]['idgeneral'] ?></td>
					<td><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td><?= $consultamovimiento[$i]['cantidad'] ?></td>
					<td><?= $consultamovimiento[$i]['valor'] ?></td>				
					<td><a href="home.php?pag=45&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
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
            
<div class="col-lg-3 col-md-offset-6">
	<a href="home.php?pag=40" class="btn btn-primary">Vista Impresión <span class="glyphicon glyphicon-print"></span></a>
</div>           	        	        
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
        <br><br>
        <!--inicio modal mensaje-->
        <a href="#" class="mostrarmodal btn btn-primary"><span class="icon-film"></span> VER VIDEO</a>  
             <div class="cajaexterna">
              <div class="cajainterna animated">
                <div class="cajacentrada">                                 
                   <video src="videos/venta.mp4" controls width="60%" height="cover" autoplay preload>Tu navegador no implementa el video <code>video</code></video> 
                    <br> 
                   <div class="cierramodal">
                   <a href="#" class="cerrarmodal btn btn-danger">CERRAR</a>
                  </div>                
                </div>
              </div>
            </div>
         <!--final modal mensaje-->  
      </div>
    </div>
</div>
<br><br>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#venta').addClass('active');
    });
</script>
