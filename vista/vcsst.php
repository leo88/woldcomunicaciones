
<head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.2/css/responsive.dataTables.min.css"/>
  <link rel="stylesheet" href="css/prueba.css"/>
  <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.0.2/js/dataTables.responsive.min.js"></script>
</head>
<?php 
    include('modelo/mconsulta.php'); 
    $st = new Mconsulta();
?>
<div class="container-fluid lol">
<div class="eti">Servicio Técnico</div>
</div>
<?php $consultast = $st->consultar_st(); 
    $consultaservicioentregado = $st->consultar_stentregado(); 
?>
    <table id="" class="display" cellspacing="0" width="100%">
	    <thead>
            <tr>
                <th colspan="12">Servicio Técnico</th>
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
                <th>Abono</th>
                <th>Saldo Pendiente</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultast);$i++): ?>
                <tr>
                    <td data-title='Orden'><?= $consultast[$i]['numero_orden'] ?></td>
                    <td data-title='Tipo de Dispositivo'><?= $consultast[$i]['nombre'] ?></td>
                    <td data-title='Marca'><?= $consultast[$i]['marca'] ?></td>
                    <td data-title='Referencia'><?= $consultast[$i]['referencia'] ?></td>
                    <td data-title='Descripción'><?= $consultast[$i]['descripcion_st'] ?></td>
                    <td data-title='Observación'><?= $consultast[$i]['observacion'] ?></td>
                    <td data-title='Precio al cliente'>$ <?= number_format($consultast[$i]['precio_cliente']) ?></td>
                    <td data-title='Fecha'><?= $consultast[$i]['fecha'] ?></td>
                    <td data-title='Abono'>$ <?= number_format($consultast[$i]['abono']) ?></td>
                    <td data-title='Saldo pendiente'>$ <?= number_format($consultast[$i]['SALDO_PENDIENTE']) ?></td>
            <?php endfor; ?>
        </tbody>
    </table>	
<div class="container-fluid lol">
<div class="eti">Servicio Técnico Entregado</div>
</div>
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="3">Listado de Servicio T. Entregado</th>
            </tr>
            <tr>
                <th>No. Orden</th>
                <th>Fecha</th>
                <th>Saldo Cancelado</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaservicioentregado);$i++): ?>
                <tr>
                    <td data-title='No. Orden'><?= $consultaservicioentregado[$i]['numero_orden'] ?></td>
                    <td data-title='Fecha'><?= $consultaservicioentregado[$i]['fecha'] ?></td>
                    <td data-title='Saldo Cancelado'>$ <?= number_format($consultaservicioentregado[$i]['saldo_cancel']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>

    </table>    
    </div>

    </div><!--/row-->
<br/><br/> 