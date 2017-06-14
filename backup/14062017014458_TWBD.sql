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
INSERT INTO `usuarios` VALUES ('Javier','abad@decsai.ugr.es','$2y$10$TpIL3KabUfBrtDYRl/pbf.YLFImRerPkiX.9QcLaFcP1p/yW6VZkS','Abad Ortega','contratado',0,'958248327','http://decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','abad@decsai.ugr.es_abad.jpg',0,0),('admin','admin@admin.com','$2y$10$zPvJL/DeFMxGXe.zLhTuaup9oOTu2cBkAZQuQZL/3eY5sznaTkiMC','admin','CatedrÃ¡tico',0,'666666666','admin.es','DECSAI','ETSIIT','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','admin@admin.com_user.png',1,0),('Juan Miguel','j.miguel_medina@decsai.ugr.es','$2y$10$GLctdsiWFTbFPJqP99tKyeqfXfwWAQnvw1lTUpKgvbPrQLZ20Muhq','Medina RodrÃ­guez','CatedrÃ¡tico',0,'958244079','decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D35 (4Âª planta) (D35), , Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','j.miguel_medina@decsai.ugr.es_medina.jpg',0,0),('JoaquÃ­n','jabellan@decsai.ugr.es','$2y$10$h3gd.tFOQvRD6tL5FKA04O9/./Gvrz0vjRnEgycAoTtycHcYhDQUu','Abellan Mulero','Titular',0,'958242376','decsai.ugr.es','DECSAI','Facultad de Ciencias (FCiencia)','Universidad de Granada','Edificio Mecenas M7 (M7)','jabellan@decsai.ugr.es_jabellan.jpg',0,0),('Javier','jbaena@decsai.ugr.es','$2y$10$fjroo8bvtZ07b6pzQ81nAuzdi0ZJNBcJre9HlNF3fqh5pmzwNHJ8m','MartÃ­nez Baena','Titular',0,'958240802','http://decsai.ugr.es/~jbaena','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','D24 (4Âª planta) (D24) , Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jbaena@decsai.ugr.es_jbaena.jpg',0,0),('JesÃºs','jesus@decsai.ugr.es','$2y$10$oYBp7ut5m0zoPRdhu316z.jFWfyfDEXDZDbH2HWz4bl3kygRK.jU.','Chamorro MartÃ­nez','Titular',0,'958248478','decsai.ugr.es','DECSAI','ETS de IngenierÃ­as InformÃ¡tica y de TelecomunicaciÃ³n (ETSIIT)','Universidad de Granada','Calle Periodista Daniel Saucedo Aranda, s/n, 18071 Granada','jesus@decsai.ugr.es_jesus.jpg',0,0);
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

-- Dump completed on 2017-06-14  1:44:58
