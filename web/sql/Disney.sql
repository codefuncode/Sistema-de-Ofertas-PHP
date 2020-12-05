

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombreCliente` varchar(20) DEFAULT NULL,
  `emailCliente` varchar(20) DEFAULT NULL,
  `telefonoCliente` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `idOferta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

-- INSERT INTO `cliente` (`idcliente`, `nombreCliente`, `emailCliente`, `telefonoCliente`, `pass`, `idOferta`) VALUES
-- (1, 'drgvAWS', 'sdvasdrgvwe', 'DRGVSEGSE', NULL, '51'),
-- (2, 'Carlos', 'aleman@mail.com', '12313231234', NULL, '51'),
-- (3, 'Ofgerta  corecta', 'vbqagvbeq', 'erqagvberfg', NULL, '54'),
-- (9, 'Hola 1111', '123@gmail.com', 'swqcwsqcw', NULL, '51'),
-- (10, 'saCFSCV', 'cqCQCWE@HOLA.COM', 'SACvcws', NULL, '52'),
-- (11, 'sdvrdgvbs', 'frgbeaRG@GOOGLE.COM', 'D ABNB', NULL, '51');

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
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ofertas`
--

-- INSERT INTO `ofertas` (`idoferta`, `nombreOferta`, `descripcionOferta`, `precio`, `fechavigencia`, `video`, `imagen`) VALUES
-- (51, 'Primera  ', 'Loved the stay at Westgate Lakes Loved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate LakesLoved the stay at Westgate Lakes ', '20.00', '2020-11-04', 'upload/Overview Walt Disney World Resort Vacation Planning Video (1 of 14).mp4', 'upload/FB_IMG_1604261046823.jpg'),
-- (52, 'Segunda ', 'bveabvearhbbb veabvearhbbbveabvea rhbbbveabve arhbbbveabv earhbbbvea bvearhbb ', '60.00', '2020-11-11', 'upload/Walt Disney World Resort Destination Promo Video (2020).mp4', 'upload/FB_IMG_1603936971217.jpg'),
-- (53, 'vfdavdsfv ', '              vdafsvsdfvsdfvsd ', '50.00', '2020-11-04', 'upload/Overview Walt Disney World Resort Vacation Planning Video (1 of 14).mp4', 'upload/104415979_150043249943940_4183642639220741989_o.jpg'),
-- (54, 'fvasdvbsdfvbsdf ', '              dfsvasvsavsd ', '33.00', '2020-11-03', 'upload/Walt Disney World Resort Destination Promo Video (2020).mp4', 'upload/arbol.jpeg');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `idoferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
