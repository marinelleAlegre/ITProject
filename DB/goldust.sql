-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2018 at 03:36 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldust`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `clientID` int(7) NOT NULL AUTO_INCREMENT,
  `clientName` int(25) NOT NULL,
  `registrationDate` datetime NOT NULL,
  `contactNumber` varchar(11) NOT NULL,
  PRIMARY KEY (`clientID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `decors`
--

DROP TABLE IF EXISTS `decors`;
CREATE TABLE IF NOT EXISTS `decors` (
  `decorsID` int(7) NOT NULL AUTO_INCREMENT,
  `decorName` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `decorImage` mediumblob NOT NULL,
  PRIMARY KEY (`decorsID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

DROP TABLE IF EXISTS `designs`;
CREATE TABLE IF NOT EXISTS `designs` (
  `designID` int(7) NOT NULL AUTO_INCREMENT,
  `designName` int(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `designImage` mediumblob NOT NULL,
  PRIMARY KEY (`designID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` int(4) NOT NULL AUTO_INCREMENT,
  `employeeName` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `role` varchar(20) NOT NULL,
  `photo` mediumblob NOT NULL,
  `password` varchar(15) NOT NULL,
  `employeeContactNumber` varchar(11) NOT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entourage`
--

DROP TABLE IF EXISTS `entourage`;
CREATE TABLE IF NOT EXISTS `entourage` (
  `eventID` int(7) NOT NULL,
  `entourageID` int(7) NOT NULL AUTO_INCREMENT,
  `entourageName` varchar(25) NOT NULL,
  `role` varchar(15) NOT NULL,
  `shoulder` tinyint(4) NOT NULL,
  `chest` tinyint(4) NOT NULL,
  `stomach` tinyint(4) NOT NULL,
  `waist` tinyint(4) NOT NULL,
  `armLength` tinyint(4) NOT NULL,
  `armHole` tinyint(4) NOT NULL,
  `muscle` tinyint(4) NOT NULL,
  `pantsLength` tinyint(4) NOT NULL,
  `baston` tinyint(4) NOT NULL,
  `designID` int(7) NOT NULL,
  PRIMARY KEY (`entourageID`,`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventdecors`
--

DROP TABLE IF EXISTS `eventdecors`;
CREATE TABLE IF NOT EXISTS `eventdecors` (
  `eventID` int(7) NOT NULL,
  `decorID` int(7) NOT NULL,
  `quantity` int(4) NOT NULL,
  PRIMARY KEY (`eventID`,`decorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventdesigns`
--

DROP TABLE IF EXISTS `eventdesigns`;
CREATE TABLE IF NOT EXISTS `eventdesigns` (
  `eventID` int(7) NOT NULL,
  `designID` int(7) NOT NULL,
  `quantity` int(4) NOT NULL,
  PRIMARY KEY (`eventID`,`designID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(7) NOT NULL AUTO_INCREMENT,
  `clientID` int(7) NOT NULL,
  `celebrantName` int(25) NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(40) NOT NULL,
  `eventType` varchar(15) NOT NULL,
  `eventTime` time NOT NULL,
  `motif` varchar(15) NOT NULL,
  `serviceID` int(7) DEFAULT NULL,
  `employeeID` int(4) NOT NULL,
  `totalAmount` decimal(10,0) NOT NULL,
  `eventStatus` varchar(10) NOT NULL,
  PRIMARY KEY (`eventID`),
  KEY `clientID` (`clientID`),
  KEY `employeeID` (`employeeID`),
  KEY `serviceID` (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventstaff`
--

DROP TABLE IF EXISTS `eventstaff`;
CREATE TABLE IF NOT EXISTS `eventstaff` (
  `eventID` int(7) NOT NULL,
  `employeeID` int(4) NOT NULL,
  `staffRole` varchar(20) NOT NULL,
  PRIMARY KEY (`eventID`,`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `eventID` int(7) NOT NULL,
  `expensesID` int(7) NOT NULL,
  `expensesName` varchar(15) NOT NULL,
  `expensesAmount` decimal(10,0) NOT NULL,
  PRIMARY KEY (`eventID`,`expensesID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `paymentID` int(7) NOT NULL AUTO_INCREMENT,
  `clientID` int(7) NOT NULL,
  `eventID` int(7) NOT NULL,
  `transactionID` int(7) NOT NULL,
  `employeeID` int(4) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceID` int(7) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(15) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transactionID` int(7) NOT NULL AUTO_INCREMENT,
  `clientID` int(7) NOT NULL,
  `time` int(11) NOT NULL,
  `dateRented` int(11) NOT NULL,
  `homeAddress` int(11) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `IDType` int(11) NOT NULL,
  `yearAndSection` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `serviceID` int(7) NOT NULL,
  PRIMARY KEY (`transactionID`),
  KEY `clientID` (`clientID`),
  KEY `serviceID` (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_ev_client_id` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ev_employee_id` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`),
  ADD CONSTRAINT `fk_ev_service_id` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_tr_client_id` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`),
  ADD CONSTRAINT `fk_tr_service_id` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
