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

<div class="row-fluid">
<input type="checkbox"  id="spoiler4" /> 
<label for="spoiler4" >Informe Servicio Técnico por Día</label>
<div class="spoiler">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Servicio Técnico por Día</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Costo Servico Técnico</th>
                <th>Abono</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultasstdia);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultasstdia[$i]['fecha'] ?></td>
                    <td data-title='Costo Servicio Técnico'><?= number_format($consultasstdia[$i]['costo_st']) ?></td>
                    <td data-title='Abono'>$ <?= number_format($consultasstdia[$i]['abono'] )?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>  
</div>
</div>
</div>   

<div class="row-fluid">
<input type="checkbox"  id="spoiler5" /> 
<label for="spoiler5" >Informe Servicio Técnico Entregado por Día</label>
<div class="spoiler">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Servicio Técnico Entregado por Día</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Saldo cancelado</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultasstentregadodia);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultasstentregadodia[$i]['fecha'] ?></td>
                    <td data-title='Saldo cancelado'><?= number_format($consultasstentregadodia[$i]['SumaDesaldo_cancel']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>  
</div>
</div>
</div>  

<div class="row-fluid">
<input type="checkbox"  id="spoiler6" /> 
<label for="spoiler6" >Informe Servicio Técnico por Mes</label>
<div class="spoiler">
<div class="info">
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Servicio Técnico por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Costo del Servicio</th>
                <th>Abono</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultasstmes);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultasstmes[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultasstmes[$i]['year'] ?></td>
                    <td data-title='Costo Servico'><?= number_format($consultasstmes[$i]['SumaDecosto_st']) ?></td>
                    <td data-title='Abono'><?= number_format($consultasstmes[$i]['SumaDeabono']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
</div>
</div>
</div>

<div class="row-fluid">
<input type="checkbox"  id="spoiler7" /> 
<label for="spoiler7" >Informe Servicio Técnico Entregado por Mes</label>
<div class="spoiler">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Servicio Técnico Entregado por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Saldo Cancelado</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultasstentregadomes);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultasstentregadomes[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultasstentregadomes[$i]['year'] ?></td>
                    <td data-title='Costo Servico'><?= number_format($consultasstentregadomes[$i]['TOTALSALDOCANCEL']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>                   
</div>
</div>
</div>     