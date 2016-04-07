<?php
	
	include('modelo/mminutos.php');

	$minutos = new Mminutos();

	$idminutosedit 	= isset($_POST['idminutos']) ? $_POST['idminutos'] : NULL;
	$fecha      	= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$compra         = isset($_POST['compra']) ? $_POST['compra'] : NULL;
	$venta   		= isset($_POST['venta']) ? $_POST['venta'] : NULL;
    $utilidad       = isset($_POST['utilidad']) ? $_POST['utilidad'] : NULL;
	$idminutoseli  	= isset($_POST['idminutoseli']) ? $_POST['idminutoseli'] : NULL;
	$actu          	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idminutos     	= isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Variables para traer los datos de los desplegables
	*/
	$compra2= $minutos->consultar_minutos_costo();
	$valor2= $minutos->consultar_minutos_valor();

	/*
		Comprobacion datos para insertar
	*/
	if ($fecha && $compra && $venta && $utilidad && !$actu) 
	{
		$minutos->insertar_minutos($fecha, $compra, $venta, $utilidad);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idminutosedit && $fecha && $compra && $venta && $utilidad && $actu) 
	{
		$minutos->actualizar_minutos($idminutosedit,$fecha, $compra, $venta, $utilidad);
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