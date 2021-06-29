-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2019 a las 00:48:28
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_pais` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`, `fecha_nacimiento`, `id_pais`, `sexo`) VALUES
(1, 'Antony Starck', '1984-05-22', 1, 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'terror'),
(16, 'infantil'),
(17, 'romantico'),
(18, 'accion'),
(19, 'Aventura'),
(20, 'comics'),
(21, 'ficcion'),
(22, 'Humor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena_usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `direccion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `cliente`
--
DROP TRIGGER IF EXISTS `actualizar_usuario`;
DELIMITER $$
CREATE TRIGGER `actualizar_usuario` AFTER UPDATE ON `cliente` FOR EACH ROW BEGIN

UPDATE user SET nombre_user = new.nombre, user = new.nombre_usuario, pass = new.contrasena_usuario WHERE id_user = new.dui;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `crear_usuario`;
DELIMITER $$
CREATE TRIGGER `crear_usuario` AFTER INSERT ON `cliente` FOR EACH ROW BEGIN

INSERT INTO user SET id_user = new.dui, nombre_user = new.nombre, user = new.nombre_usuario, pass = new.contrasena_usuario, rol_ = '3';

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

DROP TABLE IF EXISTS `editorial`;
CREATE TABLE `editorial` (
  `id_editorial` int(11) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `pais` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `editorial`, `pais`) VALUES
(1, 'happy libro', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE `libro` (
  `id_libro` int(11) NOT NULL,
  `identificador` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id_libro`, `identificador`, `titulo`, `id_categoria`, `id_autor`, `fecha_lanzamiento`, `id_editorial`, `imagen`, `stock`) VALUES
(1, 1, 'viernes', 1, 1, '2010-10-12', 1, 'hola.hpg', 15),
(22, 1, 'LA SIGUANABA', 21, 1, '2019-07-02', 1, '1.jpg', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'El Salvador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `cantidades` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_entregap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `prestamo`
--
DROP TRIGGER IF EXISTS `aumen_stock`;
DELIMITER $$
CREATE TRIGGER `aumen_stock` BEFORE UPDATE ON `prestamo` FOR EACH ROW begin 

update libro set stock = (stock + old.cantidades)
WHERE id_libro = old.id_libro;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `aument_stock`;
DELIMITER $$
CREATE TRIGGER `aument_stock` AFTER DELETE ON `prestamo` FOR EACH ROW begin 

update libro set stock = (stock + old.cantidades)
WHERE id_libro = old.id_libro;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `disminu_stock`;
DELIMITER $$
CREATE TRIGGER `disminu_stock` AFTER UPDATE ON `prestamo` FOR EACH ROW begin 
update libro set stock = (stock - new.cantidades)
WHERE id_libro = new.id_libro;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `disminuy_stock`;
DELIMITER $$
CREATE TRIGGER `disminuy_stock` AFTER INSERT ON `prestamo` FOR EACH ROW begin 

update libro set stock = (stock - new.cantidades)
WHERE id_libro = new.id_libro;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `insertars`;
DELIMITER $$
CREATE TRIGGER `insertars` BEFORE INSERT ON `prestamo` FOR EACH ROW begin 

INSERT into prestamo_historial set id_libro = new.id_libro,
dui = new.dui,
cantidades = new.cantidades,
fecha_prestamo = new.fecha_prestamo,
fecha_entregap = new.fecha_entregap;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_historial`
--

DROP TABLE IF EXISTS `prestamo_historial`;
CREATE TABLE `prestamo_historial` (
  `id_prestamo` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `cantidades` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_entregap` date NOT NULL,
  `id_libro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo_historial`
--

INSERT INTO `prestamo_historial` (`id_prestamo`, `dui`, `cantidades`, `fecha_prestamo`, `fecha_entregap`, `id_libro`) VALUES
(3, '12345678-0', 25, '2019-08-08', '2019-08-09', 23),
(4, '12345678-0', 0, '2019-08-08', '2019-08-09', 23),
(5, '12345678-0', 0, '2019-08-08', '2019-08-09', 23),
(6, '12345678-0', 25, '2019-08-08', '2019-08-09', 23),
(7, '12345678-0', 25, '2019-08-08', '2019-08-09', 23),
(8, '12345678-0', 4, '2019-08-08', '2019-08-09', 23),
(9, '12345678-0', 52, '2019-08-08', '2019-08-09', 23),
(10, '12345678-0', 25, '2019-08-09', '2019-08-09', 23),
(11, '12345678-0', 15, '2019-08-09', '2019-08-30', 23),
(12, '12345678-0', 25, '2019-08-16', '2019-08-15', 23),
(13, '12345678-0', 25, '2019-08-09', '2019-08-10', 23),
(14, '12345678-0', 25, '2019-08-09', '2019-08-10', 23),
(15, '12345678-0', 25, '2019-08-09', '2019-08-10', 23),
(16, '12345678-0', 25, '2019-08-09', '2019-08-10', 23),
(17, '12345678-0', 7, '2019-08-10', '2019-08-16', 23),
(18, '12345678-0', 25, '2019-08-09', '2019-08-16', 23),
(19, '12345678-0', 306, '2019-08-09', '2019-08-10', 23),
(20, '12345678-0', 1, '2019-08-10', '2019-08-10', 23),
(21, '12345678-0', 25, '2019-08-09', '2019-08-10', 23),
(22, '12345678-0', 25, '2019-08-10', '2019-08-15', 23),
(23, '12345678-0', 22, '2019-08-10', '2019-08-12', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

DROP TABLE IF EXISTS `reserva`;
CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `dui` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Disparadores `reserva`
--
DROP TRIGGER IF EXISTS `aumenta_stock`;
DELIMITER $$
CREATE TRIGGER `aumenta_stock` AFTER DELETE ON `reserva` FOR EACH ROW begin 

update libro set stock = (stock + old.cantidad)
WHERE id_libro = old.id_libro;


END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `aver`;
DELIMITER $$
CREATE TRIGGER `aver` BEFORE DELETE ON `reserva` FOR EACH ROW begin 

INSERT into reserva_historial set id_libro = old.id_libro,
dui = old.dui,
cantidad = old.cantidad,
fecha_salida = old.fecha_salida,
fecha_entrega = old.fecha_entrega;

INSERT into prestamo set id_libro = old.id_libro,
dui = old.dui,
cantidades = old.cantidad,
fecha_prestamo = old.fecha_salida,
fecha_entregap = old.fecha_entrega;


END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `disminuye_stock`;
DELIMITER $$
CREATE TRIGGER `disminuye_stock` AFTER INSERT ON `reserva` FOR EACH ROW begin 

update libro set stock = (stock - new.cantidad)
WHERE id_libro = new.id_libro;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_historial`
--

DROP TABLE IF EXISTS `reserva_historial`;
CREATE TABLE `reserva_historial` (
  `id_reserva` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `dui` int(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reserva_historial`
--

INSERT INTO `reserva_historial` (`id_reserva`, `id_libro`, `dui`, `cantidad`, `fecha_salida`, `fecha_entrega`) VALUES
(2, 1, 1234567888, 5, '2019-07-16', '2019-07-25'),
(3, 1, 6354634, 2, '2019-07-09', '2019-07-10'),
(4, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(5, 1, 1341545, 4, '2019-07-31', '2019-07-17'),
(6, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(7, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(8, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(9, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(10, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(11, 1, 6354634, 2, '2019-07-27', '2019-07-29'),
(12, 1, 5849521, 0, '0000-00-00', '0000-00-00'),
(13, 1, 6354634, 16, '2019-07-30', '2019-07-26'),
(14, 1, 6354634, 20, '2019-07-11', '2019-07-31'),
(15, 1, 0, 7874, '2019-08-01', '2019-08-09'),
(16, 1, 1232154511, 19, '2019-07-16', '2019-08-02'),
(17, 1, 32154, 1, '2019-07-31', '2019-08-09'),
(18, 1, 0, 20, '2019-07-31', '2019-08-03'),
(19, 1, 34351321, 19, '2019-07-16', '2019-07-24'),
(20, 1, 5849521, 0, '0000-00-00', '0000-00-00'),
(21, 1, 0, 0, '0000-00-00', '0000-00-00'),
(22, 2, 123456789, 20, '2019-07-30', '2019-08-08'),
(23, 22, 1, 32, '2019-07-31', '2019-08-02'),
(24, 22, 1, 0, '0000-00-00', '0000-00-00'),
(25, 22, 1, 0, '0000-00-00', '0000-00-00'),
(26, 22, 1, 25, '2019-07-31', '2019-08-08'),
(27, 22, 1, 25, '2019-07-31', '2019-08-01'),
(28, 22, 2, 20, '2019-07-31', '2019-08-01'),
(29, 22, 2, 21, '2019-07-16', '2019-07-31'),
(30, 22, 2, 21, '2019-07-22', '2019-07-31'),
(31, 22, 1, 21, '2019-07-31', '2019-08-01'),
(32, 22, 1, 32, '2019-07-31', '2019-08-08'),
(33, 22, 0, 21, '2019-07-30', '2019-07-31'),
(34, 22, 0, 10, '2019-07-30', '2019-07-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
CREATE TABLE `subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `subcategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `subcategoria`) VALUES
(1, 'miedo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nombre_user` varchar(50) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rol_` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nombre_user`, `user`, `pass`, `rol_`) VALUES
('01245687-0', 'Jose Alvaro Guerra', 'Alvaro69', '012345', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_rol`
--

DROP TABLE IF EXISTS `user_rol`;
CREATE TABLE `user_rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_rol`
--

INSERT INTO `user_rol` (`id_rol`, `rol`) VALUES
(1, 'Gerente'),
(2, 'Secretaria'),
(3, 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dui`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id_editorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_autor` (`id_autor`),
  ADD KEY `id_editorial` (`id_editorial`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `dui` (`dui`);

--
-- Indices de la tabla `prestamo_historial`
--
ALTER TABLE `prestamo_historial`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_libro` (`id_libro`),
  ADD KEY `id_cliente` (`dui`);

--
-- Indices de la tabla `reserva_historial`
--
ALTER TABLE `reserva_historial`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `rol_` (`rol_`);

--
-- Indices de la tabla `user_rol`
--
ALTER TABLE `user_rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo_historial`
--
ALTER TABLE `prestamo_historial`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reserva_historial`
--
ALTER TABLE `reserva_historial`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user_rol`
--
ALTER TABLE `user_rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor`
--
ALTER TABLE `autor`
  ADD CONSTRAINT `autor_ibfk_2` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`id_editorial`) REFERENCES `editorial` (`id_editorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`dui`) REFERENCES `cliente` (`dui`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`dui`) REFERENCES `cliente` (`dui`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rol_`) REFERENCES `user_rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
