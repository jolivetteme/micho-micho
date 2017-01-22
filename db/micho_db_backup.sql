-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: micho
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (3,'CEO'),(5,'Cleaner'),(4,'Cook'),(1,'Developer'),(6,'Foreman'),(2,'Janitor'),(7,'Sales');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'pocket book',5.99),(2,'pencil protector',0.99),(3,'backpack',24.99),(5,'lotion',4.99),(6,'soap',1.99),(7,'shampoo',5.99),(8,'agenda book',29.99);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
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
INSERT INTO `profiles` VALUES (45,'Michole','C','Dumas','Beaumont','TX','77703','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-1/c0.80.480.480/13319928_10209874459088239_8025087308433737911_n.jpg?oh=1bcd7d2040f1258e553017717b772d99&oe=57FC8D36',2,6),(51,'Mitchell','E','Jolivette','Houston','TX','77056','https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/13095777_10207391912530865_6875217497768056324_n.jpg?oh=888d8f5850082337998b23916ee91075&oe=57FD22C3',1,7),(92,'Steven',NULL,'Ross','Dallas','TX','77355','http://placeimg.com//200/200/fashion',23,8),(93,'Evelyn',NULL,'Chavez','Beaumont','TX','77112','http://lorempixel.com//320/320/paris',24,9),(94,'Gregory',NULL,'Welch','Houston','TX','77826','http://lorempixel.com//320/320/dallas',25,10),(95,'Dorothy','J','Garza','El Paso','TX','77603','http://placeimg.com//200/200/fashion',26,11),(96,'Gerald','W','Rodriguez','Austin','TX','77776','http://lorempixel.com//320/320/dog',27,12),(97,'Emily',NULL,'Howell','Beaumont','TX','77723','http://lorempixel.com//320/320/dallas',28,10),(98,'Cheryl',NULL,'Jones','El Paso','TX','77725','http://lorempixel.com//320/320/dallas',29,14),(99,'Jennifer',NULL,'Jacobs','El Paso','TX','77794','http://lorempixel.com//320/320/dallas',30,15),(100,'Thomas',NULL,'Vasquez','El Paso','TX','77338','http://lorempixel.com//320/320/paris',31,16),(101,'Denise','V','Gordon','El Paso','TX','77005','http://lorempixel.com//320/320/dallas',32,17),(102,'Steve',NULL,'Sanders','Austin','TX','77596','http://lorempixel.com//320/320/dog',33,18),(103,'Mark',NULL,'Shaw','El Paso','TX','77272','http://lorempixel.com//320/320/paris',34,0),(104,'Jesse',NULL,'Russell','Austin','TX','77754','http://lorempixel.com//320/320/paris',35,10),(105,'Peter',NULL,'Olson','El Paso','TX','77051','http://placeimg.com//400/400/sports/',36,0),(106,'Joyce',NULL,'Sanchez','Houston','TX','77665','http://lorempixel.com//320/320/paris',37,0),(107,'Carolyn','M','Bennett','Beaumont','TX','77581','http://lorempixel.com//320/320/dallas',38,5),(108,'Dorothy','N','Reed','Houston','TX','77770','http://lorempixel.com//320/320/dallas',39,0),(109,'Kathy',NULL,'Kelly','El Paso','TX','77528','http://placeimg.com//400/400/food',40,18),(110,'Juan','V','Williams','Beaumont','TX','77194','http://placeimg.com//400/400/fashion',41,18),(111,'Steven','M','Lawrence','Dallas','TX','77995','http://placeimg.com//400/400/people',42,0);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_products` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_transactions` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,1,1,1),(2,3,1,1),(3,7,2,2),(4,6,2,2),(17,1,1,5),(18,2,1,5),(19,3,1,5),(20,5,1,5),(21,5,1,5),(22,6,1,5),(23,7,1,5),(24,8,1,5),(25,1,2,7),(26,2,2,7),(27,3,2,7),(28,5,2,7),(29,6,2,7),(30,7,2,7),(31,8,2,7),(32,1,1,1),(33,1,1,1),(34,6,28,24),(35,5,31,33),(36,4,32,27),(37,6,34,39),(38,5,32,31),(39,7,23,32),(40,4,34,36),(41,6,35,23),(42,1,29,30),(43,8,38,40),(44,3,32,37),(45,2,36,41),(46,5,41,23),(47,3,32,33),(48,3,35,28),(49,5,26,41),(50,3,29,41),(51,6,33,38),(52,2,33,27),(53,5,41,24),(54,4,40,28),(55,6,38,36),(56,1,25,31),(57,6,36,23),(58,1,26,34),(59,4,32,42),(60,5,40,38),(61,2,37,41),(62,5,29,37),(63,6,24,30),(64,2,31,37),(65,1,25,28),(66,8,34,51),(67,7,35,31),(68,6,39,9),(69,8,33,45),(70,4,31,9),(71,2,27,43),(72,2,36,50),(73,4,30,31),(74,5,27,20),(75,7,34,15),(76,3,41,44),(77,1,39,7),(78,6,35,49),(79,5,41,15),(80,2,26,26),(81,5,34,13),(82,2,42,36),(83,2,38,29),(84,1,40,25),(85,3,42,15),(86,1,35,52),(87,7,29,16),(88,1,35,9),(89,4,25,10),(90,2,33,13),(91,3,37,52),(92,4,36,46),(93,2,27,41),(94,8,33,40),(95,1,24,12),(96,5,26,19),(97,7,36,35),(98,1,31,7),(99,7,30,16),(100,8,26,54),(101,4,23,48),(102,3,41,44),(103,1,40,22),(104,8,41,43),(105,8,35,11),(106,6,33,24),(107,3,29,38),(108,3,38,45),(109,6,23,9),(110,3,29,37),(111,3,29,48),(112,4,28,14),(113,2,26,27),(114,6,27,2),(115,2,41,1),(116,3,36,2),(117,3,36,1),(118,7,29,2),(119,2,26,2),(120,2,25,1),(121,5,34,2),(122,2,36,1),(123,4,34,2),(124,3,41,2),(125,4,38,2),(126,4,33,1),(127,1,1,8),(128,5,2,5),(129,6,2,45),(130,5,1,30),(131,7,2,14),(132,8,1,13),(133,5,1,28),(134,5,2,10),(135,2,1,37),(136,6,1,12),(137,4,2,27),(138,5,2,43),(139,6,1,18),(140,2,2,33),(141,4,2,19),(142,7,2,54),(143,3,2,52),(144,3,2,44),(145,6,1,17),(146,1,1,21),(147,2,2,50),(148,5,1,45),(149,6,1,21);
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` decimal(5,2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,30.98,'2016-10-06 22:19:31'),(2,7.98,'2016-10-06 22:55:43'),(5,79.92,'2016-10-07 13:56:26'),(6,0.00,'2016-10-07 18:20:34'),(7,74.93,'2016-10-07 19:43:24'),(8,0.00,'2016-10-11 01:49:53'),(9,0.00,'2016-10-11 01:49:53'),(10,0.00,'2016-10-11 01:49:53'),(11,0.00,'2016-10-11 01:49:53'),(12,0.00,'2016-10-11 01:49:53'),(13,0.00,'2016-10-11 01:49:53'),(14,0.00,'2016-10-11 01:49:53'),(15,0.00,'2016-10-11 01:49:53'),(16,0.00,'2016-10-11 01:49:53'),(17,0.00,'2016-10-11 01:49:53'),(18,0.00,'2016-10-11 01:49:53'),(19,0.00,'2016-10-11 01:49:53'),(20,0.00,'2016-10-11 01:49:53'),(21,0.00,'2016-10-11 01:49:53'),(22,0.00,'2016-10-11 01:49:53'),(23,0.00,'2016-10-11 01:49:53'),(24,0.00,'2016-10-11 01:49:53'),(25,0.00,'2016-10-11 01:49:53'),(26,0.00,'2016-10-11 01:49:53'),(27,0.00,'2016-10-11 01:49:53'),(28,0.00,'2016-10-11 01:49:53'),(29,0.00,'2016-10-11 01:49:53'),(30,0.00,'2016-10-11 01:49:53'),(31,0.00,'2016-10-11 01:49:53'),(32,0.00,'2016-10-11 01:50:17'),(33,0.00,'2016-10-11 01:50:17'),(34,0.00,'2016-10-11 01:50:17'),(35,0.00,'2016-10-11 01:50:17'),(36,0.00,'2016-10-11 01:50:17'),(37,0.00,'2016-10-11 01:50:17'),(38,0.00,'2016-10-11 01:50:17'),(39,0.00,'2016-10-11 01:50:17'),(40,0.00,'2016-10-11 01:50:17'),(41,0.00,'2016-10-11 01:50:17'),(42,0.00,'2016-10-11 01:50:17'),(43,0.00,'2016-10-11 01:50:17'),(44,0.00,'2016-10-11 01:50:17'),(45,0.00,'2016-10-11 01:50:17'),(46,0.00,'2016-10-11 01:50:17'),(47,0.00,'2016-10-11 01:50:17'),(48,0.00,'2016-10-11 01:50:17'),(49,0.00,'2016-10-11 01:50:17'),(50,0.00,'2016-10-11 01:50:17'),(51,0.00,'2016-10-11 01:50:17'),(52,0.00,'2016-10-11 01:50:17'),(53,0.00,'2016-10-11 01:50:17'),(54,0.00,'2016-10-11 01:50:17'),(55,0.00,'2016-10-11 01:50:17');
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
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
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'jolivetteme','jolivetteme@gmail.com','098f6bcd4621d373cade4e832627b4f6',1,1),(2,'michole','michole.rubin@gmail.com','9410bfbf795b627ed8178cdeb006f9e8',0,1),(23,'wgutierrez0','wgutierrez0@yahoo.com','a7c0e32e12c248377e4b1d102db83d51355ba7a2',0,1),(24,'tmitchell1','tmitchell1@gmail.com','60b9f0a33431c55c3b0e486b8b0cadc957e05ed7',1,1),(25,'chowell2','chowell2@gmail.com','343e2367809221722d38cad921b5656d9388f741',1,1),(26,'cwashington3','cwashington3@msn.com','6b3944df47767b73dd13598389f748ff27143494',1,1),(27,'rnelson4','rnelson4@gmail.com','aff57db8cf762bf8dd3ce7dff971f94c87e72c27',0,1),(28,'awest5','awest5@gmail.com','d4debe19966316d42fcb62cdf5d86c98b8bf11c8',0,1),(29,'jmatthews6','jmatthews6@gmail.com','a64fded31b954c0ee7edccdc4e385eb28d701c5c',1,1),(30,'mbradley7','mbradley7@gmail.com','05d1f03d0a7cbe21c96f002f6b7ee856dac9df02',1,1),(31,'lhernandez8','lhernandez8@gmail.com','6a4904a1edeb050c1c60a820a51c1feda3d0b048',0,1),(32,'rhawkins9','rhawkins9@gmail.com','1ff74db863713d240ead5d7f02448a3a4a3fa205',1,1),(33,'lgilberta','lgilberta@gmail.com','f0355feff88291c781306ed8e137db760b3f2a9d',1,1),(34,'rmyersb','rmyersb@gmail.com','dd0f5af247472bb3879e7382dc4270fd5751ee75',1,1),(35,'mtaylorc','mtaylorc@gmail.com','3cb26760b9ebdebdac774dfa4b63255077a49658',0,1),(36,'atorresd','atorresd@gmail.com','b52642e844813c9c1e5277c9af8a04d8c531f28c',0,1),(37,'pgordone','pgordone@gmail.com','ed28c20be09095a643c7aa17d989693fc0c708e9',1,1),(38,'kwrightf','kwrightf@gmail.com','5c6b334c22f322479a52c4ecfc9b3a9badc7a9ea',1,1),(39,'molsong','molsong@gmail.com','a2ef7e99256dd0cc63f42b7b9c5a2bcbdf9e13ce',0,1),(40,'bmorenoh','bmorenoh@gmail.com','67b837b7729f9b5c40436eb6c19c63273ea63dc6',0,1),(41,'tstewarti','tstewarti@gmail.com','9e8f5503513f3ab59cdce58eb2f5f0ba7aaad5f9',1,1),(42,'jsnyderj','jsnyderj@gmail.com','44fa9628aed07750324d9aa010d0d6790df1ceed',1,1);
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

-- Dump completed on 2017-01-22  7:32:47
