-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 15-01-2022 a las 18:06:58
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `image_gallery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `path` varchar(50) NOT NULL,
  `user` int(11) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `description`, `path`, `user`, `date_upload`, `category`) VALUES
(1, 'This is a description of a photo.', 'images/1.jpg', 4, '2022-01-06 12:29:18', 'hola que tal'),
(2, 'This is a description of a photo.', 'images/2.jpg', 4, '2022-01-06 12:34:59', 'prueba texto'),
(3, 'This is a description of a photo.', 'images/3.jpg', 4, '2022-01-06 12:36:49', 'que'),
(4, 'This is a description of a photo.', 'images/4.jpg', 4, '2022-01-06 12:38:01', 'que adios'),
(5, 'This is a description of a photo.', 'images/5.jpg', 4, '2022-01-06 12:38:01', ''),
(32, 'My doggy', 'images/28.jpg', 5, '2022-01-14 18:25:01', 'dog'),
(7, 'This is a description of a photo.', 'images/5.jpg', 5, '2022-01-06 17:36:20', ''),
(8, 'This is a description of a photo.', 'images/8.jpg', 4, '2022-01-08 11:34:15', ''),
(15, 'Mountain', 'images/6.jpg', 5, '2022-01-08 17:30:26', ''),
(14, 'This is a dog', 'images/25.jpg', 5, '2022-01-08 17:28:29', ' dog'),
(16, 'Mountain', 'images/6.jpg', 5, '2022-01-08 17:32:40', ''),
(33, 'Incredible beach', 'images/35.jpg', 4, '2022-01-14 18:26:07', 'beach sand sun'),
(19, 'Dogo', 'images/31.jpg', 5, '2022-01-08 17:35:27', 'Esto es una categoria dog'),
(35, 'This is a beach', 'images/32.jpg', 5, '2022-01-14 22:08:02', 'beach sun sand'),
(30, 'my dog today', 'images/34.jpg', 5, '2022-01-14 18:22:28', ''),
(25, 'Amazing', 'images/18.jpg', 4, '2022-01-08 17:42:19', ' cars mountain'),
(26, 'Sunset', 'images/38.jpg', 5, '2022-01-08 17:43:08', ''),
(31, 'nice beach', 'images/17.jpg', 5, '2022-01-14 18:24:04', ''),
(28, 'Photo of a beach', 'images/5.jpg', 4, '2022-01-13 13:08:58', ''),
(29, 'MontaÃ±a', 'images/33.jpg', 4, '2022-01-14 10:57:08', ''),
(34, 'Sunset in the mountain', 'images/about.jpg', 4, '2022-01-14 18:28:29', 'sunset mountain sun'),
(38, 'The space', 'images/web-espacio-portada.jpg', 6, '2022-01-15 17:15:49', 'space stars'),
(39, 'The night in nebulosa', 'images/shutterstock_1401778256-1000x450.jpg', 6, '2022-01-15 17:16:17', 'stars space'),
(40, 'Space from the earth', 'images/publicidad-espacio-startrocket-pepsico.jpg', 6, '2022-01-15 17:16:42', 'space stars sky');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `image` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `image` (`image`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `date`, `user`, `image`) VALUES
(33, '2022-01-08 12:24:56', 4, 8),
(53, '2022-01-13 13:06:44', 5, 22),
(3, '2022-01-07 20:22:21', 3, 3),
(21, '2022-01-08 12:07:44', 4, 7),
(38, '2022-01-08 12:25:48', 5, 3),
(50, '2022-01-08 17:42:57', 5, 24),
(37, '2022-01-08 12:25:43', 5, 4),
(48, '2022-01-08 17:42:03', 4, 24),
(47, '2022-01-08 17:42:01', 4, 17),
(46, '2022-01-08 17:35:40', 5, 19),
(45, '2022-01-08 17:26:32', 5, 13),
(49, '2022-01-08 17:42:56', 5, 23),
(52, '2022-01-08 18:09:13', 5, 26),
(44, '2022-01-08 13:20:58', 5, 8),
(39, '2022-01-08 12:27:36', 5, 5),
(34, '2022-01-08 12:25:28', 5, 6),
(35, '2022-01-08 12:25:28', 5, 7),
(54, '2022-01-13 13:07:59', 5, 27),
(55, '2022-01-13 13:08:19', 4, 27),
(61, '2022-01-14 10:57:28', 4, 29),
(62, '2022-01-14 17:17:21', 5, 29),
(63, '2022-01-14 18:29:28', 4, 34),
(67, '2022-01-15 16:54:15', 4, 30),
(65, '2022-01-14 22:08:50', 4, 1),
(68, '2022-01-15 16:54:21', 4, 35),
(69, '2022-01-15 16:54:23', 4, 33),
(70, '2022-01-15 17:00:22', 6, 36),
(71, '2022-01-15 17:15:18', 6, 35),
(72, '2022-01-15 17:15:19', 6, 32),
(73, '2022-01-15 17:15:22', 6, 29),
(74, '2022-01-15 17:17:00', 6, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surnames` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `surnames`, `email`, `password`) VALUES
(1, 'javier dominguez suarez', ' DomÃ­nguez SuÃ¡rez', 'javids.jd@gmail.com', '$2y$10$jWe75dlKJUp32ietHjk6t.g/T0HrMfgFV8gVN9EPCP0.uJqJ0RqGO'),
(2, 'cristi', 'cris', 'cristi@gmail.com', '$2y$10$zGGo2E73bzBUhZdXLSq0c.2q7insGYzPuTiG3r8z3i7xl3C6hmhBO'),
(3, 'pepe', 'pepe', 'pepe@gmail.com', '$2y$10$e3ugRAFhhuJv3MoJi7QmYu5ZxIEbW/DF1pQhzN/N01xupPYshySrC'),
(4, 'hola', 'hola', 'hola@gmail.com', '99800b85d3383e3a2fb45eb7d0066a4879a9dad0'),
(5, 'criss', 'criss', 'criss@gmail.com', '0d9ea50843084a74e6912ba2f92b3e05fc258ba4'),
(6, 'daniel', 'hernandez', 'daniel@gmail.com', '3d0f3b9ddcacec30c4008c5e030e6c13a478cb4f'),
(7, 'jose', 'suarez', 'jose@gmail.com', '4a3487e57d90e2084654b6d23937e75af5c8ee55'),
(8, 'jose', 'suarez', 'jose@gmail.com', '4a3487e57d90e2084654b6d23937e75af5c8ee55'),
(9, 'isa', 'cordero', 'isa@gmail.com', '59dc310530b44e8dd1231682b4cc5f2458af1c60');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
