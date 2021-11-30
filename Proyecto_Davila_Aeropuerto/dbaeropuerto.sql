-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2021 a las 03:36:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbaeropuerto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aviones`
--

CREATE TABLE `aviones` (
  `id` int(25) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `colordeavion` varchar(10) NOT NULL,
  `modelodeavion` varchar(10) NOT NULL,
  `tipodeavion` varchar(10) NOT NULL,
  `capacidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aviones`
--

INSERT INTO `aviones` (`id`, `nombre`, `email`, `colordeavion`, `modelodeavion`, `tipodeavion`, `capacidad`) VALUES
(25, 'sergio arturo d', 'rubyangelicadav', 'rojo', '2w3w4tw3', 'Airbus 319', '6'),
(29, 'sergio', 'rubyangelicadav', 'rojo', '2q12er8h1q', 'Airbus 500', '200p');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleto`
--

CREATE TABLE `boleto` (
  `idboleto` int(25) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `destinariodevuelo` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `clase` varchar(10) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `boleto`
--

INSERT INTO `boleto` (`idboleto`, `nombre`, `apellido`, `destinariodevuelo`, `fecha`, `clase`, `precio`) VALUES
(1, 'ru', 'da', 'japon', '0000-00-00', 'media', 89),
(4, 'JUAN', 'AVILA', 'japon', '0000-00-00', 'alta', 89);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilotos`
--

CREATE TABLE `pilotos` (
  `iddepiloto` int(25) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `horasdevuelo` int(10) NOT NULL,
  `numerodelicencia` int(10) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pilotos`
--

INSERT INTO `pilotos` (`iddepiloto`, `nombre`, `apellido`, `horasdevuelo`, `numerodelicencia`, `edad`, `sexo`) VALUES
(1, 'ru', 'da', 15, 3453466, 42, 'm'),
(4, 'JUAN', 'AVILA', 15, 86875, 46, 'm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programadevuelos`
--

CREATE TABLE `programadevuelos` (
  `idprograma` int(25) NOT NULL,
  `lineaaerea` varchar(15) NOT NULL,
  `escalas` varchar(15) NOT NULL,
  `aterrizaje` varchar(2) NOT NULL,
  `despegue` varchar(2) NOT NULL,
  `diasdelasemana` varchar(20) NOT NULL,
  `distancia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programadevuelos`
--

INSERT INTO `programadevuelos` (`idprograma`, `lineaaerea`, `escalas`, `aterrizaje`, `despegue`, `diasdelasemana`, `distancia`) VALUES
(1, 'aeromexico', 'no', 'si', 'si', 'lu', 100),
(7, 'aeromexico', 'no', 'no', 'si', 'jueves y viernes', 500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aviones`
--
ALTER TABLE `aviones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `boleto`
--
ALTER TABLE `boleto`
  ADD PRIMARY KEY (`idboleto`);

--
-- Indices de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  ADD PRIMARY KEY (`iddepiloto`);

--
-- Indices de la tabla `programadevuelos`
--
ALTER TABLE `programadevuelos`
  ADD PRIMARY KEY (`idprograma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aviones`
--
ALTER TABLE `aviones`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `boleto`
--
ALTER TABLE `boleto`
  MODIFY `idboleto` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pilotos`
--
ALTER TABLE `pilotos`
  MODIFY `iddepiloto` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programadevuelos`
--
ALTER TABLE `programadevuelos`
  MODIFY `idprograma` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
