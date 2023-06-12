-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2023 a las 23:44:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_quintana_facundo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `baja` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `baja`) VALUES
(1, 'Bateria Moto', 0),
(2, 'Bateria Auto', 0),
(3, 'Bateria Estacionaria', 0),
(4, 'Bateria Camion', 0),
(5, 'prueba categoria alta', 1),
(6, 'Prueba categoria baja', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL COMMENT 'id unico identificador x compra, sirve para ubicar al detalle de la compra en esa tabla, este id es unico, encambio el de detalle_compra se repite\r\n',
  `total` decimal(65,2) NOT NULL COMMENT 'precio cobrado',
  `id_usuario` int(11) NOT NULL COMMENT 'id de usuario q hace la compra',
  `metodo_pago` int(11) NOT NULL COMMENT '1=efectivo/cheque, 2=credito/debito',
  `numero_tarjeta` varchar(21) NOT NULL,
  `cuotas` int(11) NOT NULL COMMENT 'credito 1-12, el resto solo 1\r\n',
  `envio` varchar(255) NOT NULL COMMENT '1=andreani, 2=OCA, 3=presencial',
  `direccion` varchar(255) NOT NULL COMMENT 'Direccion en caso de envio',
  `fecha_alta` date NOT NULL COMMENT 'fecha de compra hecha'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `total`, `id_usuario`, `metodo_pago`, `numero_tarjeta`, `cuotas`, `envio`, `direccion`, `fecha_alta`) VALUES
