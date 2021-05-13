-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: myzoo
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

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
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `idA` int(11) NOT NULL AUTO_INCREMENT,
  `nomA` varchar(60) NOT NULL,
  `descA` text NOT NULL,
  `imgA` blob DEFAULT NULL,
  `idF` int(11) NOT NULL,
  PRIMARY KEY (`idA`),
  KEY `idF` (`idF`),
  CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`idF`) REFERENCES `famille` (`idF`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (1,'chien','un animal domestique',NULL,1),(2,'cochon','un animal de la ferme',NULL,1),(3,'serpent','un animal dangereux',NULL,3),(4,'crocodile','un animal très dangereux',NULL,3),(5,'requin','un animal aquatique très dangereux',NULL,4);
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `animal_continent`
--

DROP TABLE IF EXISTS `animal_continent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal_continent` (
  `idA` int(11) NOT NULL,
  `idC` int(11) NOT NULL,
  PRIMARY KEY (`idA`,`idC`),
  KEY `idC` (`idC`),
  CONSTRAINT `animal_continent_ibfk_1` FOREIGN KEY (`idA`) REFERENCES `animal` (`idA`),
  CONSTRAINT `animal_continent_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `continent` (`idC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal_continent`
--

LOCK TABLES `animal_continent` WRITE;
/*!40000 ALTER TABLE `animal_continent` DISABLE KEYS */;
INSERT INTO `animal_continent` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(2,1),(2,5),(3,1),(3,3),(3,4),(4,3),(4,4),(5,2);
/*!40000 ALTER TABLE `animal_continent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `continent`
--

DROP TABLE IF EXISTS `continent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `continent` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `libelleC` varchar(60) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continent`
--

LOCK TABLES `continent` WRITE;
/*!40000 ALTER TABLE `continent` DISABLE KEYS */;
INSERT INTO `continent` VALUES (1,'Europe'),(2,'Asie'),(3,'Afrque'),(4,'Oceanie'),(5,'Amerique');
/*!40000 ALTER TABLE `continent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `famille`
--

DROP TABLE IF EXISTS `famille`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `famille` (
  `idF` int(11) NOT NULL AUTO_INCREMENT,
  `libelleF` varchar(60) NOT NULL,
  `descF` text NOT NULL,
  PRIMARY KEY (`idF`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `famille`
--

LOCK TABLES `famille` WRITE;
/*!40000 ALTER TABLE `famille` DISABLE KEYS */;
INSERT INTO `famille` VALUES (1,'mammifère','Animaux vertébrés nourrissant avec le lait'),(3,'reptiles','Animaux vertébrés qui rampent'),(4,'poissons','Animaux invertébrés du monde aquatique');
/*!40000 ALTER TABLE `famille` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-13 14:30:00
