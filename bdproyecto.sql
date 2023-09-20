-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2022 a las 15:32:12
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlempleado`
--

CREATE TABLE `controlempleado` (
  `NumEmpleado` int(11) NOT NULL,
  `Año` int(4) NOT NULL,
  `Incapacidades` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `controlempleado`
--

INSERT INTO `controlempleado` (`NumEmpleado`, `Año`, `Incapacidades`) VALUES
(1, 2022, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `NoProg` int(11) NOT NULL,
  `NumEmpleado` int(11) NOT NULL,
  `Nivel` varchar(3) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Appat` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Apmat` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `RFC` varchar(14) NOT NULL,
  `CUIP` varchar(20) NOT NULL,
  `CURP` varchar(18) NOT NULL,
  `Puesto` varchar(34) NOT NULL,
  `PuestoFuncional` varchar(62) NOT NULL,
  `Codigo` varchar(30) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `FechaHoy` date NOT NULL,
  `Antiguedad` int(3) NOT NULL,
  `TurnoArea` varchar(20) NOT NULL,
  `StatusEm` varchar(6) NOT NULL,
  `FechaBaja` date NOT NULL,
  `MotivoBaja` varchar(20) NOT NULL,
  `FechaPro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`NoProg`, `NumEmpleado`, `Nivel`, `Foto`, `Nombre`, `Appat`, `Apmat`, `RFC`, `CUIP`, `CURP`, `Puesto`, `PuestoFuncional`, `Codigo`, `FechaIngreso`, `FechaHoy`, `Antiguedad`, `TurnoArea`, `StatusEm`, `FechaBaja`, `MotivoBaja`, `FechaPro`) VALUES
