-- MySQL dump 10.13  Distrib 5.5.22, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: micho
-- ------------------------------------------------------
-- Server version	5.5.22-0ubuntu1

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
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (6,'CEO','Controls the company'),(7,'CTO','Controls the computers'),(8,'CFO','Controls the money'),(9,'COO','Controls the people'),(10,'Developer','Writes computer programs'),(11,'Customer Service','Assists customers with products'),(12,'Sales','Sales person'),(14,'Electrical Engineer','Test or modify developmental or operational electrical machinery or electrical control equipment and circuitry in industrial or commercial plants or laboratories'),(15,'Logistics Engineers','Design or analyze operational solutions for projects such as transportation optimization, network modeling, process and methods analysis, cost containment, capacity enhancement, routing and shipment optimization, or information management.'),(16,'Quality Control Analysts','Conduct tests to determine quality of raw materials, bulk intermediate and finished products'),(17,'Technical Writers','Write technical materials, such as equipment manuals, appendices, or operating and maintenance instructions'),(18,'Statisticians','Develop or apply mathematical or statistical theory and methods to collect, organize, interpret, and summarize numerical data to provide usable information.');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `mi` char(1) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT 'Houston',
  `state` char(2) DEFAULT 'TX',
  `zip` varchar(5) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `id_users` int(11) NOT NULL,
  `id_position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_users_profiles` (`id_users`),
  CONSTRAINT `FK_users_profiles` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (45,'Michole','C','Dumas','Beaumont','TX','77703','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-1/c0.80.480.480/13319928_10209874459088239_8025087308433737911_n.jpg?oh=1bcd7d2040f1258e553017717b772d99&oe=57FC8D36',2,6),(51,'Mitchell','E','Jolivette','Houston','TX','77027','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/13095777_10207391912530865_6875217497768056324_n.jpg?oh=888d8f5850082337998b23916ee91075&oe=57FD22C3',1,7),(92,'Steven',NULL,'Ross','Dallas','TX','77355','http://lorempixel.com/200/200/fashion',23,8),(93,'Evelyn',NULL,'Chavez','Beaumont','TX','77112','http://loremflickr.com/g/320/320/paris',24,9),(94,'Gregory',NULL,'Welch','Houston','TX','77826','http://loremflickr.com/g/320/320/dallas',25,10),(95,'Dorothy','J','Garza','El Paso','TX','77603','http://lorempixel.com/200/200/fashion',26,11),(96,'Gerald','W','Rodriguez','Austin','TX','77776','http://loremflickr.com/320/320/dog',27,12),(97,'Emily',NULL,'Howell','Beaumont','TX','77723','http://loremflickr.com/g/320/320/dallas',28,10),(98,'Cheryl',NULL,'Jones','El Paso','TX','77725','http://loremflickr.com/g/320/320/dallas',29,14),(99,'Jennifer',NULL,'Jacobs','El Paso','TX','77794','http://loremflickr.com/g/320/320/dallas',30,15),(100,'Thomas',NULL,'Vasquez','El Paso','TX','77338','http://loremflickr.com/g/320/320/paris',31,16),(101,'Denise','V','Gordon','El Paso','TX','77005','http://loremflickr.com/g/320/320/dallas',32,17),(102,'Steve',NULL,'Sanders','Austin','TX','77596','http://loremflickr.com/320/320/dog',33,18),(103,'Mark',NULL,'Shaw','El Paso','TX','77272','http://loremflickr.com/g/320/320/paris',34,0),(104,'Jesse',NULL,'Russell','Austin','TX','77754','http://loremflickr.com/g/320/320/paris',35,10),(105,'Peter',NULL,'Olson','El Paso','TX','77051','http://lorempixel.com/400/400/sports/',36,0),(106,'Joyce',NULL,'Sanchez','Houston','TX','77665','http://loremflickr.com/g/320/320/paris',37,0),(107,'Carolyn','M','Bennett','Beaumont','TX','77581','http://loremflickr.com/g/320/320/dallas',38,5),(108,'Dorothy','N','Reed','Houston','TX','77770','http://loremflickr.com/g/320/320/dallas',39,0),(109,'Kathy',NULL,'Kelly','El Paso','TX','77528','http://lorempixel.com/400/400/food',40,18),(110,'Juan','V','Williams','Beaumont','TX','77194','http://lorempixel.com/400/400/fashion',41,18),(111,'Steven','M','Lawrence','Dallas','TX','77995','http://lorempixel.com/400/400/people',42,0);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jolivetteme','098f6bcd4621d373cade4e832627b4f6',0,1),(2,'michole','9410bfbf795b627ed8178cdeb006f9e8',0,1),(23,'wgutierrez0','a7c0e32e12c248377e4b1d102db83d51355ba7a2',1,1),(24,'tmitchell1','60b9f0a33431c55c3b0e486b8b0cadc957e05ed7',1,1),(25,'chowell2','343e2367809221722d38cad921b5656d9388f741',0,1),(26,'cwashington3','6b3944df47767b73dd13598389f748ff27143494',0,1),(27,'rnelson4','aff57db8cf762bf8dd3ce7dff971f94c87e72c27',0,1),(28,'awest5','d4debe19966316d42fcb62cdf5d86c98b8bf11c8',0,1),(29,'jmatthews6','a64fded31b954c0ee7edccdc4e385eb28d701c5c',1,1),(30,'mbradley7','05d1f03d0a7cbe21c96f002f6b7ee856dac9df02',1,1),(31,'lhernandez8','6a4904a1edeb050c1c60a820a51c1feda3d0b048',0,1),(32,'rhawkins9','1ff74db863713d240ead5d7f02448a3a4a3fa205',1,1),(33,'lgilberta','f0355feff88291c781306ed8e137db760b3f2a9d',1,1),(34,'rmyersb','dd0f5af247472bb3879e7382dc4270fd5751ee75',1,1),(35,'mtaylorc','3cb26760b9ebdebdac774dfa4b63255077a49658',0,1),(36,'atorresd','b52642e844813c9c1e5277c9af8a04d8c531f28c',0,1),(37,'pgordone','ed28c20be09095a643c7aa17d989693fc0c708e9',1,1),(38,'kwrightf','5c6b334c22f322479a52c4ecfc9b3a9badc7a9ea',1,1),(39,'molsong','a2ef7e99256dd0cc63f42b7b9c5a2bcbdf9e13ce',0,1),(40,'bmorenoh','67b837b7729f9b5c40436eb6c19c63273ea63dc6',0,1),(41,'tstewarti','9e8f5503513f3ab59cdce58eb2f5f0ba7aaad5f9',1,1),(42,'jsnyderj','44fa9628aed07750324d9aa010d0d6790df1ceed',1,1),(43,'testuser','5f4dcc3b5aa765d61d8327deb882cf99',0,1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-05 19:34:56
