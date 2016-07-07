<?php

	include_once 'controlador/conexion.php';
	include_once 'functions.php';

	class Mmovimiento extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbmovimiento
		 */
		function insertar_movimiento($idgeneral, $motivo, $referencia, $cantidad, $valor)
		{
			$sql = "INSERT INTO tbmovimiento (idgeneral, motivo, referencia, cantidad, valor)
						VALUES ('".$idgeneral."','".$motivo."','".$referencia."','".$cantidad."','".$valor."');";
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
		 *función para la consulta de los datos de la tabla tbmovimiento con un limite de 10 registros
		 */
		function consultar_movimiento()
		{
			$sql = "SELECT * FROM `tbmovimiento` ORDER BY idmovimiento DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento con un limite de venta
		 */
		function consultar_movimiento_venta()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE motivo = 'Venta' ORDER BY idmovimiento DESC";
			 return $this->SeleccionDatos($sql);
		}
        /*
		 *función para la consulta de los datos de la tabla tbmovimiento por COMPRA limitandolo a un solo registro
		 */
		function consultar_movimiento_c($numero_compra)
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE motivo = 'Compra' AND idgeneral = '$numero_compra'";
			 return $this->SeleccionDatos($sql);
		}
        /*
		 *función para la consulta de los datos de la tabla tbmovimiento por REPOSICION limitandolo a un solo registro
		 */
		function consultar_movimiento_r($idreposicion)
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE motivo = 'Reposicion' AND idgeneral = '$idreposicion'";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento por DEVOLUCION limitandolo a un solo registro
		 */
		function consultar_movimiento_d()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE `motivo` = 'Devolución' ORDER BY idmovimiento DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento por VENTA limitandolo a un solo registro
		 */
		function consultar_movimiento_v($numero_venta)
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE motivo = 'Venta' AND idgeneral = '$numero_venta'";
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
		 /*
		 	Función para la seleccion del registro mas reciente de la tabla producto
		 */
		function sel_producto()        
		{
            $sql = "SELECT * FROM `tbproducto`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla producto
		 */
		function sel_producto1($referencia)
		{
			$sql = "SELECT * FROM tbproducto WHERE referencia='".$referencia."';";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del ultimo registro de la tabla venta
		 */
		function sel_numeroventa()        
		{
            $sql = "SELECT * FROM `tbventa` order by numero_venta desc limit 1" ;
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion del ultimo registro de la tabla Compra
		 */
		function sel_numerocompra()        
		{
            $sql = "SELECT * FROM `tbcompra` order by numero_compra desc limit 1" ;
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion del ultimo registro de la tabla Reposicion
		 */
		function sel_numerorepo()        
		{
            $sql = "SELECT * FROM `tbreposicion` order by idreposicion desc limit 1" ;
            return $this->SeleccionDatos($sql);
        }
	}
