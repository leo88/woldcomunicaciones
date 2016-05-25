<?php 
    include('modelo/mconsulta.php'); 
    $st = new Mconsulta();
?>
<link rel="stylesheet" href="css/impreso.css"/>
<link rel="stylesheet" href="css/impreso.css" media="print"/>
<?php 
$consultast          = $st->consultar_st_id();
$idprint             = $consultast[0]['numero_orden'];
//echo $idprint;

?>
   <div id="logo">WOLD
   <div id="logob">COMUNICACIONES</div>
   <div id="nit">Nit. 81.720.483-8</div>
   </div>
   
    <table id="encabezado"  cellspacing="0" width="100%">
      <thead>
            <tr>
                <th>Wilson Diaz Tecnico Profecional <br> woldcomunicaciones@hotmail.com</th>              
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultast);$i++): ?>
                <tr>
                    <td>No. Orden: <?= $consultast[$i]['numero_orden'] ?></td>
                </tr><tr>    
                    <td>Fecha: <?= $consultast[$i]['fecha'] ?></td>
                </tr><tr>
                    <td>Tipo Dispositivo: <?= $consultast[$i]['nombre'] ?></td>
                </tr><tr>
                    <td>Marca: <?= $consultast[$i]['marca'] ?></td>
                </tr><tr>
                    <td>Referencia: <?= $consultast[$i]['referencia'] ?></td> 
                </tr><tr>
                    <td>Descripcion: <?= $consultast[$i]['descripcion_st'] ?></td>
                </tr><tr>
                    <td>Observacion: <?= $consultast[$i]['observacion'] ?></td>
                </tr><tr>
                    <td>Costo: <?= number_format($consultast[$i]['precio_cliente']) ?></td>
                </tr><tr>
                    <td>Abono: <?= number_format($consultast[$i]['abono']) ?></td>
                </tr><tr>
                    <td>Saldo: <?= number_format($consultast[$i]['SALDO_PENDIENTE']) ?></td>                    
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
<div id="clausula">
    Nota: Después de 30 días WOLD Comunicaciones cobrará $200 diarios por bodegaje y NO se hace responsable por ningún aparato
    y automaticamente al mismo procedera a rematarlo, para poder recuperar el costo de revision, reparacion y repuestos. WOLD Comunicaciones NO ofrece ninguna clase de garantia por repuestos, ya que estos se compran sin garantia. La garantia solo incluye 
    la mano de obra y el tiempo estipulado por el tecnico. WOLD Comunicaciones NO responde por perdidas ocasionales causadas por incendios o casos fortuitos. Este recibo se asimila en todos sus efectos a una letra de cambio (segun Art. 3 y 2057 del Codigo de Comercio) 
</div>
<div id="pie">
    Cra 13 No. 10-110 <br>
    Tel. 861 25 05 <br>
    Cel. 313 382 32 55
</div>
<button id="boton" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-print" onclick="javascript:window.print()"> Imprimir</span></button> 
