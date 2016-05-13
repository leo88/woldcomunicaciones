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
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio</th>                
            </tr>
        </thead>
        <tbody>
            <?php while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                    <td data-title='ID'><?php echo $row['referencia'];?></td>
                    <td data-title='Nombre'><?php echo $row['nombre'];?></td>
                    <td data-title='Marca'><?php echo $row['marca'];?></td>
                    <td data-title='Cantidad'><?php echo $row['SumaDecantidad'];?></td>
                    <td data-title='Precio'><?php echo $row['precio'];?></td> 
                </tr>
           <?php } ?>            
        </tbody>
    </table>	
    </div>
    </div><!--/row-->
<br/><br/>  

		    