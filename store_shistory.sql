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
-- Table structure for table `shistory`
--

DROP TABLE IF EXISTS `shistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shistory` (
  `HistoryID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` varchar(45) NOT NULL,
  `Category` varchar(45) DEFAULT NULL,
  `Brand` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `Qty` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Detail` varchar(45) DEFAULT NULL,
  `Status` varchar(45) NOT NULL,
  PRIMARY KEY (`HistoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shistory`
--

LOCK TABLES `shistory` WRITE;
/*!40000 ALTER TABLE `shistory` DISABLE KEYS */;
INSERT INTO `shistory` VALUES (1,'hhhh','kkkk','iiiiii','0000-00-00',0,0,0,'2018-12-22','ISSUED'),(2,'hhhh','kkkkkk','','0000-00-00',0,0,0,'1970-01-01','ISSUED'),(3,'','','','0000-00-00',0,0,0,'2018-12-20','ISSUED'),(4,'','','','2018-12-28',0,0,0,'','ISSUED'),(5,'ggg','gg','kk','2018-12-20',4,3,444,'gg','RECEIVED'),(6,'ggg','gg','kk','2018-12-20',4,3,444,'gg','RECEIVED'),(7,'Cement','Hima','Mp','2019-01-02',100,48000,4800000,'Hima','RECEIVED'),(8,'Cement','Hima','Mp','2019-01-02',100,48000,4800000,'Hima','RECEIVED'),(9,'Cement','Hima','Mp','2019-01-02',20,48000,960000,'Peter','ISSUED'),(10,'Bolts','Central','Diff','2019-01-02',50,2000,100000,'Micheal','RECEIVED'),(11,'Bolts','Central','Diff','2019-01-02',50,2000,100000,'Micheal','RECEIVED'),(12,'Oil','Engine','Diff','2019-01-02',2,2000,4000,'UBE 520E','ISSUED'),(13,'Oil','Engine','Diff','2019-01-03',10,1000,10000,'Europlus','RECEIVED'),(14,'Oil','Engine','Diff','2019-01-03',10,1000,10000,'Europlus','RECEIVED'),(15,'Tyres','Retread tyres','Diff','2019-01-02',50,800000,40000000,'Retread','RECEIVED'),(16,'Battery terminal','Positive','Man','2019-01-02',10,2000,20000,'Europlus','RECEIVED'),(17,'Battery terminal','Postive','Man','1970-01-01',5,2000,10000,'UBE 570E','ISSUED'),(18,'Cable ties','Small','Actros','2019-01-04',100,1000,100000,'Okello','RECEIVED'),(19,'Cable ties','Small','Actros','2019-01-04',10,1000,10000,'UAS 155C','ISSUED'),(20,'Cable ties','Small','Actros','2019-01-06',40,1000,40000,'UAS 581C','ISSUED'),(21,'Cable ties','Large','Man','2019-01-02',50,1000,50000,'GM','RECEIVED'),(22,'Cable ties','Large','Man','2019-01-04',30,1000,30000,'UBE 614E','ISSUED'),(23,'Cable ties','Large','Man','2019-01-06',25,1000,25000,'UBE 523E','ISSUED'),(24,'Cable ties','Large','Man','2019-01-07',40,1000,40000,'GM','RECEIVED'),(25,'Cable ties','Large','Man','2019-01-09',60,1000,60000,'GM','RECEIVED'),(26,'Cable ties','Large','Man','2019-01-11',20,1000,20000,'UBE 569E','ISSUED'),(27,'Cable ties','Large','Man','2019-01-12',30,1000,30000,'Europlus','RECEIVED'),(28,'Cable ties','Large','Man','2019-01-15',50,1200,60000,'GM','RECEIVED'),(29,'Cable ties','Large','Man','2019-01-17',60,1000,60000,'UAS 555G','ISSUED'),(30,'Cable ties','Large','Man','2019-01-05',20,1000,20000,'UAS 444Y','ISSUED'),(31,'','','','1970-01-01',0,0,0,'','RECEIVED'),(32,'','Engine','Engine','1970-01-01',0,0,0,'Engine','RECEIVED'),(33,'','','','1970-01-01',0,0,0,'','RECEIVED');
/*!40000 ALTER TABLE `shistory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28 14:32:43
