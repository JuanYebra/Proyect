-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-01-2022 a las 13:55:21
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesadepartes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_dep` varchar(200) NOT NULL,
  `responsable_dep` varchar(200) NOT NULL,
  `user_dep` varchar(200) NOT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `nombre_dep`, `responsable_dep`, `user_dep`, `est`) VALUES
(1, 'Instalacion', 'Marco', 'marco@test.com', 1),
(2, 'Recursos Humanos', 'Luis', 'luis@test.com', 1),
(3, 'Soporte', 'Alan', 'Alan@test.com', 1),
(5, 'Desarrollo', 'Margarita', 'mag@test.com', 1),
(13, 'Finanzas', 'Cristobal', 'cristo@test.com', 1),
(17, 'Dirección', 'Luis', 'luis@test.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_empleado` int(11) NOT NULL,
  `nombre_emp` varchar(200) NOT NULL,
  `ape_pat` varchar(200) NOT NULL,
  `ape_mat` varchar(200) NOT NULL,
  `departamento` varchar(200) DEFAULT NULL,
  `horario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`emp_id`, `no_empleado`, `nombre_emp`, `ape_pat`, `ape_mat`, `departamento`, `horario`) VALUES
(1, 12, 'Juan', 'Yebra', 'Navarro', 'Desarrollo', 'horario2'),
(2, 10, 'Claudia', 'Cervera', 'Canchola', 'Desarrollo', 'horario3'),
(4, 11, 'Luis', 'Falcon', 'Falcon', 'Dirección', 'horario1'),
(5, 13, 'Alejandro', 'sepa', 'dostop', 'Finanzas', 'horario4'),
(6, 14, 'Alan', 'sabe', 'sepa', 'Soporte', 'horario1'),
(20, 15, 'Margarita', 'Sierra', 'Muñoz', 'Dirección', 'horario1'),
(28, 4, 'miriam', 'hernandez', 'herrera', 'Desarrollo', 'horario1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE IF NOT EXISTS `horario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `dias` varchar(200) NOT NULL,
  `horas` varchar(200) NOT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `nombre`, `dias`, `horas`, `est`) VALUES
(1, 'horario1', 'sabado/domingo', '9', 1),
(2, 'horario3', 'sabado/domingo', '10', 1),
(3, 'horario2', 'lunes-miercoes', '15', 1),
(4, 'hoario4', 'martes- miercoles', '5', 0),
(5, 'hoario5', 'martes', '50', 0),
(6, 'pruebaqqqq', 'nuevo', 'nuevo', 0),
(7, 'horario4', 'lunes/viernes', '25', 1),
(8, 'cdxaewscwes', 'xcwsecxwe', 'xcewxwe', 0),
(9, 'ss3s', 's3s3s', 's3s3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(150) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nom` varchar(150) NOT NULL,
  `usu_ape` varchar(150) NOT NULL,
  `usu_ape_mat` varchar(150) NOT NULL,
  `usu_correo` varchar(150) NOT NULL,
  `usu_pass` varchar(150) NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `rol_id` int(11) NOT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`usu_id`),
  KEY `fkidrol` (`rol_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_ape_mat`, `usu_correo`, `usu_pass`, `fech_crea`, `rol_id`, `est`) VALUES
(1, 'Juan', 'Yebra', 'Navarro', 'juan@test.com', '123', '2022-01-02', 1, 1),
(2, 'Lorena', 'Cervera', 'Canchola', 'lore@test.com', '123', '2022-01-05', 1, 1),
(3, 'Luis', 'Falcon', 'Falcon', 'luis@test.com', '123', '2022-01-06', 2, 1),
(39, 'Margarita', 'Sierra', 'Muñoz', 'mag@test.com', '123', '2022-01-06', 2, 1),
(41, 'xexex', 'xexe', 'Falcon', 'xexex@exe.com', '123', '2022-01-06', 2, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
