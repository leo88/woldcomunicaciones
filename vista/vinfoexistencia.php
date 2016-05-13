<?php
	require('conexion.php');	
	$query="SELECT *  FROM csexistencia";
	$resultado=$mysqli->query($query);	
?>
    <div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Clientes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Detalle</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacliente);$i++): ?>
                <tr>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                    <td data-title='ID'></td>
                                
                   
                </tr>
            <?php endfor; ?>
            
        </tbody>
    </table>	
    </div>
    </div><!--/row-->
<br/><br/>  

		    