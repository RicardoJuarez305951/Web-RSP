-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2022 a las 12:58:39
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
-- Base de datos: `srhsp2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idAlumno` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL,
  `idGrupo` int(5) NOT NULL,
  `horasACumplir` int(4) NOT NULL,
  `horasTotales` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idAlumno`, `idUsuario`, `idGrupo`, `horasACumplir`, `horasTotales`) VALUES
(2, 16, 1, 480, 0),
(3, 16, 1, 480, 0),
(4, 1, 1, 480, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `idAsesor` int(5) NOT NULL,
  `idUsuario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesores`
--

INSERT INTO `asesores` (`idAsesor`, `idUsuario`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `idGrupo` int(5) NOT NULL,
  `idAsesor` int(5) NOT NULL,
  `Puesto` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`idGrupo`, `idAsesor`, `Puesto`, `Descripcion`) VALUES
(1, 1, 'En Espera', 'Esperando realizar su SS o practicas'),
(2, 1, 'En Espera', 'Esperando ser dado de alta en otro grupo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas_registradas`
--

CREATE TABLE `horas_registradas` (
  `idHora` int(5) NOT NULL,
  `idAlumno` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `horaEntrada` time NOT NULL,
  `horaSalida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(5) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Institucion` varchar(50) NOT NULL,
  `Rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Correo`, `Password`, `Nombre`, `Institucion`, `Rol`) VALUES
(1, 'admin@example.com', '1234', 'Ricardo Juarez', 'UASLP', 1),
(16, 'correo@example.com', '1234', 'Ricardo', 'UASLP', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idGrupo` (`idGrupo`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`idAsesor`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`idGrupo`),
  ADD KEY `idAsesor` (`idAsesor`);

--
-- Indices de la tabla `horas_registradas`
--
ALTER TABLE `horas_registradas`
  ADD PRIMARY KEY (`idHora`),
  ADD UNIQUE KEY `idAlumno_2` (`idAlumno`),
  ADD KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `idAlumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `idAsesor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `idGrupo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horas_registradas`
--
ALTER TABLE `horas_registradas`
  MODIFY `idHora` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`idGrupo`) REFERENCES `grupos` (`idGrupo`);

--
-- Filtros para la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD CONSTRAINT `asesores_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`idAsesor`) REFERENCES `asesores` (`idAsesor`);

--
-- Filtros para la tabla `horas_registradas`
--
ALTER TABLE `horas_registradas`
  ADD CONSTRAINT `horas_registradas_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumnos` (`idAlumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
