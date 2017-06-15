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
INSERT INTO `acciones` VALUES ('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-14 00:00:00','20:45:38'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:17'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:40'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:46:58'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:48:19'),('admin@admin.com','AÃ±adir miembro','127.0.0.1','2017-06-15 00:00:00','00:49:14'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:38:14'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:38:36'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:00'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:06'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:51:59'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:55:47'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:56:53'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:57:05'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:58:59'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-14 00:00:00','23:59:09'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','00:04:34'),('admin@admin.com','Bloquear usuario','127.0.0.1','2017-06-15 00:00:00','01:09:20'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-14 00:00:00','23:21:31'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','00:54:35'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:39:44'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:40:06'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:40:14'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:46:42'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:47:15'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:48:29'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:48:58'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:49:25'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:49:38'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:50:16'),('admin@admin.com','Editar usuario','127.0.0.1','2017-06-15 00:00:00','01:50:59'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-14 00:00:00','23:20:49'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:51:18'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:51:47'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:00'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:07'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','00:52:21'),('admin@admin.com','Eliminar usuario','127.0.0.1','2017-06-15 00:00:00','01:04:42'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','20:42:40'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','21:46:43'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','21:47:13'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','23:18:37'),('admin@admin.com','Log In','127.0.0.1','2017-06-14 00:00:00','23:43:56'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','20:41:10'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','21:47:03'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','23:21:09'),('admin@admin.com','Log out','127.0.0.1','2017-06-14 00:00:00','23:43:02');
/*!40000 ALTER TABLE `acciones` ENABLE KEYS */;
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
INSERT INTO `usuarios` VALUES ('Javier','abad@decsai.ugr.es','$2y$10$TpIL3KabUfBrtDYRl/pbf.YLFImRerPkiX.9QcLaFcP1p/yW6VZkS','Abad Ortega','Titular',0,'958248327','http://decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','abad@decsai.ugr.es_abad.jpg',0,1),('admin','admin@admin.com','$2y$10$zPvJL/DeFMxGXe.zLhTuaup9oOTu2cBkAZQuQZL/3eY5sznaTkiMC','admin','CatedrÃ¡tico',0,'666666666','admin.es','DECSAI','ETSIIT','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','admin@admin.com_user.png',1,0),('JoaquÃ­n','jabellan@decsai.ugr.es','$2y$10$h3gd.tFOQvRD6tL5FKA04O9/./Gvrz0vjRnEgycAoTtycHcYhDQUu','Abellan Mulero','Titular',0,'958242376','decsai.ugr.es','DECSAI','Facultad de Ciencias (FCiencia)','Universidad de Granada','Edificio Mecenas M7 (M7)','jabellan@decsai.ugr.es_jabellan.jpg',0,0),('Javier','jbaena@decsai.ugr.es','$2y$10$fjroo8bvtZ07b6pzQ81nAuzdi0ZJNBcJre9HlNF3fqh5pmzwNHJ8m','MartÃ­nez Baena','Titular',0,'958240802','http://decsai.ugr.es/~jbaena','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D24 (4Âª planta) (D24) , Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jbaena@decsai.ugr.es_jbaena.jpg',0,0),('JesÃºs','jesus@decsai.ugr.es','$2y$10$oYBp7ut5m0zoPRdhu316z.jFWfyfDEXDZDbH2HWz4bl3kygRK.jU.','Chamorro MartÃ­nez','Titular',0,'958248478','decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jesus@decsai.ugr.es_jesus.jpg',0,0),('Luis','l.castillo@decsai.ugr.es','$2y$10$xFpnlGTDUGUMC.zFxMs3Fe9MT4KsyBF1MxPQyPcN.blCoe1Dg7pa6','Castillo Vidal','Titular',0,'958248481','http://decsai.ugr.es/~lcv','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','D25 (4Âª planta) (D25), Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','l.castillo@decsai.ugr.es_lcv.jpg',0,0);
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

-- Dump completed on 2017-06-15  2:01:24
