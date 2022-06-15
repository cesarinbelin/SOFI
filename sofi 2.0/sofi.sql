-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 21:56:24
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sofi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `713utic`
--

CREATE TABLE `713utic` (
  `idEmpleado` int(11) NOT NULL,
  `adscripcion` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `idUnidad` int(11) NOT NULL,
  `fechaIngreso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `713utic`
--

INSERT INTO `713utic` (`idEmpleado`, `adscripcion`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `correo`, `activo`, `idUnidad`, `fechaIngreso`) VALUES
(2, 'Dirección Coordinadora de Innovación y Desarrollo Tecnológico', 'MARIO CESAR', 'HERRERA', 'GONZALEZ', 'mario.herrera@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(3, 'Dirección de Desarrollo Tecnológico', 'JOSE ANTONIO', 'RULFO', 'ZARAGOZA', 'antonio.rulfo@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(4, 'Subdirección de Sistemas Administrativos', 'EDNA PATRICIA', 'SANTIAGO', 'VARGAS', 'edna.santiago@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(5, 'Subdirección de Implementación y Administración de Aplicaciones', 'BETZALEL', 'BETANZOS', 'LAISECA', 'bbetanzo@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(6, 'Departamento de Sistemas Ejecutivos', 'RAFAEL', 'CASASOLA', 'TOLEDANO', 'rafael.casasola@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(7, 'Dirección de Administración y Gestión Electrónica de Documentos', 'MARIA EUGENIA', 'CRUZ', 'FERNANDEZ', 'mariaeugenia.cruz@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(8, 'Subdirección de Gestión Electrónica de Documentos', 'DORA HILDA', 'HERRERA', 'GONZALEZ', 'dherrer@sct.gob.mx', 0, 64, '2022-01-03 16:08:43'),
(18, 'Subdirección de Gestión Electrónica de Documentos', 'CESAR', 'CASTRO ', 'ALQUICIRA', 'CE@', 1, 64, '0000-00-00 00:00:00'),
(19, 'Subdirección de Gestión Electrónica de Documentos', 'Oscar Daniel', 'Meza', 'Eugenio', 'oscar@', 1, 64, '0000-00-00 00:00:00'),
(20, 'Subdirección de Gestión Electrónica de Documentos', 'Hans', 'Aleman', 'Valdez', 'hans@', 1, 64, '0000-00-00 00:00:00'),
(36, 'Departamento de Portales y Administración de Contenido', 'MIGDALIA', 'FUENTES', 'RIVERA', 'migdalia.fuentes@sct.gob.mx@sct.gob.mx', 0, 64, '2022-05-31 23:45:04'),
(37, 'Departamento de Portales y Administración de Contenido', 'ROBERTO', 'ROBERTO', 'ROBOERTo', 'ROBERTO@gmail.com', 1, 64, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idModulo` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idModulo`, `nombre`) VALUES
(1, 'usuarios'),
(2, 'roles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficio`
--

CREATE TABLE `oficio` (
  `idOficio` int(11) NOT NULL,
  `tipoOficio` tinyint(4) NOT NULL,
  `estadoOficio` tinyint(4) NOT NULL,
  `oficioDirigido` tinyint(4) NOT NULL,
  `entradaSalida` tinyint(4) NOT NULL,
  `oficio` varchar(30) NOT NULL,
  `fechaElaboracion` date NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fechaRecibidoSICT` datetime NOT NULL,
  `fechaRespuesta` datetime NOT NULL,
  `oficioReferencia1` varchar(30) NOT NULL,
  `oficioReferencia2` varchar(30) NOT NULL,
  `oficioReferencia3` varchar(30) NOT NULL,
  `oficioReferencia4` varchar(30) NOT NULL,
  `fechaRegistroSOFI` datetime NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `unidad` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oficio`
--

INSERT INTO `oficio` (`idOficio`, `tipoOficio`, `estadoOficio`, `oficioDirigido`, `entradaSalida`, `oficio`, `fechaElaboracion`, `asunto`, `descripcion`, `fechaRecibidoSICT`, `fechaRespuesta`, `oficioReferencia1`, `oficioReferencia2`, `oficioReferencia3`, `oficioReferencia4`, `fechaRegistroSOFI`, `idEmpleado`, `nombre`, `cargo`, `unidad`, `empresa`, `direccion`) VALUES
(88, 0, 0, 1, 1, '5.4.2-001/2022', '2022-01-11', 'Solicitud de entrega de respaldo de archivos y doc', 'Solicitud de entrega de respaldo de archivos y doc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-06 01:54:56', 2, 'Ramiro Bernabé Martínez', '', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/enero/5.4.2.001.2022.pdf'),
(89, 0, 0, 1, 1, '5.4.2.-002/2022', '2022-01-27', 'Baja del inventario del Sistema de Registro de Inc', ' Baja del inventario del Sistema de Registro de In', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-06 02:08:17', 2, 'Jacob González Macías', 'Director', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/enero/5.4.2.002.2022.pdf'),
(92, 0, 0, 1, 1, '5.4.2.-005/2022', '2022-04-25', 'modulo de administracion de obra ferreviaria', '                  ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-07 02:09:43', 2, 'Manuel Eduardo Gomez Parra', 'Director general de desarrollo ferroviario ', '15', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/abril/5.4.2.005.2022.pdf'),
(94, 0, 0, 1, 1, '5.4.2-003/2022', '2022-01-27', 'Baja del inventario del sistema Alianza para el go', 'Baja del inventario del sistema Alianza para el go', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 02:03:26', 2, 'María del Rocio Bello Castillo ', 'titular ', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/enero/5.4.2.003.2022.pdf'),
(95, 0, 0, 1, 1, '5.4.2-004/2022', '2022-01-27', 'Entrega del sistema Viaja Seguro, Sprint 3', '                  Entrega del sistema Viaja Seguro', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 02:07:30', 2, 'Jacob González Macías', 'Director de desarrollo estratégico', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/enero/5.4.2.004.2022.pdf'),
(96, 0, 0, 1, 1, '5.4.2-26/2022', '2022-02-08', 'Traza tu ruta', 'Traza tu ruta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 02:41:51', 2, 'Iris Adriana Zurita Enriquez', 'Directora de Relaciones Institucionales', '4', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/febrero/5.4.2.026.2022.pdf'),
(97, 0, 0, 1, 1, '5.4.2-28/2022', '2022-02-11', 'Alta como administrador de Peg@sus', 'Alta como administrador de Peg@sus', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 02:51:05', 2, 'ELVIA RUTH SANCHEZ GUEVARA ', 'Coordinadora administrativa ', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/febrero/5.4.2.028.2022.pdf'),
(98, 0, 0, 1, 1, '5.4.2-30/2022', '2022-02-23', 'Solicitud de concentrado de datos técnicos de los ', 'Solicitud de concentrado de datos técnicos de los ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 02:56:03', 2, 'Jose Antonio Rulfo Zaragoza', 'Director de Desarrollo Tecnológico', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/febrero/5.4.2.030.2022.pdf'),
(99, 0, 0, 1, 1, '5.4.2-31/2022', '2022-03-01', 'Baja operacional de microsito AFAC', 'Baja operacional de microsito AFAC                ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-08 03:02:38', 2, 'Jacob González Macías', 'Director de desarrollo estratégico ', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/marzo/5.4.2.031.2022.pdf'),
(100, 0, 0, 1, 1, '5.4.2.-32/2022', '2022-03-01', 'reinstalacion de pagina del DAAIA ', '                  reinstalacion de pagina del DAAI', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-09 01:06:14', 2, 'J armando constantito tercero ', 'director de analisis de accidentes e incidentes de', '7', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/marzo/5.4.2.032.2022.pdf'),
(101, 0, 0, 1, 1, '5.4.2.-33/2022', '2022-03-02', 'reingenieria deia SIA servicios personales ', '                  reingenieria deia SIA servicios ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-09 01:12:16', 2, 'Blanca estela rivera ', 'Directora coordinadora de administración de person', '62', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/marzo/5.4.2.033.2022.pdf'),
(102, 0, 0, 1, 1, '5.4.2.-34/2022', '2022-03-02', 'actualizacion de fast pay a total pos day  ', '       actualizacion de fast pay a total pos day  ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-09 01:18:31', 2, 'laura urrutia mercado ', 'directora general ', '6', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/marzo/5.4.2.034.2022.pdf'),
(103, 0, 0, 1, 1, '5.4.2.-36/2022', '2022-03-07', 'solicitud de suficiencia presupuestal 2022', '                  solicitud de suficiencia presupu', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '2222-06-09 01:25:17', 2, 'maria eugenia cruz fernandez', 'Directora de administracion y gestion electronica ', '', '', 'oficios/MARIO CESAR HERRERA GONZALEZ/2022/marzo/5.4.2.036.2022.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `idOperacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `idModulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`idOperacion`, `nombre`, `descripcion`, `idModulo`) VALUES
(1, 'agregarUsuario', 'La acción de agregar es', 1),
(2, 'verUsuario', 'La acción de ver es', 1),
(3, 'editarUsuario', 'La acción de editar es', 1),
(4, 'eliminarUsuario', 'La acción de eliminar es', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'administrador'),
(2, 'director'),
(3, 'subdirector'),
(4, 'departamento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_operacion`
--

CREATE TABLE `rol_operacion` (
  `idRolOperacion` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idOperacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol_operacion`
--

INSERT INTO `rol_operacion` (`idRolOperacion`, `idRol`, `idOperacion`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `idUnidad` int(11) NOT NULL,
  `numeroUnidad` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`idUnidad`, `numeroUnidad`, `nombre`) VALUES
(1, 100, 'SECRETARIO DEL RAMO '),
(2, 102, 'DIRECCION GENERAL DE VINCULACION'),
(3, 110, 'UNIDAD DE ASUNTOS JURIDICOS'),
(4, 111, 'DIRIRECCION GENERAL DE COMUNICACION SOCIAL'),
(5, 112, 'ORGANO INTERNO DE CONTROL'),
(6, 114, 'DIRECCION GENERAL DE PLANEACION'),
(7, 200, 'SUBSECRETARIO DE INFRAESTRUCTURA'),
(8, 205, 'U. INFRAESTRUCTURA CARRETERA PARA EL DESARROLLO REG'),
(9, 210, 'DIR. GRAL. DE CARRETERAS'),
(10, 211, 'DIR. GRAL. DE CONSERVACION DE CARRETERAS'),
(11, 212, 'DIR. GRAL. DE SERVICIOS TECNICOS'),
(12, 214, 'DIR. GRAL. DE DESARROLLO CARRETERO'),
(13, 300, 'SUBSECRETARIA DEL TRANSPORTE'),
(14, 310, 'DIR. GRAL. DE AERONAUTICA CIVIL'),
(15, 311, 'DIRECCION GENERAL DE DESARROLLO FERROVIARIO Y MULTIMODAL'),
(16, 312, 'DIR. GRAL. DE AUTOTRANSPORTE FEDERAL'),
(17, 313, 'DIR. GRAL. DE PROTECT. Y MED. PREV. EN EL TRANSP'),
(18, 400, 'SUBSECRETARIA DE COMUNICACIONES'),
(19, 410, 'DIR. GRAL. DE SISTEMAS DE RADIO Y TELEVISION'),
(20, 411, 'DIR. GRAL. DE POLITICA DE TELECOMUNICACIONES Y RADIODIFUSION'),
(21, 414, 'UNIDAD DE LA RED FEDERAL'),
(22, 415, 'COORDINACION DE LA SOCIEDAD DE LA INFORMACION Y EL CONOCIMIENTO'),
(23, 500, 'COORD. GENERAL DE PUERTOS Y MARINA MERCANTE'),
(24, 510, 'DIR. GRAL. DE PUERTOS'),
(25, 511, 'DIR. GRAL. DE MARINA MERCANTE'),
(26, 512, 'DIR. GRAL. DE FOMENTO Y ADMINISTRACION PORTUARIA'),
(27, 600, 'COORDINACION GENERAL DE CENTRO S.C.T'),
(28, 611, 'DIR. GRAL. DE EVALUACION'),
(29, 621, 'CENTRO S.C.T AGUASCALIENTES'),
(30, 622, 'CENTRO S.C.T BAJA CALIFORNIA'),
(31, 623, 'CENTRO S.C.T BAJA CALIFORNIA SUR'),
(32, 624, 'CENTRO S.C.T CAMPECHE'),
(33, 625, 'CENTRO S.C.T COAHUILA'),
(34, 626, 'CENTRO S.C.T COLIMA'),
(35, 627, 'CENTRO S.C.T CHIAPAS'),
(36, 628, 'CENTRO S.C.T CHIHUAHUA'),
(37, 630, 'CENTRO S.C.T DURANGO'),
(38, 631, 'CENTRO S.C.T GUANAJUATO'),
(39, 632, 'CENTRO S.C.T GUERRERO'),
(40, 633, 'CENTRO S.C.T HIDALGO'),
(41, 634, 'CENTRO S.C.T JALISCO'),
(42, 635, 'CENTRO S.C.T MEXICO'),
(43, 636, 'CENTRO S.C.T MICHOACAN'),
(44, 637, 'CENTRO S.C.T MORELOS'),
(45, 638, 'CENTRO S.C.T NAYARIT'),
(46, 639, 'CENTRO S.C.T NUEVO LEON'),
(47, 640, 'CENTRO S.C.T OAXACA'),
(48, 641, 'CENTRO S.C.T PUEBLA'),
(49, 642, 'CENTRO S.C.T QUERETARO'),
(50, 643, 'CENTRO S.C.T QUINTANA ROO'),
(51, 644, 'CENTRO S.C.T SAN LUIS POTOSI'),
(52, 645, 'CENTRO S.C.T SINALOA'),
(53, 646, 'CENTRO S.C.T SONORA'),
(54, 647, 'CENTRO S.C.T TABASCO'),
(55, 648, 'CENTRO S.C.T TAMAULIPAS'),
(56, 649, 'CENTRO S.C.T TLAXCALA'),
(57, 650, 'CENTRO S.C.T VERACRUZ'),
(58, 651, 'CENTRO S.C.T YUCATAN'),
(59, 652, 'CENTRO S.C.T ZACATECAS'),
(60, 700, 'UNIDAD DE ADMINISTRACION Y FINANZAS'),
(61, 710, 'DIR. GRAL. DE PROG. ORGANIZACION Y PRESUP.'),
(62, 711, 'DIR. GRAL. DE RECURSOS HUMANOS'),
(63, 712, 'DIR. GRAL. DE RECURSOS MATERIALES'),
(64, 713, 'UNIDAD DE TECNOLOGIA DE INFORMACION Y COMUNICACIONES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `contraseniaUsuario` varchar(50) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `contraseniaUsuario`, `idRol`, `idEmpleado`) VALUES
(5, 'mario', 'de2f15d014d40b93578d255e6221fd60', 1, 2),
(6, 'antonio', '4a181673429f0b6abbfd452f0f3b5950', 1, 3),
(12, 'edna', 'f5fa02bc60f633f3b1781a824f5211b5', 3, 4),
(13, 'betzalel', 'a030c00f8a69c20d6d4f1520abf87148', 3, 5),
(14, 'rafael', '9135d8523ad3da99d8a4eb83afac13d1', 4, 6),
(15, 'dora', '1f545a6d49bd6dc815ddd731d0c2a2ad', 3, 8),
(43, 'roberto', 'c1bfc188dba59d2681648aa0e6ca8c8e', 4, 37);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `713utic`
--
ALTER TABLE `713utic`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `idUnidad` (`idUnidad`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idModulo`);

--
-- Indices de la tabla `oficio`
--
ALTER TABLE `oficio`
  ADD PRIMARY KEY (`idOficio`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`idOperacion`),
  ADD KEY `idModulo` (`idModulo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  ADD PRIMARY KEY (`idRolOperacion`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idOperacion` (`idOperacion`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`idUnidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`) USING BTREE,
  ADD KEY `idEmpleado` (`idEmpleado`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `713utic`
--
ALTER TABLE `713utic`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oficio`
--
ALTER TABLE `oficio`
  MODIFY `idOficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `idOperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  MODIFY `idRolOperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `idUnidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `713utic`
--
ALTER TABLE `713utic`
  ADD CONSTRAINT `713utic_ibfk_1` FOREIGN KEY (`idUnidad`) REFERENCES `unidad` (`idUnidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `oficio`
--
ALTER TABLE `oficio`
  ADD CONSTRAINT `oficio_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `713utic` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD CONSTRAINT `operacion_ibfk_1` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`idModulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  ADD CONSTRAINT `rol_operacion_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rol_operacion_ibfk_2` FOREIGN KEY (`idOperacion`) REFERENCES `operacion` (`idOperacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idEmpleado`) REFERENCES `713utic` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
