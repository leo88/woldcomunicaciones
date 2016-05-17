<?php

	/*  
        *   @Version: V2 17/05/16
    */

	include('controlador/conexion.php');
	include('functions.php');

	class Mconsulta extends Funciones
	{
		public function __construct()
		{

		}
		/*
		 *función para la consulta de los datos de la consulta existencia
		 */
		function consultar_existencia()
		{

			$sql = "SELECT `bdwold`.`tbproducto`.`referencia` AS `referencia`,`bdwold`.`tbproducto`.`nombre` AS `nombre`,`bdwold`.`tbproducto`.`marca` AS `marca`,sum(`bdwold`.`tbmovimiento`.`cantidad`) AS `SumaDecantidad`,`bdwold`.`tbproducto`.`precio` AS `precio` from (`bdwold`.`tbproducto` join `bdwold`.`tbmovimiento` on((`bdwold`.`tbproducto`.`referencia` = `bdwold`.`tbmovimiento`.`referencia`))) group by `bdwold`.`tbproducto`.`referencia`,`bdwold`.`tbproducto`.`nombre`,`bdwold`.`tbproducto`.`marca`,`bdwold`.`tbproducto`.`precio`";
			return $this->SeleccionDatos($sql);

			/*$sql = "SELECT * FROM csexistencia";
			return $this->SeleccionDatos($sql);*/
		}
		/*
		 *función para la consulta de los datos de la consulta servicio tecnico
		 */
		function consultar_st()
		{
			$sql = "SELECT * FROM csst";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servicio tecnico entregado
		 */
		function consultar_stentregado()
		{
			$sql = "SELECT * FROM csdiatotalstentreg";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta compra
		 */
		function consultar_compra()
		{
			$sql = "SELECT * FROM cscompra";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta compra productos
		 */
		function consultar_compraproducto()
		{
			$sql = "SELECT * FROM cscompraproductos";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta compra total
		 */
		function consultar_compratotal()
		{
			$sql = "SELECT * FROM cscompratotal";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta devolucion
		 */
		function consultar_devolucion()
		{
			$sql = "SELECT * FROM csdevolucion";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta compra dia total
		 */
		function consultar_diacompratotal()
		{
			$sql = "SELECT * FROM csdiatotalcompra";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta otros por dia
		 */
		function consultar_cdiatotalotros()
		{
			$sql = "SELECT * FROM csdiatotalotros";
			return $this->SeleccionDatos($sql);
		}
		
	}
