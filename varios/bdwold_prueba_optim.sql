-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-06-2016 a las 18:51:21
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdwold`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE IF NOT EXISTS `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `detalle` enum('Cliente','Local') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nombre`, `telefono`, `direccion`, `email`, `detalle`) VALUES
(1, 'Anonimo', '', '', '', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcompra`
--

CREATE TABLE IF NOT EXISTS `tbcompra` (
  `numero_compra` int(11) NOT NULL,
  `proveedor` varchar(12) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbdevolucionirregular`
--

CREATE TABLE IF NOT EXISTS `tbdevolucionirregular` (
  `iddevolucion` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `numero_compra` int(11) NOT NULL,
  `costo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleado`
--

CREATE TABLE IF NOT EXISTS `tbempleado` (
  `idempleado` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono_emple` varchar(20) NOT NULL,
  `telefono_refe` varchar(20) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `estado` varchar(8) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutos`
--

CREATE TABLE IF NOT EXISTS `tbminutos` (
  `idminutos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `utilidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutosvalor`
--

CREATE TABLE IF NOT EXISTS `tbminutosvalor` (
  `idminutosvalor` int(11) NOT NULL,
  `costo_compra` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbminutosvalor`
--

INSERT INTO `tbminutosvalor` (`idminutosvalor`, `costo_compra`, `valor_venta`) VALUES
(1, 50, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmovimiento`
--

CREATE TABLE IF NOT EXISTS `tbmovimiento` (
  `idmovimiento` int(11) NOT NULL,
  `idgeneral` int(11) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbotros`
--

CREATE TABLE IF NOT EXISTS `tbotros` (
  `idreporte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `salida_total` int(11) NOT NULL,
  `entrada_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproducto`
--

CREATE TABLE IF NOT EXISTS `tbproducto` (
  `referencia` varchar(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproveedor`
--

CREATE TABLE IF NOT EXISTS `tbproveedor` (
  `idproveedor` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contacto` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `descripcion` enum('Proveedor','Local') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecargas`
--

CREATE TABLE IF NOT EXISTS `tbrecargas` (
  `idrecarga` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `venta_recarga` int(11) NOT NULL,
  `utilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbreposicion`
--

CREATE TABLE IF NOT EXISTS `tbreposicion` (
  `idreposicion` int(11) NOT NULL,
  `movimiento` int(11) NOT NULL,
  `numero_compra` int(11) NOT NULL,
  `fecha` date NOT NULL COMMENT 'fecha en la cual se hizo la reposiciòn'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicioentregado`
--

CREATE TABLE IF NOT EXISTS `tbservicioentregado` (
  `numero_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `saldo_cancel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserviciotecnico`
--

CREATE TABLE IF NOT EXISTS `tbserviciotecnico` (
  `numero_orden` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `descripcion_st` varchar(100) NOT NULL,
  `observacion` varchar(50) DEFAULT NULL,
  `costo_st` int(11) NOT NULL,
  `precio_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `empleado` varchar(10) NOT NULL,
  `abono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo_user` enum('Administrador','Vendedor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`username`, `password`, `tipo_user`) VALUES
('Administrador', '2793e6065e148464014eac1d0d21afa49ba36812', 'Administrador'),
('vendedor', '88d6818710e371b461efff33d271e0d2fb6ccf47', 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbventa`
--

CREATE TABLE IF NOT EXISTS `tbventa` (
  `numero_venta` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idempleado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD PRIMARY KEY (`numero_compra`), ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
  ADD PRIMARY KEY (`iddevolucion`), ADD KEY `movimiento` (`movimiento`,`numero_compra`);

--
-- Indices de la tabla `tbempleado`
--
ALTER TABLE `tbempleado`
  ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  ADD PRIMARY KEY (`idminutos`);

--
-- Indices de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  ADD PRIMARY KEY (`idminutosvalor`);

--
-- Indices de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  ADD PRIMARY KEY (`idmovimiento`), ADD KEY `referencia` (`referencia`), ADD KEY `idgeneral` (`idgeneral`);

--
-- Indices de la tabla `tbotros`
--
ALTER TABLE `tbotros`
  ADD PRIMARY KEY (`idreporte`);

--
-- Indices de la tabla `tbproducto`
--
ALTER TABLE `tbproducto`
  ADD PRIMARY KEY (`referencia`);

--
-- Indices de la tabla `tbproveedor`
--
ALTER TABLE `tbproveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `tbrecargas`
--
ALTER TABLE `tbrecargas`
  ADD PRIMARY KEY (`idrecarga`);

--
-- Indices de la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
  ADD PRIMARY KEY (`idreposicion`), ADD KEY `movimiento` (`movimiento`);

--
-- Indices de la tabla `tbservicioentregado`
--
ALTER TABLE `tbservicioentregado`
  ADD PRIMARY KEY (`numero_orden`);

--
-- Indices de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  ADD PRIMARY KEY (`numero_orden`), ADD KEY `nombre` (`nombre`), ADD KEY `id_cliente` (`id_cliente`), ADD KEY `empleado` (`empleado`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  ADD PRIMARY KEY (`numero_venta`), ADD KEY `idempleado` (`idempleado`,`idcliente`), ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `numero_compra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
  MODIFY `iddevolucion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  MODIFY `idminutos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  MODIFY `idminutosvalor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  MODIFY `idmovimiento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbotros`
--
ALTER TABLE `tbotros`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbrecargas`
--
ALTER TABLE `tbrecargas`
  MODIFY `idrecarga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
  MODIFY `idreposicion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  MODIFY `numero_orden` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  MODIFY `numero_venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
ADD CONSTRAINT `tbcompra_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `tbproveedor` (`idproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbdevolucionirregular`
--
ALTER TABLE `tbdevolucionirregular`
ADD CONSTRAINT `tbdevolucionirregular_ibfk_1` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
ADD CONSTRAINT `tbmovimiento_ibfk_1` FOREIGN KEY (`referencia`) REFERENCES `tbproducto` (`referencia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
ADD CONSTRAINT `tbreposicion_ibfk_1` FOREIGN KEY (`movimiento`) REFERENCES `tbmovimiento` (`idmovimiento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbservicioentregado`
--
ALTER TABLE `tbservicioentregado`
ADD CONSTRAINT `tbservicioentregado_ibfk_1` FOREIGN KEY (`numero_orden`) REFERENCES `tbserviciotecnico` (`numero_orden`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
ADD CONSTRAINT `tbserviciotecnico_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tbcliente` (`idcliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbserviciotecnico_ibfk_2` FOREIGN KEY (`empleado`) REFERENCES `tbempleado` (`idempleado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbventa`
--
ALTER TABLE `tbventa`
ADD CONSTRAINT `tbventa_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `tbcliente` (`idcliente`) ON UPDATE CASCADE,
ADD CONSTRAINT `tbventa_ibfk_2` FOREIGN KEY (`idempleado`) REFERENCES `tbempleado` (`idempleado`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
