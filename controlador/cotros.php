<?php
	
	include('modelo/motros.php');

	$otros = new Motros();

	$idreporteedit = isset($_POST['idreporte']) ? $_POST['idreporte'] : NULL;
	$fecha       = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$descripcion   = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	$salida        = isset($_POST['salida']) ? $_POST['salida'] : NULL;
    $entrada       = isset($_POST['entrada']) ? $_POST['entrada'] : NULL;
    $sal        = isset($_POST['sale']) ? $_POST['sale'] : NULL;
    $ent       = isset($_POST['entra']) ? $_POST['entra'] : NULL;
	$idreporteeli  = isset($_POST['idreporteeli']) ? $_POST['idreporteeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreporte     = isset($_GET['id']) ? $_GET['id'] : NULL;	

    if ($sal) {
        $salida = $_POST['valor'];
        $entrada = "0";
    }
    if ($ent ) {
        $salida = "0";
        $entrada = $_POST['valor'];
    }
    

	if ($fecha && $descripcion && $salida && $entrada && !$actu) 
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