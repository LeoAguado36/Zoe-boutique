-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: tienda
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES (2,1,0),(3,1,0),(4,1,0),(0,1,0),(0,1,0),(0,1,0),(0,1,0);
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Precio` decimal(4,2) DEFAULT NULL,
  `Cantidad` bigint(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Vestido Naranja',99.99,10),(2,'Saco Rojo',99.99,1),(3,'Vestido Rosa',99.99,7),(4,'Vestido Flores',99.99,12),(5,'Sudadera Rosa',99.99,15),(6,'Sudadera Amarilla',99.99,23),(7,'Saco beige',99.99,4),(8,'Top negro',99.99,11),(9,'Sueter azul',99.99,9),(10,'Vestido rosa palido',99.99,9),(11,'Vestido vino',99.99,1),(12,'Saco blanco',99.99,2),(13,'Jeans Mujer',99.99,25),(14,'Pantalon ancho',99.99,11),(15,'Pantalon roto',99.99,17),(16,'Sudadera Blanca',99.99,5),(17,'Sueter verde',95.00,30),(18,'Top con mangas',99.99,21);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro_carrito`
--

DROP TABLE IF EXISTS `registro_carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro_carrito` (
  `id_registro_carrito` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_carrito` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro_carrito`
--

LOCK TABLES `registro_carrito` WRITE;
/*!40000 ALTER TABLE `registro_carrito` DISABLE KEYS */;
INSERT INTO `registro_carrito` VALUES (1,1,2),(2,1,2),(3,1,2),(4,1,2),(5,2,2),(6,5,2),(7,6,2),(8,2,2),(9,3,2),(10,10,2),(11,4,2),(12,2,3),(13,2,3),(14,2,3),(15,2,3),(16,3,3),(17,3,4),(0,5,4),(0,5,4),(0,1,0),(0,11,0),(0,10,0),(0,1,0),(0,1,0),(0,1,0),(0,2,0);
/*!40000 ALTER TABLE `registro_carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  PRIMARY KEY (`Nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Angel','Cuautitlan','angellechuga@gmail.com','401'),('Angi','Tultepec','caca@gmail.com','aaaa'),('Arais','Cecytem','nidea','aaaaaaaa'),('Araisa','Cecytem','nidea','aaaaaaaa'),('Lechuga','Nose','aaaa','xdd'),('Lechugaq','Nose','aaaa','xdd'),('Miguel','Melchor Ocampo','nose@gmail.com','esotilin'),('Nombre','Direccion','Correo','Contrasena'),('Numbre','Direccion','Correo','Contrasena'),('Nydia','Cuautitlan','correo3@gmail.com','12345'),('Sam','Cuautitlan','caca@gmail.com','esotilinexe'),('Zoe','Tultitlan','correo@gmail.com','hola1'),('Zorre','Cuautitlan','correo@gmail.com','esotilinexe'),('Zuri','Tultitlan','correo@gmail.com','hola12'),('Zurisadai','Tultepec','correo@gmail.com','hola1');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-05 21:50:06
