-- By Cristian Jaramillo
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
--
-- Base de datos: `formulario`
-- 
CREATE DATABASE `prueba` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `prueba`;
-- 
-- Estructura de tabla para la tabla `cliente`
--
CREATE TABLE `cliente` (
  `id_cliente` int(9) NOT NULL auto_increment,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;