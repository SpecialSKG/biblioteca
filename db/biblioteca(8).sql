-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2019 a las 22:24:12
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
(1, 'Antony Starck', '1984-05-22', 1, 'masculino'),
(2, 'Fernando Fabiani', '1987-04-07', 1, 'masculino'),
(3, 'Samuel Red', '1985-04-07', 1, 'masculino'),
(4, 'Washington Irving', '1876-04-07', 1, 'masculino'),
(5, 'Stephen King', '1987-04-09', 1, 'masculino'),
(6, 'Carlos Sisí', '1985-04-07', 1, 'masculino'),
(7, 'Geoff Johns.', '1876-04-07', 1, 'masculino');

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
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dui`, `nombre`, `nombre_usuario`, `contrasena_usuario`, `email`, `fecha_nacimiento`, `telefono`, `sexo`, `direccion`) VALUES
('12345678-0', 'Cliente Prueba', 'clienteprueba2', 'MTIzNDU2', 'hello@gmail.com', '1990-09-02', 78945612, 'Masculino', 'San salvador el salvador'),
('77777777-9', 'clientepruebanumero1', 'clienteprueba1', 'MTIzNDU2', 'clienteprueba1@gmail.com', '2000-12-06', 77777777, 'Masculino', 'clienteprueba1, clienteprueba1, clienteprueba1');

--
-- Disparadores `cliente`
--
DROP TRIGGER IF EXISTS `actualizar_cliente`;
DELIMITER $$
CREATE TRIGGER `actualizar_cliente` AFTER UPDATE ON `cliente` FOR EACH ROW BEGIN

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
DROP TRIGGER IF EXISTS `eliminar_cliente`;
DELIMITER $$
CREATE TRIGGER `eliminar_cliente` BEFORE DELETE ON `cliente` FOR EACH ROW BEGIN
 
INSERT INTO clientes_vetados SET dui =  old.dui, nombre = old.nombre, nombre_usuario = old.nombre_usuario, contrasena_usuario = old.contrasena_usuario, email = old.email, fecha_nacimiento = old.fecha_nacimiento, telefono = old.telefono, sexo = old.sexo, direccion = old.direccion;

DELETE FROM `user` WHERE id_user = old.dui;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_vetados`
--

DROP TABLE IF EXISTS `clientes_vetados`;
CREATE TABLE `clientes_vetados` (
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
-- Volcado de datos para la tabla `clientes_vetados`
--

INSERT INTO `clientes_vetados` (`dui`, `nombre`, `nombre_usuario`, `contrasena_usuario`, `email`, `fecha_nacimiento`, `telefono`, `sexo`, `direccion`) VALUES
('12345678-0', 'Benjamin el PRO-MASTER-CRUD', 'benjaminz', 'MTIzNDU=', 'zuletab99@gmail.com', '2019-08-22', 71140736, 'macho', 'dfdfasdsaddas\r\n');

--
-- Disparadores `clientes_vetados`
--
DROP TRIGGER IF EXISTS `restaurarCliente`;
DELIMITER $$
CREATE TRIGGER `restaurarCliente` AFTER DELETE ON `clientes_vetados` FOR EACH ROW BEGIN

INSERT INTO cliente SET dui =  old.dui, nombre = old.nombre, nombre_usuario = old.nombre_usuario, contrasena_usuario = old.contrasena_usuario, email = old.email, fecha_nacimiento = old.fecha_nacimiento, telefono = old.telefono, sexo = old.sexo, direccion = old.direccion;

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
  `Editorial_e` varchar(100) NOT NULL,
  `Pais_e` varchar(20) NOT NULL,
  `Direccion_e` varchar(200) NOT NULL,
  `Telefono_e` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id_editorial`, `Editorial_e`, `Pais_e`, `Direccion_e`, `Telefono_e`) VALUES
(1, 'Montañas de Fuego Internacional', 'Estados Unidos', 'Prol Calle Arce, San Salvador', 22601817),
(2, 'Editorial Jurídica Salvadoreña', 'El Salvador', '1a C Poniente Bis No. 1040, San Salvador', 22221128),
(3, 'Editorial Santillana Loma Linda', 'El Salvador', 'Centro Comercial Loma Linda Local 11-A, San Salvador', 22230949);

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
(26, 10, 'vengo sin cita', 22, 1, '1989-11-20', 1, 'hu.jpg', 100),
(27, 11, 'los ,ejores chistes del mundo', 22, 1, '1992-06-20', 1, 'chi.jfif', 100);

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
(1, 'El Salvador'),
(2, 'Afganistán'),
(3, 'Afganistán'),
(4, 'Afganistán'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Argelia'),
(8, 'Argentina'),
(9, 'Australia'),
(10, 'Bélgica'),
(11, 'Brasil'),
(12, 'Burundi'),
(13, 'Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre_personal` varchar(30) NOT NULL,
  `usuario_personal` varchar(20) NOT NULL,
  `pass_personal` varchar(20) NOT NULL,
  `rol_personal` int(11) NOT NULL,
  `email_personal` varchar(50) NOT NULL,
  `nacimiento_personal` date NOT NULL,
  `telefono_personal` int(8) NOT NULL,
  `sexo_personal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre_personal`, `usuario_personal`, `pass_personal`, `rol_personal`, `email_personal`, `nacimiento_personal`, `telefono_personal`, `sexo_personal`) VALUES
