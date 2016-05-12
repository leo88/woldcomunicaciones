
<?php include("controlador/cserviciotecnico.php"); ?>


<div class="container-fluid lol">
<div class="eti">Servicio Tecnico</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Tipo de Dispositivo:</label>
            <input type="text" class="form-control" name="nombre" required>      
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
             <label for="">Marca:</label>
            <input type="text" class="form-control" name="marca" required>     
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required >           
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
             <label for="">Descripcion del servicio:</label>
            <textarea name="descripcion_st" class="form-control" rows="1" cols="30" required> </textarea>     
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
             <label for="">Observacion:</label>
            <input type="text" class="form-control" name="observacion">           
		</div>
		<div class="form-group col-sm-6 col-md-4 ccol-md-4 ol-lg-4">
           <label for="">Costo del servicio:</label>
            <input type="number" class="form-control" name="costo_st" required >        
		</div>
		<div class="form-group col-sm-6 col-md-4 -lg-4">
             <label for="">Precio al cliente:</label>
            <input type="number" class="form-control" name="precio_cliente" required >     
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
           <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" required >  
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Cliente:</label>
            <select name="id_cliente" class="chzn-select form-control" required>
				<option value=0>Seleccione empleado</option>
				<?php for($i=0;$i<count($cliente2);$i++): ?>
					<option value="<?= $cliente2[$i]['idcliente'] ?>"><?= $cliente2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>            
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Empleado:</label>
            <select name="empleado" class="chzn-select form-control" required>
				<option value=0>Seleccione empleado</option>
				<?php for($i=0;$i<count($empleado2);$i++): ?>
					<option value="<?= $empleado2[$i]['idempleado'] ?>"><?= $empleado2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>         
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
           <label for="">Abono:</label>
            <input type="number" class="form-control" name="abono" required >       
		</div>
		 <div class="form-group col-sm-6 col-md-4 col-lg-4"> <br>  
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="glyphicon glyphicon-ok"></span></button>
        </div>
	</form>
</div>
<?php $consultaserviciotecnico = $serviciotecnico->consultar_serviciotecnico(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Servicio Tecnico</th>
            </tr>
            <tr>
                <th>No. Orden</th>
				<th>Dispositivo</th>
				<th>Marca</th>
				<th>Referencia</th>
				<th>Descripcion</th>
				<th>Observacion</th>
				<th>Costo Servicio</th>
				<th>Precio Cliente</th>
				<th>Fecha Recibido</th>
				<th>ID Cliente</th>
				<th>ID Empleado</th>
				<th>Abono Cliente</th>
				<th>Edición</th>
				<th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaserviciotecnico);$i++): 
				$empleado1 = $serviciotecnico->sel_empleado1($consultaserviciotecnico[$i]['empleado']);
				$cliente1 = $serviciotecnico->sel_cliente1($consultaserviciotecnico[$i]['id_cliente']);
			?>
				<tr>
					<td data-title='No. Orden'><?= $consultaserviciotecnico[$i]['numero_orden'] ?></td>
					<td data-title='Dispositivo'><?= $consultaserviciotecnico[$i]['nombre'] ?></td>
					<td data-title='Marca'><?= $consultaserviciotecnico[$i]['marca'] ?></td>
					<td data-title='Referencia'><?= $consultaserviciotecnico[$i]['referencia'] ?></td>
					<td data-title='Descripcion'><?= $consultaserviciotecnico[$i]['descripcion_st'] ?></td>
					<td data-title='Observacion'><?= $consultaserviciotecnico[$i]['observacion'] ?></td>
					<td data-title='Costo Servicio'>$ <?= number_format($consultaserviciotecnico[$i]['costo_st']) ?></td>
					<td data-title='Precio Cliente'>$ <?= number_format($consultaserviciotecnico[$i]['precio_cliente']) ?></td>
					<td data-title='Fecha'><?= $consultaserviciotecnico[$i]['fecha'] ?></td>
					<td data-title='ID Cliente'><?= $cliente1[0]['nombre'] ?></td>
					<td data-title='ID Empleado'><?= $empleado1[0]['nombre'] ?></td>
					<td data-title='Abono'>$ <?= number_format($consultaserviciotecnico[$i]['abono']) ?></td>
					<td data-title='Edición'><a href="index.php?pag=14&id=<?= $consultaserviciotecnico[$i]['numero_orden'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<td data-title='Eliminación'>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserviteceli" value="<?= $consultaserviciotecnico[$i]['numero_orden'] ?>">
							<button type="submit" class="btn btn-danger" value="Eliminar"><span class="icon-bin"></span></button>
						</form>
					</td>
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>



		        </div><!--/span-->

		      </div><!--/row-->

				<br/><br/>    

		    </div><!--container-fluid-->


			<script type="text/javascript">
				//para buscar en las tablas
				$(document).ready(function() {
				    $('#example').dataTable( {
				        "bPaginate": true,
				        "bLengthChange": true,
				        "bFilter": true,
				        "bSort": false,
				        "bInfo": true,
				        "bAutoWidth": true
				    } );
				} );	
			</script>	

			<script type="text/javascript">
				$(function() {
    				$(".chzn-select").chosen();
				});
			</script>
			
		</body>
	</html>