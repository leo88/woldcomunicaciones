<div class="row-fluid">

<!-- inicio reposicion -->			      
<?php include 'controlador/creposicion.php'; ?>

<?php
  	$displayForm = True;
  	if(isset($_POST['submit']) or isset($_POST['Sale']) or isset($_POST['Entra'])){
  		$displayForm = False;
?>

<!-- Tabla donde se muestra la informacion ingresada-->
    <?php $consultareposicion = $reposicion->consultar_reposicion(); ?>
    <div id="vt">
		<?php for($j=0;$j<count($consultareposicion);$j++): ?>
		<span class="vt1">REGISTRO DE REPOSICION NO. <?= $consultareposicion[$j]['idreposicion'] ?></span>         <br><br>         
        <span class="vt1">Número de Compra: <?= $consultareposicion[$j]['numero_compra'] ?></span>
        <span class="vt1">Fecha: <?= $consultareposicion[$j]['fecha'] ?></span>
        <span class="vt1">Descripción: <?= $consultareposicion[$j]['descripcion'] ?></span>
        <!--<div><a href="home.php?pag=25&idv=<?= $consultaventa[$j]['numero_venta'] ?>" class="btn btn-primary">Editar</a></div>-->
    	<?php endfor; ?>
    </div> 
    
    <!-- inicio movimiento -->
   	<?php include('controlador/cmovimiento.php'); ?>

    <div class="container-fluid lol">
        <form action="" method="POST" class="blanco">
		<div class="form-group campo col-md-3">
            <input type="hidden" name="motivo" value="Reposicion" required>
            <input type="hidden" name="idgeneral" value="<?= $idgeneral4[0]['idreposicion'] ?>">
            <label for=""><span style="color:red;">* </span>Referencia:</label><br>
            <select name="referencia" class="chzn-select form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>   
		</div>
		<div class="form-group campo col-md-3">
          	<label for=""><span style="color:red;">* </span>Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" pattern="[0-9]{1,6}" min="0" title="Solo validos numeros" required>      
		</div>
		<div class="form-group campo col-md-3">
          <label for=""><span style="color:red;">* </span>Valor:</label>
            <div class="input-group">
              <span class="input-group-addon">$</span>
              <input type="number" class="form-control" name="valor" placeholder="Ingresar '0' si no entra dinero extra"  pattern="[0-9]{0,11}" min="0" title="Solo se permiten numeros, máximo 11" required>
          </div>
		</div>
		 <div class="form-group campo"> <br>  
           <button type="submit" name="Sale" class="btn btn-danger" value="-"><span class="icon-minus"> Sale</span></button>  
           <button type="submit" name="Entra" class="btn btn-success" value="+"><span class="icon-plus"> Entra</span></button> 
        </div>
	</form>	
    <div class="campo">
                Si el producto que va a reponer no esta esta en el inventario actualmente, por favor registre la referencia antes de hacer la reposicion
                <a href="home.php?pag=3">Registrar referencia</a> 
            </div>
    </div>
    <?php $consultamovimiento = $movimiento->consultar_movimiento_r($idgeneral4[0]['idreposicion']); ?>
    <div id=''>
        <table class="table">
		<thead>
			<tr>
				<th>Ultimo Movimiento de Reposicion</th>
			</tr>
			<tr>
				<th>ID</th>
                <th>ID Reposición</th>
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
					<td>$ <?= number_format($consultamovimiento[$i]['valor']) ?></td>				
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
<!-- final movimiento -->

<?php 
  	} 
  	if($displayForm){
?>

<div class="container-fluid lol">
<div class="eti">Insertar Reposicion</div>

	<form action="" method="POST" class="blanco">
		<div class="form-group col-md-6 col-lg-5">
           <label for=""><span style="color:red;">* </span>No. Compra:</label>
            <input type="number" class="form-control" name="numero_compra" pattern="[0-9]{1,6}" min="0" title="Solo validos numeros">       
		</div>
		<div class="form-group col-md-6 col-lg-5">
           <label for=""><span style="color:red;">* </span>Descripción:</label>
            <input type="text" class="form-control" name="descripcion" max="100">
		</div>
		 <div class="form-group col-lg-2"> <br>
           <button type="submit" name="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>  
        </div>
	</form>	           
</div>
<?php } ?>
</div>

          	
<div class="row-fluid"><!--spoiler de informacion--> <br>
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Acerca de la Reposicion</label>
<div class="spoiler">
      <div class="info">
              <h5>¿Cuando realizo una Reposicion?</h5>
              <ul>
                  <li>Una Reposicion se realiza cuando se hace una devolucion o un cambio de una referencia </li>
                  <li>Si al hacer una reposicion necesita hacer un ajuste de caja use <a href="home.php?pag=11" class="btn btn-default btn-xs">Ingresos y Egresos Varios</a> justificando dicho ajuste</li>
              </ul>
               <br>
        <!--inicio modal mensaje-->     
             <div class="cajaexterna">
              <div class="cajainterna animated">
                <div class="cajacentrada">                                 
                   <video src="videos/reposicion.mp4" controls width="60%" height="cover" autoplay preload>Tu navegador no implementa el video <code>video</code></video> 
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
        $('#producto').addClass('active');
    });
</script>