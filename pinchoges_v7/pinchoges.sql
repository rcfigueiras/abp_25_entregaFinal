-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-12-2014 a las 08:21:56
-- Versión del servidor: 5.5.37-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Initialize the variable.
SET @Raiz = "/pinchoges_v5";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `PINCHOGES`
--

-- --------------------------------------------------------
DROP DATABASE IF EXISTS PINCHOGES;
CREATE DATABASE PINCHOGES;
USE PINCHOGES;

--
-- USER userpg
--

GRANT USAGE ON *.* TO 'userpg'@'localhost';
   DROP USER 'userpg'@'localhost';

CREATE USER 'userpg'@'localhost' IDENTIFIED BY  'userpg';

GRANT USAGE ON * . * TO  'userpg'@'localhost' IDENTIFIED BY  'userpg' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON  PINCHOGES . * TO  'userpg'@'localhost' WITH GRANT OPTION ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `ID_administrador` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_admin` char(30) NOT NULL,
  `contrasenha_admin` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_administrador`),
  UNIQUE KEY `nombre_admin` (`nombre_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID_administrador`, `nombre_admin`, `contrasenha_admin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asigna_pincho`
--

CREATE TABLE IF NOT EXISTS `asigna_pincho` (
  `ID_administrador` int(10) NOT NULL,
  `ID_jurPro` int(10) NOT NULL,
  `ID_pincho` int(10) NOT NULL,
  PRIMARY KEY (`ID_administrador`,`ID_jurPro`,`ID_pincho`),
  KEY `ID_jurPro` (`ID_jurPro`),
  KEY `ID_pincho` (`ID_pincho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo_pincho`
--

CREATE TABLE IF NOT EXISTS `codigo_pincho` (
  `ID_codigoPincho` int(10) NOT NULL AUTO_INCREMENT,
  `ID_estab` int(10) NOT NULL,
  `ID_pincho` int(10) NOT NULL,
  PRIMARY KEY (`ID_codigoPincho`,`ID_estab`,`ID_pincho`),
  KEY `ID_estab` (`ID_estab`),
  KEY `ID_pincho` (`ID_pincho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comenta`
--

CREATE TABLE IF NOT EXISTS `comenta` (
  `ID_jurPop` int(10) NOT NULL,
  `ID_pincho` int(10) NOT NULL,
  `comentario` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID_jurPop`,`ID_pincho`),
  KEY `ID_pincho` (`ID_pincho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE IF NOT EXISTS `establecimiento` (
  `ID_estab` int(10) NOT NULL AUTO_INCREMENT,
  `ID_administrador` int(10) NOT NULL,
  `nombre_estab` char(20) NOT NULL,
  `contrasenha_estab` varchar(15) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `coordenadas` varchar(100) NOT NULL,
  `comunicacion` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`ID_estab`),
  UNIQUE KEY `nombre_estab` (`nombre_estab`),
  KEY `ID_administrador` (`ID_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`ID_estab`, `ID_administrador`, `nombre_estab`, `contrasenha_estab`, `direccion`, `coordenadas`, `comunicacion`) VALUES
(8, 1, 'plaza', 'plaza', 'avenida de santiago nº 2', '41 24.2028, 2 10.4418', 'Pincho pendiente de ser validado.'),
(9, 1, 'estacion', 'estacion', 'calle de la estacion nº 22', '41 24.4256, 2 10.1598', 'Pincho pendiente de ser validado.'),
(10, 1, 'roda', 'roda', 'rua nova nº 5', '41 25.7548, 2 32.3758', 'Pincho pendiente de ser validado.'),
(12, 1, 'mou', 'mou', 'venito vicetto nº 6', '14 25.7582, 2 10.4521', 'Pincho pendiente de ser validado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE IF NOT EXISTS `ingredientes` (
  `nombre_ingrediente` char(20) NOT NULL,
  `ID_pincho` int(10) NOT NULL,
  PRIMARY KEY (`nombre_ingrediente`,`ID_pincho`),
  KEY `ID_pincho` (`ID_pincho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurado_popular`
--

CREATE TABLE IF NOT EXISTS `jurado_popular` (
  `ID_juradoPopular` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_jurPop` char(30) NOT NULL,
  `contrasenha_jurPop` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_juradoPopular`),
  UNIQUE KEY `nombre_jurPop` (`nombre_jurPop`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `jurado_popular`
--

INSERT INTO `jurado_popular` (`ID_juradoPopular`, `nombre_jurPop`, `contrasenha_jurPop`) VALUES
(1, 'popular', 'popular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jurado_profesional`
--

CREATE TABLE IF NOT EXISTS `jurado_profesional` (
  `ID_juradoProfesional` int(10) NOT NULL AUTO_INCREMENT,
  `ID_administrador` int(10) NOT NULL,
  `nombre_jurPro` char(30) NOT NULL,
  `contrasenha_jurPro` varchar(15) NOT NULL,
  `profesion` varchar(20) DEFAULT NULL,
  `cache` float DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_juradoProfesional`),
  UNIQUE KEY `nombre_jurPro` (`nombre_jurPro`),
  KEY `ID_administrador` (`ID_administrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `jurado_profesional`
--

INSERT INTO `jurado_profesional` (`ID_juradoProfesional`, `ID_administrador`, `nombre_jurPro`, `contrasenha_jurPro`, `profesion`, `cache`, `estado`) VALUES
(1, 1, 'profesional', 'profesional', NULL, NULL, 1),
(2, 1, 'profesional2', 'profesional2', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `ID_estab` int(10) NOT NULL,
  `cod_mensaje` int(10) NOT NULL,
  `contenido` varchar(10000) DEFAULT NULL,
  `remitente` char(30) DEFAULT NULL,
  PRIMARY KEY (`ID_estab`,`cod_mensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patrocinadores`
--

CREATE TABLE IF NOT EXISTS `patrocinadores` (
  `nombre_patrocinador` char(20) NOT NULL,
  `nombre_concurso` char(20) NOT NULL,
  PRIMARY KEY (`nombre_patrocinador`,`nombre_concurso`),
  KEY `nombre_concurso` (`nombre_concurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pincho`
--

CREATE TABLE IF NOT EXISTS `pincho` (
  `ID_pincho` int(10) NOT NULL AUTO_INCREMENT,
  `ID_administrador` int(10) NOT NULL,
  `ID_estab` int(10) NOT NULL,
  `nombre_pincho` char(20) NOT NULL,
  `tipo` enum('frio','caliente') NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `precio` float NOT NULL,
  `foto` varchar(100) NOT NULL,
  `horario` enum('almuerzo','cena','almuerzo/cena') NOT NULL,
  `pincho_validado` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID_pincho`),
  UNIQUE KEY `nombre_pincho` (`nombre_pincho`),
  KEY `ID_administrador` (`ID_administrador`),
  KEY `ID_estab` (`ID_estab`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=125 ;

--
-- Volcado de datos para la tabla `pincho`
--

INSERT INTO `pincho` (`ID_pincho`, `ID_administrador`, `ID_estab`, `nombre_pincho`, `tipo`, `descripcion`, `precio`, `foto`, `horario`, `pincho_validado`) VALUES
(121, 1, 8, 'pizza', 'frio', 'pizza cuatro estaciones especial', 3, '/pinchoges_v5/src/imagenes/pizza.jpg', 'almuerzo', 0),
(122, 1, 9, 'tosta de jamon', 'frio', 'tosta de jamon con aceite de oliva', 2, '/pinchoges_v5/src/imagenes/tosta.jpg', 'cena', 0),
(123, 1, 10, 'bacalao', 'caliente', 'bacalao al pinpin', 3, '/pinchoges_v5/src/imagenes/pizza.jpg', 'almuerzo/cena', 0),
(124, 1, 12, 'tempura de verduras', 'caliente', 'tempura de verduras de temporada', 1, '/pinchoges_v5/src/imagenes/tempura.jpg', 'almuerzo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinchoges`
--

CREATE TABLE IF NOT EXISTS `pinchoges` (
  `nombre_consurso` char(20) NOT NULL,
  `ID_administrador` int(10) NOT NULL,
  `bases` varchar(100) DEFAULT NULL,
  `logotipo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nombre_consurso`),
  KEY `ID_administrador` (`ID_administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pinchoges`
--

INSERT INTO `pinchoges` (`nombre_consurso`, `ID_administrador`, `bases`, `logotipo`) VALUES
('Outono Ourense', 1, '/pinchoges_v5/src/docs/bases.pdf', '/pinchoges_v5/src/imagenes/logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazos`
--

CREATE TABLE IF NOT EXISTS `plazos` (
  `nombre_plazo` char(20) NOT NULL,
  `nombre_concurso` char(20) NOT NULL,
  `inicio_plazo` date DEFAULT NULL,
  `fin_plazo` date DEFAULT NULL,
  PRIMARY KEY (`nombre_plazo`,`nombre_concurso`),
  KEY `nombre_concurso` (`nombre_concurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE IF NOT EXISTS `valoracion` (
  `ID_pincho` int(10) NOT NULL,
  `ID_valoracion` int(10) NOT NULL AUTO_INCREMENT,
  `ID_juradoPro` int(10) DEFAULT NULL,
  `ID_juradoPop` int(10) DEFAULT NULL,
  `ID_administrador` int(10) NOT NULL,
  `nota` float DEFAULT NULL,
  `comentario_val` varchar(1000) DEFAULT NULL,
  `voto` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_pincho`,`ID_valoracion`),
  KEY `ID_juradoPro` (`ID_juradoPro`),
  KEY `ID_juradoPop` (`ID_juradoPop`),
  KEY `ID_administrador` (`ID_administrador`),
  KEY `ID_valoracion` (`ID_valoracion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asigna_pincho`
--
ALTER TABLE `asigna_pincho`
  ADD CONSTRAINT `asigna_pincho_ibfk_1` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asigna_pincho_ibfk_2` FOREIGN KEY (`ID_jurPro`) REFERENCES `jurado_profesional` (`ID_juradoProfesional`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asigna_pincho_ibfk_3` FOREIGN KEY (`ID_pincho`) REFERENCES `pincho` (`ID_pincho`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `codigo_pincho`
--
ALTER TABLE `codigo_pincho`
  ADD CONSTRAINT `codigo_pincho_ibfk_1` FOREIGN KEY (`ID_estab`) REFERENCES `establecimiento` (`ID_estab`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo_pincho_ibfk_2` FOREIGN KEY (`ID_pincho`) REFERENCES `pincho` (`ID_pincho`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comenta`
--
ALTER TABLE `comenta`
  ADD CONSTRAINT `comenta_ibfk_1` FOREIGN KEY (`ID_jurPop`) REFERENCES `jurado_popular` (`ID_juradoPopular`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comenta_ibfk_2` FOREIGN KEY (`ID_pincho`) REFERENCES `pincho` (`ID_pincho`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD CONSTRAINT `establecimiento_ibfk_1` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`ID_pincho`) REFERENCES `pincho` (`ID_pincho`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jurado_profesional`
--
ALTER TABLE `jurado_profesional`
  ADD CONSTRAINT `jurado_profesional_ibfk_1` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`ID_estab`) REFERENCES `establecimiento` (`ID_estab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `patrocinadores`
--
ALTER TABLE `patrocinadores`
  ADD CONSTRAINT `patrocinadores_ibfk_1` FOREIGN KEY (`nombre_concurso`) REFERENCES `pinchoges` (`nombre_consurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pincho`
--
ALTER TABLE `pincho`
  ADD CONSTRAINT `pincho_ibfk_1` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pincho_ibfk_2` FOREIGN KEY (`ID_estab`) REFERENCES `establecimiento` (`ID_estab`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pinchoges`
--
ALTER TABLE `pinchoges`
  ADD CONSTRAINT `pinchoges_ibfk_1` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `plazos`
--
ALTER TABLE `plazos`
  ADD CONSTRAINT `plazos_ibfk_1` FOREIGN KEY (`nombre_concurso`) REFERENCES `pinchoges` (`nombre_consurso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`ID_pincho`) REFERENCES `pincho` (`ID_pincho`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`ID_juradoPro`) REFERENCES `jurado_profesional` (`ID_juradoProfesional`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_ibfk_3` FOREIGN KEY (`ID_juradoPop`) REFERENCES `jurado_popular` (`ID_juradoPopular`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `valoracion_ibfk_4` FOREIGN KEY (`ID_administrador`) REFERENCES `administrador` (`ID_administrador`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
