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
   <div id="logo">WOLD 
   <div id="logob"> COMUNICACIONES</div>
   <div id="nit">Nit. 81.720.483-8</div>
   </div>
    <table id="encabezado"  cellspacing="0" width="100%">
       <thead>
            <tr>
               <th><div id="logob">RECIBO DE VENTA</div></th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventa);$i++): ?>
                <tr>
                    <td>No. venta: <?= $consultaventa[$i]['numero_venta'] ?></td>                    
                    <td>Fecha: <?= $consultaventa[$i]['fecha'] ?></td>
                    </tr><tr> 
                    <td colspan="3">Empleado: <?= $consultaventa[$i]['empleado'] ?></td>
                    
                    </tr>
                    </tr><tr>                                       
                    <td colspan="3">Cliente: <?= $consultaventa[$i]['nombre'] ?></td>                   
                    </tr>
            <?php endfor; ?>
        </tbody>
    </table>

    <table id="recibo"  cellspacing="0" width="100%">
       <thead>
            <tr>
                <!--<th>Referencia</th>-->
                <td>Desc.</td>
                <td>Valor Uni.</td>
                <td>Cant.</td>
                <td>Subtotal Venta</td>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventaproducto);$i++): ?>
                <tr>
                    <!--<td data-title='referencia'><?= $consultaventaproducto[$i]['referencia'] ?></td>-->
                    <td data-title='nombre'><?= $consultaventaproducto[$i]['nombre'] ?></td>
                    <td data-title='precio'>$ <?= number_format($consultaventaproducto[$i]['precio_venta']) ?></td>
                    <td data-title='cantidad'><?= $consultaventaproducto[$i]['cantidad']*(-1) ?></td> 
                    <td data-title='subtotal'>$ <?= number_format($consultaventaproducto[$i]['SUBTOTAL']) ?></td>    
                </tr>
            <?php endfor; ?>        
                <tr id="der">
                    <th></th> 
                    <th colspan="3">Valor Total: &nbsp;&nbsp;&nbsp;&nbsp;$ <?= number_format($consultaventatotal[0]['SumaDeSUBTOTAL']) ?> </th>
                </tr>
        </tbody>
    </table>
    <div id="pie">    
     Tel. 861 25 05 - Cel. 313 382 32 55<br>    
    Cra 13 No. 10-110 
</div> 
<button id="boton" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print" onclick="javascript:window.print()"> Imprimir</span></button> 
