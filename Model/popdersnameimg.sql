-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2023 a las 02:09:10
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `popdersname`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coder`
--

CREATE TABLE `coder` (
  `id_coder` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `coder`
--

INSERT INTO `coder` (`id_coder`, `name`) VALUES
(38, 'Diana'),
(39, 'Natalia'),
(40, 'Sharon'),
(41, 'Meena'),
(42, 'Gabriela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `song`
--

CREATE TABLE `song` (
  `id_song` int(11) NOT NULL,
  `id_coder` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `artist` varchar(100) COLLATE utf8_bin NOT NULL,
  `genre` varchar(100) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `song`
--

INSERT INTO `song` (`id_song`, `id_coder`, `title`, `artist`, `genre`, `url`, `date`, `status`, `img`) VALUES
(66, 38, 'Back in Black', 'AC/DC', 'Heavy-Metal', 'https://www.youtube.com/watch?v=pAgnJDJN4VA', '2023-02-20 01:41:50', 0, NULL),
(67, 39, 'Escondidos', 'Chenoa y Bisbal', 'Pop', 'https://www.youtube.com/watch?v=N8nRkNM2WrU', '2023-02-20 01:49:20', 0, NULL),
(68, 40, 'Mix Reggaeton 2023', 'Varios', 'Reggaeton', 'https://www.youtube.com/watch?v=P_EC21Y4xIQ', '2023-02-20 01:50:52', 0, NULL),
(69, 41, 'Phantom', 'Jabeli', 'Tradicional', 'https://www.youtube.com/watch?v=Y4zRZh8BOr0', '2023-02-20 01:52:42', 0, NULL),
(70, 42, 'Timba Cubana', 'Varios', 'Salsa', 'https://www.youtube.com/watch?v=t4J9ZQWgsec', '2023-02-20 01:54:07', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coder`
--
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id_coder`);

--
-- Indices de la tabla `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id_song`),
  ADD KEY `selec_fk` (`id_coder`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coder`
--
ALTER TABLE `coder`
  MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `song`
--
ALTER TABLE `song`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `selec_fk` FOREIGN KEY (`id_coder`) REFERENCES `coder` (`id_coder`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
