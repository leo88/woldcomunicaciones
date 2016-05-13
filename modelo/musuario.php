<?php
	
	/*  
        *   @Version: V1 13/05/16
    */

	include('controlador/conexion.php');
	include('functions.php');

	class Musuario extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbusuario
		 */
		function insertar_usuario($username, $password, $tipo_user)
		{
			$sql = "INSERT INTO tbusuario (username, password, tipo_user)
						VALUES ('".$username."','".$password."','".$tipo_user."');";
			$this -> cons($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbusuario
		 */
		function consultar_usuario()
		{
			$sql = "SELECT * FROM tbusuario";
			return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbusuario	
         */
		function consultar_usuario_id($username)
		{
			$sql = "SELECT * FROM tbusuario WHERE username = '$username' ";
			return $this -> SeleccionDatos($sql);
		}
	}
