<?php
	
	include 'modelo/mreposicion.php';

	$reposicion = new Mreposicion();

	$idreposicionedit = isset($_POST['idreposicion']) ? $_POST['idreposicion'] : NULL;
	$numero_compra    = isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
    $fecha            = date('Y-m-d');
    $descripcion      = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	//$idreposicioneli  = isset($_POST['idreposicioneli']) ? $_POST['idreposicioneli'] : NULL;
	$actu             = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreposicion     = isset($_GET['id']) ? $_GET['id'] : NULL;	

    
	/*
		Comprobacion datos para insertar
	*/
	if ($numero_compra && $fecha && !$actu) 
	{
		$reposicion->insertar_reposicion($numero_compra, $fecha, $descripcion);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idreposicionedit && $numero_compra && $actu) 
	{
		$reposicion->actualizar_reposicion($idreposicionedit, $numero_compra, $descripcion);
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
	/*if ($idreposicioneli) 
	{
		$reposicion->eliminar_reposicion($idreposicioneli);
	}*/