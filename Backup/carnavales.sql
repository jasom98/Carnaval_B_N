-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2019 a las 05:06:04
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carnavales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrozas`
--

CREATE TABLE `carrozas` (
  `item` bigint(20) NOT NULL,
  `codigo` smallint(10) NOT NULL,
  `titulo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `artista` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrozas`
--

INSERT INTO `carrozas` (`item`, `codigo`, `titulo`, `artista`, `imagen`) VALUES
(3, 1, 'COLMILLO AZUL', 'Benito Melas', 'carrozas/1.jpg'),
(4, 162, 'MUNDO FANTASTICO', 'Jason Martinez', 'carrozas/162.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infomacion`
--

CREATE TABLE `infomacion` (
  `item` bigint(20) NOT NULL,
  `codigo` smallint(10) NOT NULL,
  `titulo` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `texto` varchar(350) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infomacion`
--

INSERT INTO `infomacion` (`item`, `codigo`, `titulo`, `descripcion`, `texto`, `imagen`) VALUES
(4, 123, 'CIUDAD', 'Pasto es un municipio colombiano, capital del depa', 'Pasto es un municipio colombiano, capital del departamento de NariÃ±o, cuya cabecera municipal ostenta el nombre de San Juan de Pasto.9â€‹ Se ubica al suroccidente de la naciÃ³n, en la regiÃ³n andina.  Durante la Ã©poca prehispÃ¡nica fue parte del Imperio inca,10â€‹ asÃ­ mismo, fue el centro administrativo, cultural y religioso de la regiÃ³n desde ', 'informacion/123.jpg'),
(5, 1267, 'CARNAVAL BLANCOS Y NEGROS', 'Historia', 'El Carnaval de Negros y Blancos, declarado en el 2002 Patrimonio Cultural de la NaciÃ³n, se celebra cada aÃ±o en Pasto, una ciudad andina situada en el suroccidente de Colombia, la primera semana de enero, atrayendo a un gran nÃºmero de turistas provenientes de todos los rincones del paÃ­s y del extranjero. La ciudad de Pasto se ha conocido histÃ³r', 'informacion/1267.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slides`
--

CREATE TABLE `slides` (
  `item` bigint(20) NOT NULL,
  `codigo` int(11) NOT NULL,
  `titulo` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slides`
--

INSERT INTO `slides` (`item`, `codigo`, `titulo`, `descripcion`, `imagen`) VALUES
(8, 12, 'CARNAVAL', 'El Carnaval de Negros y Blancos es la fiesta mÃ¡s grande e importante del sur de Colombia. Si bien por su indicaciÃ³n geogrÃ¡fica le pertenece a la ciudad de San Juan de Pasto,1â€‹ tambiÃ©n ha sido adoptada por otros municipios del departamento de Na', 'slides/12.jpg'),
(9, 12345, 'NIÃ±OS EN EL CARNAVA', 'Alegria Carnavalera', 'slides/12345.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonasj`
--

CREATE TABLE `zonasj` (
  `item` bigint(20) NOT NULL,
  `codigo` smallint(10) NOT NULL,
  `titulo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `ubicacion` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imagen` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `zonasj`
--

INSERT INTO `zonasj` (`item`, `codigo`, `titulo`, `direccion`, `descripcion`, `ubicacion`, `imagen`) VALUES
(4, 12, 'PARQUE SANTIAGO', 'Cra. 23 #12, Pasto, NariÃ±o', 'Parque', 'https://www.google.es/maps/place/Parque+de+Santiago/@1.2103755,-77.284791,17z/data=!3m1!4b1!4m5!3m4!1s0x8e2ed483331d3707:0x208e7663d3387838!8m2!3d1.2103755!4d-77.2826023', 'zonas/12.jpg'),
(5, 132, 'PARQUE NARIÃ±O', 'Cl. 18 #24-1, Pasto, NariÃ±o', 'Zona Juego', 'https://www.google.es/maps/place/Parque+De+Nari%C3%B1o/@1.2145105,-77.2809283,17z/data=!3m1!4b1!4m5!3m4!1s0x8e2ed4843afb978f:0x5cd439433f5eeecc!8m2!3d1.2145105!4d-77.2787396', 'zonas/132.jpg'),
(6, 1345, 'PLAZA DEL CARNAVAL', 'entre y, Cl. 18, Pasto, NariÃ±', 'Zona Juego', 'https://www.google.es/maps/place/Plaza+del+Carnaval/@1.2101811,-77.2785663,17z/data=!3m1!4b1!4m5!3m4!1s0x8e2ed4854ab462fd:0x30af401606d663ca!8m2!3d1.2101811!4d-77.2763776', 'zonas/1345.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrozas`
--
ALTER TABLE `carrozas`
  ADD PRIMARY KEY (`item`);

--
-- Indices de la tabla `infomacion`
--
ALTER TABLE `infomacion`
  ADD PRIMARY KEY (`item`);

--
-- Indices de la tabla `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`item`);

--
-- Indices de la tabla `zonasj`
--
ALTER TABLE `zonasj`
  ADD PRIMARY KEY (`item`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrozas`
--
ALTER TABLE `carrozas`
  MODIFY `item` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `infomacion`
--
ALTER TABLE `infomacion`
  MODIFY `item` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `slides`
--
ALTER TABLE `slides`
  MODIFY `item` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `zonasj`
--
ALTER TABLE `zonasj`
  MODIFY `item` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
