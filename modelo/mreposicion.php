<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mreposicion extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbreposicion
		 */
		function insertar_reposicion($movimiento, $numero_compra)
		{
			$sql = "INSERT INTO tbreposicion (movimiento, numero_compra)
						VALUES ('".$movimiento."','".$numero_compra."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbreposicion
		 */
		function  actualizar_reposicion($idreposicion,$movimiento,$numero_compra)
		{
			$sql = "UPDATE tbreposicion SET movimiento = '".$movimiento."',numero_compra = '".$numero_compra."' WHERE idreposicion = '".$idreposicion."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbreposicion
		 */
		function eliminar_reposicion($idreposicion)
		{
			$sql = "DELETE FROM `tbreposicion` WHERE `idreposicion` = '$idreposicion'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbreposicion
		 */
		function consultar_reposicion()
		{
			$sql = "SELECT * FROM `tbreposicion`";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbreposicion	
         */
		function consultar_reposicion_id($idreposicion)
		{
			$sql = "SELECT * FROM tbreposicion WHERE idreposicion = '$idreposicion' ";
			return $this -> SeleccionDatos($sql);
		}
	}
