create database Disney


	CREATE TABLE ofertas (
		-- El id que se generara automáticamente cada ves que se ingrese un nuevo registro
		idoferta int NOT NULL AUTO_INCREMENT,
		-- Nombre de la oferta para que los humanos lo entiendan 
		nombreOferta varchar(20), 
		--  esta sera la descripción de la oferta 
		descripcionOferta TEXT NOT NULL,
		--  Precio de la oferta 
		precio decimal(15,2),
		-- Fecha de vigencia del oferta 
		fechavigencia DATETIME,    
		--  solo determina que la palabra id oferta sera en campo de llave primaria 
		PRIMARY KEY (idoferta)

); 