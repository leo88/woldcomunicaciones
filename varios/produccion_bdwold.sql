-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: fdb14.runhosting.com
-- Tiempo de generación: 09-08-2016 a las 13:59:35
-- Versión del servidor: 5.7.13-log
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `2135854_bdwold`
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
(1, 'Anonimo', NULL, NULL, NULL, 'Cliente');

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
(1, '81720483', '2016-07-27');

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
  `fecha_ingreso` date NOT NULL,
  `perfil` enum('Administrador','Tecnico','Vendedor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 'Compra', 'VT G730', 2, 2000),
(2, 1, 'Compra', 'VT G510', 6, 2000);

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
('ACH   J ', 'Antichoque', 'Sony', 10000),
('ACH   T', 'Antichoque', 'Sony', 10000),
('ACH  520', 'Antichoque', 'Nokia', 10000),
('ACH 130', 'Antichoque', 'Lan', 10000),
('ACH 1904', 'Antichoque', 'Sony', 10000),
('ACH 4 4S', 'Antichoque', 'Iphone', 10000),
('ACH 4007', 'Antichoque', 'Alcatel', 10000),
('ACH 4033', 'Antichoque', 'Alcatel', 10000),
('ACH 5 5S', 'Antichoque', 'Iphone', 10000),
('ACH 5020', 'Antichoque', 'Alcatel', 10000),
('ACH 5035', 'Antichoque', 'Alcatel', 10000),
('ACH 5042', 'Antichoque', 'Alcatel', 10000),
('ACH 505 ', 'Antichoque', 'Nokia', 10000),
('ACH 511', 'Antichoque', 'Huawei', 10000),
('ACH 520', 'Antichoque', 'Huawei', 10000),
('ACH 526', 'Antichoque', 'Huawei', 10000),
('ACH 5280', 'Antichoque ', 'Samsung', 10000),
('ACH 530', 'Antichoque', 'Huawei', 10000),
('ACH 5330', 'Antichoque', 'Samsung', 10000),
('ACH 5830', 'Antichoque', 'Samsung', 10000),
('ACH 6', 'Antichoque', 'Iphone', 10000),
('ACH 6 PLUS', 'Antichoque', 'Iphone', 10000),
('ACH 6030', 'Antichoque', 'Alcatel', 10000),
('ACH 6040', 'Antichoque', 'Alcatel', 10000),
('ACH 610', 'Antichoque', 'Nokia', 10000),
('ACH 625', 'Antichoque', 'Nokia', 10000),
('ACH 6310', 'Antichoque', 'Samsung', 10000),
('ACH 635', 'Antichoque', 'Nokia', 10000),
('ACH 6802', 'Antichoque', 'Samsung', 10000),
('ACH 6810', 'Antichoque', 'Samsung', 10000),
('ACH 710', 'Antichoque', 'Nokia', 10000),
('ACH 7100', 'Antichoque', 'Samsung', 10000),
('ACH 7106', 'Antichoque', 'Samsung', 10000),
('ACH 720', 'Antichoque', 'Nokia', 10000),
('ACH 7390', 'Antichoque', 'Samsung', 10000),
('ACH 765', 'Antichoque', 'Avvio', 10000),
('ACH 768', 'Antichoque', 'Avvio', 10000),
('ACH 777', 'Antichoque', 'Avvio', 10000),
('ACH 778', 'Antichoque', 'Avvio', 10000),
('ACH 780', 'Antichoque', 'Avvio', 10000),
('ACH 785', 'Antichoque', 'Avvio', 10000),
('ACH 790', 'Antichoque', 'Avvio', 10000),
('ACH 792', 'Antichoque', 'Avvio', 10000),
('ACH 793', 'Antichoque', 'Avvio', 10000),
('ACH 795', 'Antichoque', 'Avvio', 10000),
('ACH 820', 'Antichoque', 'Lenovo', 10000),
('ACH 9082', 'Antichoque', 'Samsung', 10000),
('ACH 9200', 'Antichoque', 'Samsung', 10000),
('ACH 960', 'Antichoque', 'Lenovo', 10000),
('ACH A3', 'Antichoque', 'Samsung', 10000),
('ACH A369', 'Antichoque', 'Lenovo', 10000),
('ACH A45', 'Antichoque', 'Azumi', 10000),
('ACH A5', 'Antichoque', 'Samsung', 10000),
('ACH A50C', 'Antichoque', 'Azumi', 10000),
('ACH A50C PLUS', 'Antichoque', 'Azumi', 10000),
('ACH ACE 4', 'Antichoque', 'Samsung', 10000),
('ACH AX 535', 'Antichoque', 'Antichoque', 10000),
('ACH AX650', 'Antichoque', 'Bmobile', 10000),
('ACH C1', 'Antichoque', 'Alcatel', 10000),
('ACH C5', 'Antichoque', 'Alcatel', 10000),
('ACH C7', 'Antichoque', 'Alcatel', 10000),
('ACH CORE ', 'Antichoque', 'Samsung', 10000),
('ACH CORE 2', 'Antichoque', 'Samsung', 10000),
('ACH CORE PRIME', 'Antichoque', 'Samsung', 10000),
('ACH D1', 'Antichoque', 'Motorola', 10000),
('ACH FAME', 'Antichoque', 'Samsung', 10000),
('ACH G PLAY ', 'Antichoque', 'Huawei', 10000),
('ACH G2', 'Antichoque', 'Lg', 10000),
('ACH G2 MINI', 'Antichoque', 'Lg', 10000),
('ACH G510', 'Antichoque', 'Huawei', 10000),
('ACH G526', 'Antichoque', 'Huawei', 10000),
('ACH G6', 'Antichoque', 'Huawei', 10000),
('ACH G610', 'Antichoque', 'Huawei', 10000),
('ACH G630', 'Antichoque', 'Huawei', 10000),
('ACH G730', 'Antichoque', 'Huawei', 10000),
('ACH G850', 'Antichoque', 'Samsung', 10000),
('ACH GRAND PRIME', 'Antichoque', 'Samsung', 10000),
('ACH IDOL MINI', 'Antichoque', 'Alcatel', 10000),
('ACH J', 'Antichoque', 'Sony ', 10000),
('ACH J1', 'Antichoque', 'Samsung', 10000),
('ACH J1 ACE', 'Antichoque', 'Samsung', 10000),
('ACH J5', 'Antichoque', 'Samsung', 10000),
('ACH J7', 'Antichoque', 'Samsung', 10000),
('ACH L3', 'Antichoque', 'Lg', 10000),
('ACH L36', 'Antichoque', 'Sony', 10000),
('ACH L39', 'Antichoque', 'Sony', 10000),
('ACH L3X', 'Antichoque', 'Lg', 10000),
('ACH L4', 'Antichoque', 'Lg', 10000),
('ACH L5', 'Antichoque', 'Lg', 10000),
('ACH L50', 'Antichoque', 'Lg', 10000),
('ACH L7', 'Antichoque', 'Lg', 10000),
('ACH L7II', 'Antichoque', 'Lg', 10000),
('ACH L80', 'Antichoque', 'Lg', 10000),
('ACH M35', 'Antichoque', 'Sony', 10000),
('ACH MATTE 8', 'Antichoque', 'Huawei', 10000),
('ACH MAX', 'Antichoque', 'Samsung', 10000),
('ACH MOTO D3', 'Antichoque', 'Motorola', 10000),
('ACH MOTO E', 'Antichoque', 'Motorola', 10000),
('ACH MOTO G', 'Antichoque', 'Motorola', 10000),
('ACH MOTO G2', 'Antichoque', 'Motorola', 10000),
('ACH MOTO G3', 'Antichoque', 'Motorola', 10000),
('ACH MOTO X', 'Antichoque', 'Motorola', 10000),
('ACH MOTO X2', 'Antichoque', 'Motorola', 10000),
('ACH NOT 3', 'Antichoque', 'Samsung', 10000),
('ACH P6', 'Antichoque', 'Huawei', 10000),
('ACH P7', 'Antichoque', 'Huawei', 10000),
('ACH PIXI 3', 'Antichoque', 'Alcatel', 10000),
('ACH PIXI 4', 'Antichoque', 'Alcatel', 10000),
('ACH POP 2', 'Antichoque', 'Alcatel', 10000),
('ACH POP S2', 'Antichoque', 'Alcatel', 10000),
('ACH S2', 'Antichoque', 'Samsung', 10000),
('ACH S220', 'Antichoque', 'Lan', 10000),
('ACH S3', 'Antichoque', 'Samsung', 10000),
('ACH S3 MINI', 'Antichoque', 'Samsung', 10000),
('ACH S36', 'Antichoque', 'Sony', 10000),
('ACH S4', 'Antichoque', 'Samsung', 10000),
('ACH S4 MINI', 'Antichoque', 'Samsung', 10000),
('ACH S5', 'Antichoque', 'Samsung', 10000),
('ACH S5 MINI', 'Antichoque', 'Samsung', 10000),
('ACH S6', 'Antichoque', 'Samsung', 10000),
('ACH S6 EDGE', 'Antichoque ', 'Samsung', 10000),
('ACH SP ', 'Antichoque', 'Sony', 10000),
('ACH ST21', 'Antichoque', 'Sony', 10000),
('ACH ST25', 'Antichoque', 'Sony', 10000),
('ACH SUNSET', 'Antichoque', 'Lanix', 10000),
('ACH X220', 'Antichoque', 'Lan', 10000),
('ACH XPERIA M2', 'Antichoque', 'Sony', 10000),
('ACH XPERIA P', 'Antichoque', 'Sony', 10000),
('ACH Y210', 'Antichoque', 'Huawei', 10000),
('ACH Y3', 'Antichoque', 'Huawei', 10000),
('ACH Y300', 'Antichoque', 'Huawei', 10000),
('ACH Y320', 'Antichoque', 'Huawei', 10000),
('ACH Y330', 'Antichoque', 'Huawei', 10000),
('ACH Y5', 'Antichoque', 'Huawei', 10000),
('ACH Y600', 'Antichoque', 'Huawei', 10000),
('ACH Y625', 'Antichoque', 'Huawei', 10000),
('ACH Z1', 'Antichoque', 'Sony', 10000),
('ACH Z3 ', 'Antichoque', 'Sony', 10000),
('CT   T', 'Cartera', 'Sony', 15000),
('CT  520', 'Cartera', 'Nokia', 15000),
('CT  S220', 'Cartera', 'Lan', 15000),
('CT 130', 'Cartera', 'Lan', 15000),
('CT 1904', 'Cartera', 'Sony', 15000),
('CT 4 4S', 'Cartera', 'Iphone', 15000),
('CT 4007', 'Cartera', 'Alcatel', 15000),
('CT 4033', 'Cartera', 'Alcatel', 15000),
('CT 5 5S', 'Cartera', 'Iphone', 15000),
('CT 5020', 'Cartera', 'Alcatel', 15000),
('CT 5035', 'Cartera', 'Alcatel', 15000),
('CT 5042', 'Cartera', 'Alcatel', 15000),
('CT 505', 'Cartera', 'Nokia', 15000),
('CT 511', 'Cartera', 'Huawei', 15000),
('CT 520', 'Cartera', 'Huawei', 15000),
('CT 5280', 'Cartera', 'Samsung', 15000),
('CT 530', 'Cartera', 'Huawei', 15000),
('CT 5330', 'Cartera', 'Samsung', 15000),
('CT 5830', 'Cartera', 'Samsung', 15000),
('CT 6', 'Cartera', 'Iphone', 15000),
('CT 6 PLUS', 'Cartera', 'Iphone', 15000),
('CT 6030', 'Cartera', 'Alcatel', 15000),
('CT 6040 ', 'Cartera', 'Alcatel', 15000),
('CT 610', 'Cartera', 'Nokia', 15000),
('CT 625', 'Cartera', 'Nokia', 15000),
('CT 6310', 'Cartera', 'Samsung', 15000),
('CT 635', 'Cartera', 'Nokia', 15000),
('CT 6802', 'Cartera', 'Samsung', 15000),
('CT 6810', 'Cartera', 'Samsung', 15000),
('CT 710', 'Cartera', 'Nokia', 15000),
('CT 7100', 'Cartera', 'Samsung', 15000),
('CT 7106', 'Cartera', 'Samsung', 15000),
('CT 720', ' Cartera', 'Nokia', 15000),
('CT 7390', 'Cartera', 'Samsung', 15000),
('CT 765', 'Cartera', 'Avvio', 15000),
('CT 768', 'Cartera', 'Avvio', 15000),
('CT 777', 'Cartera', 'Avvio', 15000),
('CT 778', 'Cartera', 'Avvio', 15000),
('CT 780', 'Cartera', 'Avvio', 15000),
('CT 785', 'Cartera', 'Avvio', 15000),
('CT 790', 'Cartera', 'Avvio', 15000),
('CT 792', 'Cartera', 'Avvio', 15000),
('CT 793', 'Cartera', 'Avvio', 15000),
('CT 795', 'Cartera', 'Avvio', 15000),
('CT 820', 'Cartera', 'Lenovo ', 15000),
('CT 9082', 'Cartera', 'Samsung', 15000),
('CT 9200', 'Cartera', 'Samsung', 15000),
('CT 960', 'Cartera', 'Lenovo', 15000),
('CT A 45', 'Cartera', 'Azumi', 15000),
('CT A3', 'Cartera', 'Samsung', 15000),
('CT A369', 'Cartera', 'Lenovo ', 15000),
('CT A5', 'Cartera', 'Samsung', 15000),
('CT A50C', 'Cartera', 'Azumi', 15000),
('CT A50C PLUS', 'Cartera', 'Azumi', 15000),
('CT ACE 4', 'Cartera', 'Samsung', 15000),
('CT AX 535', 'Cartera', 'Bmobile', 15000),
('CT AX 650', 'Cartera', 'Bmobile', 10000),
('CT C1', 'Cartera', 'Alcatel', 15000),
('CT C5', 'Cartera', 'Alcatel', 15000),
('CT C7', 'Cartera', 'Alcatel', 15000),
('CT CORE', 'Cartera', 'Samsung', 15000),
('CT CORE 2', 'Cartera ', 'Samsung', 15000),
('CT CORE PRIME ', 'Cartera', 'Samsung', 15000),
('CT D1', 'Cartera', 'Motorola', 15000),
('CT D3', 'Cartera', 'Motorola', 15000),
('CT FAME', 'Cartera', 'Samsung', 15000),
('CT G PLAY', 'Cartera', 'Huawei', 15000),
('CT G2', 'Cartera', 'Lg', 15000),
('CT G2 MINI', 'Cartera', 'Lg', 15000),
('CT G510', 'Cartera', 'Huawei', 15000),
('CT G526', 'Cartera', 'Huawei', 15000),
('CT G6', 'Cartera', 'Huawei', 15000),
('CT G610', 'Cartera', 'Huawei', 15000),
('CT G630', 'Cartera', 'Huawei', 15000),
('CT G730', 'Cartera', 'Huawei', 15000),
('CT G850', 'Cartera', 'Samsung', 15000),
('CT GRAND PRIME', 'Cartera', 'Samsung', 15000),
('CT IDOL MINI', 'Cartera', 'Alcatel', 15000),
('CT J', 'Cartera', 'Sony', 15000),
('CT J1', 'Cartera', 'Samsung', 15000),
('CT J1 ACE', 'Cartera', 'Samsung ', 15000),
('CT J5', 'Cartera', 'Samsung', 15000),
('CT J7', 'Cartera', 'Samsung', 15000),
('CT L3', 'Cartera', 'Lg', 15000),
('CT L36', 'Cartera', 'Sony', 15000),
('CT L39', 'Cartera', 'Sony', 15000),
('CT L4', 'Cartera', 'Lg', 15000),
('CT L5', 'Cartera', 'Lg', 15000),
('CT L50', 'Cartera', 'Lg', 15000),
('CT L7 ', 'Cartera', 'Lg', 15000),
('CT L7II', 'Cartera', 'Lg ', 15000),
('CT L80', 'Cartera', 'Lg', 15000),
('CT M35', 'Cartera', 'Sony', 15000),
('CT MATTE 8', 'Cartera', 'Huawei', 15000),
('CT MAX', 'Cartera', 'Samsung', 15000),
('CT MOTO E', 'Cartera', 'Motorola', 15000),
('CT MOTO G', 'Cartera', 'Motorola', 15000),
('CT MOTO G2', 'Cartera', 'Motorola', 15000),
('CT MOTO G3', 'Cartera', 'Motorola', 10000),
('CT MOTO X', 'Cartera', 'Motorola', 15000),
('CT MOTO X2', 'Cartera', 'Motorola', 15000),
('CT NOT 3', 'Cartera', 'Samsung', 15000),
('CT P6', 'Cartera', 'Huawei', 15000),
('CT P7', 'Cartera', 'Huawei', 15000),
('CT PIXI 3', 'Cartera', 'Alcatel', 15000),
('CT PIXI 4', 'Cartera', 'Alcatel', 15000),
('CT POP 2', 'Cartera', 'Alcatel', 15000),
('CT POP S2', 'Cartera', 'Alcatel', 15000),
('CT S2 ', 'Cartera', 'Samsung', 15000),
('CT S3 ', 'Cartera', 'Samsung', 15000),
('CT S3 MINI ', 'Cartera', 'Samsung', 15000),
('CT S36', 'Cartera', 'Sony', 15000),
('CT S4 ', 'Cartera ', 'Samsung', 15000),
('CT S4 MINI', 'Cartera', 'Smsung', 15000),
('CT S5', 'Cartera', 'Samsung', 15000),
('CT S5 MINI', 'Cartera', 'Samsung', 15000),
('CT S6', 'Cartera', 'Samsung', 15000),
('CT S6 EDGE', 'Cartera', 'Samsung', 15000),
('CT SP', 'Cartera', 'Sony', 15000),
('CT ST 21', 'Cartera', 'Sony', 15000),
('CT ST 25', 'Cartera', 'Sony', 15000),
('CT SUNSET', 'Cartera', 'Lanix', 15000),
('CT T', 'Cartera', 'Sony', 15000),
('CT UNIVERSAL', 'Cartera', 'Varias', 15000),
('CT X220', 'Cartera', 'Lan', 15000),
('CT XPERIA M2', 'Cartera', 'Sony', 15000),
('CT XPERIA P', 'Cartera', 'Sony', 15000),
('CT Y210', 'Cartera', 'Huawei', 15000),
('CT Y3', 'Cartera', 'Huawei', 15000),
('CT Y300', 'Cartera', 'Huawei', 15000),
('CT Y320', 'Cartera', 'Huawei', 15000),
('CT Y330', 'Cartera', 'Huawei', 15000),
('CT Y5', 'Cartera', 'Huawei', 15000),
('CT Y600', 'Cartera', 'Huawei', 15000),
('CT Y625', 'Cartera', 'Huawei', 15000),
('CT Z1', 'Cartera', 'Sony', 15000),
('CT Z3', 'Cartera', 'Sony', 15000),
('MG  520', 'Manguera', 'Nokia', 10000),
('MG  720', 'Manguera', 'Nokia', 10000),
('MG  T', 'Manguera', 'Sony', 10000),
('MG 130', 'Manguera', 'Lan ', 10000),
('MG 1904', 'Manguera', 'Sony', 10000),
('MG 4 4S', 'Manguera', 'Iphone', 10000),
('MG 4007', 'Manguera', 'Alcatel', 10000),
('MG 4033', 'Manguera', 'Alcatel', 10000),
('MG 5 5S', 'Manguera', 'Iphone', 10000),
('MG 5020', 'Manguera', 'Alcatel', 10000),
('MG 5035', 'Manguera', 'Alcatel', 10000),
('MG 5042', 'Manguera', 'Alcatel', 10000),
('MG 505', 'Manguera', 'Nokia', 10000),
('MG 511', 'Manguera', 'Huawei', 10000),
('MG 520', 'Manguera', 'Huawei', 10000),
('MG 5280', 'Manguera', 'Samsung', 10000),
('MG 530', 'Manguera', 'Huawei', 10000),
('MG 5330', 'Manguera', 'Samsung', 10000),
('MG 5830', 'Manguera', 'Samsung', 10000),
('MG 6', 'Manguera', 'Iphone', 10000),
('MG 6 PLUS', 'Manguera', 'Iphone', 10000),
('MG 6030', 'Manguera', 'Alcatel', 10000),
('MG 6040', 'Manguera', 'Alcatel', 10000),
('MG 610', 'Manguera', 'Nokia', 10000),
('MG 625 ', 'Manguera', 'Nokia', 10000),
('MG 6310', 'Manguera', 'Samsung', 10000),
('MG 635', 'Manguera', 'Nokia', 10000),
('MG 6802', 'Manguera', 'Samsung', 10000),
('MG 6810', 'Manguera', 'Samsung', 10000),
('MG 710', 'Manguera', 'Nokia', 10000),
('MG 7100', 'Manguera', 'Samsung', 10000),
('MG 7106', 'Manguera', 'Samsung', 10000),
('MG 720', 'Manguera', 'Nokia', 10000),
('MG 7390', 'Manguera', 'Samsung', 10000),
('MG 765', 'Manguera', 'Avvio', 10000),
('MG 768', 'Manguera', 'Avvio', 10000),
('MG 777', 'Manguera', 'Avvio', 10000),
('MG 778', 'Manguera', 'Avvio', 10000),
('MG 780', 'Manguera', 'Avvio', 10000),
('MG 785', 'Manguera', 'Avvio', 10000),
('MG 790', 'Manguera', 'Avvio', 10000),
('MG 792', 'Manguera', 'Avvio', 10000),
('MG 793', 'Manguera', 'Avvio', 10000),
('MG 795', 'Manguera', 'Avvio', 10000),
('MG 820', 'Manguera', 'Lenovo', 10000),
('MG 9082', 'Manguera', 'Samsung', 10000),
('MG 9200', 'Manguera', 'Samsung', 10000),
('MG 960', 'Manguera', 'Lenovo', 10000),
('MG A 45', 'Manguera', 'Azumi', 10000),
('MG A3', 'Manguera', 'Samsung', 10000),
('MG A369', 'Manguera', 'Lenovo', 10000),
('MG A5', 'Manguera', 'Samsung', 10000),
('MG A50C', 'Manguera', 'Azumi', 10000),
('MG A50C PLUS', 'Manguera', 'Azumi', 10000),
('MG ACE 4', 'Manguera', 'Samsung', 10000),
('MG AX 535', 'Manguera', 'Bmobile', 10000),
('MG AX 650', 'Manguera', 'Bmobile', 10000),
('MG C1', 'Manguera', 'Alcatel', 10000),
('MG C5', 'Manguera', 'Alcatel', 10000),
('MG C7', 'Manguera', 'Alcatel', 10000),
('MG CORE ', 'Manguera', 'Samsung', 10000),
('MG CORE 2', 'Manguera', 'Samsung', 10000),
('MG CORE PRIME ', 'Manguera', 'Samsung', 10000),
('MG D1', 'Manguera', 'Motorola', 10000),
('MG D3', 'Manguera', 'Motorola', 10000),
('MG FAME', 'Manguera', 'Samsung', 10000),
('MG G PLAY ', 'Manguera', 'Huawei', 10000),
('MG G2', 'Manguera', 'Lg', 10000),
('MG G2 MINI', 'Manguera', 'Lg', 10000),
('MG G510', 'Manguera', 'Huawei', 10000),
('MG G526', 'Manguera', 'Huawei', 10000),
('MG G6', 'Manguera', 'Huawei', 10000),
('MG G610', 'Manguera', 'Huawei', 10000),
('MG G630', 'Manguera', 'Huawei', 10000),
('MG G730', 'Manguera', 'Huawei', 10000),
('MG G850', 'Manguera', 'Samsung', 10000),
('MG GRAND PRIME', 'Manguera', 'Samsung', 10000),
('MG IDOL MINI', 'Manguera', 'Alcatel', 10000),
('MG J ', 'Manguera', 'Sony', 10000),
('MG J1', 'Manguera', 'Samsung', 10000),
('MG J1 ACE', 'Manguera', 'Samsung', 10000),
('MG J5', 'Manguera', 'Samsung', 10000),
('MG J7', 'Manguera', 'Samsung', 10000),
('MG L3', 'Manguera', 'Lg', 10000),
('MG L36', 'Manguera', 'Sony', 10000),
('MG L39', 'Manguera', 'Sony', 10000),
('MG L3X', 'Manguera', 'Lg', 10000),
('MG L4', 'Manguera', 'Lg', 10000),
('MG L5', 'Manguera', 'Lg', 10000),
('MG L50', 'Manguera', 'Lg', 10000),
('MG L7', 'Manguera', 'Lg', 10000),
('MG L7II', 'Manguera', 'Lg', 10000),
('MG L80', 'Manguera', 'Lg', 10000),
('MG M35', 'Manguera', 'Sony', 10000),
('MG MATTE 8', 'Manguera', 'Huawei', 10000),
('MG MAX', 'Manguera', 'Samsung', 10000),
('MG MOTO E', 'Manguera', 'Motorola', 10000),
('MG MOTO G', 'Manguera', 'Motorola', 10000),
('MG MOTO G2', 'Manguera', 'Motorola', 10000),
('MG MOTO G3', 'Manguera', 'Motorola', 10000),
('MG MOTO X', 'Manguera', 'Motorola', 10000),
('MG MOTO X2', 'Manguera', 'Motorola', 10000),
('MG NOT 3', 'Manguera', 'Samsung', 10000),
('MG P6', 'Manguera', 'Huawei', 10000),
('MG P7', 'Manguera', 'Huawei', 10000),
('MG PIXI 3', 'Manguera', 'Alcatel', 10000),
('MG PIXI 4', 'Manguera', 'Alcatel', 10000),
('MG POP 2', 'Manguera', 'Alcatel', 10000),
('MG POP S2', 'Manguera', 'Alcatel', 10000),
('MG S2', 'Manguera', 'Samsung', 10000),
('MG S220', 'Manguera', 'Lan ', 10000),
('MG S3 ', 'Manguera', 'Samsung', 10000),
('MG S3 MINI', 'Manguera', 'Samsung', 10000),
('MG S36', 'Manguera', 'Sony', 10000),
('MG S4', 'Manguera', 'Samsung', 10000),
('MG S4 MINI', 'Manguera', 'Samsung', 10000),
('MG S5', 'Manguera', ' Samsung', 10000),
('MG S5 MINI', 'Manguera', 'Samsung', 10000),
('MG S6', 'Manguera', 'Samsung', 10000),
('MG S6 EDGE', 'Manguera', 'Samsung', 10000),
('MG SP ', 'Manguera', 'Sony', 10000),
('MG ST 21', 'Manguera', 'Sony', 10000),
('MG ST25', 'Manguera', 'Sony', 10000),
('MG SUNSET', 'Manguera', 'Lanix', 10000),
('MG X220', 'Manguera', 'Lan ', 10000),
('MG XPERIA M2', 'Manguera', 'Sony', 10000),
('MG XPERIA P', 'Manguera', 'Sony', 10000),
('MG Y210', 'Manguera', 'Huawei', 10000),
('MG Y3', 'Manguera', 'Huawei', 10000),
('MG Y300', 'Manguera', 'Huawei', 10000),
('MG Y320', 'Manguera', 'Huawei', 10000),
('MG Y330', 'Manguera', 'Huawei', 10000),
('MG Y5', 'Manguera', 'Huawei', 10000),
('MG Y600', 'Manguera', 'Huawei', 10000),
('MG Y625', 'Manguera', 'Huawei', 10000),
('MG Z1', 'Manguera', 'Sony', 10000),
('MG Z3', 'Manguera', 'Sony', 10000),
('VT 7106', 'Vidrio Templado', 'Samsung', 12000),
('VT 9082', 'Vidrio Templado', 'Samsung', 12000),
('VT 9200', 'Vidrio Templado', 'Samsung', 12000),
('VT A3', 'Vidrio Templado', 'Samsung', 12000),
('VT A3 2016', 'Vidrio Templado', 'Samsung', 12000),
('VT A5', 'Vidrio Templado', 'Samsung', 12000),
('VT A5SA', 'Vidrio Templado', 'Samsung', 12000),
('VT A7', 'Vidrio Templado', 'Samsung', 12000),
('VT ACE 4', 'Vidrio Templado', 'Samsung', 12000),
('VT CORE 2', 'Vidrio Templado', 'Samsung', 12000),
('VT CORE PRIME G360', 'Vidrio Templado', 'Samsung', 12000),
('VT G PLAY MINI', 'Vidrio Templado', 'Huawei', 12000),
('VT G510', 'Vidrio Templado', 'Huawei', 12000),
('VT G6', 'Vidrio Templado', 'Huawei', 12000),
('VT G610', 'Vidrio Templado', 'Huawei', 12000),
('VT G630', 'Vidrio Templado', 'Huawei', 12000),
('VT G7', 'Vidrio Templado', 'Huawei', 12000),
('VT G730', 'Vidrio Templado', 'Huawei', 12000),
('VT GPLAY', 'Vidrio Templado', 'Huawei', 12000),
('VT J1', 'Vidrio Templado', 'Samsung', 12000),
('VT J1 2016', 'Vidrio Templado', 'Samsung', 12000),
('VT J1 ACE', 'Vidrio Templado', 'Samsung', 12000),
('VT J1 MINI', 'Vidrio Templado', 'Samsung', 12000),
('VT J2', 'Vidrio Templado', 'Samsung', 12000),
('VT J3', 'Vidrio Templado', 'Samsung', 12000),
('VT J5', 'Vidrio Templado', 'Samsung', 12000),
('VT J5 2016', 'Vidrio Templado', 'Samsung', 12000),
('VT J7', 'Vidrio Templado', 'Samsung', 12000),
('VT MATE 7', 'Vidrio Templado', 'Huawei', 12000),
('VT MATE 8', 'Vidrio Templado', 'Huawei', 12000),
('VT NOT 4', 'Vidrio Templado', 'Samsung', 12000),
('VT P6', 'Vidrio Templado', 'Huawei', 12000),
('VT P7', 'Vidrio Templado', 'Huawei', 12000),
('VT P8', 'Vidrio Templado', 'Huawei', 12000),
('VT P8 LITE', 'Vidrio Templado', 'Huawei', 12000),
('VT S4', 'Vidrio Templado', 'Samsung', 12000),
('VT S4 MINI', 'Vidrio Templado', 'Samsung', 12000),
('VT S5', 'Vidrio Templado', 'Samsung', 12000),
('VT S5 MINI', 'Vidrio Templado', 'Samsung', 12000),
('VT Y3', 'Vidrio Templado', 'Huawei', 12000),
('VT Y300', 'Vidrio Templado', 'Huawei', 12000),
('VT Y330', 'Vidrio Templado', 'Huawei', 12000),
('VT Y5', 'Vidrio Templado', 'Huawey', 12000),
('VT Y511', 'Vidrio Templado ', 'Huawei', 12000),
('VT Y520', 'Vidrio Templado', 'Huawei', 12000),
('VT Y530', 'Vidrio Templado', 'Huawei', 12000),
('VT Y550', 'Vidrio Templado', 'Huawei', 12000),
('VT Y600', 'Vidrio Templado', 'Huawei', 12000),
('VT Y625', 'Vidrio Templado', 'Huawei', 12000),
('VT Y635', 'Vidrio Templado', 'Huawei', 12000);

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
('81720483', 'Local Chia', '', '', '', '', 'Local');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbservicioentregado`
--

CREATE TABLE `tbservicioentregado` (
  `numero_orden` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `saldo_cancel` int(11) NOT NULL,
  `tecnico` varchar(50) NOT NULL COMMENT 'persona que reparo el articulo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompra`
--
DROP TABLE IF EXISTS `cscompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `cscompra`  AS  select `tbcompra`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,`tbcompra`.`proveedor` AS `proveedor`,`tbproveedor`.`nombre` AS `nombre`,`tbproveedor`.`descripcion` AS `descripcion`,`tbproveedor`.`telefono` AS `telefono` from (`tbproveedor` join `tbcompra` on((`tbproveedor`.`idproveedor` = `tbcompra`.`proveedor`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompraproductos`
--
DROP TABLE IF EXISTS `cscompraproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `cscompraproductos`  AS  select `mov`.`idgeneral` AS `numero_compra`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `valor`,`mov`.`cantidad` AS `cantidad`,(`mov`.`valor` * `mov`.`cantidad`) AS `SUBTOTAL` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Compra') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cscompratotal`
--
DROP TABLE IF EXISTS `cscompratotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `cscompratotal`  AS  select `cscompraproductos`.`numero_compra` AS `numero_compra`,`tbcompra`.`fecha` AS `fecha`,sum(`cscompraproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbcompra` join `cscompraproductos` on((`tbcompra`.`numero_compra` = `cscompraproductos`.`numero_compra`))) group by `cscompraproductos`.`numero_compra`,`tbcompra`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalcompra`
--
DROP TABLE IF EXISTS `csdiatotalcompra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csdiatotalcompra`  AS  select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `TOTALCOMPRADIA` from `cscompratotal` group by `cscompratotal`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalotros`
--
DROP TABLE IF EXISTS `csdiatotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csdiatotalotros`  AS  select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total`,sum(`tbotros`.`entrada_total`) AS `SumaDeentrada_total` from `tbotros` group by `tbotros`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalst`
--
DROP TABLE IF EXISTS `csdiatotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csdiatotalst`  AS  select `tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`abono` AS `abono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha`,`tbserviciotecnico`.`abono` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalstentreg`
--
DROP TABLE IF EXISTS `csdiatotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csdiatotalstentreg`  AS  select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csdiatotalventas`
--
DROP TABLE IF EXISTS `csdiatotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csdiatotalventas`  AS  select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `TOTALVENTADIA` from `csventatotal` group by `csventatotal`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalentra`
--
DROP TABLE IF EXISTS `csmestotalentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalentra`  AS  select month(`cstotalentradia`.`fecha`) AS `Mes`,year(`cstotalentradia`.`fecha`) AS `year`,sum(`cstotalentradia`.`VAL_POSITIVO`) AS `TOTALMESENTRA` from `cstotalentradia` group by month(`cstotalentradia`.`fecha`),year(`cstotalentradia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalotros`
--
DROP TABLE IF EXISTS `csmestotalotros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalotros`  AS  select month(`csdiatotalotros`.`fecha`) AS `Mes`,year(`csdiatotalotros`.`fecha`) AS `year`,sum(`csdiatotalotros`.`SumaDesalida_total`) AS `MESTOTALSALIDA`,sum(`csdiatotalotros`.`SumaDeentrada_total`) AS `MESTOTALENTRA` from `csdiatotalotros` group by month(`csdiatotalotros`.`fecha`),year(`csdiatotalotros`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalsale`
--
DROP TABLE IF EXISTS `csmestotalsale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalsale`  AS  select month(`cstotalsaledia`.`fecha`) AS `Mes`,year(`cstotalsaledia`.`fecha`) AS `year`,sum(`cstotalsaledia`.`VAL_NEGATIVO`) AS `TOTALMESSALE` from `cstotalsaledia` group by month(`cstotalsaledia`.`fecha`),year(`cstotalsaledia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalst`
--
DROP TABLE IF EXISTS `csmestotalst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalst`  AS  select month(`csdiatotalst`.`fecha`) AS `Mes`,year(`csdiatotalst`.`fecha`) AS `year`,sum(`csdiatotalst`.`abono`) AS `SumaDeabono` from `csdiatotalst` group by month(`csdiatotalst`.`fecha`),year(`csdiatotalst`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalstentreg`
--
DROP TABLE IF EXISTS `csmestotalstentreg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalstentreg`  AS  select month(`csdiatotalstentreg`.`fecha`) AS `Mes`,year(`csdiatotalstentreg`.`fecha`) AS `year`,sum(`csdiatotalstentreg`.`SumaDesaldo_cancel`) AS `TOTALSALDOCANCEL` from `csdiatotalstentreg` group by month(`csdiatotalstentreg`.`fecha`),year(`csdiatotalstentreg`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csmestotalventas`
--
DROP TABLE IF EXISTS `csmestotalventas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csmestotalventas`  AS  select month(`csdiatotalventas`.`fecha`) AS `Mes`,year(`csdiatotalventas`.`fecha`) AS `year`,sum(`csdiatotalventas`.`TOTALVENTADIA`) AS `TOTALMESVENTAS` from `csdiatotalventas` group by month(`csdiatotalventas`.`fecha`),year(`csdiatotalventas`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csreposicion`
--
DROP TABLE IF EXISTS `csreposicion`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csreposicion`  AS  select `mov`.`idgeneral` AS `idreposicion`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `ingreso`,`mov`.`cantidad` AS `cantidad` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Reposicion') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csst`
--
DROP TABLE IF EXISTS `csst`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csst`  AS  select `tbserviciotecnico`.`numero_orden` AS `numero_orden`,`tbserviciotecnico`.`nombre` AS `nombre`,`tbserviciotecnico`.`marca` AS `marca`,`tbserviciotecnico`.`referencia` AS `referencia`,`tbserviciotecnico`.`descripcion_st` AS `descripcion_st`,`tbserviciotecnico`.`observacion` AS `observacion`,`tbserviciotecnico`.`precio_cliente` AS `precio_cliente`,`tbserviciotecnico`.`fecha` AS `fecha`,`tbserviciotecnico`.`id_cliente` AS `id_cliente`,`tbserviciotecnico`.`empleado` AS `empleado`,`tbserviciotecnico`.`abono` AS `abono`,(`tbserviciotecnico`.`precio_cliente` - `tbserviciotecnico`.`abono`) AS `SALDO_PENDIENTE` from `tbserviciotecnico` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalentradia`
--
DROP TABLE IF EXISTS `cstotalentradia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `cstotalentradia`  AS  select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VAL_POSITIVO` from `csuniondiaentra` group by `csuniondiaentra`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `cstotalsaledia`
--
DROP TABLE IF EXISTS `cstotalsaledia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `cstotalsaledia`  AS  select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondia`
--
DROP TABLE IF EXISTS `csuniondia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csuniondia`  AS  select `csuniondiaentra`.`fecha` AS `fecha`,sum(`csuniondiaentra`.`DIAENTRA`) AS `VALORES` from `csuniondiaentra` group by `csuniondiaentra`.`fecha` union all select `csuniondiasale`.`fecha` AS `fecha`,sum((`csuniondiasale`.`DIASALE` * -(1))) AS `VAL_NEGATIVO` from `csuniondiasale` group by `csuniondiasale`.`fecha` order by `fecha` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiaentra`
--
DROP TABLE IF EXISTS `csuniondiaentra`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csuniondiaentra`  AS  select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`entrada_total`) AS `DIAENTRA` from `tbotros` group by `tbotros`.`fecha` union all select `tbserviciotecnico`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`abono`) AS `SumaDeabono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha` union all select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` union all select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `SumaDeSumaDeSUBTOTAL` from `csventatotal` group by `csventatotal`.`fecha` union all select `tbminutos`.`fecha` AS `fecha`,sum(`tbminutos`.`venta`) AS `SumaDeMinutos` from `tbminutos` group by `tbminutos`.`fecha` union all select `tbrecargas`.`fecha` AS `fecha`,sum(`tbrecargas`.`venta_recarga`) AS `SumaDeRecargas` from `tbrecargas` group by `tbrecargas`.`fecha` union all select `tbrecargas`.`fecha` AS `fecha`,sum(`tbrecargas`.`utilidad`) AS `SumaDeRecargasUtil` from `tbrecargas` group by `tbrecargas`.`fecha` order by `fecha` desc ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiasale`
--
DROP TABLE IF EXISTS `csuniondiasale`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csuniondiasale`  AS  select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `DIASALE` from `cscompratotal` group by `cscompratotal`.`fecha` union all select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total` from `tbotros` group by `tbotros`.`fecha` union all select `tbminutos`.`fecha` AS `fecha`,sum(`tbminutos`.`compra`) AS `SumaDeMinutosCompra` from `tbminutos` group by `tbminutos`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotaldia`
--
DROP TABLE IF EXISTS `csutilidadtotaldia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csutilidadtotaldia`  AS  select `csuniondia`.`fecha` AS `fecha`,sum(`csuniondia`.`VALORES`) AS `UTILIDADDIA` from `csuniondia` group by `csuniondia`.`fecha` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csutilidadtotalmes`
--
DROP TABLE IF EXISTS `csutilidadtotalmes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csutilidadtotalmes`  AS  select month(`csutilidadtotaldia`.`fecha`) AS `Mes`,year(`csutilidadtotaldia`.`fecha`) AS `year`,sum(`csutilidadtotaldia`.`UTILIDADDIA`) AS `UTILIDADTOTALMES` from `csutilidadtotaldia` group by month(`csutilidadtotaldia`.`fecha`),year(`csutilidadtotaldia`.`fecha`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventa`
--
DROP TABLE IF EXISTS `csventa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csventa`  AS  select `tbventa`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,`tbventa`.`idempleado` AS `idempleado`,`tbempleado`.`nombre` AS `empleado`,`tbventa`.`idcliente` AS `idcliente`,`tbcliente`.`nombre` AS `nombre`,`tbcliente`.`detalle` AS `detalle` from (`tbempleado` join (`tbcliente` join `tbventa` on((`tbcliente`.`idcliente` = `tbventa`.`idcliente`))) on((`tbempleado`.`idempleado` = `tbventa`.`idempleado`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventaproductos`
--
DROP TABLE IF EXISTS `csventaproductos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csventaproductos`  AS  select `mov`.`idgeneral` AS `numero_venta`,`mov`.`referencia` AS `referencia`,`mov`.`valor` AS `precio_venta`,`mov`.`cantidad` AS `cantidad`,(`mov`.`valor` * -(`mov`.`cantidad`)) AS `SUBTOTAL` from `tbmovimiento` `mov` where (`mov`.`motivo` = 'Venta') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `csventatotal`
--
DROP TABLE IF EXISTS `csventatotal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`2135854_bdwold`@`%` SQL SECURITY DEFINER VIEW `csventatotal`  AS  select `csventaproductos`.`numero_venta` AS `numero_venta`,`tbventa`.`fecha` AS `fecha`,sum(`csventaproductos`.`SUBTOTAL`) AS `SumaDeSUBTOTAL` from (`tbventa` join `csventaproductos` on((`tbventa`.`numero_venta` = `csventaproductos`.`numero_venta`))) group by `csventaproductos`.`numero_venta`,`tbventa`.`fecha` ;

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
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbcompra`
--
ALTER TABLE `tbcompra`
  MODIFY `numero_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbminutos`
--
ALTER TABLE `tbminutos`
  MODIFY `idminutos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbminutosvalor`
--
ALTER TABLE `tbminutosvalor`
  MODIFY `idminutosvalor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbmovimiento`
--
ALTER TABLE `tbmovimiento`
  MODIFY `idmovimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
