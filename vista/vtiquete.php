<?php 
    include('modelo/mconsulta.php'); 
    $st = new Mconsulta();
?>
<link rel="stylesheet" href="css/impreso.css"/>
<link rel="stylesheet" href="css/impreso.css" media="print"/>
<?php 
$consultast          = $st->consultar_st_id();
$idprint             = $consultast[0]['numero_orden'];
//echo $idprint;

?>
   <div id="logo">WOLD COMUNICACIONES</div>
    <table id="encabezado"  cellspacing="0" width="100%">
       <!-- <thead>
            <tr>
                <th>No. venta</th>
                <th>Fecha</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>Detalle</th>
            </tr>
        </thead>-->
        <tbody>
            <?php for($i=0;$i<count($consultast);$i++): ?>
                <tr>
                    <td>No. Orden: <br><?= $consultast[$i]['numero_orden'] ?></td>
                    <td>Fecha: <br><?= $consultast[$i]['fecha'] ?></td>
                    <td>Tipo Dispositivo: <br><?= $consultast[$i]['nombre'] ?></td>
                    <td>Marca: <br><?= $consultast[$i]['marca'] ?></td>
                    <td>Referencia: <br><?= $consultast[$i]['referencia'] ?></td> 
                    <td>Descripcion: <br><?= $consultast[$i]['descripcion_st'] ?></td>
                    <td>Observacion: <br><?= $consultast[$i]['observacion'] ?></td>
                    <td>Costo: <br><?= number_format($consultast[$i]['precio_cliente']) ?></td>
                    <td>Abono: <br><?= number_format($consultast[$i]['abono']) ?></td>
                    <td>Saldo: <br><?= number_format($consultast[$i]['SALDO_PENDIENTE']) ?></td>                    
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <table id="recibo"  cellspacing="0" width="100%">
       <thead>
            <tr>
                <th>Referencia</th>
                <th>Tipo de Dispositivo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultastproducto);$i++): ?>
                <tr>
                    <td data-title='referencia'><?= $consultastproducto[$i]['referencia'] ?></td>
                    <td data-title='nombre'><?= $consultastproducto[$i]['nombre'] ?></td>
                    <td data-title='precio'>$ <?= number_format($consultastproducto[$i]['precio_venta']) ?></td>
                    <td data-title='cantidad'><?= $consultastproducto[$i]['cantidad']*(-1) ?></td> 
                    <td data-title='subtotal'>$ <?= number_format($consultastproducto[$i]['SUBTOTAL']) ?></td>    
                </tr>
            <?php endfor; ?>        
                <tr> 
                    <th colspan="3" > </th>
                    <th id="der">Valor Total</th>   
                    <th>$ <?= number_format($consultasttotal[0]['SumaDeSUBTOTAL']) ?> </th>
                </tr>
        </tbody>
    </table> 
<button id="boton" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print" onclick="javascript:window.print()"> Imprimir</span></button> 

<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $st = new Mconsulta();
?>
<?php $consultast               = $st->consultar_stcomparativo(); 
    $consultasstdia             = $st->consultar_diatotalst();
    $consultasstentregadodia    = $st->consultar_diatotalstentreg(); 
    $consultasstmes             = $st->consultar_mestotalst(); 
    $consultasstentregadomes    = $st->consultar_mestotalstentreg();
?>
<div class="row-fluid">
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Informe Servicio técnico</label>
<div class="spoiler">
<div class="info">

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
                <th>Fecha Recibido</th>
                <th>Abono</th>
                <th>Saldo Pendiente</th>
                <th>Fecha de Entrega</th>
                <th>Saldo Cancelado</th>
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
                    <td data-title='Saldo pendiente'>$ <?= number_format($consultast[$i]['saldo_pendiente']) ?></td>
                    <td data-title='Fecha'><?= $consultast[$i]['fecha_cancel'] ?></td>
                    <td data-title='Saldo cancelado'>$ <?= number_format($consultast[$i]['saldo_cancelado']) ?></td>
            <?php endfor; ?>
        </tbody>
    </table>	
</div>
</div>
</div>