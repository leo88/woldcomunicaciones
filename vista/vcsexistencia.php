
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $existencia = new Mconsulta();
?>

<div class="etinfo">Informe Existencia</div>

<?php $consultexistencia = $existencia->consultar_existencia(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Existencias</th>
            </tr>
            <tr>
                <th>Referencia</th>
                <th>Tipo de dispositivo</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultexistencia);$i++): ?>
                <tr>
                    <td data-title='Referencia'><?= $consultexistencia[$i]['referencia'] ?></td>
                    <td data-title='Tipo de Dispositivo'><?= $consultexistencia[$i]['nombre'] ?></td>
                    <td data-title='Marca'><?= $consultexistencia[$i]['marca'] ?></td>
                    <td data-title='Cantidad'><?= $consultexistencia[$i]['SumaDecantidad'] ?></td>
                    <td data-title='Precio'>$ <?= number_format($consultexistencia[$i]['precio']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 

		    