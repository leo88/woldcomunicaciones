<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mcliente extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbcliente
		 */
		function insertar_cliente($nombreciudad, $numerohab, $estadioprinc)
		{
			$sql = "INSERT INTO tbciudad (nombreciudad, numerohab, estadioprinc)
						VALUES ('".$nombreciudad."','".$numerohab."','".$estadioprinc."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbcliente
		 */
		function  actualizar_cliente($idciudad, $nombreciudad, $numerohab, $estadioprinc)
		{
			$sql = "UPDATE tbciudad SET  nombreciudad = '".$nombreciudad."', numerohab = '".$numerohab."', estadioprinc = '".$estadioprinc."' WHERE idciudad = '".$idciudad."';";
			$this -> cons($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbcliente
		 */
		function eliminar_cliente($idciudad)
		{
			$sql = "DELETE FROM `tbciudad` WHERE `idciudad` = '$idciudad'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbcliente
		 */
		function consultar_cliente()
		{
			$sql = "SELECT * FROM tbciudad";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbciudad	
         */
		function consultar_cliente_id($idciudad)
		{
			sql = "SELECT * FROM cspruba WHERE idproduc = '$idproduc' ";
			return $this -> SeleccionDatos($sql);
		}
	}
