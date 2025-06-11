-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2025 a las 19:41:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajostesisi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Linea_Investigacion` varchar(100) NOT NULL,
  `Resumen` varchar(500) NOT NULL,
  `Objetivos` varchar(5000) NOT NULL,
  `Fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `Fecha_fin` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` tinyint(4) NOT NULL DEFAULT 1,
  `id_Tesista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id`, `Titulo`, `Linea_Investigacion`, `Resumen`, `Objetivos`, `Fecha_inicio`, `Fecha_fin`, `Estado`, `id_Tesista`) VALUES
(1, 'Automatisacion', 'Gestion TI', 'a', 'a, b, c, d', '2025-06-11 15:49:32', '2025-06-11 15:49:32', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesista`
--

CREATE TABLE `tesista` (
  `id` int(11) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `DNI` varchar(16) NOT NULL,
  `Escuela_Profecional` varchar(100) NOT NULL,
  `Estado` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tesista`
--

INSERT INTO `tesista` (`id`, `Apellido`, `Nombre`, `DNI`, `Escuela_Profecional`, `Estado`) VALUES
(1, 'Alatmirano', 'Amir', '60730269', 'ING. Sistemas', 1),
(2, 'a', 'b', '87654321', 'Ing. Sistemas', 1),
(3, 'amir', 'Ervin Howell', 'asd', 'Ing. Mecanica Electrica', 1),
(4, 'amir', 'Ervin Howell', 'asd', 'Ing. Mecanica Electrica', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Tesista` (`id_Tesista`);

--
-- Indices de la tabla `tesista`
--
ALTER TABLE `tesista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tesista`
--
ALTER TABLE `tesista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `FK_Tesista_Tesis` FOREIGN KEY (`id_Tesista`) REFERENCES `tesista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
