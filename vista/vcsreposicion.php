
<?php 
    include 'estilos.php'; 
    include 'modelo/mconsulta.php'; 
    $reposicion = new Mconsulta();
?>

<?php 
    $consultarepo = $reposicion->consultar_rep();
    $consultareposicion = $reposicion->consultar_reposicion();
?>
<div class="row-fluid">
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Informe Reposicion</label>
<div class="spoiler">
<div class="info">

<table id="" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Reposiciones</th>
            </tr>
            <tr>
                <th>ID Reposicion</th>
                <th>Numero de Compra</th>
                <th>Fecha</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultarepo);$i++): ?>
                <tr>
                    <td data-title='ID Reposicion'><?= $consultarepo[$i]['idreposicion'] ?></td>
                    <td data-title='Numero de Compra'><?= $consultarepo[$i]['numero_compra'] ?></td>
                    <td data-title='Fecha'><?= $consultarepo[$i]['fecha'] ?></td>
                    <td data-title='Descripción'><?= $consultarepo[$i]['descripcion'] ?></td>                  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
         
</div>
</div>
</div>

<div class="row-fluid">
<input type="checkbox"  id="spoiler3" /> 
<label for="spoiler3" >Informe Reposición por Producto</label>
<div class="spoiler">
<div class="info">
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Reposiciones por Producto</th>
            </tr>
            <tr>
                <th>ID. reposicion</th>
                <th>Referencia</th>
                <th>Ingreso de Dinero</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultareposicion);$i++): ?>
                <tr>
                    <td data-title='ID. reposicion'><?= $consultareposicion[$i]['idreposicion'] ?></td>
                    <td data-title='Referencia'><?= $consultareposicion[$i]['referencia'] ?></td>
                    <td data-title='Ingreso Extra'>$ <?= number_format($consultareposicion[$i]['ingreso']) ?></td>
                    <td data-title='cantidad'><?= $consultareposicion[$i]['cantidad'] ?></td>
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