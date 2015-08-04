<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mminutos extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbminutos
		 */
		function insertar_minutos($cantidad, $valor, $descripcion, $fecha)
		{
			$sql = "INSERT INTO tbminutos (cantidad_min, valor_min, descripcion, fecha)
						VALUES ('".$cantidad."','".$valor."','".$descripcion."','".$fecha."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbminutos
		 */
		function  actualizar_minutos($idminutos,$cantidad,$valor,$descripcion,$fecha)
		{
			$sql = "UPDATE tbminutos SET cantidad_min = '".$cantidad."',valor_min = '".$valor."',descripcion = '".$descripcion."',fecha = '".$fecha."' WHERE idminutos = '".$idminutos."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbminutos
		 */
		function eliminar_minutos($idminutos)
		{
			$sql = "DELETE FROM `tbminutos` WHERE `idminutos` = '$idminutos'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbminutos
		 */
		function consultar_minutos()
		{
			$sql = "SELECT * FROM `tbminutos` ORDER BY idminutos DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbminutos	
         */
		function consultar_minutos_id($idminutos)
		{
			$sql = "SELECT * FROM tbminutos WHERE idminutos = '$idminutos' ";
			return $this -> SeleccionDatos($sql);
		}
	}
