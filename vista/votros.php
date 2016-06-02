		      
<?php include('controlador/cotros.php'); ?>


<div class="container-fluid lol">
<div class="eti">Ingresos y Egresos varios</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group campo">
             <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly required>      
		</div>
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Descripción:</label>
            <textarea name="descripcion" rows="1" cols="25" class="form-control" maxlength="100" required> </textarea>   
		</div>
		<div class="form-group campo">
           <label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{0,11}" min="0" title="Solo se permiten valores reales" required>            
		</div>		
		 <div class="form-group campo"> <br>
           <button type="submit" name="Entra" class="btn btn-success" value="Entra"><span class="glyphicon glyphicon-plus"></span></button>     		
           <button type="submit" name="Sale" class="btn btn-danger" value="Sale"><span class="glyphicon glyphicon-minus"></span></button>          
        </div>
	</form>
</div>
<?php $consultaotros = $otros->consultar_otros(); ?>
<div id='no-more-tables'>
	<table class="table table-bordered table-hover" id="example">
		<thead>
            <tr>
                <th colspan="12">Listado de los registros</th>
            </tr>
            <tr>
                <th>ID Reporte</th>
				<th>Fecha</th>
				<th>Descripcion</th>
				<th>Salida</th>
				<th>Entrada</th>			
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaotros);$i++): ?>
				<tr>
					<td data-title='ID Reporte'><?= $consultaotros[$i]['idreporte'] ?></td>
					<td data-title='Fecha'><?= $consultaotros[$i]['fecha'] ?></td>					
					<td data-title='Descripcion'><?= $consultaotros[$i]['descripcion'] ?></td>
					<td data-title='Salida'>$ <?= number_format($consultaotros[$i]['salida_total']) ?></td>
					<td data-title='Entrada'>$ <?= number_format($consultaotros[$i]['entrada_total']) ?></td>					
                    <td data-title='Edición'><a href="home.php?pag=12&id=<?= $consultaotros[$i]['idreporte'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreporteeli" value="<?= $consultaotros[$i]['idreporte'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
        </tbody>
		</table>
		</div>
        <!--inicio modal mensaje-->
        <a href="#" class="mostrarmodal btn btn-primary"><span class="icon-film"></span> VER VIDEO</a>  
             <div class="cajaexterna">
              <div class="cajainterna animated">
                <div class="cajacentrada">                                 
                   <video src="videos/otros.mp4" controls width="60%" height="cover" autoplay preload>Tu navegador no implementa el video <code>video</code></video> 
                    <br> 
                   <div class="cierramodal">
                   <a href="#" class="cerrarmodal btn btn-danger">CERRAR</a>
                  </div>                
                </div>
              </div>
            </div>
         <!--final modal mensaje-->  
<br/><br/> 
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#registrar').addClass('active');
    });
</script>