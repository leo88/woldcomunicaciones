<?php
	
	/*  
        *   @Version: V1 13/05/16
    */

	include('modelo/musuario.php');

	$usuario = new Musuario();

	$username      = isset($_POST['username']) ? $_POST['username'] : NULL;
	$password      = isset($_POST['password']) ? $_POST['password'] : NULL;
	$tipo_user     = isset($_POST['tipo_user']) ? $_POST['tipo_user'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idusuario     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobar si las variables de username y tipo_user tienen datos, de ser asi se procede a enviarle los parametros
		a la funcion insertar_usuario
	*/
	if ($username && $password && $tipo_user && !$actu) 
	{
		$usuario->insertar_usuario($username, sha1($password), $tipo_user);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idusuario) 
	{
		$consultaedit = $usuario->consultar_usuario_id($idusuario);
	}
