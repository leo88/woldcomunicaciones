
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $compra = new Mconsulta();
?>

<?php 
$consultacompra = $compra->consultar_compra();
$consultacompraproductos = $compra->consultar_compraproducto();
$consultacompratotal = $compra->consultar_compratotal();
?>
<!--Inicio Compra-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Informe Compra</label>
<div class="spoiler">
<div class="info">

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Compras</th>
            </tr>
            <tr>
                <th>No. Compra</th>
                <th>Fecha</th>
                <th>Proveedor</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacompra);$i++): ?>
                <tr>
                    <td data-title='No. Compra'><?= $consultacompra[$i]['numero_compra'] ?></td>
                    <td data-title='Fecha'><?= $consultacompra[$i]['fecha'] ?></td>
                    <td data-title='Proveedor'><?= $consultacompra[$i]['proveedor'] ?></td>
                    <td data-title='Nombre'><?= $consultacompra[$i]['nombre'] ?></td>
                    <td data-title='Descripción'><?= $consultacompra[$i]['descripcion'] ?></td>
                    <td data-title='Telefono'><?= $consultacompra[$i]['telefono'] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
         
</div>
</div>
</div>
         
<!--Inicio Compra por Producto-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler3" /> 
<label for="spoiler3" >Informe Compra por Producto</label>
<div class="spoiler">
<div class="info"> 
            
<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Compras por Producto</th>
            </tr>
            <tr>
                <th>No. Compra</th>
                <th>Referencia</th>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Moviento</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacompraproductos);$i++): ?>
                <tr>
                    <td data-title='No. Compra'><?= $consultacompraproductos[$i]['numero_compra'] ?></td>
                    <td data-title='Referencia'><?= $consultacompraproductos[$i]['referencia'] ?></td>
                    <td data-title='Nombre'><?= $consultacompraproductos[$i]['nombre'] ?></td>
                    <td data-title='Valor'>$ <?= number_format($consultacompraproductos[$i]['valor']) ?></td>
                    <td data-title='Cantidad'><?= $consultacompraproductos[$i]['cantidad'] ?></td>
                    <td data-title='Subtotal'>$ <?= number_format($consultacompraproductos[$i]['SUBTOTAL']) ?></td>
                    <td data-title='Moviento'><?= $consultacompraproductos[$i]['idmovimiento'] ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
    
</div>
</div>
</div>
 
<!--Inicio Compra Total-->
<div class="row-fluid">
<input type="checkbox"  id="spoiler4" /> 
<label for="spoiler4" >Informe Total Compra</label>
<div class="spoiler">
<div class="info">  

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Compras Totales</th>
            </tr>
            <tr>
                <th>No. Compra</th>
                <th>Fecha</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacompratotal);$i++): ?>
                <tr>
                    <td data-title='No. Compra'><?= $consultacompratotal[$i]['numero_compra'] ?></td>
                    <td data-title='Fecha'><?= $consultacompratotal[$i]['fecha'] ?></td>
                    <td data-title='Total'>$ <?= number_format($consultacompratotal[$i]['SumaDeSUBTOTAL']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
	
</div>
</div>
</div>	    
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#consulta').addClass('active');
    });
</script>