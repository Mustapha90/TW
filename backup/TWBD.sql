-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-06-2017 a las 02:40:29
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TWBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `email` varchar(32) NOT NULL,
  `tipo` varchar(64) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `doi` varchar(32) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `resumen` mediumtext NOT NULL,
  `url` varchar(500) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `volumen` int(11) NOT NULL,
  `paginas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tipo` varchar(12) NOT NULL DEFAULT 'articulo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoresexternos`
--

CREATE TABLE `autoresexternos` (
  `nombrecompleto` varchar(128) NOT NULL,
  `doi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoresmiembros`
--

CREATE TABLE `autoresmiembros` (
  `nombrecompleto` varchar(128) NOT NULL,
  `doi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `doi` varchar(32) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `fecha` date NOT NULL,
  `resumen` mediumtext NOT NULL,
  `url` varchar(500) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  `titulolibro` varchar(128) NOT NULL,
  `editorial` varchar(128) NOT NULL,
  `editor` varchar(64) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `paginas` int(11) NOT NULL,
  `tipo` varchar(12) NOT NULL DEFAULT 'capitulo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradoresexternos`
--

CREATE TABLE `colaboradoresexternos` (
  `nombrecompleto` varchar(128) NOT NULL,
  `codpro` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradoresmiembros`
--

CREATE TABLE `colaboradoresmiembros` (
  `email` varchar(32) NOT NULL,
  `codpro` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencias`
--

CREATE TABLE `conferencias` (
  `doi` varchar(32) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `fecha` date NOT NULL,
  `resumen` mediumtext NOT NULL,
  `url` varchar(500) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `lugar` varchar(256) NOT NULL,
  `resenia` text NOT NULL,
  `tipo` varchar(12) NOT NULL DEFAULT 'conferencia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidadescolaboradoras`
--

CREATE TABLE `entidadescolaboradoras` (
  `nombre` varchar(64) NOT NULL,
  `codpro` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `keywords`
--

CREATE TABLE `keywords` (
  `keyword` varchar(64) NOT NULL,
  `doi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `doi` varchar(32) NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `fecha` date NOT NULL,
  `resumen` mediumtext NOT NULL,
  `url` varchar(500) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  `editorial` varchar(128) NOT NULL,
  `editor` varchar(128) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `tipo` varchar(12) NOT NULL DEFAULT 'libro'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `codpro` varchar(32) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` longtext NOT NULL,
  `fechacomienzo` date NOT NULL,
  `fechafin` date NOT NULL,
  `cuantia` float NOT NULL,
  `investigador` varchar(128) NOT NULL,
  `url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `apellidos` varchar(128) NOT NULL,
  `categoria` varchar(64) NOT NULL,
  `director` int(1) NOT NULL DEFAULT '0',
  `telefono` varchar(9) NOT NULL,
  `url` varchar(500) NOT NULL,
  `departamento` varchar(128) NOT NULL,
  `centro` varchar(64) NOT NULL,
  `instituto` varchar(128) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `imagen` varchar(64) DEFAULT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `bloqueado` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`email`,`tipo`,`fecha`,`hora`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`doi`);

--
-- Indices de la tabla `autoresexternos`
--
ALTER TABLE `autoresexternos`
  ADD PRIMARY KEY (`nombrecompleto`,`doi`);

--
-- Indices de la tabla `autoresmiembros`
--
ALTER TABLE `autoresmiembros`
  ADD PRIMARY KEY (`nombrecompleto`,`doi`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`doi`);

--
-- Indices de la tabla `colaboradoresexternos`
--
ALTER TABLE `colaboradoresexternos`
  ADD PRIMARY KEY (`nombrecompleto`,`codpro`);

--
-- Indices de la tabla `colaboradoresmiembros`
--
ALTER TABLE `colaboradoresmiembros`
  ADD PRIMARY KEY (`email`,`codpro`);

--
-- Indices de la tabla `conferencias`
--
ALTER TABLE `conferencias`
  ADD PRIMARY KEY (`doi`);

--
-- Indices de la tabla `entidadescolaboradoras`
--
ALTER TABLE `entidadescolaboradoras`
  ADD PRIMARY KEY (`nombre`,`codpro`);

--
-- Indices de la tabla `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`keyword`,`doi`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`doi`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`codpro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
