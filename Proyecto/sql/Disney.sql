

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombreCliente` varchar(20) DEFAULT NULL,
  `emailCliente` varchar(20) DEFAULT NULL,
  `telefonoCliente` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `ofertas` (
  `idoferta` int(11) NOT NULL,
  `nombreOferta` varchar(20) DEFAULT NULL,
  `descripcionOferta` text NOT NULL,
  `precio` decimal(15,2) DEFAULT NULL,
  `fechavigencia` date DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `Reservacion` (
  `idreservacion` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idOferta` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);


ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`idoferta`);


ALTER TABLE `Reservacion`
  ADD PRIMARY KEY (`idreservacion`);


ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `ofertas`
  MODIFY `idoferta` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `Reservacion`
  MODIFY `idreservacion` int(11) NOT NULL AUTO_INCREMENT;

