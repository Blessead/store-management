CREATE DATABASE  IF NOT EXISTS `store` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `store`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: store
-- ------------------------------------------------------
-- Server version	5.1.53-community-log

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
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `stockID` int(11) NOT NULL AUTO_INCREMENT,
  `PName` varchar(45) NOT NULL,
  `PCategory` varchar(45) NOT NULL,
  `PBrand` varchar(45) NOT NULL,
  `Date_of_stock` varchar(45) NOT NULL,
  `PQty` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Supplier` varchar(45) NOT NULL,
  `Status` varchar(45) NOT NULL DEFAULT 'Received',
  PRIMARY KEY (`stockID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (1,'Oil','Engine','','2019-01-02',12,2000,84000,'','RECEIVED'),(2,'Oil','Engine','','2019-01-02',12,2000,84000,'','RECEIVED'),(3,'Tyres','Retread tyres','Diff','2019-01-02',30,800000,40000000,'Retread','RECEIVED'),(4,'Tyres','Retread tyres','Diff','2019-01-02',30,800000,40000000,'Retread','RECEIVED'),(5,'Battery terminal','Positive','Man','2019-01-02',-32,2000,20000,'Europlus','RECEIVED'),(6,'Cable ties','Small','Actros','2019-01-04',-15,1000,100000,'Okello','RECEIVED'),(7,'Cable ties','Large','Man','2019-01-02',50,1000,50000,'GM','RECEIVED'),(8,'Cable ties','Large','Man','2019-01-07',50,1000,40000,'GM','RECEIVED'),(9,'Cable ties','Large','Man','2019-01-09',50,1000,60000,'GM','RECEIVED'),(10,'Cable ties','Large','Man','2019-01-12',50,1000,30000,'Europlus','RECEIVED'),(11,'','','','1970-01-01',0,0,0,'','RECEIVED'),(12,'','Engine','Engine','1970-01-01',0,0,0,'Engine','RECEIVED');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28 14:32:53
