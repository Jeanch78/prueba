CREATE DATABASE webgaw
    DEFAULT CHARACTER SET utf8;

use webgaw;
CREATE TABLE usuarios(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL,
	email VARCHAR(255) NOT NULL,
	clave VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE entradas(
    id INT NOT NULL UNIQUE AUTO_INCREMENT,
    autor_id INT NOT NULL,
    url VARCHAR(255) NOT NULL UNIQUE,
    titulo VARCHAR(255) NOT NULL UNIQUE,
    texto TEXT CHARACTER SET utf8 NOT NULL,
    fecha DATETIME NOT NULL,
    activa TINYINT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(autor_id)
    references usuarios(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);
CREATE TABLE comentarios(
    id INT NOT NULL AUTO_INCREMENT,
    autor_id INT NOT NULL,
    entrada_id INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    texto TEXT CHARACTER SET utf8 NOT NULL,
    fecha DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(autor_id)
    references usuarios(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    FOREIGN KEY(entrada_id)
    references entradas(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

