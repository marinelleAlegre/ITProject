-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: webtek-final
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `ranking` int(2) DEFAULT NULL,
  `contacting_phone_number` varchar(20) DEFAULT NULL,
  `feedback_messages` longtext,
  `account_id` int(10) DEFAULT NULL,
  `feedback_date` date NOT NULL,
  `consideration_date` date DEFAULT NULL,
  `feedback_status` int(2) NOT NULL,
  `checked_description` longtext,
  `checker_account_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `FK_account_feedback_idx` (`account_id`),
  KEY `FK_feedback_checker_idx` (`checker_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pet_service`
--

DROP TABLE IF EXISTS `pet_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pet_service` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `service_description` varchar(45) NOT NULL,
  `service_price` int(10) DEFAULT NULL,
  `service_duration_from` int(10) NOT NULL,
  `service_duration_to` int(10) NOT NULL,
  `service_picture` longblob,
  PRIMARY KEY (`service_id`),
  UNIQUE KEY `service_name_UNIQUE` (`service_name`),
  UNIQUE KEY `service_description_UNIQUE` (`service_description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pet_service`
--

LOCK TABLES `pet_service` WRITE;
/*!40000 ALTER TABLE `pet_service` DISABLE KEYS */;
INSERT INTO `pet_service` VALUES (111,'Pet Hair Cut','cut your pets hair',250,2,5,NULL),(112,'pet checkup','check you pets medical condition',500,1,2,NULL),(113,'pet sitting','take care of your pet ',300,5,10,NULL),(114,'pet run','take your pet for a run',400,2,2,NULL);
/*!40000 ALTER TABLE `pet_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `role_name_UNIQUE` (`role_name`),
  UNIQUE KEY `description_UNIQUE` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'Admin','Administrates the website.'),(2,'Costumer','People who buy our stuf'),(3,'Service Provider','People who sell our products or services');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_request`
--

DROP TABLE IF EXISTS `service_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_request` (
  `request_id` int(10) NOT NULL,
  `request_name` varchar(45) NOT NULL,
  `start_servicing` date DEFAULT NULL,
  `end_servicing` date DEFAULT NULL,
  `request_status` int(2) unsigned zerofill NOT NULL,
  `service_id` int(10) DEFAULT NULL,
  `account_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`request_id`),
  UNIQUE KEY `request_name_UNIQUE` (`request_name`),
  KEY `FK_account_id_idx` (`account_id`),
  KEY `FK_service_id_idx` (`service_id`),
  CONSTRAINT `FK_account_id` FOREIGN KEY (`account_id`) REFERENCES `user_account` (`account_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_service_id` FOREIGN KEY (`service_id`) REFERENCES `pet_service` (`service_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_request`
--

LOCK TABLES `service_request` WRITE;
/*!40000 ALTER TABLE `service_request` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `adress` longtext NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `status` int(2) unsigned zerofill NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_picture` longblob,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `email_address_UNIQUE` (`email_address`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `FK_user_account_role_idx` (`role_id`),
  CONSTRAINT `FK_user_account_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
INSERT INTO `user_account` VALUES (111,'popsbear','mypass','Here at home','PAPY','DADDY','BABY',01,'babydaddy@gamil.com','1995-02-14','09462513022',1,NULL),(222,'mamabear','herpass','balay','mommy','mother','susy',00,'mianjwdinundia','1993-02-12','12649469849',2,NULL),(333,'babybear','baby','womb','baby','dawb','awdhwu',01,'addwaad484','1999-02-22','3254984619879',3,NULL);
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'webtek-final'
--

--
-- Dumping routines for database 'webtek-final'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-27 11:00:44
