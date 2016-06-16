-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: micho
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
INSERT INTO `profiles` VALUES (45,'Michole','C','Dumas','Beaumont','TX','77703','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-1/c0.80.480.480/13319928_10209874459088239_8025087308433737911_n.jpg?oh=1bcd7d2040f1258e553017717b772d99&oe=57FC8D36',2),(51,'Mitchell','E','Jolivette','Houston','TX','77027','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/13095777_10207391912530865_6875217497768056324_n.jpg?oh=888d8f5850082337998b23916ee91075&oe=57FD22C3',1),(92,'Steven',NULL,'Ross','Dallas','TX','77355','http://lorempixel.com/400/200/',23),(93,'Evelyn',NULL,'Chavez','Beaumont','TX','77112','http://lorempixel.com/400/200/',24),(94,'Gregory',NULL,'Welch','Houston','TX','77826','http://lorempixel.com/400/200/',25),(95,'Dorothy','J','Garza','El Paso','TX','77603','http://loremflickr.com/320/240',26),(96,'Gerald','W','Rodriguez','Austin','TX','77776','http://lorempixel.com/400/200/',27),(97,'Emily',NULL,'Howell','Beaumont','TX','77723','http://loremflickr.com/320/240',28),(98,'Cheryl',NULL,'Jones','El Paso','TX','77725','http://lorempixel.com/400/200/',29),(99,'Jennifer',NULL,'Jacobs','El Paso','TX','77794','http://lorempixel.com/400/200/',30),(100,'Thomas',NULL,'Vasquez','El Paso','TX','77338','http://loremflickr.com/320/240',31),(101,'Denise','V','Gordon','El Paso','TX','77005','http://loremflickr.com/320/240',32),(102,'Steve',NULL,'Sanders','Austin','TX','77596','http://loremflickr.com/320/240',33),(103,'Mark',NULL,'Shaw','El Paso','TX','77272','http://loremflickr.com/320/240',34),(104,'Jesse',NULL,'Russell','Austin','TX','77754','http://loremflickr.com/320/240',35),(105,'Peter',NULL,'Olson','El Paso','TX','77051','http://loremflickr.com/320/240',36),(106,'Joyce',NULL,'Sanchez','Houston','TX','77665','http://loremflickr.com/320/240',37),(107,'Carolyn','M','Bennett','Beaumont','TX','77581','http://loremflickr.com/320/240',38),(108,'Dorothy','N','Reed','Houston','TX','77770','http://lorempixel.com/400/200/',39),(109,'Kathy',NULL,'Kelly','El Paso','TX','77528','http://lorempixel.com/400/200/',40),(110,'Juan','V','Williams','Beaumont','TX','77194','http://lorempixel.com/400/200/',41),(111,'Steven','M','Lawrence','Dallas','TX','77995','http://loremflickr.com/320/240',42);
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jolivetteme','098f6bcd4621d373cade4e832627b4f6',0,1),(2,'michole','9410bfbf795b627ed8178cdeb006f9e8',0,1),(23,'wgutierrez0','a7c0e32e12c248377e4b1d102db83d51355ba7a2',1,1),(24,'tmitchell1','60b9f0a33431c55c3b0e486b8b0cadc957e05ed7',1,1),(25,'chowell2','343e2367809221722d38cad921b5656d9388f741',0,1),(26,'cwashington3','6b3944df47767b73dd13598389f748ff27143494',0,1),(27,'rnelson4','aff57db8cf762bf8dd3ce7dff971f94c87e72c27',0,1),(28,'awest5','d4debe19966316d42fcb62cdf5d86c98b8bf11c8',0,1),(29,'jmatthews6','a64fded31b954c0ee7edccdc4e385eb28d701c5c',1,1),(30,'mbradley7','05d1f03d0a7cbe21c96f002f6b7ee856dac9df02',1,1),(31,'lhernandez8','6a4904a1edeb050c1c60a820a51c1feda3d0b048',0,1),(32,'rhawkins9','1ff74db863713d240ead5d7f02448a3a4a3fa205',1,1),(33,'lgilberta','f0355feff88291c781306ed8e137db760b3f2a9d',1,1),(34,'rmyersb','dd0f5af247472bb3879e7382dc4270fd5751ee75',1,1),(35,'mtaylorc','3cb26760b9ebdebdac774dfa4b63255077a49658',0,1),(36,'atorresd','b52642e844813c9c1e5277c9af8a04d8c531f28c',0,1),(37,'pgordone','ed28c20be09095a643c7aa17d989693fc0c708e9',1,1),(38,'kwrightf','5c6b334c22f322479a52c4ecfc9b3a9badc7a9ea',1,1),(39,'molsong','a2ef7e99256dd0cc63f42b7b9c5a2bcbdf9e13ce',0,1),(40,'bmorenoh','67b837b7729f9b5c40436eb6c19c63273ea63dc6',0,1),(41,'tstewarti','9e8f5503513f3ab59cdce58eb2f5f0ba7aaad5f9',1,1),(42,'jsnyderj','44fa9628aed07750324d9aa010d0d6790df1ceed',1,1);
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

-- Dump completed on 2016-06-16  4:47:49
