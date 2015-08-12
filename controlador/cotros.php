<?php
	
	include('modelo/motros.php');

	$otros = new Motros();

	$idreporteedit = isset($_POST['idreporte']) ? $_POST['idreporte'] : NULL;
	$fecha       = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$descripcion   = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	$salida        = isset($_POST['valor']) ? $_POST['valor'] : NULL;
    $entrada       = isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$idreporteeli  = isset($_POST['idreporteeli']) ? $_POST['idreporteeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreporte     = isset($_GET['id']) ? $_GET['id'] : NULL;	

    if (isset($_POST['Sale'])) {
    //Out action
    	$entrada=0;
	}
	if (isset($_POST['Entra'])) {
    //In action
		$salida=0;
	}

	if ($fecha && $descripcion && !$actu) 
	{
		$otros->insertar_minutos($fecha, $descripcion, $salida, $entrada);
	}
    
    if ($idreporteedit && $fecha && $descripcion && $salida && $entrada && $actu) 
	{
		$otros->actualizar_minutos($idreporteedit,$fecha, $descripcion, $salida, $entrada);
	}

	if ($idreporte) 
	{
		$consultaedit = $otros->consultar_minutos_id($idreporte);
	}

	if ($idreporteeli) 
	{
		$otros->eliminar_minutos($idreporteeli);
	}