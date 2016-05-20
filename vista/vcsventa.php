
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $venta = new Mconsulta();
?>

<?php 
$consultaventa = $venta->consultar_venta();
$consultaventaproductos = $venta->consultar_ventaproducto();
$consultaventatotal = $venta->consultar_ventatotal();
$consultadiatotalventas = $venta->consultar_diatotalventas();
$consultamestotalventas = $venta->consultar_mestotalventas();
?>
<!--Inicio venta-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Informe Venta</label>
<div class="spoiler">
<div class="info">

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Ventas</th>
            </tr>
            <tr>
                <th>No. venta</th>
                <th>Fecha</th>
                <th>ID Empleado</th>
                <th>Empleado</th>
                <th>ID Cliente</th>
                <th>Cliente</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventa);$i++): ?>
                <tr>
                    <td data-title='No. venta'><?= $consultaventa[$i]['numero_venta'] ?></td>
                    <td data-title='Fecha'><?= $consultaventa[$i]['fecha'] ?></td>
                    <td data-title='ID Empleado'><?= $consultaventa[$i]['idempleado'] ?></td>
                    <td data-title='Empleado'><?= $consultaventa[$i]['empleado'] ?></td>
                    <td data-title='ID Cliente'><?= $consultaventa[$i]['idcliente'] ?></td>
                    <td data-title='Cliente'><?= $consultaventa[$i]['nombre'] ?></td>
                    <td data-title='Detalle'><?= $consultaventa[$i]['detalle'] ?></td>                    
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
         
</div>
</div>
</div>
         
<!--Inicio venta por Producto-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler3" /> 
<label for="spoiler3" >Informe Venta por Producto</label>
<div class="spoiler">
<div class="info"> 
            
<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Ventas por Producto</th>
            </tr>
            <tr>
                <th>No. venta</th>
                <th>Referencia</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventaproductos);$i++): ?>
                <tr>
                    <td data-title='No. venta'><?= $consultaventaproductos[$i]['numero_venta'] ?></td>
                    <td data-title='Referencia'><?= $consultaventaproductos[$i]['referencia'] ?></td>
                    <td data-title='Nombre'><?= $consultaventaproductos[$i]['nombre'] ?></td>
                    <td data-title='Precio'>$ <?= number_format($consultaventaproductos[$i]['precio_venta']) ?></td>
                    <td data-title='Cantidad'><?= $consultaventaproductos[$i]['cantidad'] ?></td>
                    <td data-title='Subtotal'>$ <?= number_format($consultaventaproductos[$i]['SUBTOTAL']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
    
</div>
</div>
</div>
 
<!--Inicio venta Total-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler4" /> 
<label for="spoiler4" >Informe Total Venta</label>
<div class="spoiler">
<div class="info">  

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Ventas Totales</th>
            </tr>
            <tr>
                <th>No. venta</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaventatotal);$i++): ?>
                <tr>
                    <td data-title='No. venta'><?= $consultaventatotal[$i]['numero_venta'] ?></td>
                    <td data-title='Fecha'><?= $consultaventatotal[$i]['fecha'] ?></td>
                    <td data-title='Total'>$ <?= number_format($consultaventatotal[$i]['SumaDeSUBTOTAL']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
	
</div>
</div>
</div>	 

<!--Inicio DiaTotalVentas-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler5" /> 
<label for="spoiler5" >Informe Total Venta por Dia</label>
<div class="spoiler">
<div class="info">  

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Totales Venta Diarios</th>
            </tr>
            <tr>                
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultadiatotalventas);$i++): ?>
                <tr>                    
                    <td data-title='Fecha'><?= $consultadiatotalventas[$i]['fecha'] ?></td>
                    <td data-title='Total'>$ <?= number_format($consultadiatotalventas[$i]['TOTALVENTADIA']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
	
</div>
</div>
</div>	

<!--Inicio MesTotalVentas-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler6" /> 
<label for="spoiler6" >Informe Total Venta por Mes</label>
<div class="spoiler">
<div class="info">  

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Totales Venta Mensuales</th>
            </tr>
            <tr> 
                <th>Mes</th>               
                <th>Año</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultamestotalventas);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultamestotalventas[$i]['Mes'] ?></td>                    
                    <td data-title='Año'><?= $consultamestotalventas[$i]['year'] ?></td>
                    <td data-title='Total'>$ <?= number_format($consultamestotalventas[$i]['TOTALMESVENTAS']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
	
</div>
</div>
</div>	       