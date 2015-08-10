<?php
	
	include('modelo/mempleado.php');

	$empleado = new Mempleado();

	$idempleedit   = isset($_POST['idemple']) ? $_POST['idemple'] : NULL;
	$idempleado    = isset($_POST['idempleado']) ? $_POST['idempleado'] : NULL;
	$nombre        = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$sueldo        = isset($_POST['sueldo']) ? $_POST['sueldo'] : NULL;
    $direccion     = isset($_POST['direccion']) ? $_POST['direccion'] : NULL;
    $ciudad        = isset($_POST['ciudad']) ? $_POST['ciudad'] : NULL;
    $telefono_emple= isset($_POST['telefono_emple']) ? $_POST['telefono_emple'] : NULL;
    $telefono_refe = isset($_POST['telefono_refe']) ? $_POST['telefono_refe'] : NULL;
    $email         = isset($_POST['email']) ? $_POST['email'] : NULL;
    $estado        = isset($_POST['estado']) ? $_POST['estado'] : NULL;
	$idempleeli    = isset($_POST['idempleeli ']) ? $_POST['idempleeli '] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idemple       = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*if ($idempleado && $nombre && $sueldo && $direccion && $ciudad && $telefono_emple && $telefono_refe && $estado && !$actu) 
	{
		$empleado->insertar_empleado($idempleado,$nombre,$sueldo,$direccion,$ciudad,$telefono_emple,$telefono_refe,$email,$estado);
	}*/
    if ($idempleado && $nombre && $sueldo && $direccion && $ciudad && $telefono_emple && $telefono_refe && $estado != "Inactivo" && !$actu) 
	{
		$empleado->insertar_empleado($idempleado,$nombre,$sueldo,$direccion,$ciudad,$telefono_emple,$telefono_refe,$email,$estado);
    }else{
        $empleado->insertar_empleado($idempleado,$nombre,$sueldo=0,$direccion,$ciudad,$telefono_emple,$telefono_refe,$email,$estado);
    }

	if ($idempleedit && $nombre && $sueldo && $direccion && $ciudad && $telefono_emple && $telefono_refe && $estado && $actu) 
	{
		$empleado->actualizar_empleado($idempleedit,$nombre,$sueldo,$direccion,$ciudad,$telefono_emple,$telefono_refe,$estado);
	}

	if ($idemple) 
	{
		$consultaedit = $empleado->consultar_empleado_id($idemple);
	}

	if ($idempleeli) 
	{
		$empleado->eliminar_empleado($idempleeli);
	}
