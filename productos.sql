-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2017 a las 07:42:50
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_priducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_priducto`, `cantidad`, `fecha_compra`) VALUES
(1, 1, 1, '2017-05-08 13:36:35'),
(2, 2, 1, '2017-05-08 13:36:35'),
(3, 3, 3, '2017-05-08 13:36:35'),
(4, 1, 1, '2017-05-08 13:40:33'),
(5, 2, 1, '2017-05-08 13:40:33'),
(6, 3, 3, '2017-05-08 13:40:33'),
(7, 1, 2, '2017-05-08 13:41:07'),
(8, 2, 3, '2017-05-08 13:41:07'),
(9, 3, 4, '2017-05-08 13:41:07'),
(10, 1, 1, '2017-05-08 20:53:56'),
(11, 2, 1, '2017-05-08 20:53:56'),
(12, 3, 1, '2017-05-08 20:53:56'),
(13, 1, 1, '2017-05-08 20:53:56'),
(14, 2, 1, '2017-05-08 20:53:56'),
(15, 3, 1, '2017-05-08 20:53:56'),
(16, 1, 2, '2017-05-08 23:53:56'),
(17, 2, 3, '2017-05-08 23:53:56'),
(18, 3, 4, '2017-05-08 23:53:56'),
(19, 1, 1, '2017-05-09 00:25:20'),
(20, 2, 1, '2017-05-09 00:25:20'),
(21, 3, 1, '2017-05-09 00:25:20'),
(22, 5, 3, '2017-05-09 00:25:20'),
(23, 4, 2, '2017-05-09 00:25:20'),
(24, 4, 2, '2017-05-09 00:26:31'),
(25, 5, 2, '2017-05-09 00:26:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha_inserta` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_producto`, `nombre`, `cantidad`, `precio`, `fecha_inserta`) VALUES
(1, 'Cocacola', 10, 10, '2017-05-08 10:23:53'),
(2, 'Sabritas', 100, 10, '2017-05-08 10:26:58'),
(3, 'pepsi', 200, 10, '2017-05-08 10:28:30'),
(4, 'Pan Bimbo', 100, 20, '2017-05-08 10:30:56'),
(5, 'Rufles', 100, 10, '2017-05-08 11:31:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
