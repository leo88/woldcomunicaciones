<?php
	
	include('modelo/mcompra.php');

	$compra = new Mcompra();

	$idcompraedit 	= isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;	
	$proveedor      = isset($_POST['proveedor']) ? $_POST['proveedor'] : NULL;
	$fecha          = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$idcompraeli 	= isset($_POST['idcompraeli']) ? $_POST['idcompraeli'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$numero_compra  = isset($_GET['id']) ? $_GET['id'] : NULL;	

	$proveedor2= $compra->sel_proveedor();

	if ($proveedor && $fecha && !$actu) 
	{
        
		$compra->insertar_compra($proveedor, $fecha);
	}

	if ($idcompraedit && $proveedor && $fecha && !$actu) 
	{
		$compra->actualizar_compra($idcompraedit, $proveedor, $fecha);
	}

	if ($numero_compra) 
	{
		$consultaedit = $compra->consultar_compra_id($numero_compra);
	}

	if ($idcompraeli) 
	{
		$compra->eliminar_compra($idcompraeli);
	}

