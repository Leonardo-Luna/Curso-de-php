CREATE DATABASE IF NOT EXISTS `inventario`;

USE `inventario`;

CREATE TABLE `usuario`
(
    `usuario_id` INT NOT NULL AUTO_INCREMENT,
    `usuario_nombre` VARCHAR(40) NOT NULL,
    `usuario_apellido` VARCHAR(40) NOT NULL,
    `usuario_usuario` VARCHAR(20) NOT NULL,
    `usuario_email` VARCHAR(255) NOT NULL,
    `usuario_clave` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`usuario_id`)
);

CREATE TABLE `categoria`
(
    `categoria_id` INT NOT NULL AUTO_INCREMENT,
    `categoria_nombre` VARCHAR(50) NOT NULL,
    `categoria_ubicacion` VARCHAR(150) NOT NULL,
    PRIMARY KEY (`categoria_id`)
);

CREATE TABLE `producto`
(
    `producto_id` INT NOT NULL AUTO_INCREMENT,
    `producto_codigo` VARCHAR(70) NOT NULL,
    `producto_nombre` VARCHAR(100) NOT NULL,
    `producto_precio` DECIMAL(30,2) NOT NULL,
    `producto_stock` INT NOT NULL,
    `producto_foto` VARCHAR(500) NOT NULL,
    `usuario_id` INT NOT NULL,
    `categoria_id` INT NOT NULL,
    PRIMARY KEY (`producto_id`),
    FOREIGN KEY (`usuario_id`) REFERENCES `usuario`(`usuario_id`),
    FOREIGN KEY (`categoria_id`) REFERENCES `categoria`(`categoria_id`)
);