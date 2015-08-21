<?php
	
	include('modelo/mdevolucion.php');

	$devolucion = new Mdevolucion();

	$iddevoedit 	= isset($_POST['iddevolucion']) ? $_POST['iddevolucion'] : NULL;	
	$movimiento     = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$fecha          = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $motivo    		= isset($_POST['motivo']) ? $_POST['motivo'] : NULL;
    $numero_compra 	= isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
    $costo    		= isset($_POST['costo']) ? $_POST['costo'] : NULL;
	$iddevoeli  	= isset($_POST['iddevoeli']) ? $_POST['iddevoeli'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$iddevolucion   = isset($_GET['id']) ? $_GET['id'] : NULL;	

	$movimiento2= $devolucion->sel_movimiento();

	if ($movimiento && $fecha && $numero_compra && $costo && !$actu) 
	{
        
		$devolucion->insertar_devolucion($movimiento, $fecha, $motivo, $numero_compra, $costo);
	}

	if ($iddevoedit  && $fecha && !$actu) 
	{
		$devolucion->actualizar_devolucion($iddevoedit, $movimiento, $fecha, $motivo,$numero_compra, $costo);
	}

	if ($iddevolucion) 
	{
		$consultaedit = $devolucion->consultar_devolucion_id($iddevolucion);
	}

	if ($iddevoeli) 
	{
		$devolucion->eliminar_devolucion($iddevoeli);
	}

