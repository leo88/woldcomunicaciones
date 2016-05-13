<div class="row-fluid">		      
<!-- inicio movimiento -->
<div class="span6">	
   <?php include('controlador/cmovimiento.php'); ?>
    <div class="container-fluid lol">    
       
        <div class="eti">Insertar Movimiento</div>
        <form action="" method="POST" class="blanco">
		<div class="form-group campo">
             <input type="hidden" name="motivo" value="Devolución">
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
            <input type="number" class="form-control" name="cantidad">       
		</div>
		 <div class="form-group campo"> <br>  
           <button type="submit" name="Sale" class="btn btn-danger" value="-"><span class="icon-minus"></span></button>  
        </div>
	</form>	
    </div>
    <?php $consultamovimiento = $movimiento->consultar_movimiento_d(); ?>
    <div class="table-responsive tablatam">
        <table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th colspan="12">Ultimo Movimiento de Devolucion</th>
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
<?php include("controlador/cdevolucion.php"); ?>
    
<div class="container-fluid lol">
<div class="eti">Insertar Devolucion</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= date('Y-m-d') ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">
		</div>
		<div class="form-group campo">
           <label for="">Motivo:</label>
            <textarea class="form-control" name="motivo" rows="1" cols="24" maxlength="100"></textarea>
		</div>
		<div class="form-group campo">
             <label for=""><span style="color:red;">* </span>Número de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" pattern="[0-9]{1,10}" title="Solo validos numeros">    
		</div>
		<div class="form-group campo">
            <!--inicio modal mensaje-->
             <div class="cajaexterna">
              <div class="cajainterna animated">
                <div class="cajacentrada">                  
                  <p>Si el dinero de la referencia es regresado por el proveedor en su totalidad o parcialmente ingrese la cantidad en Costo retorno, de lo contrario si el dinero no es regresado ingrese 0 </p>
                  <div class="cierramodal">
                   <a href="#" class="cerrarmodal">cerrar</a>
                  </div>
                </div>
              </div>
            </div>
            <!--final modal mensaje-->
             <label for=""><span style="color:red;">* </span>Costo retorno:</label><a href="#" class="mostrarmodal">&nbsp;<span class="glyphicon glyphicon-exclamation-sign"></span></a>            
           
             
            <input  type="text" class="form-control" name="costo">
            </div>
		 <div class="form-group campo"> <br> 
           <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button> 
        </div>
        
        
	</form>
</div>
<?php $consultadevolucion = $devolucion->consultar_devolucion(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="12">Listado de Devoluciones</th>
            </tr>
            <tr>
                <th>Id De</th>
				<th>Id M</th>
				<th>Fecha</th>
				<th>Motivo</th>
				<th>Numero de Compra</th>
				<th>Costo retorno</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultadevolucion);$i++): 
				//$movimiento1 = $devolucion->sel_movimiento1($consultadevolucion[$i]['movimiento']);
			?>
				<tr>
					<td><?= $consultadevolucion[$i]['iddevolucion'] ?></td>
					<td><?= $consultadevolucion[$i]['movimiento'] ?></td>
					<td><?= $consultadevolucion[$i]['fecha'] ?></td>
					<td><?= $consultadevolucion[$i]['motivo'] ?></td>
					<td><?= $consultadevolucion[$i]['numero_compra'] ?></td>
					<td><?= "$ ".number_format($consultadevolucion[$i]['costo']) ?></td>
					<td><a href="home.php?pag=28&id=<?= $consultadevolucion[$i]['iddevolucion'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="iddevoeli" value="<?= $consultadevolucion[$i]['iddevolucion'] ?>">
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

		   
			
            
            