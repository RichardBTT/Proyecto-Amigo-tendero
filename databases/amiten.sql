-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2024 a las 20:54:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amiten`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `ID_Asistencias` int(11) NOT NULL,
  `ID_Evento` int(11) DEFAULT NULL,
  `ID_Tendero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`ID_Asistencias`, `ID_Evento`, `ID_Tendero`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ID_Comentario` int(11) NOT NULL,
  `ID_Evento` int(11) DEFAULT NULL,
  `ID_Tendero` int(11) DEFAULT NULL,
  `Comentario` text DEFAULT NULL,
  `Fecha_Comentario` date DEFAULT NULL,
  `Calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`ID_Comentario`, `ID_Evento`, `ID_Tendero`, `Comentario`, `Fecha_Comentario`, `Calificacion`) VALUES
(1, 1, 1, 'Excelente evento', '2023-11-02', 5),
(2, 2, 2, 'No encontre el evento', '2023-12-06', 0),
(3, 3, 3, 'Interesante', '2024-01-11', 4),
(4, 4, 4, 'Muy entretenido', '2024-02-18', 5),
(5, 5, 5, 'Gran variedad de libros', '2024-03-26', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID_Empresa` int(11) NOT NULL,
  `Nombre_Empresa` varchar(255) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Contacto` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Ubicacion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ID_Empresa`, `Nombre_Empresa`, `Descripcion`, `Contacto`, `Email`, `Telefono`, `Ubicacion`) VALUES
(1, 'Tech Solutions', 'Empresa de tecnolog?a', 'Roberto Gomez', 'contacto@techsolutions.com', '555-1234', 'Calle Falsa 123'),
(2, 'Green Foods', 'Distribuidora de alimentos', 'Maria Mercedez', 'info@greenfoods.com', '555-5678', 'Av. Libertad 456'),
(3, 'Auto Parts', 'Venta de repuestos automotrices', 'Carlos Ruiz', 'ventas@autoparts.com', '555-9012', 'Calle Principal 789'),
(4, 'Fashion World', 'Tienda de ropa', 'Ana Torres', 'contacto@fashionworld.com', '555-3456', 'Plaza Mayor 101'),
(5, 'Book Haven', 'Librer?a', 'Luis Lorenzo', 'info@bookhaven.com', '555-7890', 'Av. Central 202');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ID_Evento` int(11) NOT NULL,
  `ID_Tendero` int(11) DEFAULT NULL,
  `ID_Comentario` int(11) DEFAULT NULL,
  `ID_Empresa` int(11) DEFAULT NULL,
  `Nombre_de_evento` varchar(255) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Fecha_inicio` date DEFAULT NULL,
  `Fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ID_Evento`, `ID_Tendero`, `ID_Comentario`, `ID_Empresa`, `Nombre_de_evento`, `Descripcion`, `Fecha_inicio`, `Fecha_fin`) VALUES
(1, 1, NULL, 1, 'Tech Expo', 'Exposici?n de tecnolog?a', '2023-11-01', '2023-11-03'),
(2, 2, NULL, 2, 'Food Fair', 'Feria de alimentos', '2023-12-05', '2023-12-07'),
(3, 3, NULL, 3, 'Auto Show', 'Exhibici?n de autos', '2024-01-10', '2024-01-12'),
(4, 4, NULL, 4, 'Fashion Week', 'Semana de la moda', '2024-02-15', '2024-02-20'),
(5, 5, NULL, 5, 'Book Festival', 'Festival del libro', '2024-03-25', '2024-03-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitaciones`
--

CREATE TABLE `invitaciones` (
  `ID_Invitaciones` int(11) NOT NULL,
  `ID_Evento` int(11) DEFAULT NULL,
  `ID_Tendero` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `invitaciones`
--

INSERT INTO `invitaciones` (`ID_Invitaciones`, `ID_Evento`, `ID_Tendero`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logistica`
--

CREATE TABLE `logistica` (
  `ID_Logistica` int(11) NOT NULL,
  `ID_Evento` int(11) DEFAULT NULL,
  `Recurso` varchar(255) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Fecha_Entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logistica`
--

INSERT INTO `logistica` (`ID_Logistica`, `ID_Evento`, `Recurso`, `Cantidad`, `Fecha_Entrega`) VALUES
(1, 1, 'Stands', 10, '2023-10-30'),
(2, 2, 'Mesas', 20, '2023-12-03'),
(3, 3, 'Sillas', 50, '2024-01-08'),
(4, 4, 'Luces', 30, '2024-02-13'),
(5, 5, 'Libros', 100, '2024-03-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenderos`
--

CREATE TABLE `tenderos` (
  `ID_Tendero` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Nombre_Tienda_P` varchar(255) DEFAULT NULL,
  `Numero_tiendas_AD` int(11) DEFAULT NULL,
  `Direccion_principal` varchar(255) DEFAULT NULL,
  `Ayudantes` int(11) DEFAULT NULL,
  `Numero_Celular` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tenderos`
--

INSERT INTO `tenderos` (`ID_Tendero`, `Nombre`, `Nombre_Tienda_P`, `Numero_tiendas_AD`, `Direccion_principal`, `Ayudantes`, `Numero_Celular`) VALUES
(1, 'Juan Perez', 'SuperTienda Juan', 3, 'Calle Falsa 123', 2, '555-1234567'),
(2, 'Maria Lopez', 'Tienda de Maria', 1, 'Av. Libertad 456', 1, '555-2345678'),
(3, 'Carlos Ruiz', 'Tienda Ruiz', 2, 'Calle Principal 789', 3, '555-3456789'),
(4, 'Ana Torres', 'Ana Express', 4, 'Plaza Mayor 101', 2, '555-4567890'),
(5, 'Luis G?mez', 'Luis Market', 2, 'Av. Central 202', 1, '555-5678901');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text DEFAULT NULL,
  `mail` text DEFAULT NULL,
  `contra` text DEFAULT NULL,
  `tipo` text DEFAULT NULL,
  `acceso` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `mail`, `contra`, `tipo`, `acceso`) VALUES
(440, 'Test mail', 'test1234proy@gmail.com', '12344321', 'Admin', '0'),
(707, 'Ricardo Beteta', 'augustohd88@gmail.com', '123456789', 'Admin', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion_de_tendero`
--

CREATE TABLE `validacion_de_tendero` (
  `ID_Validacion` int(11) NOT NULL,
  `ID_Tendero` int(11) DEFAULT NULL,
  `Total_Invitaciones` int(11) DEFAULT NULL,
  `Total_Asistencia` int(11) DEFAULT NULL,
  `Estado_de_invitacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`ID_Asistencias`),
  ADD KEY `ID_Evento` (`ID_Evento`),
  ADD KEY `ID_Tendero` (`ID_Tendero`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`ID_Comentario`),
  ADD KEY `ID_Evento` (`ID_Evento`),
  ADD KEY `ID_Tendero` (`ID_Tendero`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_Empresa`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ID_Evento`),
  ADD KEY `ID_Tendero` (`ID_Tendero`),
  ADD KEY `ID_Empresa` (`ID_Empresa`);

--
-- Indices de la tabla `invitaciones`
--
ALTER TABLE `invitaciones`
  ADD PRIMARY KEY (`ID_Invitaciones`),
  ADD KEY `ID_Evento` (`ID_Evento`),
  ADD KEY `ID_Tendero` (`ID_Tendero`);

--
-- Indices de la tabla `logistica`
--
ALTER TABLE `logistica`
  ADD PRIMARY KEY (`ID_Logistica`),
  ADD KEY `ID_Evento` (`ID_Evento`);

--
-- Indices de la tabla `tenderos`
--
ALTER TABLE `tenderos`
  ADD PRIMARY KEY (`ID_Tendero`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validacion_de_tendero`
--
ALTER TABLE `validacion_de_tendero`
  ADD PRIMARY KEY (`ID_Validacion`),
  ADD KEY `ID_Tendero` (`ID_Tendero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  MODIFY `ID_Asistencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ID_Comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_Empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ID_Evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `invitaciones`
--
ALTER TABLE `invitaciones`
  MODIFY `ID_Invitaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `logistica`
--
ALTER TABLE `logistica`
  MODIFY `ID_Logistica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tenderos`
--
ALTER TABLE `tenderos`
  MODIFY `ID_Tendero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `validacion_de_tendero`
--
ALTER TABLE `validacion_de_tendero`
  MODIFY `ID_Validacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `asistencias_ibfk_1` FOREIGN KEY (`ID_Evento`) REFERENCES `eventos` (`ID_Evento`),
  ADD CONSTRAINT `asistencias_ibfk_2` FOREIGN KEY (`ID_Tendero`) REFERENCES `tenderos` (`ID_Tendero`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`ID_Evento`) REFERENCES `eventos` (`ID_Evento`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`ID_Tendero`) REFERENCES `tenderos` (`ID_Tendero`);

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`ID_Tendero`) REFERENCES `tenderos` (`ID_Tendero`),
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`ID_Empresa`) REFERENCES `empresa` (`ID_Empresa`);

--
-- Filtros para la tabla `invitaciones`
--
ALTER TABLE `invitaciones`
  ADD CONSTRAINT `invitaciones_ibfk_1` FOREIGN KEY (`ID_Evento`) REFERENCES `eventos` (`ID_Evento`),
  ADD CONSTRAINT `invitaciones_ibfk_2` FOREIGN KEY (`ID_Tendero`) REFERENCES `tenderos` (`ID_Tendero`);

--
-- Filtros para la tabla `logistica`
--
ALTER TABLE `logistica`
  ADD CONSTRAINT `logistica_ibfk_1` FOREIGN KEY (`ID_Evento`) REFERENCES `eventos` (`ID_Evento`);

--
-- Filtros para la tabla `validacion_de_tendero`
--
ALTER TABLE `validacion_de_tendero`
  ADD CONSTRAINT `validacion_de_tendero_ibfk_1` FOREIGN KEY (`ID_Tendero`) REFERENCES `tenderos` (`ID_Tendero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
