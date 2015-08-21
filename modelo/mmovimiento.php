<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mmovimiento extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbmovimiento
		 */
		function insertar_movimiento($motivo, $referencia, $cantidad)
		{
			$sql = "INSERT INTO tbmovimiento (motivo, referencia, cantidad)
						VALUES ('".$motivo."','".$referencia."','".$cantidad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbmovimiento
		 */
		function  actualizar_movimiento($idmovimiento,$motivo,$referencia,$cantidad)
		{
			$sql = "UPDATE tbmovimiento SET motivo = '".$motivo."',referencia = '".$referencia."',cantidad = '".$cantidad."' WHERE idmovimiento = '".$idmovimiento."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbmovimiento
		 */
		function eliminar_movimiento($idmovimiento)
		{
			$sql = "DELETE FROM `tbmovimiento` WHERE `idmovimiento` = '$idmovimiento'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento
		 */
		function consultar_movimiento()
		{
			$sql = "SELECT * FROM `tbmovimiento` ORDER BY idmovimiento DESC LIMIT 10";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbmovimiento	
         */
		function consultar_movimiento_id($idmovimiento)
		{
			$sql = "SELECT * FROM tbmovimiento WHERE idmovimiento = '$idmovimiento' ";
			return $this -> SeleccionDatos($sql);
		}
	}
