<?php
	
	include('modelo/mcompraproduc.php');

	$compraproduc = new Mcompraproduc();

	$idcompraproducedit = isset($_POST['numero_comp']) ? $_POST['numero_comp'] : NULL;	
	$numero_compra      = isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
	$movimiento         = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$valor          	= isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$idcompraproduceli 	= isset($_POST['idcompraproduceli']) ? $_POST['idcompraproduceli'] : NULL;
	$actu           	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$id_compra  		= isset($_GET['id']) ? $_GET['id'] : NULL;	

	$numero_compra2= $compraproduc->sel_numerocompra();
	$movimiento2= $compraproduc->sel_movimiento();

	if ($numero_compra && $movimiento && $valor && !$actu) 
	{
        
		$compraproduc->insertar_compraproduc($numero_compra, $movimiento, $valor);
	}

	if ($idcompraproducedit && $numero_compra && $movimiento && !$actu) 
	{
		$compraproduc->actualizar_compraproduc($idcompraproducedit, $numero_compra, $movimiento, $valor);
	}

	if ($id_compra) 
	{
		$consultaedit = $compraproduc->consultar_compraproduc_id($id_compra);
	}

	if ($idcompraproduceli) 
	{
		$compraproduc->eliminar_compraproduc($idcompraproduceli);
	}
