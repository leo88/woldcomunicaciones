<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $contabilidad = new Mconsulta();
?>
<?php $consultadiaotros     = $contabilidad->consultar_diatotalotros(); 
    $consultadiaentra       = $contabilidad->consultar_totalentradia();
    $consultadiasale        = $contabilidad->consultar_totalsaledia();
    $consultadiautilidad    = $contabilidad->consultar_utilidadtotaldia(); 
    $consultamesotros       = $contabilidad->consultar_mestotalotros(); 
    $consultamesentra       = $contabilidad->consultar_mestotalentra(); 
    $consultamessale        = $contabilidad->consultar_mestotalsale();
    $consultamesutilidad    = $contabilidad->consultar_utilidadtotalmes();
?>
<div class="row-fluid">
<input type="checkbox"  id="spoiler2" /> 
<label for="spoiler2" >Informe Ingresos y Egresos varios por dia</label>
<div class="spoiler">
<div class="info">

    <table id="" class="display" cellspacing="0" width="100%">
	    <thead>
            <tr>
                <th colspan="12">Ingresos y Egresos varios por dia</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Egresos</th>
                <th>Ingresos</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultadiaotros);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultadiaotros[$i]['fecha'] ?></td>
                    <td data-title='Egresos'>$ <?= number_format($consultadiaotros[$i]['SumaDesalida_total']) ?></td>
                    <td data-title='Ingresos'>$ <?= number_format($consultadiaotros[$i]['SumaDeentrada_total']) ?></td>
            <?php endfor; ?>
        </tbody>
    </table>	
</div>
</div>
</div>

<div class="row-fluid">
<input type="checkbox"  id="spoiler6" /> 
<label for="spoiler6" >Informe Ingresos y Egresos varios por Mes</label>
<div class="spoiler">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Ingresos y Egresos varios por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Egresos</th>
                <th>Ingresos</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamesotros);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultamesotros[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultamesotros[$i]['year'] ?></td>
                    <td data-title='Egresos'>$ <?= number_format($consultamesotros[$i]['MESTOTALSALIDA']) ?></td>
                    <td data-title='Ingresos'>$ <?= number_format($consultamesotros[$i]['MESTOTALENTRA']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>  
</div>
</div>
</div>

<div class="row-fluid">
<input type="checkbox"  id="spoiler3" /> 
<label for="spoiler3" >Informe Caja Día</label>
<div class="spoiler">
<div class="span4">
<div class="info"> 
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Ingresos en el Día</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Ingresos</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultadiaentra);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultadiaentra[$i]['fecha'] ?></td>
                    <td data-title='Ingresos'>$ <?= number_format($consultadiaentra[$i]['VAL_POSITIVO']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>

    </table>
</div>
</div>

<div class="span4">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Egresos en el Día</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Egresos</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultadiasale);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultadiasale[$i]['fecha'] ?></td>
                    <td data-title='Costo Servicio Técnico'>$ <?= number_format($consultadiasale[$i]['VAL_NEGATIVO']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>  
</div>
</div>  

<div class="span4">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de la Utilidad por Día</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Utilidad</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultadiautilidad);$i++): ?>
                <tr>
                    <td data-title='Fecha'><?= $consultadiautilidad[$i]['fecha'] ?></td>
                    <td data-title='Utilidad'>$ <?= number_format($consultadiautilidad[$i]['UTILIDADDIA']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>                   
</div>
</div>
</div>     
</div>

<div class="row-fluid">
<input type="checkbox"  id="spoiler7" /> 
<label for="spoiler7" >Informe Caja Mes</label>
<div class="spoiler">

<div class="span4">
<div class="info">
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado Ingresos totales por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Ingresos</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamesentra);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultamesentra[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultamesentra[$i]['year'] ?></td>
                    <td data-title='Ingresos'>$ <?= number_format($consultamesentra[$i]['TOTALMESENTRA']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
</div>
</div>

<div class="span4">
<div class="info">  
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado de Egresos totales por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Egresos</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamessale);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultamessale[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultamessale[$i]['year'] ?></td>
                    <td data-title='Costo Servico'>$ <?= number_format($consultamessale[$i]['TOTALMESSALE']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>                   
</div>
</div>   

<div class="span4">
<div class="info">
     <table id="" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th colspan="12">Listado Utilidad total por Mes</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Utilidad</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamesutilidad);$i++): ?>
                <tr>
                    <td data-title='Mes'><?= $consultamesutilidad[$i]['Mes'] ?></td>
                    <td data-title='Año'><?= $consultamesutilidad[$i]['year'] ?></td>
                    <td data-title='Ingresos'>$ <?= number_format($consultamesutilidad[$i]['UTILIDADTOTALMES']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
</div>
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