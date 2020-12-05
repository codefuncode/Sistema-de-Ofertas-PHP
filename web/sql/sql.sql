create database Disney


	CREATE TABLE ofertas (
		-- El id que se generara automáticamente cada ves que se ingrese un nuevo registro
		idoferta int NOT NULL AUTO_INCREMENT,
		-- Nombre de la oferta para que los humanos lo entiendan 
		nombreOferta varchar(20), 
		-- Esta sera la descripción de la oferta 
		descripcionOferta TEXT NOT NULL,
		-- Precio de la oferta 
		precio decimal(15,2),
		-- Fecha de vigencia del oferta 
		fechavigencia DATE, 
		-- Enlaces de las rutas a los ficheros multimedia 
		video  varchar(100),
		imagen  varchar(100),  
		-- Solo determina que la palabra id oferta sera en campo de llave primaria 
		PRIMARY KEY (idoferta)

); 
	CREATE TABLE cliente (
		-- El id que se generara automáticamente cada ves que se ingrese un nuevo registro
		idcliente int NOT NULL AUTO_INCREMENT,
		-- Nombre de la oferta para que los humanos lo entiendan 
		nombreCliente varchar(20), 
		emailCliente varchar(20), 
		telefonoCliente varchar(20), 
		-- Esta sera la descripción de la oferta 
		idOferta int NOT NULL,
	PRIMARY KEY (idcliente)

); 

	CREATE TABLE reservacion (

		idreservacion NOT NULL AUTO_INCREMENT,
		idcliente int,
		idoferta int,
		fecha DATE,
		PRIMARY KEY (idreservacion)
	);








	
	