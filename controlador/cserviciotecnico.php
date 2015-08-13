<?php
	
	include('modelo/mserviciotecnico.php');

	$serviciotecnico = new Mserviciotecnico();

	$idsertitecedit = isset($_POST['numor']) ? $_POST['numor'] : NULL;	
    $numero_orden   = isset($_POST['numero_orden']) ? $_POST['numero_orden'] : NULL;
	$nombre         = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$marca          = isset($_POST['marca']) ? $_POST['marca'] : NULL;
    $referencia     = isset($_POST['referencia']) ? $_POST['referencia'] : NULL;
    $observacion    = isset($_POST['observacion']) ? $_POST['observacion'] : NULL;
    $costo_st       = isset($_POST['costo_st']) ? $_POST['costo_st'] : NULL;
    $precio_cliente = isset($_POST['precio_cliente']) ? $_POST['precio_cliente'] : NULL;
    $fecha          = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $id_cliente     = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : NULL;
    $empleado       = isset($_POST['empleado']) ? $_POST['empleado'] : NULL;
    $abono          = isset($_POST['abono']) ? $_POST['abono'] : NULL;
    $descripcion_st = isset($_POST['descripcion_st']) ? $_POST['descripcion_st'] : NULL;
	$idserviteceli  = isset($_POST['idserviteceli']) ? $_POST['idserviteceli'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idservitec     = isset($_GET['id']) ? $_GET['id'] : NULL;	


	if ($nombre && $marca && $referencia && $observacion && $costo_st && $precio_cliente && $fecha &&                   $id_cliente && $empleado && $abono && $descripcion_st && !$actu) 
	{
        
		$serviciotecnico->insertar_serviciotecnico($numero_orden, $nombre, $marca, $referencia, $observacion,           $costo_st, $precio_cliente, $fecha, $id_cliente, $empleado, $abono, $descripcion_st);
	}

	if ($idsertitecedit && $numero_orden && $nombre && $marca && $referencia && $observacion && $costo_st &&             $precio_cliente && $fecha && $id_cliente && $empleado && $abono && $descripcion_st && !$actu) 
	{
		$serviciotecnico->actualizar_serviciotecnico($idsertitecedit, $nombre, $marca, $referencia,                     $observacion);
	}

	if ($idservitec) 
	{
		$consultaedit = $serviciotecnico->consultar_serviciotecnico_id($idservitec);
	}

	if ($idserviteceli) 
	{
		$serviciotecnico->eliminar_serviciotecnico($idserviteceli);
	}

