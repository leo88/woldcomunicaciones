<?php 
    include('modelo/mconsulta.php'); 
    $st = new Mconsulta();
?>
<div class="container-fluid lol">
<div class="eti">Existencia</div>

</div>
<?php $consultast = $st->consultar_st(); ?>
	<div id='no-more-tables'>
		<table class="table table-bordered table-hover" id="example">
	   <thead>
            <tr>
                <th colspan="3">Servicio Técnico</th>
            </tr>
            <tr>
                <th>Número Orden</th>
                <th>Tipo de dispositivo</th>
                <th>Marca</th>
                <th>Referencia</th>
                <th>Descripción</th>
                <th>Observación</th>
                <th>Precio Cliente</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Empleado</th>
                <th>Abono</th>
                <th>Saldo Pendiente</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultast);$i++): ?>
                <tr>
                    <td data-title='Referencia'><?= $consultast[$i]['referencia'] ?></td>
                    <td data-title='Tipo de Dispositivo'><?= $consultast[$i]['nombre'] ?></td>
                    <td data-title='Marca'><?= $consultast[$i]['marca'] ?></td>
                    <td data-title='Cantidad'><?= $consultast[$i]['SumaDecantidad'] ?></td>
                    <td data-title='Precio'><?= $consultast[$i]['precio'] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>	
    </div>
    </div><!--/row-->
<br/><br/>  
