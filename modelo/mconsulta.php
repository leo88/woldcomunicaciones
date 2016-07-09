<?php

	/*  
        *   @Version: V4.1 08/07/16
    */

	include 'controlador/conexion.php';
	include 'functions.php';

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

			$sql = "SELECT tbproducto.referencia AS referencia,tbproducto.nombre AS nombre,tbproducto.marca AS marca,sum(tbmovimiento.cantidad) AS SumaDecantidad,tbproducto.precio AS precio from (tbproducto join tbmovimiento on((tbproducto.referencia = tbmovimiento.referencia))) group by tbproducto.referencia,tbproducto.nombre,tbproducto.marca,tbproducto.precio";
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
		 *función para la consulta de los datos de la consulta reposicion
		 */
		function consultar_reposicion()
		{
			$sql = "SELECT * FROM csreposicion";
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
			$sql = "SELECT * FROM csventaproductos";
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
		/*
		 *función para la consulta de los datos de la consulta Utilidad por dia
		 */
		function consultar_utilidadtotaldia()
		{
			$sql = "SELECT * FROM csutilidadtotaldia";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la consulta Utilidad por mes
		 */
		function consultar_utilidadtotalmes()
		{
			$sql = "SELECT * FROM csutilidadtotalmes";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tbventa
		 */
		function consultar_venta_id()
		{
			$sql = "SELECT * FROM csventa ORDER BY numero_venta desc limit 1";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tbventa productos
		 */
		function consultar_ventaproducto_id($idventa)
		{
			$sql = "SELECT * FROM csventaproductos WHERE numero_venta = '$idventa'";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tbventa total
		 */
		function consultar_ventatotal_id($idventa)
		{
			$sql = "SELECT * FROM csventatotal WHERE numero_venta = '$idventa'";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos Servicio tecnico y st entregado
		 */
		function consultar_stcomparativo()
		{
			$sql = "SELECT st.numero_orden, st.nombre,st.marca,st.referencia, st.descripcion_st,st.observacion,st.precio_cliente,st.fecha,cl.nombre,emp.nombre, st.abono,(st.precio_cliente - st.abono) AS `saldo_pendiente`, sten.fecha AS fecha_cancel, sten.saldo_cancel AS saldo_cancelado from tbserviciotecnico as st INNER JOIN tbcliente as cl ON cl.idcliente = st.id_cliente INNER JOIN tbempleado as emp ON emp.idempleado = st.empleado LEFT JOIN tbservicioentregado as sten ON st.numero_orden = sten.numero_orden";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tbservicio tecnico
		 */
		function consultar_st_id()
		{
			$sql = "SELECT * FROM csst ORDER BY numero_orden desc limit 1";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tbreposicion
		 */
		function consultar_rep()
		{
			$sql = "SELECT * FROM tbreposicion ORDER BY idreposicion";
			return $this->SeleccionDatos($sql);
		}
	}
