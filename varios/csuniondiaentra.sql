-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2016 a las 04:01:57
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
-- Estructura para la vista `csuniondiaentra`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `csuniondiaentra`  AS  select `tbotros`.`fecha` AS `fecha`,sum(`tbotros`.`entrada_total`) AS `DIAENTRA` from `tbotros` group by `tbotros`.`fecha` union all select `tbserviciotecnico`.`fecha` AS `fecha`,sum(`tbserviciotecnico`.`abono`) AS `SumaDeabono` from `tbserviciotecnico` group by `tbserviciotecnico`.`fecha` union all select `tbservicioentregado`.`fecha` AS `fecha`,sum(`tbservicioentregado`.`saldo_cancel`) AS `SumaDesaldo_cancel` from `tbservicioentregado` group by `tbservicioentregado`.`fecha` union all select `csventatotal`.`fecha` AS `fecha`,sum(`csventatotal`.`SumaDeSUBTOTAL`) AS `SumaDeSumaDeSUBTOTAL` from `csventatotal` group by `csventatotal`.`fecha` union all select `tbminutos`.`fecha` AS `fecha`,sum(`tbminutos`.`venta`) AS `SumaDeMinutos` from `tbminutos` group by `tbminutos`.`fecha` union all select `tbrecargas`.`fecha` AS `fecha`,sum(`tbrecargas`.`venta_recarga`) AS `SumaDeRecargas` from `tbrecargas` group by `tbrecargas`.`fecha` union all select `tbrecargas`.`fecha` AS `fecha`,sum(`tbrecargas`.`utilidad`) AS `SumaDeRecargasUtil` from `tbrecargas` group by `tbrecargas`.`fecha` order by `fecha` desc ;

--
-- VIEW  `csuniondiaentra`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
