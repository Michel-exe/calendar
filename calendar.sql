-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2022 a las 06:20:51
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id` int(11) NOT NULL,
  `evento` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `day` varchar(10) NOT NULL,
  `mounth` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `i_fecha` varchar(20) NOT NULL,
  `t_fecha` varchar(20) NOT NULL,
  `i_hora` varchar(10) NOT NULL,
  `f_hora` varchar(10) NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardados`
--

CREATE TABLE `guardados` (
  `id` int(11) NOT NULL,
  `evento` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `guardados`
--

INSERT INTO `guardados` (`id`, `evento`, `description`, `ubicacion`, `color`) VALUES
(1, 'Reunion', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dolores quae tempora nesciunt tenetur, nam dolore non modi eligendi optio, molestias fugit iusto quia voluptatibus fuga repudiandae, consectetur veniam nostrum. Voluptate eos magni amet placeat voluptatum tempora fugiat iste. Tempora quas rerum doloribus ad, facilis sapiente neque esse eius corporis aperiam non quisquam, eaque, maiores praesentium perspiciatis. Repellat porro asperiores, molestiae voluptatem delectus voluptates nece', 'Calle 123 Mzn 3 Lt 10 Nanacamilpa Tlaxcala Mexico', '#28a745'),
(2, 'Comida', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dolores quae tempora nesciunt tenetur, nam dolore non modi eligendi optio, molestias fugit iusto quia voluptatibus fuga repudiandae, consectetur veniam nostrum. Voluptate eos magni amet placeat voluptatum tempora fugiat iste. Tempora quas rerum doloribus ad, facilis sapiente neque esse eius corporis aperiam non quisquam, eaque, maiores praesentium perspiciatis. Repellat porro asperiores, molestiae voluptatem delectus voluptates nece', 'Calle 123 Mzn 3 Lt 10 Nanacamilpa Tlaxcala Mexico', '#dc3545'),
(3, 'Ir a casa', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dolores quae tempora nesciunt tenetur, nam dolore non modi eligendi optio, molestias fugit iusto quia voluptatibus fuga repudiandae, consectetur veniam nostrum. Voluptate eos magni amet placeat voluptatum tempora fugiat iste. Tempora quas rerum doloribus ad, facilis sapiente neque esse eius corporis aperiam non quisquam, eaque, maiores praesentium perspiciatis. Repellat porro asperiores, molestiae voluptatem delectus voluptates nece', 'Calle 123 Mzn 3 Lt 10 Nanacamilpa Tlaxcala Mexico', '#ffc107'),
(4, 'Trabajo', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque dolores quae tempora nesciunt tenetur, nam dolore non modi eligendi optio, molestias fugit iusto quia voluptatibus fuga repudiandae, consectetur veniam nostrum. Voluptate eos magni amet placeat voluptatum tempora fugiat iste. Tempora quas rerum doloribus ad, facilis sapiente neque esse eius corporis aperiam non quisquam, eaque, maiores praesentium perspiciatis. Repellat porro asperiores, molestiae voluptatem delectus voluptates nece', 'Calle 123 Mzn 3 Lt 10 Nanacamilpa Tlaxcala Mexico', '#007bff');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guardados`
--
ALTER TABLE `guardados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guardados`
--
ALTER TABLE `guardados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
