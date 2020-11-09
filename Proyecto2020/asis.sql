-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 05:37:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `asis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `apellido`, `contra`) VALUES
(1, 'Giovanni', 'Pinto', 'gp'),
(2, 'Otto', 'Calderon', 'oc'),
(3, 'Carlos', 'Milla', 'cm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeliminado`
--

CREATE TABLE `aeliminado` (
  `id_asistencia` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_cat` int(11) NOT NULL,
  `observacion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_estudiante`, `id_grado`, `id_seccion`, `id_estado`, `fecha`, `id_cat`, `observacion`) VALUES
(136, 1, 1, 'A', 2, '2016-02-01', 1, 'enfermo'),
(137, 2, 1, 'A', 1, '2016-02-01', 1, ''),
(138, 3, 1, 'A', 2, '2016-02-01', 1, 'permiso especial'),
(139, 4, 1, 'A', 1, '2016-02-01', 1, ''),
(140, 201213124, 1, 'A', 1, '2016-02-01', 1, ''),
(141, 201612345, 1, 'A', 1, '2016-02-01', 1, ''),
(142, 1, 1, 'A', 2, '2016-02-02', 1, 'llegada tarde'),
(143, 2, 1, 'A', 2, '2016-02-02', 1, ''),
(144, 3, 1, 'A', 1, '2016-02-02', 1, ''),
(145, 4, 1, 'A', 2, '2016-02-02', 1, ''),
(146, 201213124, 1, 'A', 1, '2016-02-02', 1, ''),
(147, 201612345, 1, 'A', 2, '2016-02-02', 1, ''),
(148, 1, 1, 'A', 1, '2016-02-05', 1, ''),
(149, 2, 1, 'A', 2, '2016-02-05', 1, ''),
(150, 3, 1, 'A', 1, '2016-02-05', 1, ''),
(151, 4, 1, 'A', 2, '2016-02-05', 1, ''),
(152, 201213124, 1, 'A', 1, '2016-02-05', 1, ''),
(153, 201612345, 1, 'A', 2, '2016-02-05', 1, ''),
(154, 1, 1, 'A', 1, '2016-02-10', 1, ''),
(155, 2, 1, 'A', 1, '2016-02-10', 1, ''),
(156, 3, 1, 'A', 2, '2016-02-10', 1, ''),
(157, 4, 1, 'A', 1, '2016-02-10', 1, ''),
(158, 201213124, 1, 'A', 1, '2016-02-10', 1, ''),
(159, 201612345, 1, 'A', 1, '2016-02-10', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedraticos`
--

CREATE TABLE `catedraticos` (
  `id_cat` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catedraticos`
--

INSERT INTO `catedraticos` (`id_cat`, `nombre`, `apellido`, `telefono`, `contra`, `id_admin`) VALUES
(1, 'Mario Alberto', 'Funez ', 123, 'mf', 1),
(2, 'Jose', 'Alvarez', 147, 'ja', 1),
(3, 'lucia', 'contreras', 4546, 'lc', 1),
(5, 'Ana sofia', 'Garcia', 345, 'er', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_estudiante`
--

CREATE TABLE `detalles_estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles_estudiante`
--

INSERT INTO `detalles_estudiante` (`id_estudiante`, `id_grado`, `id_seccion`) VALUES
(1, 1, 'A'),
(2, 1, 'A'),
(3, 1, 'A'),
(4, 1, 'A'),
(201213124, 1, 'A'),
(201612345, 1, 'A'),
(5, 2, 'B'),
(6, 2, 'B'),
(7, 2, 'B'),
(8, 2, 'B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_reporte`
--

CREATE TABLE `detalles_reporte` (
  `id_reporte` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_asistencia`
--

CREATE TABLE `detalle_asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` datetime NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id_encargado` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_encargado`, `nombre`, `apellido`, `telefono`, `contra`) VALUES
(1, 'jose', 'Alvarez', 123, 'ja'),
(2, 'roberto', 'guzman', 147, 'rg'),
(3, 'Miguel', 'Contreras', 789, 'mc'),
(4, 'Carlos', 'Bonilla', 156, 'cb'),
(5, 'Luis', 'Garmajo', 159, 'lg'),
(6, 'Saul', 'Oliva', 432, 'so'),
(7, 'Sofi', 'Alarcon', 543, 'sa'),
(8, 'Glendi', 'Martinez', 6541, 'gm'),
(9, 'Luz', 'Sanchez', 765, 'ls'),
(10, 'Ana', 'Garcia', 9872, 'ag'),
(11, 'Sara', 'Mijangos', 576, 'sm'),
(12, 'nuevo 12', 'rrrrrrrr', 333333, 'rrr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombres`, `descripcion`) VALUES
(1, 'Presente', 'Alumno Con asitsencia puntual'),
(2, 'ausente', 'alumno ausente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_encargado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre`, `apellido`, `telefono`, `contra`, `id_admin`, `id_encargado`) VALUES
(1, 'Mario', 'Alvarez', 258, 'ma', 1, 1),
(2, 'Maria', 'Guzman', 159, 'mg', 1, 2),
(3, 'Juan', 'Contreras Arias', 543, 'jc', 1, 3),
(4, 'Andrea', 'Contreras Arias', 543, 'ac', 1, 3),
(5, 'Edgar', 'Bonilla', 159, 'eb', 1, 4),
(6, 'Alan', 'Bonilla', 159, 'ab', 1, 4),
(7, 'Marta', 'Bonilla', 158, 'mb', 1, 4),
(8, 'Cesar', 'Gramajo', 148, 'cg', 1, 5),
(9, 'oswar', 'gramajo', 147, 'og', 1, 5),
(10, 'Marcos', 'Oliva', 789, 'mo', 2, 7),
(11, 'Silvia', 'Alarcon', 786, 'sa', 1, 7),
(12, 'Carla', 'Marinez', 234, 'cm', 1, 8),
(13, 'Maria', 'Sanchez', 158, 'ms', 2, 9),
(14, 'Izabel', 'Garcia', 147, 'ig', 2, 10),
(15, 'Leonel', 'Mijangos', 158, 'lm', 2, 11),
(16, 'Ester', 'Mijangos', 753, 'em', 1, 11),
(201213124, 'Andrea', 'Cortez', 563454, 'ac', 1, 10),
(201612345, 'Edwin', 'Farfan', 23432, 'ef', 1, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL,
  `nombreg` varchar(40) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `nombreg`, `id_admin`) VALUES
(1, '4to. bachillerato en letras', 1),
(2, '4to. Perito Administracion', 1),
(3, '4to. secretariado oficinista', 1),
(4, '4to. perito Contador', 2),
(5, '5to. bach en Computacion', 1),
(6, '5to. perito en aviacion', 2),
(11, '6to Magisterio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_guia`
--

CREATE TABLE `grado_guia` (
  `id_admin` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado_seccion`
--

CREATE TABLE `grado_seccion` (
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grado_seccion`
--

INSERT INTO `grado_seccion` (`id_grado`, `id_seccion`, `id_cat`) VALUES
(1, 'A', 1),
(2, 'B', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_grado` int(11) NOT NULL,
  `id_seccion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id_seccion` varchar(1) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_seccion`, `descripcion`) VALUES
('A', 'Seccion numero 1'),
('B', 'Seccion numero 2'),
('C', 'Seccion numero 3'),
('D', 'Seccion numero 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reporte`
--

CREATE TABLE `tipo_reporte` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `aeliminado`
--
ALTER TABLE `aeliminado`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`,`id_estudiante`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_seccion` (`id_seccion`,`id_estado`,`id_cat`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indices de la tabla `detalles_estudiante`
--
ALTER TABLE `detalles_estudiante`
  ADD PRIMARY KEY (`id_estudiante`,`id_grado`),
  ADD KEY `id_seccion` (`id_seccion`),
  ADD KEY `id_grado` (`id_grado`);

--
-- Indices de la tabla `detalles_reporte`
--
ALTER TABLE `detalles_reporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `id_tipo` (`id_tipo`,`id_cat`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `detalle_asistencia`
--
ALTER TABLE `detalle_asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_estado` (`id_estado`,`id_cat`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id_encargado`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_encargado` (`id_encargado`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id_grado`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indices de la tabla `grado_guia`
--
ALTER TABLE `grado_guia`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `id_cat` (`id_cat`),
  ADD UNIQUE KEY `id_cat_2` (`id_cat`),
  ADD UNIQUE KEY `id_cat_3` (`id_cat`),
  ADD KEY `id_admin` (`id_admin`,`id_grado`,`id_seccion`),
  ADD KEY `id_seccion` (`id_seccion`),
  ADD KEY `id_grado` (`id_grado`);

--
-- Indices de la tabla `grado_seccion`
--
ALTER TABLE `grado_seccion`
  ADD PRIMARY KEY (`id_grado`,`id_seccion`),
  ADD KEY `id_seccion` (`id_seccion`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`,`id_estudiante`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_seccion` (`id_seccion`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `tipo_reporte`
--
ALTER TABLE `tipo_reporte`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aeliminado`
--
ALTER TABLE `aeliminado`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT de la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aeliminado`
--
ALTER TABLE `aeliminado`
  ADD CONSTRAINT `aeliminado_ibfk_1` FOREIGN KEY (`id_asistencia`) REFERENCES `asistencia` (`id_asistencia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `detalles_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `detalles_estudiante` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_4` FOREIGN KEY (`id_cat`) REFERENCES `catedraticos` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asistencia_ibfk_5` FOREIGN KEY (`id_seccion`) REFERENCES `detalles_estudiante` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  ADD CONSTRAINT `catedraticos_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_estudiante`
--
ALTER TABLE `detalles_estudiante`
  ADD CONSTRAINT `detalles_estudiante_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_estudiante_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `grado_seccion` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_estudiante_ibfk_3` FOREIGN KEY (`id_seccion`) REFERENCES `grado_seccion` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles_reporte`
--
ALTER TABLE `detalles_reporte`
  ADD CONSTRAINT `detalles_reporte_ibfk_1` FOREIGN KEY (`id_reporte`) REFERENCES `reportes` (`id_reporte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_reporte_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_reporte` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_reporte_ibfk_3` FOREIGN KEY (`id_cat`) REFERENCES `catedraticos` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`id_encargado`) REFERENCES `encargado` (`id_encargado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grados`
--
ALTER TABLE `grados`
  ADD CONSTRAINT `grados_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrador` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grado_seccion`
--
ALTER TABLE `grado_seccion`
  ADD CONSTRAINT `grado_seccion_ibfk_1` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_seccion_ibfk_2` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grado_seccion_ibfk_3` FOREIGN KEY (`id_cat`) REFERENCES `catedraticos` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `detalles_estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `detalles_estudiante` (`id_grado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reportes_ibfk_3` FOREIGN KEY (`id_seccion`) REFERENCES `detalles_estudiante` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
