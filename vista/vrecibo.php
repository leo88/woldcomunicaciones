<?php 
    include('modelo/mconsulta.php'); 
    $venta = new Mconsulta();
?>
<link rel="stylesheet" href="css/impreso.css"/>
<link rel="stylesheet" href="css/impreso.css" media="print"/>
<?php 
$consultaventa          = $venta->consultar_venta_id();
$idprint                = $consultaventa[0]['numero_venta'];
$consultaventaproducto  = $venta->consultar_ventaproducto_id($idprint);
$consultaventatotal     = $venta->consultar_ventatotal_id($idprint);
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
            <?php for($i=0;$i<count($consultaventa);$i++): ?>
                <tr>
                    <td>No. venta: <br><?= $consultaventa[$i]['numero_venta'] ?></td>
                    <td>Fecha: <br><?= $consultaventa[$i]['fecha'] ?></td>
                    <td>Empleado: <br><?= $consultaventa[$i]['empleado'] ?></td>
                    <td>Cliente: <br><?= $consultaventa[$i]['nombre'] ?></td>
                    <td>Detalle: <br><?= $consultaventa[$i]['detalle'] ?></td>                    
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
            <?php for($i=0;$i<count($consultaventaproducto);$i++): ?>
                <tr>
                    <td data-title='referencia'><?= $consultaventaproducto[$i]['referencia'] ?></td>
                    <td data-title='nombre'><?= $consultaventaproducto[$i]['nombre'] ?></td>
                    <td data-title='precio'>$ <?= number_format($consultaventaproducto[$i]['precio_venta']) ?></td>
                    <td data-title='cantidad'><?= $consultaventaproducto[$i]['cantidad']*(-1) ?></td> 
                    <td data-title='subtotal'>$ <?= number_format($consultaventaproducto[$i]['SUBTOTAL']) ?></td>    
                </tr>
            <?php endfor; ?>        
                <tr> 
                    <th colspan="3" > </th>
                    <th id="der">Valor Total</th>   
                    <th>$ <?= number_format($consultaventatotal[0]['SumaDeSUBTOTAL']) ?> </th>
                </tr>
        </tbody>
    </table> 
<button id="boton" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print" onclick="javascript:window.print()"> Imprimir</span></button> 
