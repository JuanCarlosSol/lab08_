CREATE DATABASE EVAL02

USE EVAL02

CREATE TABLE Producto(Producto_id INT PRIMARY KEY AUTO_INCREMENT,
Nombre VARCHAR (80) NOT NULL,
Descripcion VARCHAR (250) NOT NULL,
Stock INT NOT NULL,
PrecioVenta DECIMAL(6,2));

INSERT INTO Producto(Nombre,Descripcion,Stock,PrecioVenta)
VALUES ('Alternador','Compatible con Scooter150',20,35.90);


SELECT * FROM PRODUCTO

DROP TABLE PRODUCTO