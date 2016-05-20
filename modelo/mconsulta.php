<?php

	/*  
        *   @Version: V3 20/05/16
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
			$sql = "SELECT * FROM csst ORDER BY numero_orden desc";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servicio tecnico entregado
		 */
		function consultar_stentregado()
		{
			$sql = "SELECT * FROM tbservicioentregado ORDER BY numero_orden DESC";
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
		function consultar_diatotalotros()
		{
			$sql = "SELECT * FROM csdiatotalotros";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servico tecnico por dia
		 */
		function consultar_diatotalst()
		{
			$sql = "SELECT * FROM csdiatotalst";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servico tecnico entregado por dia
		 */
		function consultar_diatotalstentreg()
		{
			$sql = "SELECT * FROM csdiatotalstentreg";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servico tecnico por mes
		 */
		function consultar_mestotalst()
		{
			$sql = "SELECT * FROM csmestotalst";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta servico tecnico entregado por mes
		 */
		function consultar_mestotalstentreg()
		{
			$sql = "SELECT * FROM csmestotalstentreg";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta ventas por dia
		 */
		function consultar_diatotalventas()
		{
			$sql = "SELECT * FROM csdiatotalventas";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta entradas por mes
		 */
		function consultar_mestotalentra()
		{
			$sql = "SELECT * FROM csmestotalentra";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta otros por mes
		 */
		function consultar_mestotalotros()
		{
			$sql = "SELECT * FROM csmestotalotros";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta salidas por mes
		 */
		function consultar_mestotalsale()
		{
			$sql = "SELECT * FROM csmestotalsale";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta ventas por mes
		 */
		function consultar_mestotalventas()
		{
			$sql = "SELECT * FROM csmestotalventas";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta entradas por dia
		 */
		function consultar_totalentradia()
		{
			$sql = "SELECT * FROM cstotalentradia";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta salidas por dia
		 */
		function consultar_totalsaledia()
		{
			$sql = "SELECT * FROM cstotalsaledia";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta venta
		 */
		function consultar_venta()
		{
			$sql = "SELECT * FROM csventa";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta venta por producto
		 */
		function consultar_ventaproducto()
		{
			$sql = "SELECT * FROM csventaproducto";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta venta total
		 */
		function consultar_ventatotal()
		{
			$sql = "SELECT * FROM csventatotal";
			return $this->SeleccionDatos($sql);
		}
	}
