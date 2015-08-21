<?php
	
	include('modelo/mmovimiento.php');

	$movimiento = new Mmovimiento();

	$idmovimientoedit = isset($_POST['idmovimiento']) ? $_POST['idmovimiento'] : NULL;
	$motivo      = isset($_POST['motivo']) ? $_POST['motivo'] : NULL;
	$referencia         = isset($_POST['referencia']) ? $_POST['referencia'] : NULL;
	$cantidad   = isset($_POST['cantidad']) ? $_POST['cantidad'] : NULL;
   	$idmovimientoeli  = isset($_POST['idmovimientoeli']) ? $_POST['idmovimientoeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idmovimiento     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	if ($motivo && $referencia && $cantidad && !$actu) 
	{
		$movimiento->insertar_movimiento($motivo, $referencia, $cantidad);
	}
    
    if ($idmovimientoedit && $motivo && $referencia && $cantidad && $actu) 
	{
		$movimiento->actualizar_movimiento($idmovimientoedit,$motivo, $referencia, $cantidad);
	}

	if ($idmovimiento) 
	{
		$consultaedit = $movimiento->consultar_movimiento_id($idmovimiento);
	}

	if ($idmovimientoeli) 
	{
		$movimiento->eliminar_movimiento($idmovimientoeli);
	}