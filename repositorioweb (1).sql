-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2020 a las 21:49:26
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `repositorioweb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `logindocente`(
	`p_usuario` varchar (50),
        `p_clave` varchar (50)
)
select *
from docentes
where usuario = p_usuario$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(500) NOT NULL,
  `usuario` int(11) NOT NULL,
  `reply` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `usuario`, `reply`, `fecha`) VALUES
(1, ' hola', 1, 0, '2020-06-24 13:31:05'),
(2, ' que tal', 0, 0, '2020-06-30 23:40:03'),
(3, ' ssaddsaadsdda', 0, 0, '2020-06-30 23:45:35'),
(4, ' wwwwwwwwww', 0, 0, '2020-06-30 23:48:53'),
(5, ' ffffffffffffff', 5, 0, '2020-06-30 23:50:01'),
(6, ' errrwerwrwrwwre', 0, 0, '2020-06-30 23:54:48'),
(7, ' como estas', 5, 0, '2020-07-01 00:19:41'),
(8, ' buen video gracias', 5, 0, '2020-07-01 16:06:55'),
(9, ' holaaaaa', 5, 0, '2020-07-01 16:08:18'),
(10, ' holaaaaaa', 5, 0, '2020-07-01 16:09:05'),
(11, ' holaaaaaa', 5, 0, '2020-07-01 16:09:31'),
(12, ' buen video ', 5, 0, '2020-07-01 16:15:20'),
(13, ' hola amigo', 1, 0, '2020-07-01 16:18:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `asunto` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mensaje` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `email`, `asunto`, `mensaje`) VALUES
(1, 'juan rojas', 'juan@gmail.com', 'nada', 'hola como estas'),
(2, 'pedro ramos', 'pedro@gmail.com', 'familiar', 'hola familia '),
(17, '', '', '', ''),
(18, 'jhonny', 'jimeneztuangelito10@', 'nada', 'y54666464hfhghfhfhhfgfhf'),
(19, 'fiorela', 'fiorela@gmail.com', 'de todo ', 'lelwwrjhioh9q ewururedrukdrkrew'),
(20, 'juan cardenas larco', 'juanlarco@gmail.com', 'negocios', 'quiero contratar su servicios informaticos'),
(21, 'juan cardenas larco', 'juanlarco@gmail.com', 'familar', 'quiero contratar su servicios informaticos'),
(22, 'juan cardenas larco', 'juanlarco@gmail.com', 'familar y negocios', 'quiero contratar su servicios informaticos'),
(23, 'ruben prado ', 'ruben@gmail.com', 'mantenieminto ', 'iuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfds'),
(24, 'jhonny lopez palomino', 'jhonny@gmail.com', 'mantenieminto ', 'iuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfdsiuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfdsiuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfds'),
(25, 'jhonny lopez palomino', 'jhonny@gmail.com', 'mantenieminto ', 'iuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfdsiuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfdsiuyudfhskfjhsdjkfhsjkfhsdjkfsfsfsfds'),
(26, 'jhonny lopez palomino', 'jhonny@gmail.com', 'mantenieminto ', 'ggddffdgddggdgd'),
(27, 'jhonny lopez palomino', 'jhonny@gmail.com', 'negocios', 'ggddffdgddggdgd'),
(28, '', '', '', ''),
(29, 'frank leon vargas', 'juanleon@hotmail.com', 'problemas con la pla', 'jkhasjdhasjkfasjfgasfgakjfgasjsfkagfasfasfasfsa'),
(30, 'frank leon vargas', 'juanleon@hotmail.com', 'problemas con la pla', 'jkhasjdhasjkfasjfgasfgakjfgasjsfkagfasfasfasfsa'),
(31, 'jhonny', 'jimeneztuangelito10@', 'problemas con la pla', 'wqeqwwqeqw'),
(32, 'jhonny', 'jimeneztuangelito10@', 'problemas con la pla', 'wqeqwwqeqw'),
(33, 'juan cardenas larco', 'juanlarco@gmail.com', 'de todo ', 'ewqeqwewqeqweqweqweqweqweqweqweqw'),
(34, 'ruben prado ', 'ruben@gmail.com', 'problemas con la pla', 'sdafassafffas'),
(35, 'jhonny', 'jhonny@gmail.com', 'mantenieminto ', 'jkkhkhkkkjh'),
(36, 'maria pardo rojass', 'maria@gmail.com', 'mantenieminto ', 'wqeqweqweqweqweqweqweq'),
(37, 'pancho', 'pancho@gmail.com', 'soporte pagina', 'jioeruerioryewurewrwrerew'),
(38, 'juan lozano', 'juan@gmail.com', 'informatico', 'ndnkdhakhjashasjfdsa'),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `idcurso` int(11) NOT NULL,
  `nomcurso` varchar(11) NOT NULL,
  `idexamen` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contrasena` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dni` int(8) NOT NULL,
  `telefono` int(9) NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `Nombres`, `apellidos`, `correo`, `usuario`, `contrasena`, `dni`, `telefono`, `estado`) VALUES
