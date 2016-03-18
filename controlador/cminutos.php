<?php
	
	include('modelo/mminutos.php');

	$minutos = new Mminutos();

	$idminutosedit = isset($_POST['idminutos']) ? $_POST['idminutos'] : NULL;
	$cantidad      = isset($_POST['cantidad']) ? $_POST['cantidad'] : NULL;
	$valor         = isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$descripcion   = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
    $fecha         = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$idminutoseli  = isset($_POST['idminutoseli']) ? $_POST['idminutoseli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idminutos     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobacion datos para insertar
	*/
	if ($cantidad && $valor && $descripcion && $fecha && !$actu) 
	{
		$minutos->insertar_minutos($cantidad, $valor, $descripcion, $fecha);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idminutosedit && $cantidad && $valor && $descripcion && $fecha && $actu) 
	{
		$minutos->actualizar_minutos($idminutosedit,$cantidad, $valor, $descripcion, $fecha);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idminutos) 
	{
		$consultaedit = $minutos->consultar_minutos_id($idminutos);
	}
	/*
		Eliminar el registro 
	*/
	if ($idminutoseli) 
	{
		$minutos->eliminar_minutos($idminutoseli);
	}