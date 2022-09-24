-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2022 a las 17:45:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huevosjireth`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DATOSGRAFICO_BAR` ()  SELECT Producto, SUM(Total) FROM reservas WHERE Producto = 'Huevos Pequeños' AND Estado='Retirado'
UNION
SELECT Producto, SUM(Total) FROM reservas WHERE Producto = 'Huevos Medianos' AND Estado='Retirado'
UNION
SELECT Producto, SUM(Total) FROM reservas WHERE Producto = 'Huevos Triple A' AND Estado='Retirado'
UNION
SELECT Producto, SUM(Total) FROM reservas WHERE Producto = 'Huevos Doble Yema' AND Estado='Retirado'$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `idMensaje` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Mensaje` varchar(500) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`idMensaje`, `Nombre`, `Correo`, `Telefono`, `Mensaje`, `idUsuario`) VALUES
(6, 'Laura sofia hernandez', 'Laush23@gmail.com', 2147483647, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum sunt illum repellat laborum repellendus quas quisquam eligendi, ipsam quae eaque aspernatur corporis minus nam odio? Totam voluptatem eveniet possimus praesentium? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa veniam commodi doloribus? Temporibus quia perferendis similique magnam ab cupiditate officia provident et. Laudantium deserunt eos laborum reiciendis asperiores sed veniam?', 0),
(8, 'joao almeida', 'joa@gmail.com', 312548754, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum sunt illum repellat laborum repellendus quas quisquam eligendi, ipsam quae eaque aspernatur corporis minus nam odio? Totam voluptatem eveniet possimus praesentium? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa veniam commodi doloribus? Temporibus quia perferendis similique magnam ab cupiditate officia provident et. Laudantium deserunt eos laborum reiciendis asperiores sed veniam?', 0),
(9, 'jhoan', 'jhoan123@gmail.com', 123456, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum sunt illum repellat laborum repellendus quas quisquam eligendi, ipsam quae eaque aspernatur corporis minus nam odio? Totam voluptatem eveniet possimus praesentium? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa veniam commodi doloribus? Temporibus quia perferendis similique magnam ab cupiditate officia provident et. Laudantium deserunt eos laborum reiciendis asperiores sed veniam?', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `Precio`, `Descripcion`) VALUES
(101, 'Huevos Pequeños', 10000, 'Los huevos mas pequeños, con el precio mas barato y accesibles para nuestros clientes'),
(202, 'Huevos Medianos', 12800, 'Huevos de tamaño mediano, económicos con un precio razonable.'),
(303, 'Huevos Triple A', 14500, 'El huevo mas grande que vendemos, cuenta con una clara y yema mas grande y alta proteina!'),
(404, 'Huevos Doble Yema', 18000, 'Los huevos que contienen doble sorpresa por dentro!, los mas costosos y con mejor aceptación de nuestros clientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idReserva` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Total` int(11) GENERATED ALWAYS AS (`Precio` * `Cantidad`) VIRTUAL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Estado` varchar(15) NOT NULL DEFAULT 'Vigente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`idReserva`, `Usuario`, `Producto`, `Precio`, `Cantidad`, `Fecha`, `Hora`, `Estado`) VALUES
(1, 'felipe ramos ', 'Huevos Triple A', 18500, 4, '2022-09-17', '09:34:00', 'Vigente'),
(2, 'felipe ramos ', 'Huevos Doble Yema', 22000, 4, '2022-09-17', '09:35:25', 'Retirado'),
(3, 'felipe ramos ', 'Huevos Pequeños', 10500, 1, '2022-09-17', '09:38:59', 'Retirado'),
(4, 'felipe ramos ', 'Huevos Triple A', 18500, 2, '2022-09-17', '09:45:41', 'Cancelado'),
(5, 'felipe ramos ', 'Huevos Medianos', 15400, 5, '2022-09-17', '09:50:27', 'Retirado'),
(6, 'felipe ramos ', 'Huevos Doble Yema', 22000, 4, '2022-09-17', '09:50:49', 'Vigente'),
(7, 'felipe ramos ', 'Huevos Triple A', 18500, 4, '2022-09-17', '09:52:56', 'Retirado'),
(8, 'felipe ramos ', 'Huevos Doble Yema', 22000, 4, '2022-09-17', '09:54:36', 'Retirado'),
(9, 'yeison', 'Huevos Doble Yema', 22000, 1, '2022-09-17', '10:18:25', 'Vigente'),
(11, 'felipe ramos ', 'Huevos Pequeños', 10500, 2, '2022-09-24', '07:30:07', 'Retirado'),
(12, 'felipe ramos ', 'Huevos Pequeños', 10500, 5, '2022-09-24', '07:30:16', 'Retirado'),
(13, 'felipe ramos', 'Huevos Doble Yema', 22000, 2, '2022-09-24', '10:32:18', 'Vigente'),
(14, 'felipe ramos', 'Huevos Triple A', 18500, 3, '2022-09-24', '10:33:07', 'Vigente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `Perfil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `Perfil`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Contraseña` varchar(150) NOT NULL,
  `idRol` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Correo`, `Contraseña`, `idRol`) VALUES
(14, 'Andres Felipe Guzman', 'afguzman20@gmail.com', '7b6ad79b346fb6951275343948e13c1b4ebca82a5452a6c5d15684377f096ca927506a23a847e6e046061399631b16fc2820c8b0e02d0ea87aa5a203a77c2a7e', 1),
(20, 'felipe ramos', 'felipe@gmail.com', 'ca9879bd727ba3bd815f05fe6b9e4640c774b61cc8f141295542cefc1b7b8fc6e3daf3f656555cdec355894e7af48964e88994d960f41ba8f61f7a05d5ddbd07', 2),
(21, 'alberto llamosa', 'alberto123@gmail.com', '0b4b377fb3cee9a3a1c19d706412b1e74b2c55a9d08c33a53be444e59ebf456ee29e8313d6826ac173895b2e3fec83c6ed5678fc9e37400745979c555ef0196f', 2),
(22, 'pepito perez', 'pepito@gmail.com', '7bba69ff1c5634f9f133f39cfd2d364d6c3fc2f761caeb7109926a75486fd17f64bd4de53e540c52d152889c71bca684cf39d248dfe13f9b70df63c9c67fc5dc', 2),
(23, 'llamozin', 'llamosita@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 2),
(24, 'yeison', 'yeison@gmail.com', '5adffbbdc82e26a94b28f1cd2664a9b7f496488f4b744695bab343d70c1ff69b8d724686026bef3347b69e26af6d0478608cb001fafc62c0354c9f3e22ad2825', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`idMensaje`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idReserva`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `idMensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_user_rol` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