(0, 1, '1', 'silueta.jpg', 'Adolfo Alexis', 'Mendoza', 'Pacheco', 'MEPA010717GP0', 'MEPA010717HGTNCDA79', 'MEPA010717HGTNCDA7', 'JEFE/A DE UNIDAD A', 'JEFE/A DE INFORMATICA VI', 'ABCD.1234.XYZ', '2022-07-15', '2022-07-15', 0, 'DIRECCION', 'Activo', '0000-00-00', '', '2022-07-15'),
(0, 2, '1', 'silueta.jpg', 'Adolfo Alexis', 'Mendoza', 'Pacheco', 'mepa010717gp0', 'mepa010717hgtncda76', 'mepa010717hgtncda7', 'ENLACE DE RECURSOS FINANCIEROS IV', 'COORDINADOR DE SERVICIOS GENERALES', 'abcd.1234.xyz', '2022-07-15', '2022-07-15', 0, 'SEG. HORARIO ADMVO', 'Activo', '0000-00-00', '', '2022-07-15'),
(0, 3, '1', 'silueta.jpg', 'ADOLFO ALEXIS', 'MENDOZA', 'PACHECO', 'assssssssssss', 'asaaaaaaaaaaaaaaaaa', 'asssssssssssssssss', 'DESARROLLADOR/A EDUCATIVO/A IV', 'COORDINADOR DE SERVICIOS GENERALES', '37545', '2022-07-15', '2022-07-15', 0, 'SEG. TURNO 1', 'Activo', '0000-00-00', '', '2022-07-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incapacidad`
--

CREATE TABLE `incapacidad` (
  `NumIncapacidad` int(11) NOT NULL,
  `NumEmpleado` int(11) NOT NULL,
  `Folio` varchar(5) NOT NULL,
  `FechaExpedicion` date NOT NULL,
  `DiasIncapacidad` int(2) NOT NULL,
  `PeriodoInicio` date NOT NULL,
  `PeriodoFinal` date NOT NULL,
  `Diagnostico` varchar(50) NOT NULL,
  `NombreMedico` varchar(50) NOT NULL,
  `Licencias` int(5) NOT NULL,
  `StatusIn` varchar(10) NOT NULL,
  `ProgresoInca` int(11) NOT NULL,
  `ControlSuel` varchar(20) NOT NULL,
  `LimitesInca` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `incapacidad`
--

INSERT INTO `incapacidad` (`NumIncapacidad`, `NumEmpleado`, `Folio`, `FechaExpedicion`, `DiasIncapacidad`, `PeriodoInicio`, `PeriodoFinal`, `Diagnostico`, `NombreMedico`, `Licencias`, `StatusIn`, `ProgresoInca`, `ControlSuel`, `LimitesInca`) VALUES
(4, 1, 'abcds', '2022-07-15', 0, '2022-07-15', '2022-07-15', 'covid', 'john doe', 0, 'Activo', 0, 'completo', 3),
(5, 2, 'asjjd', '2022-07-15', 0, '2022-08-06', '2022-07-15', 'ajdjdjdjdj', 'najajsjsjsjsj', 0, 'Activo', 0, 'completo', 3),
(6, 2, 'asjjd', '2022-07-15', 0, '2022-08-06', '2022-07-15', 'ajdjdjdjdj', 'najajsjsjsjsj', 0, 'Activo', 0, 'completo', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personales`
--

CREATE TABLE `personales` (
  `NumPersonal` int(11) NOT NULL,
  `NumEmpleado` int(11) NOT NULL,
  `Edad` int(2) NOT NULL,
  `FechaNa` date NOT NULL,
  `Escolaridad` varchar(14) NOT NULL,
  `Especialidad` varchar(40) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Municipio` varchar(30) NOT NULL,
  `EstadoCivil` varchar(10) NOT NULL,
  `NumDepEco` int(2) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `TipoSangre` varchar(8) NOT NULL,
  `Calle` varchar(50) NOT NULL,
  `Numero` varchar(20) NOT NULL,
  `Colonia` varchar(50) NOT NULL,
  `CP` int(5) NOT NULL,
  `Ciudad` varchar(30) NOT NULL,
  `TipoHabitacion` varchar(20) NOT NULL,
  `TelParticular` int(11) NOT NULL,
  `TelOficina` int(11) NOT NULL,
  `Ext` int(5) NOT NULL,
  `TelCelular` int(11) NOT NULL,
  `TelEmergencia` int(11) NOT NULL,
  `Caso` varchar(50) NOT NULL,
  `CorreoPart` varchar(50) NOT NULL,
  `CorreoInstitu` varchar(50) NOT NULL,
  `Observaciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personales`
--

INSERT INTO `personales` (`NumPersonal`, `NumEmpleado`, `Edad`, `FechaNa`, `Escolaridad`, `Especialidad`, `Estado`, `Municipio`, `EstadoCivil`, `NumDepEco`, `Sexo`, `TipoSangre`, `Calle`, `Numero`, `Colonia`, `CP`, `Ciudad`, `TipoHabitacion`, `TelParticular`, `TelOficina`, `Ext`, `TelCelular`, `TelEmergencia`, `Caso`, `CorreoPart`, `CorreoInstitu`, `Observaciones`) VALUES
(2, 1, 0, '2001-07-17', 'TSU', 'programador', 'Guanajuato', 'Leon', 'Soltero/a', 1, 'Masculino', 'o+', 'del dinar', '133', 'delta de jerez', 37545, 'León', 'FAMILIAR', 2147483647, 0, 0, 2147483647, 2147483647, 'Yo mero', 'adolfitocraftero1225@gmail.com', '19002591@alumnos.utleon.edu.mx', 'estadia'),
(3, 2, 21, '2001-07-17', 'TSU', 'programador', 'Guanajuato', 'leon', 'Soltero/a', 1, 'Masculino', 'o+', 'del dinar', '133', 'delta de jerez', 37545, 'León', 'FAMILIAR', 2147483647, 0, 0, 2147483647, 2147483647, 'John Doe', 'adolfitocraftero1225@gmail.com', '19002591@alumnos.utleon.edu.mx', 'yo mero'),
(4, 3, 0, '2022-07-15', 'Preparatoria', 'aaaaaaa', 'Guanajuato', 'leon', 'Soltero/a', 1, 'Masculino', 'aa+', 'jdjadjd', '133', 'jajddhaha', 37545, 'León', 'CREDITO HIPOTECARIO', 2147483647, 2147483647, 0, 2147483647, 2147483647, 'naskdadd', 'a@aaaa', 'a@aaaa', 'ajadjdjaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subincapacidadaño`
--

CREATE TABLE `subincapacidadaño` (
  `Antiguedad` int(3) NOT NULL,
  `DiasIncapacidad` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subincapacidadaño`
--

INSERT INTO `subincapacidadaño` (`Antiguedad`, `DiasIncapacidad`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subincapacidadsuel`
--

CREATE TABLE `subincapacidadsuel` (
  `Incapacidades` int(2) NOT NULL,
  `Sueldo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subincapacidadsuel`
--

INSERT INTO `subincapacidadsuel` (`Incapacidades`, `Sueldo`) VALUES
(1, 'Completo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `controlempleado`
--
ALTER TABLE `controlempleado`
  ADD PRIMARY KEY (`NumEmpleado`,`Año`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`NumEmpleado`),
  ADD KEY `fkAntiguedad` (`Antiguedad`);

--
-- Indices de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  ADD PRIMARY KEY (`NumIncapacidad`),
  ADD KEY `fkNumEmpleado` (`NumEmpleado`);

--
-- Indices de la tabla `personales`
--
ALTER TABLE `personales`
  ADD PRIMARY KEY (`NumPersonal`),
  ADD KEY `fkNumEmpleado` (`NumEmpleado`);

--
-- Indices de la tabla `subincapacidadaño`
--
ALTER TABLE `subincapacidadaño`
  ADD PRIMARY KEY (`Antiguedad`);

--
-- Indices de la tabla `subincapacidadsuel`
--
ALTER TABLE `subincapacidadsuel`
  ADD PRIMARY KEY (`Incapacidades`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `NumEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  MODIFY `NumIncapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personales`
--
ALTER TABLE `personales`
  MODIFY `NumPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `subincapacidadaño`
--
ALTER TABLE `subincapacidadaño`
  MODIFY `Antiguedad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subincapacidadsuel`
--
ALTER TABLE `subincapacidadsuel`
  MODIFY `Incapacidades` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  ADD CONSTRAINT `incapacidad_ibfk_1` FOREIGN KEY (`NumEmpleado`) REFERENCES `empleado` (`NumEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personales`
--
ALTER TABLE `personales`
  ADD CONSTRAINT `personales_ibfk_1` FOREIGN KEY (`NumEmpleado`) REFERENCES `empleado` (`NumEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
