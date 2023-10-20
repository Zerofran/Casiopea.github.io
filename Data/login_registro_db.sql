-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2023 a las 22:40:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_registro_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocios`
--

CREATE TABLE `negocios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `horario` varchar(100) DEFAULT NULL,
  `contacto` varchar(100) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `moneda` varchar(50) NOT NULL,
  `tags` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `moneda`, `tags`) VALUES
(4, 'Roca', 'es una roca', 20.00, '../../../contenedor_img/ZELDA MASTER QUEST - Project64 1.7 16_02_2022 19_13_49.png', 'dollar', 'campo'),
(5, 'Rocas', 'prueva 2 de subida', 5.00, '../../../contenedor_img/Blender_ [D__Naves_Omen_Enemy_Enemy_1.blend] 01_10_2023 23_47_42.png', 'euro', 'campo,ciudad'),
(6, 'zelda', 'prueva 3 de subida', 80.00, '../../../contenedor_img/Project64 1.7.0.49 (Leroy Jenkins) 17_02_2022 15_12_36.png', 'cordoba', 'volcan'),
(10, 'fran', 'esta es la prueba 4', 200.00, '../../../contenedor_img/Blender_ [D__Proyecto Zeit_Personajes_Low_Poly_Fran_Antagonista_1_Fran_Antagonista.blend] 11_08_2023 22_36_09.png', 'cordoba', 'campo,volcan,ciudad'),
(11, 'Zeit', 'esta es la prueba 5', 200.00, '../../../contenedor_img/Blender_ [E__proyectos Godot_Godot Enguine 4 Proyectos_Teseracto_Player_Howard_character.blend] 02_08_2023 14_28_19.png', 'euro', 'campo,volcan'),
(12, 'hola', 'jygjgjhghjgh', 400.00, '../../../contenedor_img/(_) zona_1Prueba.tscn - Teseracto - Godot Engine 08_08_2023 22_05_19.png', 'cordoba', 'campo,volcan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL,
  `rateIndex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `stars`
--

INSERT INTO `stars` (`id`, `rateIndex`) VALUES
(4, 3),
(5, 4),
(6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `imagen_perfil` varchar(255) DEFAULT '../IMG/user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`, `id_cargo`, `imagen_perfil`) VALUES
(2, 'Francisco', '4d1e439bd740ec900e03fde017bfd4a95d5993b98dc6704430f76f58642aac19238888b02f98969bd5b8ca773d61f204dd2fe0639d783b978f811c0455d51872', 'Zero', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 1, '/ruta/imagen_por_defecto.png'),
(6, 'Zero', '3ea3d5427f228a674fc28631b4c9d97f76a06136a2fe17e42c3cb15d259f63ecb10f122042e7e2d9a0f703749aa47773f7b3dc15e1b1a7a3910be56d9e485911', 'Megaman', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 2, '/ruta/imagen_por_defecto.png'),
(8, 'Jose', '446b425fabd2591f168aaa5fb7604bd47e1e6a19cd4e3b041de915c58699e0425da917b52c396763c355491a9031038aec308d428890eb2e3a5b4c19b4783223', 'lopez', '5aadb45520dcd8726b2822a7a78bb53d794f557199d5d4abdedd2c55a4bd6ca73607605c558de3db80c8e86c3196484566163ed1327e82e8b6757d1932113cb8', 2, '/ruta/imagen_por_defecto.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `negocios`
--
ALTER TABLE `negocios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `negocios`
--
ALTER TABLE `negocios`
  ADD CONSTRAINT `negocios_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
