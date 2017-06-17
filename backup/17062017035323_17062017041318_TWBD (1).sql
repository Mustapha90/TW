-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: TWBD
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acciones`
--

DROP TABLE IF EXISTS `acciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acciones` (
  `email` varchar(32) NOT NULL,
  `tipo` varchar(64) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`email`,`tipo`,`fecha`,`hora`),
  KEY `email` (`email`),
  KEY `email_2` (`email`),
  KEY `email_3` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acciones`
--

LOCK TABLES `acciones` WRITE;
/*!40000 ALTER TABLE `acciones` DISABLE KEYS */;
INSERT INTO `acciones` VALUES ('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-14 00:00:00','20:45:38'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:17'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:40'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:58'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:48:19'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:49:14'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','02:36:05'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','02:39:11'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','16:32:59'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','16:42:38'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','20:06:13'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-15 00:00:00','21:21:12'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','00:09:11'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','00:11:26'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','00:36:38'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','01:22:49'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','01:25:41'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','01:40:42'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','01:46:02'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','02:07:17'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','02:08:35'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','16:58:11'),('admin@admin.com','AÃ±adir Proyecto','127.0.0.1','2017-06-16 00:00:00','18:13:10'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:38:14'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:38:36'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:00'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:06'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:59'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:55:47'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:56:53'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:57:05'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:58:59'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:59:09'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','00:04:34'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','01:09:20'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','02:48:57'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','02:49:11'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','16:55:18'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-16 00:00:00','18:24:35'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-14 00:00:00','23:21:31'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','00:54:35'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:39:44'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:40:06'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:40:14'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:46:42'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:47:15'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:48:29'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:48:58'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:49:25'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:49:38'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:50:16'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:50:59'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','16:28:55'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-14 00:00:00','23:20:49'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:51:18'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:51:47'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:00'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:07'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:21'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','01:04:42'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','20:42:40'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','21:46:43'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','21:47:13'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','23:18:37'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','23:43:56'),('admin@admin.com','Log In','127.0.0.1','2017-06-15 00:00:00','16:28:35'),('admin@admin.com','Log In','127.0.0.1','2017-06-15 00:00:00','16:53:39'),('admin@admin.com','Log In','127.0.0.1','2017-06-15 00:00:00','16:55:04'),('admin@admin.com','Log In','127.0.0.1','2017-06-15 00:00:00','19:29:48'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','00:01:42'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','04:11:49'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','16:36:05'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','16:45:57'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','17:07:20'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','17:07:39'),('admin@admin.com','Log In','192.168.1.133','2017-06-16 00:00:00','17:14:29'),('admin@admin.com','Log In','127.0.0.1','2017-06-16 00:00:00','23:32:23'),('admin@admin.com','Log In','192.168.1.129','2017-06-17 00:00:00','00:27:02'),('admin@admin.com','Log In','127.0.0.1','2017-06-17 00:00:00','01:19:21'),('admin@admin.com','Log In','127.0.0.1','2017-06-17 00:00:00','04:10:35'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','20:41:10'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','21:47:03'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','23:21:09'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','23:43:02'),('admin@admin.com','Log out','127.0.0.1','2017-06-15 00:00:00','16:51:59'),('admin@admin.com','Log out','127.0.0.1','2017-06-15 00:00:00','16:53:49'),('admin@admin.com','Log out','127.0.0.1','2017-06-16 00:00:00','04:13:24'),('admin@admin.com','Log out','127.0.0.1','2017-06-16 00:00:00','16:36:54'),('admin@admin.com','Log out','127.0.0.1','2017-06-16 00:00:00','17:05:29'),('admin@admin.com','Log out','127.0.0.1','2017-06-16 00:00:00','17:07:22');
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `tipo` varchar(12) NOT NULL DEFAULT 'articulo',
  PRIMARY KEY (`doi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articulos`
--

LOCK TABLES `articulos` WRITE;
/*!40000 ALTER TABLE `articulos` DISABLE KEYS */;
INSERT INTO `articulos` VALUES ('32323/32/33XF','Publicacion 1','Publicacion sobre desarrollo web','decsai.ugr.es','12345678','Revista IBM',2,12,'2017-06-16','articulo');
/*!40000 ALTER TABLE `articulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autoresexternos`
--

DROP TABLE IF EXISTS `autoresexternos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autoresexternos` (
  `nombrecompleto` varchar(128) NOT NULL,
  `doi` varchar(32) NOT NULL,
  PRIMARY KEY (`nombrecompleto`,`doi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autoresexternos`
--

LOCK TABLES `autoresexternos` WRITE;
/*!40000 ALTER TABLE `autoresexternos` DISABLE KEYS */;
INSERT INTO `autoresexternos` VALUES ('Antonio Martinez Lopez','32323/32/33XF'),('Luis Jimenez Sanchez','32323/32/33XF'),('Mustapha Mayo','1113/32/33CC');
/*!40000 ALTER TABLE `autoresexternos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autoresmiembros`
--

DROP TABLE IF EXISTS `autoresmiembros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autoresmiembros` (
  `nombrecompleto` varchar(128) NOT NULL,
  `doi` varchar(32) NOT NULL,
  PRIMARY KEY (`nombrecompleto`,`doi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autoresmiembros`
--

LOCK TABLES `autoresmiembros` WRITE;
/*!40000 ALTER TABLE `autoresmiembros` DISABLE KEYS */;
INSERT INTO `autoresmiembros` VALUES ('abad@decsai.ugr.es','32323/32/33XF'),('jabellan@decsai.ugr.es','32323/32/33XF'),('jbaena@decsai.ugr.es','32323/32/33XF'),('jesus@decsai.ugr.es','1113/32/33CC'),('salvagl@decsai.ugr.es','1113/32/33CC');
/*!40000 ALTER TABLE `autoresmiembros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capitulos`
--

DROP TABLE IF EXISTS `capitulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capitulos`
--

LOCK TABLES `capitulos` WRITE;
/*!40000 ALTER TABLE `capitulos` DISABLE KEYS */;
/*!40000 ALTER TABLE `capitulos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboradoresexternos`
--

DROP TABLE IF EXISTS `colaboradoresexternos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboradoresexternos` (
  `nombrecompleto` varchar(128) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  PRIMARY KEY (`nombrecompleto`,`codpro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboradoresexternos`
--

LOCK TABLES `colaboradoresexternos` WRITE;
/*!40000 ALTER TABLE `colaboradoresexternos` DISABLE KEYS */;
INSERT INTO `colaboradoresexternos` VALUES ('Antonio david luis','12345678'),('Antonio Gomez','4432123'),('David fernandez lopez','12345678'),('Franciso Huete Guadix','4432123'),('Javier Martinez ','4432123'),('Lorenzo lopez sanchez','4432123');
/*!40000 ALTER TABLE `colaboradoresexternos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboradoresmiembros`
--

DROP TABLE IF EXISTS `colaboradoresmiembros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboradoresmiembros` (
  `email` varchar(32) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  PRIMARY KEY (`email`,`codpro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboradoresmiembros`
--

LOCK TABLES `colaboradoresmiembros` WRITE;
/*!40000 ALTER TABLE `colaboradoresmiembros` DISABLE KEYS */;
INSERT INTO `colaboradoresmiembros` VALUES ('abad@decsai.ugr.es','12345678'),('abad@decsai.ugr.es','4432123'),('casillas@decsai.ugr.es','4432123'),('jabellan@decsai.ugr.es','12345678'),('jbaena@decsai.ugr.es','12345678'),('jesus@decsai.ugr.es','12345678'),('jesus@decsai.ugr.es','4432123'),('mgomez@decsai.ugr.es','4432123');
/*!40000 ALTER TABLE `colaboradoresmiembros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conferencias`
--

DROP TABLE IF EXISTS `conferencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conferencias`
--

LOCK TABLES `conferencias` WRITE;
/*!40000 ALTER TABLE `conferencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `conferencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entidadescolaboradoras`
--

DROP TABLE IF EXISTS `entidadescolaboradoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entidadescolaboradoras` (
  `nombre` varchar(64) NOT NULL,
  `codpro` varchar(32) NOT NULL,
  PRIMARY KEY (`nombre`,`codpro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entidadescolaboradoras`
--

LOCK TABLES `entidadescolaboradoras` WRITE;
/*!40000 ALTER TABLE `entidadescolaboradoras` DISABLE KEYS */;
INSERT INTO `entidadescolaboradoras` VALUES ('Banco santander','12345678'),('Banesto','4432123'),('BBVA','4432123'),('Coca cola','4432123'),('Dia','4432123'),('Junta de andalucia','12345678'),('La alhambra','12345678'),('Mercadona','4432123');
/*!40000 ALTER TABLE `entidadescolaboradoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keywords`
--

DROP TABLE IF EXISTS `keywords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keywords` (
  `keyword` varchar(64) NOT NULL,
  `doi` varchar(32) NOT NULL,
  PRIMARY KEY (`keyword`,`doi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keywords`
--

LOCK TABLES `keywords` WRITE;
/*!40000 ALTER TABLE `keywords` DISABLE KEYS */;
INSERT INTO `keywords` VALUES ('C++','1113/32/33CC'),('CSS','32323/32/33XF'),('HTML','32323/32/33XF'),('JAVA','1113/32/33CC'),('PHP','32323/32/33XF');
/*!40000 ALTER TABLE `keywords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `libros`
--

DROP TABLE IF EXISTS `libros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `tipo` varchar(12) NOT NULL DEFAULT 'libro',
  PRIMARY KEY (`doi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `libros`
--

LOCK TABLES `libros` WRITE;
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` VALUES ('1113/32/33CC','Publicacion 2','2017-06-16','Publicacion sobre desarrollo web','decsai.ugr.es','12345678','Editoria 1','Editor 1','12122-22321','libro');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proyectos` (
  `codpro` varchar(32) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `descripcion` longtext NOT NULL,
  `fechacomienzo` date NOT NULL,
  `fechafin` date NOT NULL,
  `cuantia` float NOT NULL,
  `investigador` varchar(128) NOT NULL,
  `url` varchar(500) NOT NULL,
  PRIMARY KEY (`codpro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proyectos`
--

LOCK TABLES `proyectos` WRITE;
/*!40000 ALTER TABLE `proyectos` DISABLE KEYS */;
INSERT INTO `proyectos` VALUES ('12345678','Proyecto 1','Lorep ipsum','2017-06-15','2030-06-28',20000,'Javier luis morales','decsai.ugr.es'),('4432123','Proyecto 2','Este es el proyecto 2','2017-06-14','2030-06-19',15000,'Javier baena','www.decsai.ugr.es');
/*!40000 ALTER TABLE `proyectos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `bloqueado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('Javier','abad@decsai.ugr.es','$2y$10$TpIL3KabUfBrtDYRl/pbf.YLFImRerPkiX.9QcLaFcP1p/yW6VZkS','Abad Ortega','Titular',0,'958248327','http://decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','abad@decsai.ugr.es_abad.jpg',0,1),('admin','admin@admin.com','$2y$10$zPvJL/DeFMxGXe.zLhTuaup9oOTu2cBkAZQuQZL/3eY5sznaTkiMC','admin','CatedrÃ¡tico',0,'666666666','admin.es','DECSAI','ETSIIT','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','admin@admin.com_user.png',1,0),('Jorge','casillas@decsai.ugr.es','$2y$10$hJkkFFnYX7HpIj9mgWtEJOwb6.KXpvQrSuqn.KfobLj8E2h1F7qnm','Casillas Barranquero','Titular',0,'958248483','http://decsai.ugr.es/~casillas/ ','DECSAI','Universidad de Granada','Universidad de Granada','D26 (4Âª planta) (D26), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','casillas@decsai.ugr.es_casillas.jpg',0,0),('JosÃ© Enrique','eco@decsai.ugr.es','$2y$10$8Md9SWHGTymKEC4dBSoTCO7BOkzQlFS3di.Q1Jnokn4379rkrjUH.','Cano OcaÃ±a','Titular',0,'958244078','decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D09 (4Âª planta) (D09), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','eco@decsai.ugr.es_eco.jpg',0,0),('JoaquÃ­n','jabellan@decsai.ugr.es','$2y$10$h3gd.tFOQvRD6tL5FKA04O9/./Gvrz0vjRnEgycAoTtycHcYhDQUu','Abellan Mulero','Titular',0,'958242376','decsai.ugr.es','DECSAI','Facultad de Ciencias (FCiencia)','Universidad de Granada','Edificio Mecenas M7 (M7)','jabellan@decsai.ugr.es_jabellan.jpg',0,0),('Javier','jbaena@decsai.ugr.es','$2y$10$fjroo8bvtZ07b6pzQ81nAuzdi0ZJNBcJre9HlNF3fqh5pmzwNHJ8m','MartÃ­nez Baena','Titular',0,'958240802','http://decsai.ugr.es/~jbaena','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D24 (4Âª planta) (D24) , Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jbaena@decsai.ugr.es_jbaena.jpg',0,0),('JesÃºs','jesus@decsai.ugr.es','$2y$10$oYBp7ut5m0zoPRdhu316z.jFWfyfDEXDZDbH2HWz4bl3kygRK.jU.','Chamorro MartÃ­nez','Titular',0,'958248478','decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jesus@decsai.ugr.es_jesus.jpg',0,0),('Luis','l.castillo@decsai.ugr.es','$2y$10$xFpnlGTDUGUMC.zFxMs3Fe9MT4KsyBF1MxPQyPcN.blCoe1Dg7pa6','Castillo Vidal','Titular',0,'958248481','http://decsai.ugr.es/~lcv','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','D25 (4Âª planta) (D25), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','l.castillo@decsai.ugr.es_lcv.jpg',0,0),('Manuel','mgomez@decsai.ugr.es','$2y$10$ITU5PdNEPK1LB7CeYJukpe4udMQsZCcbSm1h.RBVQyQ7/Iu3puSBW','GÃ³mez Olmedo','Titular',0,'958248487','http://decsai.ugr.es/~mgomez','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','D40 (4Âª planta) (D40), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','mgomez@decsai.ugr.es_mgomez.jpg',0,0),('Salvador','salvagl@decsai.ugr.es','$2y$10$wlNMJYR9xbBVtIUgOjWeqeYibKT4sn012ENzp.zBpdoIgnkfH4zZy','GarcÃ­a LÃ³pez','Titular',0,'958248485','decsai.ugr.es','universidad de granada','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D26 (4Âª planta) (D26), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','salvagl@decsai.ugr.es_salvagl.jpg',0,0);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'TWBD'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-17  4:13:19
