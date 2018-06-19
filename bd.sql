-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: tdesyxwd_bcagro
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.17.04.1

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
-- Table structure for table `accion`
--

DROP TABLE IF EXISTS `accion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `seccion_menu_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text,
  `icono` varchar(200) NOT NULL,
  `visible` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seccion_menu_id` (`seccion_menu_id`),
  CONSTRAINT `accion_ibfk_1` FOREIGN KEY (`seccion_menu_id`) REFERENCES `seccion_menu` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=316 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion`
--

LOCK TABLES `accion` WRITE;
/*!40000 ALTER TABLE `accion` DISABLE KEYS */;
INSERT INTO `accion` VALUES (1,'Alta',1,1,'xxxx','glyphicon glyphicon-plus',1),(2,'Lista',1,1,'','glyphicon glyphicon-list-alt',1),(3,'Lista_ajax',1,1,'','glyphicon glyphicon-list-alt',0),(4,'Alta_bd',1,1,'','glyphicon glyphicon-list-alt',0),(5,'Elimina_bd',1,1,'','glyphicon glyphicon-minus',0),(6,'Desactiva_bd',1,1,'','glyphicon glyphicon-trash',0),(7,'Activa_bd',1,1,'','glyphicon glyphicon-ok',0),(8,'Modifica',1,1,'','glyphicon glyphicon-pencil',0),(9,'Modifica_bd',1,1,'','glyphicon glyphicon-pencil',0),(10,'Alta',2,1,'','glyphicon glyphicon-plus',1),(11,'Lista',2,1,'','glyphicon glyphicon-list-alt',1),(12,'Lista_ajax',2,1,'','glyphicon glyphicon-list-alt',0),(13,'Alta_bd',2,1,'','glyphicon glyphicon-list-alt',0),(14,'Elimina_bd',2,1,'','glyphicon glyphicon-minus',0),(15,'Desactiva_bd',2,1,'','glyphicon glyphicon-trash',0),(16,'Activa_bd',2,1,'','glyphicon glyphicon-ok',0),(17,'Modifica',2,1,'','glyphicon glyphicon-pencil',0),(18,'Modifica_bd',2,1,'','glyphicon glyphicon-pencil',0),(19,'Alta',3,1,'','glyphicon glyphicon-plus',1),(20,'Lista',3,1,'','glyphicon glyphicon-list-alt',1),(21,'Lista_ajax',3,1,'','glyphicon glyphicon-list-alt',0),(22,'Alta_bd',3,1,'','glyphicon glyphicon-list-alt',0),(23,'Elimina_bd',3,1,'','glyphicon glyphicon-minus',0),(24,'Desactiva_bd',3,1,'','glyphicon glyphicon-trash',0),(25,'Activa_bd',3,1,'','glyphicon glyphicon-ok',0),(26,'Modifica',3,1,'','glyphicon glyphicon-pencil',0),(27,'Modifica_bd',3,1,'','glyphicon glyphicon-pencil',0),(28,'Alta',4,1,'','glyphicon glyphicon-plus',1),(29,'Lista',4,1,'','glyphicon glyphicon-list-alt',1),(30,'Lista_ajax',4,1,'','glyphicon glyphicon-list-alt',0),(31,'Alta_bd',4,1,'','glyphicon glyphicon-list-alt',0),(32,'Elimina_bd',4,1,'','glyphicon glyphicon-minus',0),(33,'Desactiva_bd',4,1,'','glyphicon glyphicon-trash',0),(34,'Activa_bd',4,1,'','glyphicon glyphicon-ok',0),(35,'Modifica',4,1,'','glyphicon glyphicon-pencil',0),(36,'Modifica_bd',4,1,'','glyphicon glyphicon-pencil',0),(37,'Alta',5,1,'','glyphicon glyphicon-plus',1),(38,'Lista',5,1,'','glyphicon glyphicon-list-alt',1),(39,'Lista_ajax',5,1,'','glyphicon glyphicon-list-alt',0),(40,'Alta_bd',5,1,'','glyphicon glyphicon-list-alt',0),(41,'Elimina_bd',5,1,'','glyphicon glyphicon-minus',0),(42,'Desactiva_bd',5,1,'','glyphicon glyphicon-trash',0),(43,'Activa_bd',5,1,'','glyphicon glyphicon-ok',0),(44,'Modifica',5,1,'','glyphicon glyphicon-pencil',0),(45,'Modifica_bd',5,1,'','glyphicon glyphicon-pencil',0),(46,'Alta',6,1,'','glyphicon glyphicon-plus',1),(47,'Lista',6,1,'','glyphicon glyphicon-list-alt',1),(48,'Lista_ajax',6,1,'','glyphicon glyphicon-list-alt',0),(49,'Alta_bd',6,1,'','glyphicon glyphicon-list-alt',0),(50,'Elimina_bd',6,1,'','glyphicon glyphicon-minus',0),(51,'Inicio',7,1,'','glyphicon glyphicon-thumbs-up',1),(52,'Logout',7,1,'','glyphicon glyphicon-off',1),(137,'asigna_accion',1,1,'','glyphicon glyphicon-usd',0),(138,'agrega_accion_bd',1,1,'','glyphicon glyphicon-usd',0),(139,'elimina_accion_bd',1,1,'','glyphicon glyphicon-usd',0),(284,'alta',44,1,'','fwf wf ew f wef',1),(285,'alta_bd',44,1,NULL,'dwcd  dw',NULL),(286,'lista',44,1,NULL,'wdd wd w dw',1),(287,'modifica',44,1,'ewf','dwee ',NULL),(288,'modifica_bd',44,1,'wef','wefwfe',NULL),(292,'lista_ajax',44,1,'weew','dwew',NULL),(295,'alta',45,1,NULL,'dwfwfw',1),(296,'alta_bd',45,1,NULL,'dwdw',NULL),(297,'lista',45,1,NULL,'wefewf',1),(298,'lista_ajax',45,1,NULL,'dwqdwq',NULL),(299,'modifica',45,1,NULL,'f4f4',NULL),(300,'modifica_bd',45,1,NULL,'wdqdqw',NULL),(301,'elimina_bd',45,1,NULL,'wwff wf wq f',NULL),(302,'alta',46,1,'','xxxff',1),(303,'alta_bd',46,1,NULL,'dwf44',NULL),(304,'lista',46,1,NULL,'wdf4',1),(305,'lista_ajax',46,1,NULL,'dwf4',NULL),(306,'modifica',46,1,NULL,'df434',NULL),(307,'modifica_bd',46,1,NULL,'232132',NULL),(308,'alta',47,1,NULL,'wewf',1),(309,'lista',47,1,NULL,'ewewf',1),(310,'alta_bd',47,1,NULL,'fffww',NULL),(311,'modifica',47,1,NULL,'wdwdw',NULL),(312,'modifica_bd',47,1,NULL,'wefewf',NULL),(313,'elimina_bd',47,1,'ddew','wdwd',NULL),(314,'activa_bd',47,1,NULL,'wdwwed',NULL),(315,'desactiva_bd',47,1,'wddwe','weddw',NULL);
/*!40000 ALTER TABLE `accion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accion_grupo`
--

DROP TABLE IF EXISTS `accion_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accion_grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accion_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accion_grupo` (`accion_id`,`grupo_id`),
  KEY `grupo_id` (`grupo_id`),
  CONSTRAINT `accion_grupo_ibfk_1` FOREIGN KEY (`accion_id`) REFERENCES `accion` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `accion_grupo_ibfk_2` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=493 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accion_grupo`
--

LOCK TABLES `accion_grupo` WRITE;
/*!40000 ALTER TABLE `accion_grupo` DISABLE KEYS */;
INSERT INTO `accion_grupo` VALUES (248,1,1),(217,2,1),(201,3,1),(203,4,1),(213,5,1),(6,6,1),(7,7,1),(218,8,1),(216,9,1),(10,10,1),(11,11,1),(12,12,1),(161,13,1),(162,14,1),(163,15,1),(164,16,1),(165,17,1),(166,18,1),(19,19,1),(20,20,1),(21,21,1),(22,22,1),(23,23,1),(24,24,1),(25,25,1),(26,26,1),(27,27,1),(28,28,1),(29,29,1),(30,30,1),(31,31,1),(32,32,1),(33,33,1),(34,34,1),(35,35,1),(36,36,1),(37,37,1),(38,38,1),(39,39,1),(40,40,1),(41,41,1),(42,42,1),(43,43,1),(44,44,1),(45,45,1),(48,48,1),(49,49,1),(50,50,1),(51,51,1),(422,51,2),(52,52,1),(423,52,2),(200,137,1),(138,138,1),(139,139,1),(466,284,1),(467,285,1),(468,286,1),(469,287,1),(470,288,1),(471,292,1),(472,295,1),(473,296,1),(474,297,1),(475,298,1),(476,299,1),(477,300,1),(478,301,1),(479,302,1),(480,303,1),(481,304,1),(482,305,1),(483,306,1),(484,307,1),(485,308,1),(486,309,1),(487,310,1),(488,311,1),(489,312,1),(490,313,1),(491,314,1),(492,315,1);
/*!40000 ALTER TABLE `accion_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elemento_lista`
--

DROP TABLE IF EXISTS `elemento_lista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elemento_lista` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `seccion_menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SECCION_ELEMENTO` (`seccion_menu_id`),
  CONSTRAINT `seccion_elemento_lista` FOREIGN KEY (`seccion_menu_id`) REFERENCES `seccion_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elemento_lista`
--

LOCK TABLES `elemento_lista` WRITE;
/*!40000 ALTER TABLE `elemento_lista` DISABLE KEYS */;
INSERT INTO `elemento_lista` VALUES (1,'seccion_menu_descripcion',NULL,'1',2),(2,'accion_descripcion',NULL,'1',3),(3,'seccion_menu_descripcion','','1',3),(4,'elemento_lista_descripcion',NULL,'1',44),(5,'menu_descripcion',NULL,'1',4),(6,'grupo_descripcion',NULL,'1',1),(7,'video_index_descripcion',NULL,'1',45),(8,'video_index_archivo',NULL,'1',45),(9,'fondo_index_descripcion',NULL,'1',46),(10,'fondo_index_archivo','cwe','1',46),(11,'grupo_producto_descripcion',NULL,'1',47);
/*!40000 ALTER TABLE `elemento_lista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fondo_index`
--

DROP TABLE IF EXISTS `fondo_index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fondo_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fondo_index`
--

LOCK TABLES `fondo_index` WRITE;
/*!40000 ALTER TABLE `fondo_index` DISABLE KEYS */;
INSERT INTO `fondo_index` VALUES (1,'g45g54','./views/fondo_index/archivos/g45g54_537379.jpg',1,'2452'),(2,'wfwfew','./views/fondo_index/archivos/wfwfew_603532.jpg',1,'wdwdw'),(3,'fwfq343','./views/fondo_index/archivos/fwfq343_379382.jpg',1,'wfqfqwe'),(4,'fwfq343','./views/fondo_index/archivos/fwfq343_460463.jpg',1,'wfqfqwe'),(5,'dwwe','./views/fondo_index/archivos/dwwe_384242.jpg',1,''),(6,'ttt','./views/fondo_index/archivos/ttt_674479.mp4',NULL,NULL);
/*!40000 ALTER TABLE `fondo_index` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (1,'Admins','No cambiar los permisos',1),(2,'facturacion','',1);
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_producto`
--

DROP TABLE IF EXISTS `grupo_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_producto`
--

LOCK TABLES `grupo_producto` WRITE;
/*!40000 ALTER TABLE `grupo_producto` DISABLE KEYS */;
INSERT INTO `grupo_producto` VALUES (2,'wfefewfw','wefew',1);
/*!40000 ALTER TABLE `grupo_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `icono` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion` (`descripcion`),
  UNIQUE KEY `icono` (`icono`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'Seguridad','glyphicon glyphicon-lock','',1),(2,'Session','glyphicon glyphicon-user','',1),(7,'Generales','glyphicon glyphicon-cog','',1),(10,'Galeria','glyphicon glyphicon-picture',NULL,1);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion_menu`
--

DROP TABLE IF EXISTS `seccion_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccion_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `icono` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `descripcion` (`descripcion`),
  UNIQUE KEY `icono` (`icono`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `seccion_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion_menu`
--

LOCK TABLES `seccion_menu` WRITE;
/*!40000 ALTER TABLE `seccion_menu` DISABLE KEYS */;
INSERT INTO `seccion_menu` VALUES (1,'Grupo','xxxx',1,1,'glyphicon glyphicon-th'),(2,'Seccion_Menu','',1,1,'glyphicon glyphicon-th-list'),(3,'Accion','',1,1,'glyphicon glyphicon-play'),(4,'Menu','',1,1,'glyphicon glyphicon-folder-close'),(5,'Usuario','',1,1,'glyphicon glyphicon-user'),(6,'Accion_Grupo','',1,1,'glyphicon glyphicon-lock'),(7,'Session','',1,2,'glyphicon glyphicon-off'),(44,'elemento_lista','',1,7,'cdfweew fe fw f ew fe f'),(45,'video_index',NULL,1,10,'deed'),(46,'fondo_index','xxx',1,10,'xxx'),(47,'grupo_producto',NULL,1,10,'dfeewr');
/*!40000 ALTER TABLE `seccion_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`),
  KEY `grupo_id` (`grupo_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'root','moro58','mgamboa@tdesystems.com.mx',1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_index`
--

DROP TABLE IF EXISTS `video_index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_index`
--

LOCK TABLES `video_index` WRITE;
/*!40000 ALTER TABLE `video_index` DISABLE KEYS */;
INSERT INTO `video_index` VALUES (16,'Prueba de video','./views/video_index/archivos/Prueba de video_729191.mp4',1,''),(17,'ferfe ff ef','./views/video_index/archivos/ferfe ff ef_465499.mp4',1,'dwdwdw');
/*!40000 ALTER TABLE `video_index` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-08 17:37:25
