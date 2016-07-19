-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2016 a las 19:10:39
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdwoldbetav1`
--

-- --------------------------------------------------------

--
-- Estructura para la vista `csuniondiaentra`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiaentra` AS select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`entrada_total`) AS `DIAENTRA` from `tbotros` group by `tbotros`.`fecha` union all select `tbserviciotecnico`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`abono`) AS `SumaDeabono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha` union all select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` union all select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `SumaDeSumaDeSUBTOTAL` from `csventatotal` group by `csventatotal`.`fecha` union all select `tbminutos`.`fecha` AS `fecha`,sum(`tbminutos`.`venta`) AS `SumaDeMinutos` from `tbminutos` group by `tbminutos`.`fecha` order by `fecha` desc;

--
-- VIEW  `csuniondiaentra`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
