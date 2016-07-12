<?php

	include 'controlador/conexion.php';
	include 'functions.php';

	class Mservicioentregado extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbservicioentregado
		 */
		function insertar_servicioentregado($numero_orden, $fecha, $saldo_cancel, $tecnico)
		{
			$sql = "INSERT INTO tbservicioentregado (numero_orden, fecha, saldo_cancel, tecnico)
						VALUES ('".$numero_orden."','".$fecha."','".$saldo_cancel."','".$tecnico."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbservicioentregado
		 */
		function actualizar_servicioentregado($numero_orden,$fecha,$tecnico)
		{
			$sql = "UPDATE tbservicioentregado SET precio = '".$precio."', tecnico = '".$tecnico."' WHERE $numero_orden = '".$numero_orden."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbservicioentregado
		 */
		function eliminar_servicioentregado($numero_orden)
		{
			$sql = "DELETE FROM `tbservicioentregado` WHERE `$numero_orden` = '$numero_orden'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbservicioentregado
		 */
		function consultar_servicioentregado()
		{
			$sql = "SELECT * FROM tbservicioentregado ORDER BY numero_orden DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbservicioentregado	
         */
		function consultar_servicioentregado_id($numero_orden)
		{
			$sql = "SELECT * FROM tbservicioentregado WHERE $numero_orden = '$numero_orden' ";
			return $this -> SeleccionDatos($sql);
		}
        /*
		 	Función para la seleccion de la tabla servicio tecnico
		 */
		function sel_orden()        
		{
            $sql = "SELECT * FROM `tbserviciotecnico`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla servicio tecnico
		 */
		function sel_orden1($numero_orden)
		{
			$sql = "SELECT * FROM tbserviciotecnico WHERE numero_orden='".$numero_orden."';";
			return $this->SeleccionDatos($sql);
		}       
        
	}