(5, '155848.00', 2, 2, '343423424242423432423', 3, 'oca', 'envioxandreani', '2023-05-23'),
(6, '42200.00', 2, 2, '535454353453453455435', 1, 'presencial', 'presencial', '2023-05-23'),
(10, '42200.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(13, '108900.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(14, '108900.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(15, '108900.00', 3, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(16, '104700.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(17, '133100.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(18, '133100.00', 3, 2, '123123123123312312312', 1, 'presencial', 'presencial', '2023-05-23'),
(19, '100000000.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-23'),
(20, '100000000.00', 3, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-25'),
(21, '405762600.00', 2, 1, 'cheque/Efectivo', 1, 'presencial', 'no aplica', '2023-05-26'),
(22, '409290.00', 3, 2, '129837128937129837128', 12, 'presencial', 'cOrSoL s', '2023-05-27'),
(23, '409290.00', 3, 2, '123123123123123123123', 12, 'oca', 'asf23', '2023-05-27'),
(24, '122700.00', 2, 1, 'Cheque/Efectivo', 1, 'Presencial', 'No aplica', '2023-05-29'),
(25, '184050.00', 3, 2, '123123123123123123123', 6, 'presencial', 'presencial', '2023-05-31'),
(27, '115100.00', 2, 1, 'Cheque/Efectivo', 1, 'Presencial', 'No aplica', '2023-05-31'),
(28, '965580.00', 4, 2, '812378912379182738912', 12, 'presencial', 'presencial', '2023-06-03'),
(29, '56800.00', 2, 1, 'Cheque/Efectivo', 1, 'Presencial', 'No aplica', '2023-06-06'),
(30, '512500.00', 2, 1, 'Cheque/Efectivo', 1, 'Presencial', 'No aplica', '2023-06-12'),
(31, '25899.00', 5, 1, 'Cheque/Efectivo', 1, 'Presencial', 'No aplica', '2023-06-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `leido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `id_usuario`, `nombre`, `nick`, `email`, `asunto`, `descripcion`, `leido`) VALUES
(1, 2, 'Siomara', 'sio15', 'sio@gmail.com', 'prueba', 'prueba1', 1),
(2, 2, 'Siomara', 'sio15', 'sio@gmail.com', 'prueba2', 'prueba2', 0),
(3, 2, 'Siomara', 'sio15', 'sio@gmail.com', 'Prueba desde panel', 'prueba1', 1),
(4, 2, 'Siomara', 'sio15', 'sio@gmail.com', '333', '333', 1),
(5, 4, 'Carlos Alberto', 'smaken', 'smakenhost@gmail.com', 'Presupuesto Mayorista', 'Quisiera saber si tienen la posibilidad de tener un descuento realizando la compra de 20 unidades de sus baterias', 1),
(6, 5, 'andres', 'tonystar2017', 'condepuflito@gmail.com', 'consulta con urgencia!!!!', 'bateria  moura para un ford  fiersta necesito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

CREATE TABLE `detalle_compra` (
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `importe_unitario` int(11) NOT NULL,
  `importe` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_compra`
--

INSERT INTO `detalle_compra` (`id_compra`, `id_producto`, `nombre`, `cantidad`, `importe_unitario`, `importe`, `fecha`) VALUES
(5, 4, 'Bateria Xtech', 3, 18000, 108000, '2029-05-23'),
(5, 2, 'Bateria Bosh', 2, 10400, 20800, '2029-05-23'),
(6, 4, 'Bateria Xtech', 1, 18000, 18000, '2029-05-23'),
(6, 1, 'Bateria Voltaics', 1, 24200, 24200, '2029-05-23'),
(10, 4, 'Bateria Xtech', 1, 18000, 18000, '2029-05-23'),
(10, 1, 'Bateria Voltaics', 1, 24200, 24200, '2029-05-23'),
(13, 2, 'Bateria Bosh', 1, 10400, 10400, '2030-05-23'),
(13, 3, 'Bateria LongWay ', 1, 80500, 80500, '2030-05-23'),
(13, 4, 'Bateria Xtech', 1, 18000, 18000, '2030-05-23'),
(16, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(16, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(17, 4, 'Bateria Xtech', 1, 18000, 18000, '2031-05-23'),
(17, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(17, 2, 'Bateria Bosh', 1, 10400, 10400, '2031-05-23'),
(17, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(18, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(18, 2, 'Bateria Bosh', 1, 10400, 10400, '2031-05-23'),
(18, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(18, 4, 'Bateria Xtech', 1, 18000, 18000, '2031-05-23'),
(19, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(19, 6, 'Voltaics moto ULTRA', 1, 18400, 18400, '2031-05-23'),
(19, 3, 'Bateria LongWay ', 7, 80500, 405720000, '2031-05-23'),
(20, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(20, 6, 'Voltaics moto ULTRA', 1, 18400, 18400, '2031-05-23'),
(20, 3, 'Bateria LongWay ', 7, 80500, 405720000, '2031-05-23'),
(21, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(21, 6, 'Voltaics moto ULTRA', 1, 18400, 18400, '2031-05-23'),
(21, 3, 'Bateria LongWay ', 7, 80500, 405720000, '2031-05-23'),
(22, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(22, 2, 'Bateria Bosh', 11, 10400, 114400, '2031-05-23'),
(23, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(23, 2, 'Bateria Bosh', 11, 10400, 114400, '2031-05-23'),
(24, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(24, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(24, 4, 'Bateria Xtech', 1, 18000, 18000, '2031-05-23'),
(25, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(25, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(25, 4, 'Bateria Xtech', 1, 18000, 18000, '2031-05-23'),
(27, 3, 'Bateria LongWay ', 1, 80500, 80500, '2031-05-23'),
(27, 2, 'Bateria Bosh', 1, 10400, 10400, '2031-05-23'),
(27, 1, 'Bateria Voltaics', 1, 24200, 24200, '2031-05-23'),
(28, 1, 'Bateria Voltaics', 6, 24200, 145200, '2003-06-23'),
(28, 6, 'Voltaics moto ULTRA', 3, 18400, 55200, '2003-06-23'),
(28, 2, 'Bateria Bosh', 6, 10400, 62400, '2003-06-23'),
(28, 3, 'Bateria LongWay ', 2, 80500, 161000, '2003-06-23'),
(28, 4, 'Bateria Xtech', 2, 18000, 36000, '2003-06-23'),
(29, 2, 'Bateria Bosh', 2, 10400, 20800, '2006-06-23'),
(29, 4, 'Bateria Xtech', 2, 18000, 36000, '2006-06-23'),
(30, 8, 'Bateria Voltaics Auto', 1, 25899, 25899, '2012-06-23'),
(30, 3, 'Bateria LongWay ', 1, 80500, 80500, '2012-06-23'),
(30, 2, 'Bateria Bosh', 2, 10400, 20800, '2012-06-23'),
(30, 1, 'Bateria Voltaics 1', 1, 242001, 242001, '2012-06-23'),
(30, 4, 'Bateria Xtech', 1, 18000, 18000, '2012-06-23'),
(30, 5, 'Bateria Auto Voltaics', 1, 18500, 18500, '2012-06-23'),
(30, 7, 'Estacionaria Voltaics', 2, 53400, 106800, '2012-06-23'),
(31, 8, 'Bateria Voltaics Auto', 1, 25899, 25899, '2012-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES
(1, 'Aprende PHP', 'PHP.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `prefijo` int(11) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `leido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `prefijo`, `telefono`, `email`, `asunto`, `descripcion`, `leido`) VALUES
(1, 'Facundo', 54, 3795083616, 'facundo@gmail.com', 'Bateria moto', 'Buenas, me gustaria saber si venden baterias para moto, especificamente 12v 9Ah de gel de preferencia.\r\n\r\nespero su llamado. Saludos', 0),
(2, 'Siomara', 53, 23213123123, 'correogenerico', 'prueba 2', 'kbla bla', 0),
(12, 'facundo', 3232, 12312312312, 'casdas@gmail.com', 'asdasdasdas', 'asdasdasda', 1),
(13, 'asdasdasdasd', 23, 23223232, 'asdq@gmail.com', 'asdjaskd', 'kljhaskljdjkasd', 1),
(14, 'osvaldo', 54, 3794325897, 'osvaldo@gmail.com', 'contacto', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 1),
(15, 'andres', 2147483647, 4444414414414144, 'sdfsdfsdfsdfsfsdfsfsfdsfwerfwerfsefwefwefeqwfefwefawfawefawfafaf@asdasd.com', 'fasdfsadfa', 'fasdfasdfasdfasfd', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(99) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `stock` int(11) NOT NULL,
  `baja` tinyint(1) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `id_categoria`, `nombre`, `descripcion`, `precio`, `stock`, `baja`, `imagen`) VALUES
(1, 2, 'Bateria Voltaics 1', '12v 95kAh 1', 242001, 2, 0, '1685732880_4f46876605cef0a1ddba.jpg'),
(2, 3, 'Bateria Bosh', '12v 42Ah', 10400, 3, 0, '1684961250_b0a09914dd11d2a043de.jpg'),
(3, 4, 'Bateria LongWay ', '24v 225aH', 80500, 25, 0, '1685069209_141aeb04ed34cc005a55.jpg'),
(4, 2, 'Bateria Xtech', '12v 80Ah', 18000, 232, 0, '1685069787_4dce8ffb320f120b1619.jpg'),
(5, 2, 'Bateria Auto Voltaics', '12v 65aH', 18500, 232, 0, '1685071316_10ff082ca9930efee34e.jpg'),
(6, 1, 'Voltaics moto ULTRA', '12v 95kAh', 18400, 323, 0, '1686438426_e05a40b7d7764a129fbf.jpg'),
(7, 3, 'Estacionaria Voltaics', '12v 70aH', 53400, 23, 0, '1685071500_88867ef76a94c8697a77.jpg'),
(8, 2, 'Bateria Voltaics Auto', '12v 90Ah', 25899, 232, 0, '1685071543_d33ce8377976e479263b.jpg'),
(14, 3, 'Voltaics estacionaria 12v', '12v 55ah', 24566, 232, 0, '1686438741_fb30f85e45c07589f6f6.jpg'),
(15, 4, 'Voltaics Linea Cañonero', '24v 225Ah', 50400, 14, 0, '1686436947_475aa8097f761cc22d30.jpg'),
(16, 4, 'Voltaics Cañonero ', '24v 300Ah', 95003, 53, 0, '1686437001_1e6ad08dc0d3c9b969fa.jpg'),
(17, 4, 'Voltaics Cañonero ULTRA', '24v 500kAh', 230000, 3, 0, '1686437134_2153b9e7a9c11bf7c6de.jpg'),
(18, 3, 'Voltaics estacionaria 12v', '12v 70Ah', 23530, 15, 0, '1686437686_0da5d8a557814bb8591f.jpg'),
(19, 1, 'Bosh Moto 12v', '12v 5Ah', 13500, 42, 0, '1686440046_c400fcc86978afb643e0.jpg'),
(20, 1, 'Voltaics Moto 12v', '12v 9aH', 22000, 25, 0, '1686440053_3ba71d54972024d33b0e.jpg'),
(21, 1, 'Voltaics Moto Compact', '12v 15aH', 35000, 53, 0, '1686440118_f70098e2cba65b111f55.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `perfil_id` varchar(2) NOT NULL,
  `baja` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'Facundo', 'Quintana', 'facu@gmail.com', 'zotrix18', 'ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270', '2', 'no'),
(2, 'Siomara', 'Ezcurra', 'sio@gmail.com', 'sio15', '3fe99d6991dce0db7be1fc234b49dbfec14620e6a344263a06b7f2228e6e2025', '1', 'no'),
(3, 'Carlos', 'Caceres', 'carlos@gmail.com', 'smaken27', 'ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270', '1', 'no'),
(4, 'Carlos Alberto', 'Caceres', 'smakenhost@gmail.com', 'smaken', '5bae7af9a63afef825eb0d4e1a707868092ab81af6fb62037fd869d0ab19d3f8', '1', 'no'),
(5, 'Andres', 'Sena', 'condepuflito@gmail.com', 'tonystar2017', '94c304d3f5de82aa8e2031919c11392c3c01a18fd6083414bafe5a8a731a4501', '1', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compras_usuario` (`id_usuario`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuarios` (`id_usuario`);

--
-- Indices de la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD KEY `fk_detalle_producto` (`id_producto`),
  ADD KEY `llave_compra` (`id_compra`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id unico identificador x compra, sirve para ubicar al detalle de la compra en esa tabla, este id es unico, encambio el de detalle_compra se repite\r\n', AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `fk_compra` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id`),
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