(1, 'Jose Alvaro Guerra', 'AlvaroGT', 'MTIzNDU2', 1, 'josealvaro.nw@gmail.com', '1997-09-14', 73203957, 'Masculino'),
(2, 'Salvador García', 'salva11', 'c2VzczEyMzQ1', 2, 'salva@gmail.com', '1996-07-15', 35789416, 'masculino'),
(3, 'benja', 'bz', 'MTIzNDU=', 1, 'zuletab99@gmail.com', '2019-08-24', 71140736, 'macho'),
(4, 'secretariaprueba1', 'secretariaprueba1', 'MTIzNDU2', 2, 'secretariaprueba1@gmail.com', '1998-12-31', 77777777, 'Femenino'),
(5, 'gerenteprueba1', 'gerenteprueba1', 'MTIzNDU2', 1, 'gerenteprueba1@gmail.com', '1997-12-31', 77777777, 'Femenino');

--
-- Disparadores `personal`
--
DROP TRIGGER IF EXISTS `actualizar_personal`;
DELIMITER $$
CREATE TRIGGER `actualizar_personal` AFTER UPDATE ON `personal` FOR EACH ROW BEGIN
 
UPDATE user SET nombre_user = new.nombre_personal, user = new.usuario_personal, pass = new.pass_personal, rol_ = new.rol_personal WHERE id_user = new.id_personal;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `eliminar_personal`;
DELIMITER $$
CREATE TRIGGER `eliminar_personal` BEFORE DELETE ON `personal` FOR EACH ROW BEGIN

DELETE FROM `user` WHERE id_user = old.id_personal;

END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `usuario_personal`;
DELIMITER $$
CREATE TRIGGER `usuario_personal` AFTER INSERT ON `personal` FOR EACH ROW BEGIN

INSERT INTO user SET id_user = new.id_personal, nombre_user = new.nombre_personal, user = new.usuario_personal, pass = new.pass_personal, rol_ = new.rol_personal;

END
$$
DELIMITER ;

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
DROP TRIGGER IF EXISTS `aume_stock`;
DELIMITER $$
CREATE TRIGGER `aume_stock` BEFORE UPDATE ON `reserva` FOR EACH ROW begin 

update libro set stock = (stock + old.cantidad)
WHERE id_libro = old.id_libro;






END
$$
DELIMITER ;
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
DROP TRIGGER IF EXISTS `dismin_stock`;
DELIMITER $$
CREATE TRIGGER `dismin_stock` AFTER UPDATE ON `reserva` FOR EACH ROW begin 

update libro set stock = (stock - new.cantidad)
WHERE id_libro = new.id_libro;

update reserva_historial set cantidad = new.cantidad
WHERE id_reserva = new.id_reserva;



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
('1', 'Jose Alvaro Guerra', 'AlvaroGT', 'MTIzNDU2', 1),
('12345678-0', 'Cliente Prueba', 'clienteprueba2', 'MTIzNDU2', 3),
('2', 'Salvador García', 'salva11', 'c2VzczEyMzQ1', 2),
('3', 'benja', 'bz', 'MTIzNDU=', 1),
('4', 'secretariaprueba1', 'secretariaprueba1', 'MTIzNDU2', 2),
('5', 'gerenteprueba1', 'gerenteprueba1', 'MTIzNDU2', 1),
('77777777-9', 'clientepruebanumero1', 'clienteprueba1', 'MTIzNDU2', 3);

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
-- Indices de la tabla `clientes_vetados`
--
ALTER TABLE `clientes_vetados`
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
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`),
  ADD KEY `rol_personal` (`rol_personal`);

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
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `id_editorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo_historial`
--
ALTER TABLE `prestamo_historial`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva_historial`
--
ALTER TABLE `reserva_historial`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`rol_personal`) REFERENCES `user_rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`dui`) REFERENCES `cliente` (`dui`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`dui`) REFERENCES `cliente` (`dui`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`id_libro`) REFERENCES `libro` (`id_libro`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rol_`) REFERENCES `user_rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