(1, 'juanito ', 'vargas perez', 'juanito@gmail.com', 'jvargas', 'fe425abf45409c1043643dd31cde97a9', 74185236, 147852369, 'activo'),
(2, 'jose ', 'perez ', 'jose@gmail.com', 'jperez', '02a98ebe73870a567fc4da0be9ce9c15', 14789632, 996573258, 'activo'),
(5, 'jhonny ', 'lopez palomino', 'jhonny@gmail.com', 'jlopez', 'dbce72dd832307f4ecb18fd43b44cc78', 72866529, 987456321, 'activo'),
(6, 'luis ', 'sanchez paredes', 'luis@gmail.com', 'lsanchez', 'f0dbf2932d1f2501ac307871c0094c6a', 14785236, 214569873, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_satisfaccion`
--

CREATE TABLE IF NOT EXISTS `encuesta_satisfaccion` (
  `idencuesta` int(11) NOT NULL AUTO_INCREMENT,
  `docente` int(11) NOT NULL,
  `calificacion` varchar(20) NOT NULL,
  PRIMARY KEY (`idencuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `encuesta_satisfaccion`
--

INSERT INTO `encuesta_satisfaccion` (`idencuesta`, `docente`, `calificacion`) VALUES
(52, 0, ''),
(53, 0, ''),
(54, 0, 'EXCELENTE'),
(55, 0, ''),
(56, 0, ''),
(57, 0, 'REGULAR'),
(58, 0, ''),
(59, 0, 'BUENO'),
(60, 0, 'EXCELENTE'),
(61, 0, ''),
(62, 0, ''),
(63, 0, ''),
(64, 0, ''),
(65, 0, ''),
(66, 0, ''),
(67, 0, ''),
(68, 0, ''),
(69, 0, ''),
(70, 0, ''),
(71, 0, 'BUENO'),
(72, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_docente`
--

CREATE TABLE IF NOT EXISTS `estado_docente` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_docente`
--

INSERT INTO `estado_docente` (`idEstado`, `Estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE IF NOT EXISTS `examen` (
  `idexamen` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  PRIMARY KEY (`idexamen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_video`
--

CREATE TABLE IF NOT EXISTS `imagen_video` (
  `idimagen_video` int(11) NOT NULL,
  `idvideo` int(11) NOT NULL,
  PRIMARY KEY (`idimagen_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_video`
--

CREATE TABLE IF NOT EXISTS `notificacion_video` (
  `idnotificacion` int(11) NOT NULL,
  `idvideo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`idnotificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunas`
--

CREATE TABLE IF NOT EXISTS `pregunas` (
  `idpregunta` int(11) NOT NULL,
  `idexamen` int(11) NOT NULL,
  `nompregunta` varchar(100) NOT NULL,
  PRIMARY KEY (`idpregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_frecuentes`
--

CREATE TABLE IF NOT EXISTS `preguntas_frecuentes` (
  `idpreguntas_frecuentes` int(11) NOT NULL,
  PRIMARY KEY (`idpreguntas_frecuentes`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `idranking` int(11) NOT NULL,
  `idcursos` int(11) NOT NULL,
  `posicion` varchar(100) NOT NULL,
  PRIMARY KEY (`idranking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos`
--

CREATE TABLE IF NOT EXISTS `recursos` (
  `idrecursos` int(11) NOT NULL,
  `tipo_recursos` varchar(50) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `idvideo` int(11) NOT NULL,
  PRIMARY KEY (`idrecursos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `idrespuesta` int(11) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `nomrespuesta` int(11) NOT NULL,
  PRIMARY KEY (`idrespuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `idvideo` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `nomvideo` varchar(50) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `resolucion` varchar(50) NOT NULL,
  `cant_reproduccion` int(11) NOT NULL,
  `recomendacion` varchar(255) NOT NULL,
  `subir_video` varchar(100) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  PRIMARY KEY (`idvideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
