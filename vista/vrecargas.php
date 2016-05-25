<?php include('controlador/crecargas.php'); ?>

				<div class="container-fluid lol">
				<div class="eti">Recargas</div>

					<form action="" method="POST" class="blanco">
						<div class="form-group campo">
    				        <label for=""><span style="color:red;">* </span>Fecha:</label>
    				        <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly re	uired>
						</div>
						<div class="form-group campo">
    				        <label for=""><span style="color:red;">* </span>Valor de la venta:</label>
    				        <input type="number" class="form-control" name="venta_recarga" pattern="[0-9]{1,9}" min="0" title="Solo validos numeros" required>
						</div>
						 <div class="form-group campo"> <br>          		
    				        <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
    				    </div>
					</form>
				</div>
				<?php $consultarecargas = $recargas->consultar_recargas(); ?>
				<div id='no-more-tables'>
					<table class="table table-bordered table-hover" id="example">
				 		<thead>
            				<tr>
            				    <th colspan="12">Listado de Registros</th>
            				</tr>
            				<tr>
            				    <th>ID</th>
								<th>Fecha recargas</th>
								<th>Valor de la venta</th>
								<th>Utilidad</th>
								<th>Edición</th>
            				</tr>
        				</thead>
        				<tbody>
            				<?php for($i=0;$i<count($consultarecargas);$i++): ?>
							<tr>
								<td data-title='ID'><?= $consultarecargas[$i]['idrecarga'] ?></td>
								<td data-title='Fecha recargas'><?= $consultarecargas[$i]['fecha'] ?></td>
								<td data-title='valor venta'>$ <?= number_format($consultarecargas[$i]['venta_recarga']) ?></td>
								<td data-title='Utilidad'>$ <?= number_format($consultarecargas[$i]['utilidad']) ?></td>
								<td data-title='Edición'><a href="home.php?pag=32&id=<?= $consultarecargas[$i]['idrecarga'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
								<!--<td>
									<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
										<input type="hidden" name="idrecargaseli" value="<?= $consultarecargas[$i]['idrecargas'] ?>">
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