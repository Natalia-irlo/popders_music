-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 15:21:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `popders`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coder`
--

CREATE TABLE `coder` (
  `id_coder` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `song`
--

CREATE TABLE `song` (
  `id_song` int(11) NOT NULL,
  `id_coder` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  ADD PRIMARY KEY (`id_song`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coder`
--
ALTER TABLE `coder`
  MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `song`
--
ALTER TABLE `song`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coder`
--
ALTER TABLE `coder`
  ADD CONSTRAINT `selec_fk` FOREIGN KEY (`id_coder`) REFERENCES `song` (`id_song`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- create table if not exists `coder` (
--   `id_coder` int(11) NOT NULL,
--   `name` varchar(100) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- -- 2.1.2 .- Tabla song
-- create table if not exists `song` (
--   `id_song` int(11) NOT NULL,
--   `id_coder` int(11) NOT NULL,
--   `title` varchar(100) NOT NULL,
--   `artist` varchar(100) NOT NULL,
--   `genre` varchar(100) NOT NULL,
--   `url` varchar(255) NOT NULL,
--   `date` datetime NOT NULL,
--   `status` tinyint(1) NOT NULL,
--   `img` longblob NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- -- 3.- Índices
-- -- Indices de la tabla `coder`
-- ALTER TABLE `coder`
--   ADD PRIMARY KEY (`id_coder`);
-- ALTER TABLE `coder`
-- MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT;
-- -- Indices de la tabla `song`
-- ALTER TABLE `song`
--   ADD PRIMARY KEY (`id_song`);
--   ALTER TABLE `song`
--   MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT;
-- -- 4.- Clave foránea
-- ALTER TABLE `song`
--   ADD CONSTRAINT `selec_fk` FOREIGN KEY (`id_coder`) REFERENCES `coder` (`id_coder`);
-- COMMIT;
<<<<<<< HEAD:data/popders.sql

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- 1.- Creamos la Base de Datos
create database popdersname DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- Seleccionamos la base de datos
use popdersname
;
-- 2.- Creamos las tablas
-- 2.1.1.- Tabla coder
create table if not exists `coder` (
  `id_coder` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- 2.1.2 .- Tabla song
create table if not exists `song` (
  `id_song` int(11) NOT NULL,
  `id_coder` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- 3.- Índices
-- Indices de la tabla `coder`
ALTER TABLE `coder`
  ADD PRIMARY KEY (`id_coder`);
ALTER TABLE `coder`
MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT;
-- Indices de la tabla `song`
ALTER TABLE `song`
  ADD PRIMARY KEY (`id_song`);
  ALTER TABLE `song`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT;
-- 4.- Clave foránea
ALTER TABLE `song`
  ADD CONSTRAINT `selec_fk` FOREIGN KEY (`id_coder`) REFERENCES `coder` (`id_coder`);
COMMIT;
=======
  
-- -- 1.- Creamos la Base de Datos
-- create database popders DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- -- Seleccionamos la base de datos
-- use popders
-- ;
-- -- 2.- Creamos las tablas
-- -- 2.1.1.- Tabla coder
-- create table if not exists `coder` (
--   `id_coder` int(11) NOT NULL,
--   `name` varchar(100) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- -- 2.1.2 .- Tabla song
-- create table if not exists `song` (
--   `id_song` int(11) NOT NULL,
--   `id_coder` int(11) NOT NULL,
--   `title` varchar(100) NOT NULL,
--   `artist` varchar(100) NOT NULL,
--   `genre` varchar(100) NOT NULL,
--   `url` varchar(255) NOT NULL,
--   `date` datetime NOT NULL,
--   `status` tinyint(1) NOT NULL,
--   `img` longblob NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- -- 3.- Índices
-- -- Indices de la tabla `coder`
-- ALTER TABLE `coder`
--   ADD PRIMARY KEY (`id_coder`);
-- ALTER TABLE `coder`
-- MODIFY `id_coder` int(11) NOT NULL AUTO_INCREMENT;
-- -- Indices de la tabla `song`
-- ALTER TABLE `song`
--   ADD PRIMARY KEY (`id_song`);
--   ALTER TABLE `song`
--   MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT;
-- -- 4.- Clave foránea
-- ALTER TABLE `song`
--   ADD CONSTRAINT `selec_fk` FOREIGN KEY (`id_coder`) REFERENCES `coder` (`id_coder`);
-- COMMIT;
>>>>>>> e7592b71452d3782e09dac9890f8072a3e1c92ac:backend/data/popders.sql
