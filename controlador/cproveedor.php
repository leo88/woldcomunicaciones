<?php
	
	include('modelo/mproveedor.php');

	$proveedor = new Mproveedor();

	$idproveedoredit   = isset($_POST['idproveedor']) ? $_POST['idproveedor'] : NULL;
	$nombre            = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$contacto          = isset($_POST['contacto']) ? $_POST['contacto'] : NULL;
	$telefono          = isset($_POST['telefono']) ? $_POST['telefono'] : NULL;
    $telefono2         = isset($_POST['telefono2']) ? $_POST['telefono2'] : NULL;
    $email             = isset($_POST['email']) ? $_POST['email'] : NULL;
    $descripcion       = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	$idproveedoreli    = isset($_POST['idproveedoreli']) ? $_POST['idproveedoreli'] : NULL;
	$actu              = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idproveedor       = isset($_GET['id']) ? $_GET['id'] : NULL;	

	if ($contacto && $telefono && $descripcion && !$actu) 
	{
		$proveedor->insertar_proveedor($nombre, $contacto, $telefono, $telefono2,$email, $descripcion);
	}
    
    if ($idproveedoredit && $nombre && $telefono && $telefono2 && $email && $actu) 
	{
		$proveedor->actualizar_proveedor($idproveedoredit,$nombre, $contacto, $telefono, $telefono2, $email, $descripcion);
	}

	if ($idproveedor) 
	{
		$consultaedit = $proveedor->consultar_proveedor_id($idproveedor);
	}

	if ($idproveedoreli) 
	{
		$proveedor->eliminar_proveedor($idproveedoreli);
	}