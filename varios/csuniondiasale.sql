-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2016 a las 04:02:12
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

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
-- Estructura para la vista `csuniondiasale`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiasale`  AS  select `cscompratotal`.`fecha` AS `fecha`,sum(`cscompratotal`.`SumaDeSUBTOTAL`) AS `DIASALE` from `cscompratotal` group by `cscompratotal`.`fecha` union all select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`salida_total`) AS `SumaDesalida_total` from `tbotros` group by `tbotros`.`fecha` union all select `tbminutos`.`fecha` AS `fecha`,sum(`tbminutos`.`compra`) AS `SumaDeMinutosCompra` from `tbminutos` group by `tbminutos`.`fecha` ;

--
-- VIEW  `csuniondiasale`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
