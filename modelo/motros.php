<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Motros extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbotros
		 */
		function insertar_minutos($fecha, $descripcion, $salida, $entrada)
		{
			$sql = "INSERT INTO tbotros (fecha, descripcion, salida_total, entrada_total)
						VALUES ('".$fecha."','".$descripcion."','".$salida."','".$entrada."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbotros
		 */
		function  actualizar_minutos($idreporte,$fecha, $descripcion, $salida, $entrada)
		{
			$sql = "UPDATE tbotros SET fecha = '".$fecha."',descripcion = '".$descripcion."',salida_total = '".$salida."',entrada_total = '".$entrada."' WHERE idreporte = '".$idreporte."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbotros
		 */
		function eliminar_minutos($idreporte)
		{
			$sql = "DELETE FROM `tbotros` WHERE `idreporte` = '$idreporte'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbotros
		 */
		function consultar_minutos()
		{
			$sql = "SELECT * FROM tbotros";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbotros	
         */
		function consultar_minutos_id($idreporte)
		{
			$sql = "SELECT * FROM tbotros WHERE idreporte = '$idreporte' ";
			return $this -> SeleccionDatos($sql);
		}
	}
