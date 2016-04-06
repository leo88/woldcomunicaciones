<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mventa extends Funciones
	{
		public function __construct(){}
		
        /*
		 *función para el ingreso de los datos de la tabla
		 */
		function insertar_venta($cliente, $fecha, $empleado)
		{
			$sql = "INSERT INTO tbventa (idcliente, fecha, idempleado)
						VALUES ('".$cliente."','".$fecha."','".$empleado."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla
		 */
		function  actualizar_venta($numero_venta,$cliente, $fecha, $empleado)
		{
			$sql = "UPDATE tbventa SET idcliente = '".$cliente."',fecha = '".$fecha."',idempleado = '".$empleado."' WHERE numero_venta = '".$numero_venta."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla
		 */
		/*function eliminar_venta($numero_venta)
		{
			$sql = "DELETE FROM `tbventa` WHERE `numero_venta` = '$numero_venta'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla
		 */
		function consultar_venta()
		{
			$sql = "SELECT * FROM tbventa ORDER BY numero_venta DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbventa	
         */
		function consultar_venta_id($numero_venta)
		{
			$sql = "SELECT * FROM tbventa WHERE numero_venta = '$numero_venta' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla cliente
		 */
		function sel_cliente()        
		{
            $sql = "SELECT * FROM `tbcliente`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla cliente
		 */
		function sel_cliente1($idcliente)
		{
			$sql = "SELECT * FROM tbcliente WHERE idcliente='".$idcliente."';";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla empleado
		 */
		function sel_empleado()        
		{
            $sql = "SELECT * FROM `tbempleado`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla empleado
		 */
		function sel_empleado1($idempleado)
		{
			$sql = "SELECT * FROM tbempleado WHERE idempleado='".$idempleado."';";
			return $this->SeleccionDatos($sql);
		}

	}