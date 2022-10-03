-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 22:56:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(60) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contraseña`) VALUES
('', '$2y$10$p3fpZRGit88xhSKNv6cKuedWUTczyDWMIHEzROROPkGQREliGKvRK'),
('jhon', '$2y$10$lBNVi53pz3Nj3zSO4LlmQeTr5X7JZNVnIS55bSobKdVkxZeYKLiAy'),
('123', '$2y$10$WRhEufpmWo8p0fPCvjz8YexLlTPv2ZesPGGzqplWB5UsY/20cRj.m'),
('admin', '$2y$10$IJ3LLqRXEdH6WjHdpilluu8c8fTQLTAlpwSwMcM8kmTvTlrP6yH36'),
('a', '$2y$10$9i.BOaHAhIB1exnQAifdOeqlmj7jCPQVRsMf9UdzGfVAcfnwH/iUS'),
('Jhon90', '$2y$10$v9kelgtyOINcr/z4XDLiduloCqdmh/rAq8pbyfVy7IhIR3ytzgP0e'),
('b', '$2y$10$pLf6rD8ofBJmse5lKZAy2egP05MwrKAKjiAwn6YRnq56JIT9iFp2.'),
('lorena david', '$2y$10$pIRCn4Eb9lMH93HHqGJ4H.TPZICU0aAW5.q4NibrUjy9PFQ9.6Rke'),
('aaa', '$2y$10$Pl8RhEnNS5bLp4gMugQyBuGwLbXlH0o/PNGeMY6MEs8WakAmqsN0.'),
('jairo', '$2y$10$iGE.kAZY3aPu72J5FwweaOhbL3v56aFXbGv.JZSomrrESTouCwjle'),
('aaaaa', '$2y$10$NHBJQE2zmxfBKNUmQoC/j.uaoHIXZjtLVqWeDRanYp65mK7mpWa3a'),
('dino', '$2y$10$FK1y7ry8jGN5bZzkEb5bQOIe6VhmSLBHjgHmOOxvM4JLAMX2TsnMC'),
('nose', '$2y$10$qqArZhl3/RE2.a1yFUFgpe7kzV4b5EyS5esrVqB.cdt928YzMx56G'),
('dino', '$2y$10$/wGtF84GVTudHC4TWfG/KOBSM1cuOMbZ5Pg45Fpd8Z6diWT4urBf.'),
('dino', '$2y$10$ij74kzsgCQbOYxVC2zMkAOsQUzixzv1aaHbFpo0rxG8LKsZF/rjzW'),
('dino', '$2y$10$bC8TOwEdYxod2cEpsMD9.O5hETEIfQfesQq9KwkCzGRkzTd8Krsi2'),
('dino', '$2y$10$kHTQcDY1DIBN4Ol6br1PgujjjCx1lfVVyEvBnHeF2L3hUVSAD/2QK'),
('dino', '$2y$10$MtVpsyhrsH2c1BoRT7//CuIGrOKLYjZ9Hn0EwhSYufJkPaZaD5wcW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
