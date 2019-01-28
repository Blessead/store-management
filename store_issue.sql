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
-- Table structure for table `issue`
--

DROP TABLE IF EXISTS `issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issue` (
  `IssueID` int(11) NOT NULL AUTO_INCREMENT,
  `Iproduct` varchar(32) NOT NULL,
  `Icategory` varchar(32) NOT NULL,
  `Ibrand` varchar(32) NOT NULL,
  `IssuedTo` varchar(32) NOT NULL,
  `quantity` int(32) NOT NULL,
  `rate` int(11) NOT NULL,
  `date_of_issue` date NOT NULL,
  `total` int(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `NewSQty` varchar(32) NOT NULL,
  PRIMARY KEY (`IssueID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issue`
--

LOCK TABLES `issue` WRITE;
/*!40000 ALTER TABLE `issue` DISABLE KEYS */;
INSERT INTO `issue` VALUES (1,'Ta','55','jj','jj',0,0,'2018-12-16',0,'ISSUED','0'),(2,'eeeeeee','eeee','eee','eee',0,0,'2018-12-19',0,'ISSUED','0'),(3,'eeeeeee','eeee','eee','eee',0,0,'2018-12-19',0,'ISSUED','0'),(4,'gg','ggg','gg','uu',0,0,'2018-12-06',0,'ISSUED','0'),(5,'444','444','444','444',4,4,'2018-12-11',4,'ISSUED','0'),(6,'','','','',0,0,'1970-01-01',0,'ISSUED','0'),(7,'emmma','','','',0,0,'2018-12-13',0,'Issued','0'),(8,'','','','',0,0,'2018-12-21',0,'ISSUED','0'),(9,'ddd','ddd','ddd','ddd',0,0,'2018-12-20',0,'ISSUED','0'),(10,'Tyres','Retread','Diff','UBE 571E',8,80000,'2019-01-03',640000,'ISSUED',''),(11,'Tyres','Retread','Diff','UBE 572E',20,80000,'2019-01-04',1600000,'ISSUED',''),(12,'Tyres','Retread tyres','Diff','UBE 570E',20,80000,'1970-01-01',1600000,'ISSUED','30'),(13,'Oil','Engine','','UAT 444Y',30,2000,'2019-01-04',60000,'ISSUED','12'),(14,'Cable ties','Small','Actross','UAS 158Y',15,1000,'2019-01-04',15000,'ISSUED',''),(15,'Cable ties','Small','Actros','UAS 156Y',25,1000,'2019-01-05',15000,'ISSUED','75'),(16,'Cable ties','Small','Actros','UAS 581C',40,1000,'2019-01-06',40000,'ISSUED','-15'),(17,'Cable ties','Large','Man','UBE 614E',30,1000,'2019-01-04',30000,'ISSUED','20'),(18,'Cable ties','Large','Man','UBE 523E',25,1000,'2019-01-06',25000,'ISSUED','-5'),(19,'Cable ties','Large','Man','UBE 569E',20,1000,'2019-01-11',20000,'ISSUED','40'),(20,'Cable ties','Large','Man','UAS 555G',60,1000,'2019-01-17',60000,'ISSUED','70'),(21,'Cable ties','Large','Man','UAS 444Y',20,1000,'2019-01-05',20000,'ISSUED','50');
/*!40000 ALTER TABLE `issue` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28 14:32:55
