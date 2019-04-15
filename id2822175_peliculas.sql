-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-04-2019 a las 14:54:34
-- Versión del servidor: 10.3.13-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id2822175_peliculas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `directorio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `nombre`, `directorio`) VALUES
(6, 'Hellboy 2019', 'intranet/uploads/Hellboy-26610-30767[1].jpg'),
(7, 'El pianista', 'intranet/uploads/the_pianist_le_pianiste-978132965-large[1].jpg'),
(8, 'Mente indomable', 'intranet/uploads/menteindomable[1].jpg'),
(11, 'Batman: El caballero oscuro', 'intranet/uploads/2442516637_ba4c92eb39_o[1].jpg'),
(12, 'Vengadores: Infinity war', 'intranet/uploads/AvengersIW.jpg'),
(13, 'Capitana marvel', 'intranet/uploads/images.jpg'),
(14, 'Shazam!', 'intranet/uploads/3361614.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg'),
(15, 'Aquaman', 'intranet/uploads/71y+E9MaURL._SY606_[1].jpg'),
(16, 'Batman: Comienza', 'intranet/uploads/24.jpg'),
(17, 'Megamente', 'intranet/uploads/268x0w[1].jpg'),
(18, 'Psicópata americano', 'intranet/uploads/8084_173x256.jpg'),
(19, 'El señor de los anillos: La comunidad del anillo', 'intranet/uploads/f47ea5c518f38b55f48ff13f1c0a6fb2.jpg'),
(20, 'El señor de los anillos: Las dos torres', 'intranet/uploads/20070008[1].jpg'),
(21, 'El señor de los anillos: El retorno del rey', 'intranet/uploads/20061877.jpg-r_1280_720-f_jpg-q_x-xxyxx[1].jpg'),
(22, 'El padrino', 'intranet/uploads/Elpadrino.jpg'),
(23, 'Cadena perpetua', 'intranet/uploads/2193223.jpg'),
(24, 'La lista de schindler', 'intranet/uploads/descarga.jpg'),
(25, 'El padrino: Parte II', 'intranet/uploads/ff7a991089ea56c1e8f705fb7309e9da.jpg'),
(27, 'pulp fiction', 'intranet/uploads/pulp-fiction-cover-i1288.jpg'),
(30, 'Forrest gump', 'intranet/uploads/41dkwOlFjYL.jpg'),
(31, 'Star Wars: El imperio contraataca', 'intranet/uploads/20535462.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg'),
(32, 'Origen', 'intranet/uploads/oringe.jpg'),
(33, 'Uno de los nuestros', 'intranet/uploads/20077949.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg'),
(35, 'Matrix', 'intranet/uploads/51aTgPXVFJL.jpg'),
(37, 'El pradino 3', 'intranet/uploads/elpradino3.jpg'),
(38, 'El club de la pelea', 'intranet/uploads/elclubdelapelea.jpg'),
(39, 'El bueno, el feo y el malo', 'intranet/uploads/elbuenoelfeoyelmalo.jpg'),
(40, 'Seven', 'intranet/uploads/seven.jpg'),
(41, 'Ciudad de dios', 'intranet/uploads/cuidaddedios.jpg'),
(42, 'Star Wars', 'intranet/uploads/starwars.jpg'),
(43, 'El silencio de los corderos', 'intranet/uploads/71n2ua4cFGL._SY606_.jpg'),
(44, 'Efecto mariposa', 'intranet/uploads/efectomariposa.jpg'),
(45, 'El viaje de chihiro', 'intranet/uploads/elviajedechiciro.jpg'),
(46, 'Salvar al soldado ryan', 'intranet/uploads/salvaralsoldadoryan.jpg'),
(47, 'Sospechosos habituales', 'intranet/uploads/20142882.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg'),
(48, 'El profesional (Leon)', 'intranet/uploads/profesional-leon-el_a-G-8033730-0.jpg'),
(49, 'La milla verde', 'intranet/uploads/20156807.jpg-r_1280_720-f_jpg-q_x-xxyxx.jpg'),
(50, 'Interstellar', 'intranet/uploads/716P1xCmnPL._SY679_.jpg'),
(51, 'American history x', 'intranet/uploads/71ybn0iYauL._SY679_.jpg'),
(52, 'Intocable', 'intranet/uploads/intocable-poster.jpg'),
(53, 'Infiltrados', 'intranet/uploads/thedeparted_b.jpg'),
(54, 'Regreso al futuro', 'intranet/uploads/regresoalfururo.jpg'),
(55, 'Terminator 2: El juicio final', 'intranet/uploads/61id7dm4b6L._SY679_.jpg'),
(56, 'Whiplash', 'intranet/uploads/51GXgsoSPaL.jpg'),
(57, 'El rey leon', 'intranet/uploads/rey-leon-poster-1551063927.jpeg'),
(58, 'El gladiador', 'intranet/uploads/268x0w.png'),
(59, 'El truco final (El prestigio)', 'intranet/uploads/eltrucofinal.jpg'),
(60, 'Spiderman: Un nuevo universo', 'intranet/uploads/spidermannewuniverse.jpg'),
(61, 'Memento', 'intranet/uploads/memento.jpg'),
(62, 'Django desencadenado', 'intranet/uploads/django.jpg'),
(63, 'Titanic', 'intranet/uploads/51gEpO63aRL.jpg'),
(64, 'Iron man', 'intranet/uploads/31UiPirP4GL.jpg'),
(65, 'Sexo con amor', 'intranet/uploads/f17992ffdd89b9ba6dba80a5cf42139f.jpg'),
(66, 'American beauty', 'intranet/uploads/71uaFdtUpvL._SY606_.jpg'),
(67, 'Coco', 'intranet/uploads/81FZFvGhSVL._SY679_.jpg'),
(68, 'Toy story', 'intranet/uploads/51K8r9COEQL.jpg'),
(69, 'Toy story 2', 'intranet/uploads/41FL4nHfPOL.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `email`, `password`, `usuario`, `categoria`) VALUES
(1, 'jared', 'aguilera', 'jaredaguilera@gmail.com', 'hkmhkm123', 'deadshot2124', 1),
(2, 'Prueba', 'Prueba', 'PruePruebaba', 'Prueba', 'Prueba', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `idvaloracion` int(11) NOT NULL,
  `valoracion` double DEFAULT NULL,
  `idpelicula` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`idvaloracion`, `valoracion`, `idpelicula`, `idusuario`) VALUES
(44, 5.4, 6, 1),
(45, 7.6, 7, 1),
(46, 7.3, 8, 1),
(47, 8.1, 11, 1),
(48, 8.6, 12, 1),
(49, 6.7, 13, 1),
(50, 6.9, 14, 1),
(51, 7.1, 15, 1),
(52, 7.1, 16, 1),
(53, 6.8, 17, 1),
(54, 8, 18, 1),
(55, 8.7, 21, 1),
(56, 8.4, 50, 1),
(57, 8, 63, 1),
(58, 8.3, 35, 1),
(59, 8.4, 20, 1),
(60, 7.3, 39, 1),
(61, 7.1, 24, 1),
(62, 7.1, 25, 1),
(63, 7.1, 52, 1),
(64, 6.9, 41, 1),
(65, 7.6, 48, 1),
(66, 7.5, 53, 1),
(67, 7.8, 40, 1),
(68, 8.2, 30, 1),
(69, 7.7, 60, 1),
(70, 7.1, 47, 1),
(71, 6.7, 37, 1),
(72, 7.6, 64, 1),
(73, 7.2, 43, 1),
(74, 6.5, 49, 1),
(75, 8.4, 38, 1),
(76, 7.7, 59, 1),
(77, 8.9, 19, 1),
(78, 7.8, 44, 1),
(79, 7, 23, 1),
(80, 7.2, 46, 1),
(81, 7.3, 27, 1),
(82, 8.2, 54, 1),
(83, 6.9, 33, 1),
(84, 7.7, 57, 1),
(85, 7.3, 45, 1),
(86, 8.1, 32, 1),
(87, 8.7, 22, 1),
(88, 8.1, 68, 1),
(89, 7.9, 67, 1),
(90, 8, 69, 1),
(91, 5.2, 65, 1),
(92, 7.7, 66, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idvaloracion`),
  ADD KEY `idpelicula` (`idpelicula`),
  ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `idvaloracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`idpelicula`) REFERENCES `pelicula` (`id`),
  ADD CONSTRAINT `valoracion_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
