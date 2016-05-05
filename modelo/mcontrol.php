<?php
	include("../controlador/conexion.php");
	
		session_start();
		$usuario = $_POST['user'];
		$pass = $_POST['pass'];

		usuario($usuario,$pass);
	
		function usuario($usuario,$pass)
		{
			$sql = "SELECT * FROM tbusuario WHERE username ='".$usuario."' AND password = '".$pass."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql,0);

			$contador = count($datos);
			//echo $datos[0]['nomusu'];

			if ($contador == 1) 
			{
				$_SESSION["usuario"] = $datos[0]['username'];
				$_SESSION["perfil"] = $datos[0]['tipo_user'];
				$_SESSION["autenticado"] = 10;
				echo "<script type='text/javascript'>window.location='../home.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>window.location='../index.php?errorusuario=si';</script>";
			}
		}
?>
