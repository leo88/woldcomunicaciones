
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $devolucion = new Mconsulta();
?>

<?php 
$consultadevolucion = $devolucion->consultar_devolucion();
?>

<div class="etinfo">Informe Devolucion</div>

	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Devoluciones</th>
            </tr>
            <tr>
                <th>ID. Devolucion</th>
                <th>Referencia</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>No. Compra</th>
                <th>Fecha Compra</th>
                <th>Cantidad</th>
                <th>Costo Unid.</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultadevolucion);$i++): ?>
                <tr>
                    <td data-title='ID. Devolucion'><?= $consultadevolucion[$i]['iddevolucion'] ?></td>
                    <td data-title='Referencia'><?= $consultadevolucion[$i]['referencia'] ?></td>
                    <td data-title='Fecha'><?= $consultadevolucion[$i]['fecha'] ?></td>
                    <td data-title='Motivo'><?= $consultadevolucion[$i]['motivo'] ?></td>
                    <td data-title='No. Compra'><?= $consultadevolucion[$i]['numero_compra'] ?></td>
                    <td data-title='Fecha Compra'><?= $consultadevolucion[$i]['fecha_compra'] ?></td>
                    <td data-title='Cantidad'><?= $consultadevolucion[$i]['cantidad'] ?></td>
                    <td data-title='Costo Unid.'>$ <?= number_format($consultadevolucion[$i]['costo']) ?></td>
                    <td data-title='Total'>$ <?= number_format($consultadevolucion[$i]['TOTAL_DEVOLUCION']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>   
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                            //previously active menu item 
        $('#consulta').addClass('active');
    });
</script>