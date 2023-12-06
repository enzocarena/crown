-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2023 a las 05:27:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crown_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calle`
--

CREATE TABLE `calle` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `calle`
--

INSERT INTO `calle` (`id`, `nombre`) VALUES
(1, 'larralde\r\n'),
(2, 'Avenida Colón\r\n'),
(3, 'Haiti'),
(4, 'ererder'),
(5, 'central'),
(6, 'messi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_talle_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_talle_producto`, `cantidad`, `id_usuario`) VALUES
(31, 35, 2, 6),
(40, 68, 1, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo_postal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `id_provincia`, `nombre`, `codigo_postal`) VALUES
(1, 2, 'Ciudad de Buenos Aires (CABA)', 0),
(2, 2, 'La Plata', 0),
(3, 2, 'Mar del Plata', 0),
(4, 2, 'Rosario', 0),
(5, 1, 'Córdoba (ciudad capital)', 0),
(6, 1, 'Villa María', 0),
(7, 1, 'Río Cuarto', 0),
(8, 21, 'Santa Fe (ciudad capital)', 0),
(9, 21, 'Rosario', 0),
(10, 13, 'Mendoza (ciudad capital)', 0),
(11, 13, 'San Rafael', 0),
(12, 13, 'Godoy Cruz', 0),
(13, 24, 'San Miguel de Tucumán (ciudad capital)', 0),
(14, 24, 'Concepción', 0),
(15, 8, 'Paraná (ciudad capital)', 0),
(16, 8, 'Concordia', 0),
(17, 8, 'Gualeguaychú', 0),
(18, 17, 'Salta (ciudad capital)', 0),
(19, 17, 'San Ramón de la Nueva Orán', 0),
(20, 14, 'Posadas (ciudad capital)', 0),
(21, 14, 'Oberá', 0),
(22, 5, 'Resistencia (ciudad capital)', 0),
(23, 5, 'Roque Sáenz Peña', 0),
(24, 7, 'Corrientes (ciudad capital)\r\n', 0),
(25, 7, 'Goya', 0),
(26, 22, 'Santiago del Estero (ciudad capital)\r\n', 0),
(27, 22, 'La Banda\r\n', 0),
(28, 18, 'San Juan (ciudad capital)\r\n', 0),
(29, 10, 'San Salvador de Jujuy (ciudad capital)\r\n', 0),
(30, 16, 'Viedma (ciudad capital)\r\n', 0),
(31, 16, 'General Roca\r\n', 0),
(32, 15, 'Neuquén (ciudad capital)\r\n', 0),
(33, 15, 'Cipolletti', 0),
(34, 9, 'Formosa (ciudad capital)\r\n', 0),
(35, 6, 'Rawson (ciudad capital)\r\n', 0),
(36, 6, 'Comodoro Rivadavia\r\n', 0),
(37, 19, 'San Luis (ciudad capital)\r\n', 0),
(38, 0, 'rio tercero', 0),
(39, 26, 'mafalda', 0),
(40, 33, 'grosso', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id`, `color`) VALUES
(1, 'negro'),
(2, 'blanco'),
(3, 'rojo'),
(4, 'azul'),
(5, 'brodo'),
(6, 'gris'),
(7, 'violeta'),
(8, 'amarillo'),
(9, 'verde'),
(10, 'celeste'),
(11, 'rosa'),
(12, 'naranja'),
(13, 'cian'),
(14, 'fucsia'),
(15, 'Nacar'),
(16, 'beige');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_envio`
--

CREATE TABLE `datos_envio` (
  `id_datos_envio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `piso` varchar(20) NOT NULL,
  `observaciones` text NOT NULL,
  `codigo_postal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_envio`
--

INSERT INTO `datos_envio` (`id_datos_envio`, `id_usuario`, `provincia`, `ciudad`, `calle`, `numero`, `piso`, `observaciones`, `codigo_postal`) VALUES
(47, 2, '1', 'rio tercero', 'haiti', '1727', '0', 'al lado de un campo', 5850),
(48, 2, '1', 'berrotaran', 'avellaneda', '23', '0', 'a', 2335),
(49, 2, '1', 'rio tercero', 'asado', '123', '1', 'a', 5850),
(50, 2, '1', 'almafuerte', 'asado', '23', '0', 'asa', 3453),
(51, 2, '2', 'La plata', 'san martin', '44', '0', 'asa', 4546),
(52, 2, '2', 'La plata', 'san martin', '44', '0', 'asa', 4546),
(53, 2, '2', 'La plata', 'san martin', '44', '0', 'asa', 4546),
(54, 2, '2', 'La plata', 'san martin', '44', '0', 'asa', 4546),
(55, 2, '2', 'La plata', 'san martin', '44', '0', 'asa', 4546),
(56, 2, '1', 'fsdafa', 'fasfdsa', '14515', '0', 'fdsafas', 15554),
(57, 2, '1', 'fsdafa', 'fasfdsa', '14515', '0', 'fdsafas', 15554),
(58, 2, '1', 'wtrwr', 'efgd', '4532', '34', 'gfdsgtfv', 5436),
(59, 2, '1', 'wtrwr', 'efgd', '4532', '34', 'gfdsgtfv', 5436),
(60, 1, 'Cordoba', 'rio tercero', 'Haiti', '1727', '0', 'fsfdfsd', 5850),
(61, 1, 'Cordoba', 'rio tercero', 'Haiti', '2424', '3', 'dwgsreg', 5850),
(62, 1, 'tucuman', 'mafalda', 'ererder', '33', '3', 'afdsasfe', 3433),
(63, 1, 'Cordoba', 'rio tercero', 'Haiti', '1727', '0', 'afvcdsfae', 5850),
(64, 1, 'Cordoba', 'rio tercero', 'Haiti', '2323', '3', 'safsefe', 5850),
(65, 1, 'Cordoba', 'rio tercero', 'central', '4234', '2', 'sdgs', 5850),
(66, 1, 'Cordoba', 'rio tercero', 'central', '3453', '3', 'sdgfsd', 5058),
(67, 1, 'Cordoba', 'rio tercero', 'central', '232', '3', 'afecawe', 3434),
(68, 1, 'Cordoba', 'rio tercero', 'central', '223', '2', 'sfegf', 34343),
(69, 1, 'santiago del estero', 'grosso', 'messi', '10', '0', 'genio', 1010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_detalle_venta`, `id_venta`, `id_producto`, `cantidad`, `precio`) VALUES
(2, 22, 34, 1, 0),
(3, 29, 34, 1, 0),
(4, 29, 35, 1, 0),
(5, 31, 34, 1, 0),
(6, 31, 35, 1, 0),
(7, 32, 34, 1, 5000),
(8, 33, 34, 1, 5000),
(9, 34, 35, 1, 3000),
(10, 35, 36, 1, 3500),
(11, 36, 37, 1, 4000),
(12, 37, 34, 1, 5000),
(13, 38, 34, 1, 5000),
(14, 39, 34, 1, 5000),
(15, 40, 34, 1, 5000),
(16, 41, 36, 1, 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `id_calle` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `num_calle` varchar(60) NOT NULL,
  `direccion` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `id_calle`, `id_ciudad`, `id_venta`, `num_calle`, `direccion`) VALUES
(1, 0, 38, 0, '', 0),
(2, 3, 38, 32, '1727', 0),
(3, 3, 38, 33, '2424', 0),
(4, 4, 39, 34, '33', 0),
(5, 3, 38, 35, '1727', 0),
(6, 3, 38, 36, '2323', 0),
(7, 5, 0, 37, '4234', 0),
(8, 5, 0, 38, '3453', 0),
(9, 5, 38, 39, '232', 0),
(10, 5, 38, 40, '223', 0),
(11, 6, 40, 41, '10', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `ruta`) VALUES
(1, '/imagenes/buzos/CANGURO-FRISADO-NACAR.jpg'),
(2, '/imagenes/buzos/CANGURONEGRO.jpg'),
(3, '/imagenes/buzos/CANGURO-WIDE-CUT-FRISADO-Green.jpg'),
(4, '/imagenes/buzos/HOODIEbarely there.jpg'),
(5, '/imagenes/buzos/Sudadera-Oversize.jpg'),
(6, '/imagenes/pantalones/bermuda-oversize.jpg'),
(7, '/imagenes/pantalones/pantalonBordoMora.jpg'),
(8, '/imagenes/pantalones/shorts-rustico.jpg'),
(10, '/imagenes/remeras/remera1.1.jpg'),
(11, '/public/imagenes/remeras/remera1.2.jpg'),
(12, '/public/imagenes/remeras/remera1.jpg'),
(13, '/imagenes/remeras/remera2.jpg'),
(14, '/imagenes/remeras/remera3.jpg'),
(15, '/imagenes/remeras/REMERA-BLEND-OVERSIZE-rosa.jpg'),
(16, '/imagenes/remeras/REMERA-CUELLO-ABIERTO-MANGA-LARGA.jpg'),
(17, '/imagenes/remeras/REMERA-OVERSIZE-M-LARGA.jpg'),
(18, '/imagenes/remeras/REMERA-OVERSIZE-M-LARGA-AZUL.jpg'),
(19, '/imagenes/remeras/REMERA-OVERSIZE-M-LARGA-NATURAL.jpg'),
(20, '/imagenes/remeras/REMERA-OVERSIZE-M-LARGA-VIOLETA.jpg'),
(21, '/imagenes/remeras/REMERA-OVERSIZE-SUPER-SOFT.jpg'),
(22, '/imagenes/remeras/REMERA-SOFT-blanco.jpg'),
(23, '/imagenes/remeras/REMERON-M-LARGA.jpg'),
(24, '/imagenes/remeras/REMERON-OVERSIZE.jpg'),
(25, '/imagenes/remeras/REMERON-OVERSIZE-Fucsia.jpg'),
(26, '/imagenes/remeras/REMERON-OVERSIZE-Naranja.jpg'),
(27, 'C:\\xampp\\htdocs\\crown\\public\\imagenes\\remeras\\REMERON-OVERSIZE-RELAXED-SOFT.jpg'),
(28, 'C:\\xampp\\htdocs\\crown\\public\\imagenes\\remeras\\REMERON-OVERSIZE-Verde.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `tipo_id`, `color_id`, `ruta`) VALUES
(34, 'remera blend oversize', 5000, 1, 11, '/imagenes/remeras/REMERA-BLEND-OVERSIZE-rosa.jpg'),
(35, 'remera cuello abierto manga larga', 3000, 1, 4, '/imagenes/remeras/REMERA-CUELLO-ABIERTO-MANGA-LARGA.jpg'),
(36, 'Remera Overzise Manga Larga', 3500, 1, 4, '/imagenes/remeras/REMERA-OVERSIZE-M-LARGA-AZUL.jpg'),
(37, 'Remera Super Soft', 4000, 1, 1, '/imagenes/remeras/REMERA-OVERSIZE-SUPER-SOFT.jpg'),
(38, 'Remeron Overzise', 4000, 1, 1, '/imagenes/remeras/REMERON-M-LARGA.jpg'),
(39, 'Buzo Canguro Frizado', 7500, 2, 12, '/imagenes/buzos/CANGURO-FRISADO-NACAR.jpg'),
(40, 'Buzo Canguro', 7500, 2, 1, '/imagenes/buzos/CANGURONEGRO.jpg'),
(41, 'Canguro Wide', 5000, 2, 9, '/imagenes/buzos/CANGURO-WIDE-CUT-FRISADO-Green.jpg'),
(42, 'Hoodie', 6000, 2, 1, '/imagenes/buzos/HOODIEbarely there.jpg'),
(43, 'Sudadera', 5000, 2, 1, '/imagenes/buzos/Sudadera-Oversize.jpg'),
(44, 'Bermuda', 3500, 3, 2, '/imagenes/pantalones/bermuda-oversize.jpg'),
(45, 'Jogger', 4000, 3, 5, '/imagenes/pantalones/pantalonBordoMora.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id_provincia` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nombre`) VALUES
(1, 'Cordoba'),
(2, 'Buenos Aires'),
(3, 'Ciudad Autónoma de Buenos Aires'),
(4, 'Catamarca'),
(5, 'Chaco'),
(6, 'Chubut'),
(7, 'Corrientes'),
(8, 'Entre Ríos'),
(9, 'Formosa'),
(10, 'Jujuy'),
(11, 'La Pampa'),
(12, 'La Rioja'),
(13, 'Mendoza'),
(14, 'Misiones'),
(15, 'Neuquén'),
(16, 'Río Negro'),
(17, 'Salta'),
(18, 'San Juan'),
(19, 'San Luis'),
(20, 'Santa Cruz'),
(21, 'Santa Fe'),
(22, 'Santiago del Estero'),
(23, 'Tierra del Fuego, Antártida e Islas del Atlántico Sur'),
(24, 'Tucumán'),
(25, 'Cordoba'),
(26, 'tucuman'),
(27, 'Cordoba'),
(28, 'Cordoba'),
(29, 'Cordoba'),
(30, 'Cordoba'),
(31, 'Cordoba'),
(32, 'Cordoba'),
(33, 'santiago del estero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talle`
--

CREATE TABLE `talle` (
  `id` int(11) NOT NULL,
  `num_talle` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talle`
--

INSERT INTO `talle` (`id`, `num_talle`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, 'XXXL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talle_producto`
--

CREATE TABLE `talle_producto` (
  `id_talle_producto` int(11) NOT NULL,
  `id_talle` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `talle_producto`
--

INSERT INTO `talle_producto` (`id_talle_producto`, `id_talle`, `id_producto`) VALUES
(1, 1, 34),
(105, 3, 34),
(106, 2, 34),
(107, 4, 34),
(108, 5, 34),
(109, 6, 34),
(110, 7, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'remera'),
(2, 'buzo'),
(3, 'pantalon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(60) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `jerarquia` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_direccion`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `jerarquia`) VALUES
(1, 0, 'benjamin', 'Grosso', 'benjamingrosso@gmail.com', '$2y$10$E9hboYYP/LsIyzcZschsi.5FbIwlE0TbECvgRzIPsdigBQwq98NCG', '3571326123', 0),
(2, 0, 'admin', 'admin', 'admin@gmail.com', '$2y$10$zk/0XDa6V09CZ6YMI.XVCuYOSph0D1ApvMISxV6K1dXv0vcL/HX2W', '3571458622', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_datos_envio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fecha`, `id_datos_envio`, `id_usuario`) VALUES
(19, '2023-11-24 22:47:21', 47, 2),
(20, '2023-11-24 22:48:27', 48, 2),
(21, '2023-11-24 22:50:34', 49, 2),
(22, '2023-11-24 22:53:18', 50, 2),
(23, '2023-11-24 23:03:59', 51, 2),
(24, '2023-11-24 23:04:42', 52, 2),
(25, '2023-11-24 23:04:42', 53, 2),
(26, '2023-11-24 23:04:43', 54, 2),
(27, '2023-11-24 23:04:43', 55, 2),
(28, '2023-11-24 23:09:55', 56, 2),
(29, '2023-11-24 23:11:26', 57, 2),
(30, '2023-11-24 23:18:05', 58, 2),
(31, '2023-11-24 23:19:06', 59, 2),
(32, '2023-11-30 03:32:27', 60, 1),
(33, '2023-11-30 03:39:47', 61, 1),
(34, '2023-11-30 03:42:15', 62, 1),
(35, '2023-11-30 03:44:42', 63, 1),
(36, '2023-11-30 03:47:28', 64, 1),
(37, '2023-11-30 03:49:26', 65, 1),
(38, '2023-11-30 03:52:44', 66, 1),
(39, '2023-11-30 03:56:15', 67, 1),
(40, '2023-11-30 03:58:26', 68, 1),
(41, '2023-11-30 04:03:13', 69, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calle`
--
ALTER TABLE `calle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos_envio`
--
ALTER TABLE `datos_envio`
  ADD PRIMARY KEY (`id_datos_envio`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_detalle_venta`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id_provincia`);

--
-- Indices de la tabla `talle`
--
ALTER TABLE `talle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `talle_producto`
--
ALTER TABLE `talle_producto`
  ADD PRIMARY KEY (`id_talle_producto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calle`
--
ALTER TABLE `calle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `datos_envio`
--
ALTER TABLE `datos_envio`
  MODIFY `id_datos_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id_detalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `talle`
--
ALTER TABLE `talle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `talle_producto`
--
ALTER TABLE `talle_producto`
  MODIFY `id_talle_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
