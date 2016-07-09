-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2016 a las 19:24:07
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdwoldbetav1`
--

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompra`
--
CREATE TABLE `cscompra` (
`numero_compra` int(11)
,`fecha` date
,`proveedor` varchar(12)
,`nombre` varchar(50)
,`descripcion` enum('Proveedor','Local')
,`telefono` varchar(20)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompraproductos`
--
CREATE TABLE `cscompraproductos` (
`numero_compra` int(11)
,`referencia` varchar(20)
,`valor` int(11)
,`cantidad` int(11)
,`SUBTOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cscompratotal`
--
CREATE TABLE `cscompratotal` (
`numero_compra` int(11)
,`fecha` date
,`SumaDeSUBTOTAL` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalcompra`
--
CREATE TABLE `csdiatotalcompra` (
`fecha` date
,`TOTALCOMPRADIA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalotros`
--
CREATE TABLE `csdiatotalotros` (
`fecha` date
,`SumaDesalida_total` decimal(32,0)
,`SumaDeentrada_total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalst`
--
CREATE TABLE `csdiatotalst` (
`fecha` date
,`abono` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalstentreg`
--
CREATE TABLE `csdiatotalstentreg` (
`fecha` date
,`SumaDesaldo_cancel` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csdiatotalventas`
--
CREATE TABLE `csdiatotalventas` (
`fecha` date
,`TOTALVENTADIA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalentra`
--
CREATE TABLE `csmestotalentra` (
`Mes` int(2)
,`year` int(4)
,`TOTALMESENTRA` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalotros`
--
CREATE TABLE `csmestotalotros` (
`Mes` int(2)
,`year` int(4)
,`MESTOTALSALIDA` decimal(54,0)
,`MESTOTALENTRA` decimal(54,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalsale`
--
CREATE TABLE `csmestotalsale` (
`Mes` int(2)
,`year` int(4)
,`TOTALMESSALE` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalst`
--
CREATE TABLE `csmestotalst` (
`Mes` int(2)
,`year` int(4)
,`SumaDeabono` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalstentreg`
--
CREATE TABLE `csmestotalstentreg` (
`Mes` int(2)
,`year` int(4)
,`TOTALSALDOCANCEL` decimal(54,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csmestotalventas`
--
CREATE TABLE `csmestotalventas` (
`Mes` int(2)
,`year` int(4)
,`TOTALMESVENTAS` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csreposicion`
--
CREATE TABLE `csreposicion` (
`idreposicion` int(11)
,`referencia` varchar(20)
,`ingreso` int(11)
,`cantidad` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csst`
--
CREATE TABLE `csst` (
`numero_orden` int(11)
,`nombre` varchar(50)
,`marca` varchar(20)
,`referencia` varchar(20)
,`descripcion_st` varchar(100)
,`observacion` varchar(50)
,`precio_cliente` int(11)
,`fecha` date
,`id_cliente` int(11)
,`empleado` varchar(10)
,`abono` int(11)
,`SALDO_PENDIENTE` bigint(12)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cstotalentradia`
--
CREATE TABLE `cstotalentradia` (
`fecha` date
,`VAL_POSITIVO` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `cstotalsaledia`
--
CREATE TABLE `cstotalsaledia` (
`fecha` date
,`VAL_NEGATIVO` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondia`
--
CREATE TABLE `csuniondia` (
`fecha` date
,`VALORES` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondiaentra`
--
CREATE TABLE `csuniondiaentra` (
`fecha` date
,`DIAENTRA` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csuniondiasale`
--
CREATE TABLE `csuniondiasale` (
`fecha` date
,`DIASALE` decimal(64,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidadtotaldia`
--
CREATE TABLE `csutilidadtotaldia` (
`fecha` date
,`UTILIDADDIA` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csutilidadtotalmes`
--
CREATE TABLE `csutilidadtotalmes` (
`Mes` int(2)
,`year` int(4)
,`UTILIDADTOTALMES` decimal(65,0)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventa`
--
CREATE TABLE `csventa` (
`numero_venta` int(11)
,`fecha` date
,`idempleado` varchar(10)
,`empleado` varchar(50)
,`idcliente` int(11)
,`nombre` varchar(50)
,`detalle` enum('Cliente','Local')
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventaproductos`
--
CREATE TABLE `csventaproductos` (
`numero_venta` int(11)
,`referencia` varchar(20)
,`precio_venta` int(11)
,`cantidad` int(11)
,`SUBTOTAL` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `csventatotal`
--
CREATE TABLE `csventatotal` (
`numero_venta` int(11)
,`fecha` date
,`SumaDeSUBTOTAL` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `detalle` enum('Cliente','Local') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcliente`
--

INSERT INTO `tbcliente` (`idcliente`, `nombre`, `telefono`, `direccion`, `email`, `detalle`) VALUES
(1, 'Anonimo', '', '', '', 'Cliente'),
(2, 'Pedro Gonzalez', '3204789656', '', 'pp@test.com', 'Cliente'),
(3, 'Andres Perez', '', '', '', 'Cliente'),
(4, 'Andrea Guerrero', '8854789', '', '', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcompra`
--

CREATE TABLE `tbcompra` (
  `numero_compra` int(11) NOT NULL,
  `proveedor` varchar(12) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbcompra`
--

INSERT INTO `tbcompra` (`numero_compra`, `proveedor`, `fecha`) VALUES
(1, '1072222333', '2016-06-29'),
(2, '123456790', '2016-06-29'),
(3, '1072222333', '2016-06-29'),
(4, '123456790', '2016-06-29'),
(5, '1072222333', '2016-06-29'),
(6, '1072222333', '2016-06-30'),
(7, '1072222333', '2016-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleado`
--

CREATE TABLE `tbempleado` (
  `idempleado` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `telefono_emple` varchar(20) NOT NULL,
  `telefono_refe` varchar(20) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `estado` varchar(8) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbempleado`
--

INSERT INTO `tbempleado` (`idempleado`, `nombre`, `sueldo`, `direccion`, `ciudad`, `telefono_emple`, `telefono_refe`, `email`, `estado`, `fecha_ingreso`) VALUES
('1072111222', 'Carlos Lopez   ', 10000, 'Cra 120 No 65 - 32', 'Bogota', '8678907', '3209876543', '', 'Activo', '2016-06-29'),
('52478963', 'Wilson Diaz', 750000, 'Cra 3a No 35 -108', 'Zipaquira', '3147895623', '8926547', 'will@prueba.com', 'Activo', '2016-07-06'),
('55444888', 'David Bolanos', 600000, 'Cra 5 No 25 - 09', 'Chia', '3104447898', '8857496', 'bolanos@test.com', 'Activo', '2016-07-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutos`
--

CREATE TABLE `tbminutos` (
  `idminutos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `venta` int(11) NOT NULL,
  `utilidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbminutos`
--

INSERT INTO `tbminutos` (`idminutos`, `fecha`, `cantidad`, `compra`, `venta`, `utilidad`) VALUES
(1, '2016-07-06', 2000, 110000, 240000, 130000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbminutosvalor`
--

CREATE TABLE `tbminutosvalor` (
  `idminutosvalor` int(11) NOT NULL,
  `costo_compra` int(11) NOT NULL,
  `valor_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbminutosvalor`
--

INSERT INTO `tbminutosvalor` (`idminutosvalor`, `costo_compra`, `valor_venta`) VALUES
(1, 55, 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbmovimiento`
--

CREATE TABLE `tbmovimiento` (
  `idmovimiento` int(11) NOT NULL,
  `idgeneral` int(11) NOT NULL,
  `motivo` varchar(30) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbmovimiento`
--

INSERT INTO `tbmovimiento` (`idmovimiento`, `idgeneral`, `motivo`, `referencia`, `cantidad`, `valor`) VALUES
(1, 2, 'Compra', 'Galaxy s3 mini', 10, 400000),
(2, 2, 'Compra', 'ilium l1100', 3, 550000),
(3, 1, 'Venta', 'ilium l1100', -1, 570000),
(4, 1, 'Venta', 'Galaxy s3 mini', -2, 480000),
(5, 3, 'Compra', 'Viper vt6000', 10, 1200000),
(6, 3, 'Compra', 'ilium l1100', 1, 560000),
(7, 4, 'Compra', 'ilium l1100', 12, 550000),
(8, 2, 'Venta', 'Viper vt6000', -1, 1350000),
(9, 5, 'Compra', 'ilium l1100', 1, 300000),
(10, 5, 'Compra', 'Galaxy s3 mini', 1, 320000),
(11, 6, 'Compra', 'Galaxy s3 mini', 1, 100000),
(12, 7, 'Compra', 'ilium l1100', 1, 350000),
(13, 3, 'Venta', 'ilium l1100', -1, 560000),
(14, 4, 'Venta', 'Galaxy s3 mini', -2, 350000),
(15, 4, 'Venta', 'ilium l1100', -1, 550000),
(16, 4, 'ReposiciÃ³n', 'Galaxy s3 mini', -1, 0),
(17, 4, 'ReposiciÃ³n', 'Galaxy s3 mini', 1, 50000),
(18, 4, 'Reposicion', 'ilium l1100', -1, 0),
(19, 4, 'Reposicion', 'ilium l1100', -1, 0),
(20, 5, 'Reposicion', 'ilium l1100', -1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbotros`
--

CREATE TABLE `tbotros` (
  `idreporte` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `salida_total` int(11) NOT NULL,
  `entrada_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbotros`
--

INSERT INTO `tbotros` (`idreporte`, `fecha`, `descripcion`, `salida_total`, `entrada_total`) VALUES
(1, '2016-07-06', ' compra de productos de aseo', 31000, 0),
(2, '2016-07-06', 'cortada de sim', 0, 23000),
(3, '2016-07-07', ' cortada de simcard', 0, 27000),
(4, '2016-07-07', ' compra vidrio', 15000, 0),
(5, '2016-07-07', ' revision telefono', 0, 7000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproducto`
--

CREATE TABLE `tbproducto` (
  `referencia` varchar(100) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbproducto`
--

INSERT INTO `tbproducto` (`referencia`, `nombre`, `marca`, `precio`) VALUES
('Galaxy s3 mini', 'Celular', 'Samsung', 370000),
('ilium l1100', 'Celular', 'Lanix', 450000),
('Viper vt6000', 'Portatil', 'Toshiba', 1200000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproveedor`
--

CREATE TABLE `tbproveedor` (
  `idproveedor` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contacto` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `telefono2` varchar(20) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `descripcion` enum('Proveedor','Local') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbproveedor`
--

INSERT INTO `tbproveedor` (`idproveedor`, `nombre`, `contacto`, `telefono`, `telefono2`, `email`, `descripcion`) VALUES
('1072222333', 'Teleinsumos', '', '', '', '', 'Proveedor'),
('123456790', 'Webservice', 'Raul Garcia', '3207896546', '', '', 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecargas`
--

CREATE TABLE `tbrecargas` (
  `idrecarga` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `venta_recarga` int(11) NOT NULL,
  `utilidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbrecargas`
--

INSERT INTO `tbrecargas` (`idrecarga`, `fecha`, `venta_recarga`, `utilidad`) VALUES
(1, '2016-07-06', 120000, 6000),
(2, '2016-07-06', 130000, 6500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbreposicion`
--

CREATE TABLE `tbreposicion` (
  `idreposicion` int(11) NOT NULL,
  `numero_compra` int(11) NOT NULL,
  `fecha` date NOT NULL COMMENT 'fecha en la cual se hizo la reposiciòn',
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbreposicion`
--

INSERT INTO `tbreposicion` (`idreposicion`, `numero_compra`, `fecha`, `descripcion`) VALUES
(1, 0, '2016-06-30', ''),
(2, 0, '2016-06-30', ''),
(3, 0, '2016-06-30', ''),
(4, 1, '2016-07-07', 'test'),
(5, 7, '2016-07-07', 'testdos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicioentregado`
--

CREATE TABLE `tbservicioentregado` (
  `numero_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `saldo_cancel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbservicioentregado`
--

INSERT INTO `tbservicioentregado` (`numero_orden`, `fecha`, `saldo_cancel`) VALUES
(1, '2016-07-06', 0),
(2, '2016-07-06', 48000),
(3, '2016-07-06', 56000),
(4, '2016-07-07', 53000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserviciotecnico`
--

CREATE TABLE `tbserviciotecnico` (
  `numero_orden` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `referencia` varchar(20) NOT NULL,
  `descripcion_st` varchar(100) NOT NULL,
  `observacion` varchar(50) DEFAULT NULL,
  `precio_cliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `empleado` varchar(10) NOT NULL,
  `abono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbserviciotecnico`
--

INSERT INTO `tbserviciotecnico` (`numero_orden`, `nombre`, `marca`, `referencia`, `descripcion_st`, `observacion`, `precio_cliente`, `fecha`, `id_cliente`, `empleado`, `abono`) VALUES
(1, 'Celular', 'Huawei', 'p8 ', ' cambio de puerto', 'viene con funda y carcasa', 36000, '2016-07-06', 1, '52478963', 36000),
(2, 'Celular', 'Htc', 'x30', ' cambio de pantalla', 'viene con stiker parte trasera', 58000, '2016-07-06', 2, '55444888', 10000),
(3, 'Celular', 'Nokia', '1100', 'cambio puerto simcard ', 'viene con funda amarilla', 56000, '2016-07-06', 3, '52478963', 0),
(4, 'Celular', 'Alcatel', 'one touch c8', 'cambio de puerto de carga ', '', 58000, '2016-07-07', 4, '1072111222', 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

CREATE TABLE `tbusuario` (
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

CREATE TABLE `tbventa` (
  `numero_venta` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idempleado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbventa`
--

INSERT INTO `tbventa` (`numero_venta`, `idcliente`, `fecha`, `idempleado`) VALUES
(1, 1, '2016-06-29', '1072111222'),
(2, 1, '2016-06-29', '1072111222'),
(3, 2, '2016-07-06', '1072111222'),
(4, 1, '2016-07-06', '52478963');

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompra`
--
DROP TABLE IF EXISTS `cscompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompra`  AS  select `tbcompra`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,`tbcompra`.`proveedor` AS `proveedor`,`tbproveedor`.`nombre` AS `nombre`,`tbproveedor`.`descripcion` AS `descripcion`,`tbproveedor`.`telefono` AS `telefono` from (`tbproveedor` join `tbcompra` on((`tbproveedor`.`idproveedor` = `tbcompra`.`proveedor`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompraproductos`
--
DROP TABLE IF EXISTS `cscompraproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompraproductos`  AS  select `mov`.`idgeneral` AS `numero_compra`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `valor`,`mov`.`cantidad` AS `cantidad`,(`mov`.`valor` * `mov`.`cantidad`) AS `SUBTOTAL` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Compra') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompratotal`
--
DROP TABLE IF EXISTS `cscompratotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cscompratotal`  AS  select `cscompraproductos`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,sum(`cscompraproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbcompra` join `cscompraproductos` on((`tbcompra`.`numero_compra` = `cscompraproductos`.`numero_compra`))) group by `cscompraproductos`.`numero_compra`,`tbcompra`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalcompra`
--
DROP TABLE IF EXISTS `csdiatotalcompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalcompra`  AS  select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `TOTALCOMPRADIA` from `cscompratotal` group by `cscompratotal`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalotros`
--
DROP TABLE IF EXISTS `csdiatotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalotros`  AS  select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total`,sum(`tbotros`.`entrada_total`) AS `SumaDeentrada_total` from `tbotros` group by `tbotros`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalst`
--
DROP TABLE IF EXISTS `csdiatotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalst`  AS  select `tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`abono` AS `abono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha`,`tbserviciotecnico`.`abono` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalstentreg`
--
DROP TABLE IF EXISTS `csdiatotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalstentreg`  AS  select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalventas`
--
DROP TABLE IF EXISTS `csdiatotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csdiatotalventas`  AS  select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `TOTALVENTADIA` from `csventatotal` group by `csventatotal`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalentra`
--
DROP TABLE IF EXISTS `csmestotalentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalentra`  AS  select month(`cstotalentradia`.`fecha`) AS `Mes`,year(`cstotalentradia`.`fecha`) AS `year`,sum(`cstotalentradia`.`VAL_POSITIVO`) AS `TOTALMESENTRA` from `cstotalentradia` group by month(`cstotalentradia`.`fecha`),year(`cstotalentradia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalotros`
--
DROP TABLE IF EXISTS `csmestotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalotros`  AS  select month(`csdiatotalotros`.`fecha`) AS `Mes`,year(`csdiatotalotros`.`fecha`) AS `year`,sum(`csdiatotalotros`.`SumaDesalida_total`) AS `MESTOTALSALIDA`,sum(`csdiatotalotros`.`SumaDeentrada_total`) AS `MESTOTALENTRA` from `csdiatotalotros` group by month(`csdiatotalotros`.`fecha`),year(`csdiatotalotros`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalsale`
--
DROP TABLE IF EXISTS `csmestotalsale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalsale`  AS  select month(`cstotalsaledia`.`fecha`) AS `Mes`,year(`cstotalsaledia`.`fecha`) AS `year`,sum(`cstotalsaledia`.`VAL_NEGATIVO`) AS `TOTALMESSALE` from `cstotalsaledia` group by month(`cstotalsaledia`.`fecha`),year(`cstotalsaledia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalst`
--
DROP TABLE IF EXISTS `csmestotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalst`  AS  select month(`csdiatotalst`.`fecha`) AS `Mes`,year(`csdiatotalst`.`fecha`) AS `year`,sum(`csdiatotalst`.`abono`) AS `SumaDeabono` from `csdiatotalst` group by month(`csdiatotalst`.`fecha`),year(`csdiatotalst`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalstentreg`
--
DROP TABLE IF EXISTS `csmestotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalstentreg`  AS  select month(`csdiatotalstentreg`.`fecha`) AS `Mes`,year(`csdiatotalstentreg`.`fecha`) AS `year`,sum(`csdiatotalstentreg`.`SumaDesaldo_cancel`) AS `TOTALSALDOCANCEL` from `csdiatotalstentreg` group by month(`csdiatotalstentreg`.`fecha`),year(`csdiatotalstentreg`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalventas`
--
DROP TABLE IF EXISTS `csmestotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csmestotalventas`  AS  select month(`csdiatotalventas`.`fecha`) AS `Mes`,year(`csdiatotalventas`.`fecha`) AS `year`,sum(`csdiatotalventas`.`TOTALVENTADIA`) AS `TOTALMESVENTAS` from `csdiatotalventas` group by month(`csdiatotalventas`.`fecha`),year(`csdiatotalventas`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csreposicion`
--
DROP TABLE IF EXISTS `csreposicion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csreposicion`  AS  select `mov`.`idgeneral` AS `idreposicion`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `ingreso`,`mov`.`cantidad` AS `cantidad` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Reposicion') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csst`
--
DROP TABLE IF EXISTS `csst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csst`  AS  select `tbserviciotecnico`.`numero_orden` AS `numero_orden`,`tbserviciotecnico`.`nombre` AS `nombre`,`tbserviciotecnico`.`marca` AS `marca`,`tbserviciotecnico`.`referencia` AS `referencia`,`tbserviciotecnico`.`descripcion_st` AS `descripcion_st`,`tbserviciotecnico`.`observacion` AS `observacion`,`tbserviciotecnico`.`precio_cliente` AS `precio_cliente`,`tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`id_cliente` AS `id_cliente`,`tbserviciotecnico`.`empleado` AS `empleado`,`tbserviciotecnico`.`abono` AS `abono`,(`tbserviciotecnico`.`precio_cliente` - `tbserviciotecnico`.`abono`) AS `SALDO_PENDIENTE` from `tbserviciotecnico` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalentradia`
--
DROP TABLE IF EXISTS `cstotalentradia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cstotalentradia`  AS  select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VAL_POSITIVO` from `csuniondiaentra` group by `csuniondiaentra`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalsaledia`
--
DROP TABLE IF EXISTS `cstotalsaledia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cstotalsaledia`  AS  select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondia`
--
DROP TABLE IF EXISTS `csuniondia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondia`  AS  select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VALORES` from `csuniondiaentra` group by `csuniondiaentra`.`fecha` union all select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha` order by `fecha` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiaentra`
--
DROP TABLE IF EXISTS `csuniondiaentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiaentra`  AS  select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`entrada_total`) AS `DIAENTRA` from `tbotros` group by `tbotros`.`fecha` union all select `tbserviciotecnico`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`abono`) AS `SumaDeabono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha` union all select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` union all select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `SumaDeSumaDeSUBTOTAL` from `csventatotal` group by `csventatotal`.`fecha` order by `fecha` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiasale`
--
DROP TABLE IF EXISTS `csuniondiasale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiasale`  AS  select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `DIASALE` from `cscompratotal` group by `cscompratotal`.`fecha` union all select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total` from `tbotros` group by `tbotros`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotaldia`
--
DROP TABLE IF EXISTS `csutilidadtotaldia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidadtotaldia`  AS  select `csuniondia`.`fecha` AS `fecha`,sum(`csuniondia`.`VALORES`) AS `UTILIDADDIA` from `csuniondia` group by `csuniondia`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotalmes`
--
DROP TABLE IF EXISTS `csutilidadtotalmes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csutilidadtotalmes`  AS  select month(`csutilidadtotaldia`.`fecha`) AS `Mes`,year(`csutilidadtotaldia`.`fecha`) AS `year`,sum(`csutilidadtotaldia`.`UTILIDADDIA`) AS `UTILIDADTOTALMES` from `csutilidadtotaldia` group by month(`csutilidadtotaldia`.`fecha`),year(`csutilidadtotaldia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventa`
--
DROP TABLE IF EXISTS `csventa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventa`  AS  select `tbventa`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,`tbventa`.`idempleado` AS `idempleado`,`tbempleado`.`nombre` AS `empleado`,`tbventa`.`idcliente` AS `idcliente`,`tbcliente`.`nombre` AS `nombre`,`tbcliente`.`detalle` AS `detalle` from (`tbempleado` join (`tbcliente` join `tbventa` on((`tbcliente`.`idcliente` = `tbventa`.`idcliente`))) on((`tbempleado`.`idempleado` = `tbventa`.`idempleado`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventaproductos`
--
DROP TABLE IF EXISTS `csventaproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventaproductos`  AS  select `mov`.`idgeneral` AS `numero_venta`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `precio_venta`,`mov`.`cantidad` AS `cantidad`,(`mov`.`valor` * -(`mov`.`cantidad`)) AS `SUBTOTAL` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Venta') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventatotal`
--
DROP TABLE IF EXISTS `csventatotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csventatotal`  AS  select `csventaproductos`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,sum(`csventaproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbventa` join `csventaproductos` on((`tbventa`.`numero_venta` = `csventaproductos`.`numero_venta`))) group by `csventaproductos`.`numero_venta`,`tbventa`.`fecha` ;

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
  ADD PRIMARY KEY (`numero_compra`),
  ADD KEY `proveedor` (`proveedor`);

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
  ADD PRIMARY KEY (`idmovimiento`),
  ADD KEY `referencia` (`referencia`),
  ADD KEY `idgeneral` (`idgeneral`);

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
  ADD PRIMARY KEY (`idreposicion`);

--
-- Indices de la tabla `tbservicioentregado`
--
ALTER TABLE `tbservicioentregado`
  ADD PRIMARY KEY (`numero_orden`);

--
-- Indices de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  ADD PRIMARY KEY (`numero_orden`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `empleado` (`empleado`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  ADD PRIMARY KEY (`numero_venta`),
  ADD KEY `idempleado` (`idempleado`,`idcliente`),
  ADD KEY `idcliente` (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `numero_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  MODIFY `idminutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  MODIFY `idminutosvalor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  MODIFY `idmovimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `tbotros`
--
ALTER TABLE `tbotros`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbrecargas`
--
ALTER TABLE `tbrecargas`
  MODIFY `idrecarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbreposicion`
--
ALTER TABLE `tbreposicion`
  MODIFY `idreposicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbserviciotecnico`
--
ALTER TABLE `tbserviciotecnico`
  MODIFY `numero_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbventa`
--
ALTER TABLE `tbventa`
  MODIFY `numero_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  ADD CONSTRAINT `tbcompra_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `tbproveedor` (`idproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  ADD CONSTRAINT `tbmovimiento_ibfk_1` FOREIGN KEY (`referencia`) REFERENCES `tbproducto` (`referencia`) ON UPDATE CASCADE;

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
