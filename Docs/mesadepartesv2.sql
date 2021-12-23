-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-12-2021 a las 17:38:38
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `nombre_dep`, `responsable_dep`, `user_dep`, `est`) VALUES
(1, 'Instalacion', 'Marco', 'marcossss@test.com', 1),
(2, 'Recursos Humanos', 'Luis', 'luis@test.com', 1),
(3, 'Soporte', 'Alan', 'Alan@test.com', 1),
(4, 'Instalacion', 'Marco123', 'marcossss@test.com', 0),
(5, 'Desarrollo', 'Margarita', 'mag@test.com', 1),
(6, 'prueba1', 'prueba', 'prueba', 0),
(7, 'RH', 'Marco', 'prueba', 0),
(8, 'pruebafine', 'prueba3', 'prueba3', 0),
(9, 'Instalacion', 'prueba', 'prueba', 0),
(10, 'prueba333333', 'Marco', 'prueba3', 0),
(11, 'Desarrollo2222', 'prueba3', 'marcossss@test.com', 0),
(12, 'nuevo nuevo', 'nuevo x2', 'vueco 22', 0),
(13, 'Finanzas', 'Cristobal', 'cristo@test.com', 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `nombre`, `dias`, `horas`, `est`) VALUES
(1, 'hoario3', 'sabado/domingo', '9', 1),
(3, 'hoario1', 'lunes-miercoes', '15', 1),
(2, 'hoario2', 'sabado/domingo', '10', 1),
(4, 'hoario4', 'martes- miercoles', '5', 0),
(5, 'hoario5', 'martes', '50', 0),
(6, 'pruebaqqqq', 'nuevo', 'nuevo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_menu`
--

DROP TABLE IF EXISTS `tm_menu`;
CREATE TABLE IF NOT EXISTS `tm_menu` (
  `men_id` int(11) NOT NULL AUTO_INCREMENT,
  `men_ruta` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `men_icon` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `men_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`men_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_menu`
--

INSERT INTO `tm_menu` (`men_id`, `men_ruta`, `men_icon`, `men_nom`, `est`) VALUES
(1, '../NuevoRegistro/', 'si si-compass', 'Nuevo Registro modificado', 1),
(2, '../ConsultarStatus/', 'si si-puzzle', 'Consultar Status', 1),
(3, '#', 'fa fa-database', 'Test', 0),
(4, 'tesdt', 'test', 'test', 0),
(5, 'zzz', 'www', 'ccc', 0),
(6, 'asd', 'asd', 'az', 0),
(7, 'aa', 'aa', 'aa', 0),
(8, 'vvxc', 'xcvxc', 'xcvxcv', 0),
(9, 'asdasd', 'asdasd', 'asdasdasd', 0),
(10, 'xaswx', 'xewx', 'xex', 0),
(11, 'horario2', 'Sabado-domingo', 'luis', 1),
(12, 'iurehifcer', 'sssss', 'sssssssssssssssss', 0),
(13, 'iurehifcer', 'xqwx', 'xex', 1),
(14, '../NuevoRegistro/', 'chido', 'xex', 0),
(15, 'iurehifcer', 'crecrec', 'xex', 0),
(16, 'xwqx', 'xqwx', 'crcrc', 0),
(17, 'uanitos bvananas', 'crecrec', 'xex', 0),
(18, 'aa', 'aaaa', 'aaaaa', 0),
(19, 'eeeee', 'eeee', 'eeee', 1),
(20, 'iii', 'iiii', 'iiii', 0),
(22, 'lorena', 'cervera', 'canchola', 0),
(23, 'aa', 'cervera', 'can elloco', 0),
(24, 'luis falcomn', 'luis', 'luis', 0),
(25, 'pooooooooooooooo', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 0),
(26, 'luis', 'aaaaaaaaaaaa', 'luis', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

DROP TABLE IF EXISTS `tm_usuario`;
CREATE TABLE IF NOT EXISTS `tm_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ape` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `usu_pass` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` date DEFAULT NULL,
  `fech_modi` date DEFAULT NULL,
  `fech_elim` date DEFAULT NULL,
  `est` int(11) NOT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla Usuario';

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_ape`, `usu_correo`, `usu_pass`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(14, 'Davis', 'Anderson', 'davis_anderson_87@hotmail.com', '123456', NULL, NULL, NULL, 1),
(15, 'juan', 'yebra', 'juande_yebra@outlook.es', '12345', '2021-12-15', '2021-12-15', '2021-12-15', 1),
(16, 'Juan de Dios', 'Yebra', 'test@test.com', '123', '2021-12-17', '2021-12-17', '2021-12-17', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
