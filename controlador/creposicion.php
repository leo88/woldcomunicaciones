<?php
	
	include('modelo/mreposicion.php');

	$reposicion = new Mreposicion();

	$idreposicionedit = isset($_POST['idreposicion']) ? $_POST['idreposicion'] : NULL;
	$movimiento       = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$numero_compra    = isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
	$idreposicioneli  = isset($_POST['idreposicioneli']) ? $_POST['idreposicioneli'] : NULL;
	$actu             = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreposicion     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobacion datos para insertar
	*/
	if ($movimiento && $numero_compra && !$actu) 
	{
		$reposicion->insertar_reposicion($movimiento, $numero_compra);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idreposicionedit && $movimiento && $numero_compra && $actu) 
	{
		$reposicion->actualizar_reposicion($idreposicionedit,$movimiento, $numero_compra);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idreposicion) 
	{
		$consultaedit = $reposicion->consultar_reposicion_id($idreposicion);
	}
	/*
		Eliminar el registro 
	*/
	if ($idreposicioneli) 
	{
		$reposicion->eliminar_reposicion($idreposicioneli);
	}