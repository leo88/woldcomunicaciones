<?php 
    include('modelo/mconsulta.php'); 
    $venta = new Mconsulta();
?>

<?php 
$consultaventa          = $venta->consultar_venta_id();
$idprint                = $consultaventa[0]['numero_venta'];
$consultaventaproducto  = $venta->consultar_ventaproducto_id($idprint);
$consultaventatotal     = $venta->consultar_ventatotal_id($idprint);
echo $idprint;

?>
    <table id=""  cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Ventas</th>
            </tr>
            <tr>
                <th>No. venta</th>
                <th>Fecha</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventa);$i++): ?>
                <tr>
                    <td data-title='No. venta'><?= $consultaventa[$i]['numero_venta'] ?></td>
                    <td data-title='Fecha'><?= $consultaventa[$i]['fecha'] ?></td>
                    <td data-title='Empleado'><?= $consultaventa[$i]['empleado'] ?></td>
                    <td data-title='Cliente'><?= $consultaventa[$i]['nombre'] ?></td>
                    <td data-title='Detalle'><?= $consultaventa[$i]['detalle'] ?></td>                    
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <table id=""  cellspacing="0" width="100%">
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
        </tbody>
        <tr>
            <th>____________________ </th>
        </tr>
        <tr>
            <td>$ <?= number_format($consultaventatotal[0]['SumaDeSUBTOTAL']) ?> </td>
        </tr>
    </table>  
