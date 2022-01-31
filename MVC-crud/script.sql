-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-11-2021 a las 21:48:42
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
-- Base de datos: `bdpokemon`
--
CREATE DATABASE IF NOT EXISTS `bdpokemon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdpokemon`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `nombre` text NOT NULL,
  `tipo1` text NOT NULL,
  `tipo2` text,
  `numero_lista` int(11) NOT NULL,
  `generacion` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `imagen` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`nombre`, `tipo1`, `tipo2`, `numero_lista`, `generacion`, `fecha_creacion`, `imagen`, `id`) VALUES
('Dragonite', 'Dragon', 'Volador', 147, 1, '1996-02-26', 'dragonite.jpg', 1),
('Gengar', 'Fantasma', 'Veneno', 94, 1, '1996-02-26', 'gengar.jpg', 2),
('Espeon', 'Psiquico', NULL, 196, 2, '1999-11-24', 'espeon.jpg', 3),
('Lucario', 'Lucha', 'Acero', 448, 4, '2006-09-28', 'lucario.jpg', 4),
('Charizard', 'Fuego', 'Volador', 6, 1, '1996-02-26', 'charizard.jpg', 5),
('Celebi', 'Psiquico', 'Planta', 251, 2, '1999-11-24', 'celebi.jpg', 6),
('Mudkip', 'Agua', NULL, 258, 3, '2002-11-21', 'mudkip.jpg', 7),
('Empoleon', 'Agua', 'Acero', 395, 4, '2006-09-28', 'empoleon.jpg', 8),
('Registeel', 'Acero', NULL, 379, 3, '2002-11-21', 'registeel.jpg', 9),
('Bulbasaur', 'Planta', 'Veneno', 1, 1, '1996-02-26', 'bulbasaur.jpg', 10),
('Larvitar', 'Roca', 'Tierra', 246, 2, '1999-11-24', 'larvitar.jpg', 11),
('Audino', 'Normal', NULL, 531, 5, '2010-09-18', 'audino.jpg', 12),
('Articuno', 'Hielo', 'Volador', 144, 1, '1996-02-26', 'articuno.jpg', 13),
('malfoy', 'agua', 'hielo', 20, 20, '2021-11-03', 'NOTIENE', 16),
('PokemonFake', 'Agua', 'Volador', 200, 6, '1991-02-26', 'madremiawilly.jpg', 17),
('xd', 'xd', 'dx', 2, 2, '2021-11-11', 'pies', 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;