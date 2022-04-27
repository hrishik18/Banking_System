CREATE DATABASE  IF NOT EXISTS `bank` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bank`;
-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: bank
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `cust_id` int NOT NULL COMMENT 'TRIAL',
  `cust_acc_id` int NOT NULL COMMENT 'TRIAL',
  `f_name` varchar(255) NOT NULL COMMENT 'TRIAL',
  `m_name` varchar(255) DEFAULT NULL COMMENT 'TRIAL',
  `l_name` varchar(255) NOT NULL COMMENT 'TRIAL',
  `username` varchar(255) NOT NULL COMMENT 'TRIAL',
  `password` varchar(255) NOT NULL COMMENT 'TRIAL',
  `dob` date NOT NULL COMMENT 'TRIAL',
  `contact` int NOT NULL COMMENT 'TRIAL',
  `aadhar_num` int NOT NULL COMMENT 'TRIAL',
  `pan_num` int NOT NULL COMMENT 'TRIAL',
  `city` varchar(255) DEFAULT NULL COMMENT 'TRIAL',
  `email` varchar(255) NOT NULL COMMENT 'TRIAL',
  `state` varchar(255) DEFAULT NULL COMMENT 'TRIAL',
  `trial807` char(1) DEFAULT NULL COMMENT 'TRIAL',
  PRIMARY KEY (`cust_id`),
  UNIQUE KEY `customer_cust_acc_id_key` (`cust_acc_id`),
  UNIQUE KEY `customer_username_key` (`username`),
  UNIQUE KEY `customer_password_key` (`password`),
  UNIQUE KEY `customer_contact_key` (`contact`),
  UNIQUE KEY `customer_aadhar_num_key` (`aadhar_num`),
  UNIQUE KEY `customer_pan_num_key` (`pan_num`),
  UNIQUE KEY `customer_email_key` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='TRIAL';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-23 20:31:08
