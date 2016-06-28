-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sfbikerescue
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Current Database: `sfbikerescue`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sfbikerescue` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sfbikerescue`;

--
-- Table structure for table `bikesforsale`
--

DROP TABLE IF EXISTS `bikesforsale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bikesforsale` (
  `bikeid` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `bikedesc` varchar(50) NOT NULL,
  `biketype` varchar(20) DEFAULT NULL,
  `biketext` mediumtext,
  `bikeprice` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`bikeid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bikesforsale`
--

LOCK TABLES `bikesforsale` WRITE;
/*!40000 ALTER TABLE `bikesforsale` DISABLE KEYS */;
INSERT INTO `bikesforsale` VALUES (4,'Bridgestone MB2 Red Steel 21inch','Mountain','Bridgestone MB2 Red and White Steel 21inch Frame<br>Rock Shox Suspension Fork<br>Deore LX 7speed Drivetrain<br>Triple Crankset<br>Shimano Friction Shifters<br>Shimano Cantilever Brakes<br>Deore LX 26x2 Wheelset<br>WTB Saddle<br>Topeak Rack',200.00),(5,'Fuji Crossroads Tan 23 inch','Hybrid','Fuji Crossroads Tan<br>23inch Steel Frame and Fork<br>Shimano 7 Speed Drivetrain<br>Single Crankset<br>Shimano Grip Shifter<br>Promax V-Brakes and Levers<br>700x35c Wheelset<br>Fuji Comfort Saddle<br>Adjustable Stem<br>Kickstand',80.00),(6,'Schwinn Sierra 22 inch Blue','Mountain','Schwinn Sierra Blue<br>22inch Steel Frame<br>Suspension Fork<br>SRAM 8 speed Drivetrain<br>Triple Crankset<br>V Brakes<br>Promax Levers<br>22inch<br>Adjustable Stem<br>SRAM Trigger Shifters<br>26x2 Wheelset<br>Suspension Seatpost<br>C9 Cloud Saddle<br>Bontrager Grips',80.00),(7,'Dynasty ATB 930se Red 19in','Mountain','Dynasty ATB 930se Red<br>19in Steel Frame and Fork<br>Triple Crankset<br>Cantilever Brakes<br>Friction Shifters<br>26x2 Wheelset<br>Rack<br>Comfort Saddle',80.00),(8,'Specialized Hardrock 15in Gray','Mountain','15in Steel Frame and Fork<br>Shimano 7 Speed Drivetrain<br>Triple Crankset<br>Trigger Shifters<br>V Brakes<br>26x2 Wheelset<br>Kickstand<br>Serfas Saddle',80.00),(9,'Giant Sedona DX Blue 19in','Mountain','19in Aluminum Frame and Fork<br>Shimano 8 Speed Drivetrain<br>Triple Crankset<br>Grip Shifters<br>V Brakes<br>26x2 Wheelset<br>Adjustable Stem<br>Next Saddle<br>Suspension Seatpost',80.00),(10,'Schwinn Mesa Runner pre-99 23in','Mountain','23in Steel Frame and Fork<br>Shimano 7 Speed Drivetrain<br>Double Crankset<br>Friction Shifters<br>Cantilever Brakes<br>26x2 Wheelset',80.00),(11,'Asahi Incline Steel Hybrid 23in','Hybrid','23in Steel Frame and Fork<br>Shimano Exage 6 Speed Drivetrain<br>Triple Crankset<br>Friction Shifters<br>Cantilever Brakes<br>26x1.5 Slick Tires',100.00),(12,'KHS Brentwood 23in Black','Hybrid','23in TIG Welded Frame and Fork<br>Shimano 7 Speed Drivetrain<br>Triple Crankset<br>Grip Shifters<br>V Brakes<br>700x38 Wheelset',100.00),(13,'Trek 700 Green Multi-Track','Hybrid','19in Steel Frame and Fork<br>Shimano 7 Speed Drivetrain<br>Triple Crankset<br>Rapidrise Rear Deraileur<br>Trigger Shifters<br>V Brakes<br>700x32 Wheelset',100.00),(14,'Trek 4900 Red Mountain','Mountain','21in Aluminum Frame<br>Deore 8 Speed Drivetrain<br>Shimano Triple Crankset<br>Shimano Trigger Shifters<br>V Brakes<br>29x2 QR Wheelset<br>Bontrager Saddle',100.00),(15,'Classic Marin Madrone Trail','Mountain','15in Steel Frame and Fork<br>Shimano 5 Speed Drivetrain<br>Triple CranksetFriction Shifters<br>Cantiliever Brakes<br>29x2 Slick Tires<br>Cruiser Gel Saddle<br>Bottle Cage',100.00),(16,'Huffy Gray Medium Cruiser','Cruiser','Steel Frame and ForkSingle Speed<br>Coaster Brake<br>29x2 Wheelset<br>Easy Rider Gel Saddle<br>Suspension Seatpost',30.00),(17,'Diamondback Voyager 17in Green','Mountain','Aluminum Frame and Fork<br>Shimano 8 speed drivetrain<br>Triple Crankset<br>Trigger Shifters<br>V Brakes<br>29x2 Wheelset<br>Jamis Saddle<br>Kickstand',80.00),(19,'Fuji Crosstown White 15in','Urban','15in Steel Frame and Fork<br>Shimano 7 speed drivetrain<br>Single Crankset<br>Grip Shifters<br>V Brakes<br>700x35 Wheelset<br>Fuji Saddle',80.00),(20,'Motiv Smoothie 17in','Urban','17 Aluminum Frame and Fork<br>Shimano 7 speed drivetrain<br>Triple Crankset<br>Grip Shifters<br>V Brakes<br>26x2 Baloon Tires<br>Suspension Seatpost<br>Comfort Saddle',80.00),(21,'Raleigh Sprite Vintage White','Urban','15 Steel Frame and Fork<br>Suntour 5 speed drivetrain<br>Suntour Double Crankset<br>Suntoru Friction Shifters<br>Side Pull U Brakes<br>27in Wheelset<br>Rack<br>Kickstand',200.00),(22,'Huffy Green Medium Cruiser','Cruiser','Medium Steel Frame and ForkSingle Speed<br>Single Crankset<br>Coaster Brake<br>Original Green Decals<br>Cruiser Gel Saddle<br>26x2 Baloon Tires<br>Kickstand',30.00),(23,'Fuji Del Rey Cruiser','Cruiser','Alloy 42cm Frame and ForkShimano Coasting 3-Speed Internal<br>Coaster Brake<br>Adjustable Stem<br>26x2 Wheelset<br>Gel Saddle<br>Kickstand',75.00);
/*!40000 ALTER TABLE `bikesforsale` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-27 19:25:33
