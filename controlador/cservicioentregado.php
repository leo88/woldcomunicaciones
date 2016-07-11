<?php
	
	include 'modelo/mservicioentregado.php';

	$servicioentregado = new Mservicioentregado();

	$idserventedit = isset($_POST['refe']) ? $_POST['refe'] : NULL;
	$numero_orden  = isset($_POST['numero_orden']) ? $_POST['numero_orden'] : NULL;
	$fecha         = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$saldo_cancel  = isset($_POST['saldo_cancel']) ? $_POST['saldo_cancel'] : NULL;
    $tecnico       = isset($_POST['tecnico']) ? $_POST['tecnico'] : NULL;
    $idserventeli  = isset($_POST['idserventeli']) ? $_POST['idserventeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idservent     = isset($_GET['id']) ? $_GET['id'] : NULL;	
    
    /*
		Variable para traer los datos del desplegable
	*/
    $numorden2 = $servicioentregado->sel_orden();
  
    /*if ($saldo_cancel == NULL){
        $saldo_cancel = "0";
    }*/

    /*
		Comprobacion datos para insertar
	*/
	if ($numero_orden && $fecha && $tecnico && !$actu) 
	{
        
		$servicioentregado->insertar_servicioentregado($numero_orden,$fecha,$saldo_cancel,$tecnico);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idserventedit && $precio && $tecnico && $actu) 
	{
		$servicioentregado->actualizar_servicioentregado($idserventedit,$precio,$tecnico);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idservent) 
	{
		$consultaedit = $servicioentregado->consultar_servicioentregado_id($idservent);
	}
	/*
		Eliminar el registro 
	*/
	if ($idserventeli) 
	{
		$servicioentregado->eliminar_servicioentregado($idserventeli);
	}
