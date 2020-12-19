-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-12-2020 a las 03:58:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Disney`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Capasidad`
--

CREATE TABLE `Capasidad` (
  `idcapasidad` int(11) NOT NULL,
  `cantidadAdultos` int(11) DEFAULT NULL,
  `cantidadMenores` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombreCliente` varchar(20) DEFAULT NULL,
  `emailCliente` varchar(20) DEFAULT NULL,
  `telefonoCliente` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombreCliente`, `emailCliente`, `telefonoCliente`, `pass`) VALUES
(18, 'Carlos', 'mail@mali.com', '9392777333', 'nf6WahFGqJBqVbM'),
(19, 'Carlos', 'mail1@mali.com', '9392777333', 'nf6WahFGqJBqVbM'),
(20, '', '', '', 'nf6WahFGqJBqVbM'),
(21, '', 'l', '', 'nf6WahFGqJBqVbM'),
(22, 'dffd', 'c az', 'x cxdzc ', 'nf6WahFGqJBqVbM'),
(23, 'asaa', 'mairrl@mali.com', 'zCXZsac', 'nf6WahFGqJBqVbM'),
(24, 'EWRFGWER', 'gmAIL@HHH.COM', 'WERGERG', 'nf6WahFGqJBqVbM'),
(25, 'egereg', 'eare@ww.com', 'rfgrge', 'nf6WahFGqJBqVbM'),
(26, 'tghtrhtr', 'carlos@mail.com', 'fdagrfadg', 'nf6WahFGqJBqVbM'),
(27, 'Carlos', 'aaabbb@mail.com', '9392777333', 'nLzrh4hUjcxZC3X'),
(28, 'Carlos', 'abcde@mail.com', '1234564', 'nf6WahFGqJBqVbM'),
(29, 'fffffff', '1234@mail.com', '4444', 'nf6WahFGqJBqVbM'),
(30, 'aevfgvbasdfgvbsdf', 'dsvadfdsa@mail.com', 'vasdjcsdk', 'nf6WahFGqJBqVbM'),
(31, 'ghedngtrhnrtgh', 'jjjj@mali.com', 'dwsrew', 'nf6WahFGqJBqVbM'),
(32, 'fdagvbbvfsadsf', 'ddddddd@mail.com', 'dfssdfsd', 'nf6WahFGqJBqVbM'),
(33, 'rerjtjrt', 'jresrrrt@mailo.com', 'fabg', 'nf6WahFGqJBqVbM'),
(34, 'Carlos', 'hola@mail.com', 'gsbntghn', 'nf6WahFGqJBqVbM'),
(35, 'fgbsadfghf', 'coreo@correo.com', 'ffrgbfgb', 'nf6WahFGqJBqVbM'),
(36, 'fagvbsdfsdf', 'hhh@mail.com', 'SVSDFGVDF', 'nf6WahFGqJBqVbM'),
(37, 'carlos', 'mail@mail.com', 'fddbadab', 'nf6WahFGqJBqVbM'),
(38, 'dbdfb', 'fdabdf', 'fdabdf', 'nf6WahFGqJBqVbM'),
(39, 'AFBFB', 'DFBDFB', 'FDABDF', 'nf6WahFGqJBqVbM'),
(40, 'VDSVDSAV', 'ASCV', 'DSAVD', 'nf6WahFGqJBqVbM'),
(41, 'gbsfdabdfb', 'fdbdfbf', 'fdabdfb', 'nf6WahFGqJBqVbM'),
(42, 'nuevo', 'nuevo@mail.com', '12314256', 'nf6WahFGqJBqVbM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `idoferta` int(11) NOT NULL,
  `nombreOferta` varchar(20) DEFAULT NULL,
  `descripcionOferta` text NOT NULL,
  `precio` decimal(15,2) DEFAULT NULL,
  `fechavigencia` date DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFinal` date DEFAULT NULL,
  `direccion` longtext DEFAULT NULL,
  `idCapasidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`idoferta`, `nombreOferta`, `descripcionOferta`, `precio`, `fechavigencia`, `video`, `imagen`, `fechaInicio`, `fechaFinal`, `direccion`, `idCapasidad`) VALUES
(51, 'Primera  ', 'Loved the stay at Westgate Lakes Loved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate Lakes ', '20.00', '2020-11-04', 'upload/Overview Walt Disney World Resort Vacation Planning Video (1 of 14).mp4', 'upload/FB_IMG_1604261046823.jpg', NULL, NULL, NULL, 0),
(52, 'Segunda ', 'bveabvearhbbb veabvearhbbbveabvea rhbbbveabve arhbbbveabv earhbbbvea bvearhbb ', '60.00', '2020-11-11', 'upload/Walt Disney World Resort Destination Promo Video (2020).mp4', 'upload/FB_IMG_1603936971217.jpg', NULL, NULL, NULL, 0),
(53, 'vfdavdsfv ', '              vdafsvsdfvsdfvsd ', '50.00', '2020-11-04', 'upload/Overview Walt Disney World Resort Vacation Planning Video (1 of 14).mp4', 'upload/104415979_150043249943940_4183642639220741989_o.jpg', NULL, NULL, NULL, 0),
(54, 'fvasdvbsdfvbsdf ', '              dfsvasvsavsd ', '33.00', '2020-11-03', 'upload/Walt Disney World Resort Destination Promo Video (2020).mp4', 'upload/arbol.jpeg', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reservacion`
--

CREATE TABLE `Reservacion` (
  `idreservacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idOferta` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Capasidad`
--
ALTER TABLE `Capasidad`
  ADD PRIMARY KEY (`idcapasidad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idoferta`);

--
-- Indices de la tabla `Reservacion`
--
ALTER TABLE `Reservacion`
  ADD PRIMARY KEY (`idreservacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Capasidad`
--
ALTER TABLE `Capasidad`
  MODIFY `idcapasidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idoferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Reservacion`
--
ALTER TABLE `Reservacion`
  MODIFY `idreservacion` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
