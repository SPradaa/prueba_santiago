-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 17:40:02
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
-- Base de datos: `park`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_comida` int(3) NOT NULL,
  `comida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id_comida`, `comida`) VALUES
(1, 'hamburguesa'),
(2, 'HotDog'),
(3, 'brochetas'),
(4, 'Especial de la casa'),
(5, 'menu infantil'),
(6, 'menu ejecutivo'),
(7, 'Pizza'),
(8, 'Menu oriental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_entrada` int(10) NOT NULL,
  `docu` int(12) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `fecha_boleta` date NOT NULL,
  `id_comida` int(3) NOT NULL,
  `id_juego` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id_entrada`, `docu`, `nombre`, `telefono`, `correo`, `fecha_boleta`, `id_comida`, `id_juego`) VALUES
(1, 38211887, 'Jan carlos santos ', '3243800533', 'jancarlotatoostudio@gmail.com', '2024-04-11', 2, 6),
(2, 38010110, 'beatriz prada', '3144342216', 'betiprada@gmail.com', '2024-03-26', 6, 18),
(3, 78952789, 'Camila ramirez', '3213422214', 'Rcami@gmail.com', '2024-03-20', 5, 4),
(4, 89456123, 'yurika ducuara', '3243800588', 'yducuara@gmail.com', '2024-03-21', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(3) NOT NULL,
  `juegos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `juegos`) VALUES
(1, 'Rueda de la fortuna'),
(2, 'Montaña rusa'),
(3, 'Trenes fantasmas'),
(4, 'Torres de caída libre'),
(5, 'El carrusel'),
(6, 'Carritos chocones'),
(7, 'Disco dance'),
(8, 'Voló da Vinci'),
(9, 'Sillas voladoras'),
(10, 'El pulpo'),
(11, 'La Casa Del Terror'),
(12, 'La Cumbre'),
(13, 'Vértigo xtremo'),
(14, 'Caminata espacial'),
(15, 'Vuelta al mundo'),
(16, 'Barco pirata'),
(17, 'Canchas De Deportes'),
(18, 'Piscinas '),
(19, 'Circo'),
(20, 'Paintball');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(2) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'administra'),
(2, 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_comida`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_entrada`),
  ADD KEY `id_comida` (`id_comida`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id_comida` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_entrada` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
