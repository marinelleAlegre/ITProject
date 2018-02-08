-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2018 at 07:20 AM
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
  `clientID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `clientName` varchar(25) NOT NULL,
  `registrationDate` datetime NOT NULL,
  `contactNumber` varchar(11) NOT NULL,
  PRIMARY KEY (`clientID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`clientID`, `clientName`, `registrationDate`, `contactNumber`) VALUES
(0000001, 'Touma Kazusa', '2011-01-10 02:30:30', '09010101010'),
(0000002, 'Rin Tohsaka', '2005-04-05 01:35:24', '09010101011'),
(0000003, 'Taylor Swift', '2010-05-09 01:01:01', '09010101012'),
(0000004, 'Arturia Pendragon', '2013-09-11 05:24:24', '09010101013'),
(0000005, 'Azuma Kazuma', '2015-12-12 12:30:50', '09010101014'),
(0000006, 'Olive Stewart', '2017-08-22 12:25:00', '09874552227'),
(0000007, 'Danial Hill', '2017-04-11 08:28:00', '09127654253'),
(0000008, 'John Ross', '2018-02-05 15:27:00', '09877776654'),
(0000009, 'Spencer Saunders', '2018-02-04 08:28:00', '09332345678'),
(0000010, 'Francesca Matthews', '2018-01-09 14:34:00', '09991238765'),
(0000011, 'Kalle Alaja', '2018-02-02 12:48:00', '09653452349'),
(0000012, 'Josefiina Ahonen', '2018-02-12 13:32:00', '09873451287');

-- --------------------------------------------------------

--
-- Table structure for table `decors`
--

DROP TABLE IF EXISTS `decors`;
CREATE TABLE IF NOT EXISTS `decors` (
  `decorsID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `decorName` varchar(20) NOT NULL,
  `color` varchar(10) NOT NULL,
  `decorImage` mediumblob,
  PRIMARY KEY (`decorsID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decors`
--

INSERT INTO `decors` (`decorsID`, `decorName`, `color`, `decorImage`) VALUES
(0000001, 'Chair Covers', 'black', NULL),
(0000002, 'Drapes', 'maroon', NULL),
(0000003, 'Columns', 'white', NULL),
(0000004, 'Chair Covers', 'blue', NULL),
(0000005, 'Garlands', 'green', NULL),
(0000006, 'Table Runner', 'red', NULL),
(0000007, 'Tapestry', 'aqua', NULL),
(0000008, 'Tapestry', 'yellow', NULL),
(0000009, 'Aisle Runner', 'red', NULL),
(0000010, 'Foil Fringe Curtain', 'yellow', NULL),
(0000011, 'Aisle Runner', 'blue', NULL),
(0000012, 'Foil Fringe Curtain', 'violet', NULL),
(0000013, 'Starburst Decoration', 'gold', NULL),
(0000014, 'Starburst Decoration', 'silver', NULL),
(0000015, 'Tea Light Candles', 'white', NULL),
(0000016, 'Foil Fringe Curtain', 'silver', NULL),
(0000017, 'Balloons', 'aqua', NULL),
(0000018, 'Balloons', 'red', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

DROP TABLE IF EXISTS `designs`;
CREATE TABLE IF NOT EXISTS `designs` (
  `designID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `designName` varchar(35) NOT NULL,
  `color` varchar(10) NOT NULL,
  `designImage` mediumblob,
  PRIMARY KEY (`designID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`designID`, `designName`, `color`, `designImage`) VALUES
(0000001, 'Soiree Gown #1', 'Magenta', NULL),
(0000002, 'Soiree Gown #2', 'Magnolia', NULL),
(0000003, 'JS Prom Dress #1', 'Gold', NULL),
(0000004, 'JS Prom Dress #2', 'White', NULL),
(0000005, 'Wedding Dress #1', 'Black', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `employeeName` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `photo` mediumblob,
  `password` varchar(15) NOT NULL,
  `employeeContactNumber` varchar(11) NOT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employeeID`, `employeeName`, `address`, `email`, `photo`, `password`, `employeeContactNumber`) VALUES
(0001, 'Cristoforo Eryn', '#1 ABC Street Baguio City', 'eryn@yahoo.com', NULL, 'pwd', '09128623549'),
(0002, 'Aina Andreasson', '#98 BNM Subd., Baguio City', 'aiii@yahoo.com', NULL, 'pwd', '09167724356'),
(0003, 'Alexsandra Nordin', '#123 DEF St., Baguio CIty', 'nordin@yahoo.com', NULL, 'pwd', '09993456789'),
(0004, 'Mia Johansen', '#76 Pico, La Trinidad, Benguet', 'miamia@yahoo.com', NULL, 'pwd', '09782567268'),
(0005, 'Bo Kangas', '#544 TYU St., Baguio CIty', 'kangas@yahoo.com', NULL, 'pwd', '09876697567'),
(0006, 'Daniella Mattsson', '#98 BGR St., La Trinidad, Benguet', 'danmat@yahoo.com', NULL, 'pwd', '09877789082'),
(0007, 'Fehim Lidia', '#56 Km 3, La Trinidad, Benguet', 'fehim@yahoo.com', NULL, 'pwd', '09834562349'),
(0008, 'Aloisa Piccio', '#22 KJY Subd., Baguio City', 'allo@yahoo.com', NULL, 'pwd', '09987765560'),
(0009, 'Jordan Holmgren', '78 Sanitary Camp, Baguio City', 'jord@yahoo.com', NULL, 'pwd', '09876127567'),
(0010, 'Frida Eadwig', '#67 RTH Subd., PLF St., Baguio City', 'eadwig@yahoo.com', NULL, 'pwd', '09982765760'),
(0011, 'Abellona Schou', '#841 TYU St., Baguio CIty', 'abe@yahoo.com', NULL, 'pwd', '09872394287'),
(0012, 'Karita Kemppi', '#34 GYW Subd., PLK St., Baguio City', 'karita@yahoo.com', NULL, 'pwd', '09581165564');

-- --------------------------------------------------------

--
-- Table structure for table `entourage`
--

DROP TABLE IF EXISTS `entourage`;
CREATE TABLE IF NOT EXISTS `entourage` (
  `entourageID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `entourageName` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `shoulder` tinyint(3) UNSIGNED NOT NULL,
  `chest` tinyint(3) UNSIGNED NOT NULL,
  `stomach` tinyint(3) UNSIGNED NOT NULL,
  `waist` tinyint(3) UNSIGNED NOT NULL,
  `armLength` tinyint(3) UNSIGNED NOT NULL,
  `armHole` tinyint(3) UNSIGNED NOT NULL,
  `muscle` tinyint(3) UNSIGNED NOT NULL,
  `pantsLength` tinyint(3) UNSIGNED NOT NULL,
  `baston` tinyint(3) UNSIGNED NOT NULL,
  `designID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  PRIMARY KEY (`entourageID`,`eventID`),
  KEY `eventID` (`eventID`),
  KEY `designID` (`designID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventdecors`
--

DROP TABLE IF EXISTS `eventdecors`;
CREATE TABLE IF NOT EXISTS `eventdecors` (
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `decorID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `quantity` int(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`eventID`,`decorID`),
  KEY `eventID` (`eventID`),
  KEY `decorID` (`decorID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventdesigns`
--

DROP TABLE IF EXISTS `eventdesigns`;
CREATE TABLE IF NOT EXISTS `eventdesigns` (
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `designID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `quantity` int(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`eventID`,`designID`),
  KEY `eventID` (`eventID`),
  KEY `designID` (`designID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `clientID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `celebrantName` varchar(30) NOT NULL,
  `eventDate` date NOT NULL,
  `eventLocation` varchar(40) NOT NULL,
  `eventType` varchar(15) NOT NULL,
  `eventTime` time NOT NULL,
  `motif` varchar(15) NOT NULL,
  `serviceID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `employeeID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `eventStatus` int(11) NOT NULL,
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
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `employeeID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `staffRole` varchar(20) NOT NULL,
  PRIMARY KEY (`eventID`,`employeeID`),
  KEY `eventID` (`eventID`),
  KEY `employeeID` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `expensesID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT,
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `expensesName` varchar(25) NOT NULL,
  `expensesAmount` decimal(10,2) UNSIGNED NOT NULL,
  PRIMARY KEY (`expensesID`,`eventID`),
  KEY `eventID` (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oncallstaff`
--

DROP TABLE IF EXISTS `oncallstaff`;
CREATE TABLE IF NOT EXISTS `oncallstaff` (
  `OCStaffID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `eventID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `staffName` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`OCStaffID`),
  KEY `eventID` (`eventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `paymentID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `clientID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `eventID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `transactionID` int(7) UNSIGNED ZEROFILL DEFAULT NULL,
  `employeeID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`paymentID`),
  KEY `clientID` (`clientID`),
  KEY `eventID` (`eventID`),
  KEY `transactionID` (`transactionID`),
  KEY `employeeID` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`serviceID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `serviceName`, `description`, `status`) VALUES
(0000001, 'Gown Rental', 'Rental of Gowns', 'active'),
(0000002, 'Make-Up Services', 'Availing service of make-up', 'active'),
(0000003, 'Venue Dress Up', 'Dressing up the venue', 'active'),
(0000004, 'Photography Service', 'Availing of photography service', 'inactive'),
(0000005, 'Soiree', 'Make everything fancy', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transactionID` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `clientID` int(7) UNSIGNED ZEROFILL NOT NULL,
  `time` time NOT NULL,
  `dateRented` date NOT NULL,
  `homeAddress` varchar(50) NOT NULL,
  `contactNo` varchar(11) NOT NULL,
  `IDType` varchar(15) NOT NULL,
  `yearAndSection` varchar(15) NOT NULL,
  `school` varchar(35) NOT NULL,
  `serviceID` int(11) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`transactionID`),
  KEY `clientID` (`clientID`),
  KEY `serviceID` (`serviceID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entourage`
--
ALTER TABLE `entourage`
  ADD CONSTRAINT `fk_ent_designID` FOREIGN KEY (`designID`) REFERENCES `designs` (`designID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ent_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `eventdecors`
--
ALTER TABLE `eventdecors`
  ADD CONSTRAINT `fk_evdec_decorID` FOREIGN KEY (`decorID`) REFERENCES `decors` (`decorsID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_evdec_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `eventdesigns`
--
ALTER TABLE `eventdesigns`
  ADD CONSTRAINT `fk_evdes_designID` FOREIGN KEY (`designID`) REFERENCES `designs` (`designID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_evdes_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_ev_clientID` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`),
  ADD CONSTRAINT `fk_ev_employeeID` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`),
  ADD CONSTRAINT `fk_ev_serviceID` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`);

--
-- Constraints for table `eventstaff`
--
ALTER TABLE `eventstaff`
  ADD CONSTRAINT `fk_evsta_employeeID` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`),
  ADD CONSTRAINT `fk_evsta_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `fk_exp_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`) ON UPDATE CASCADE;

--
-- Constraints for table `oncallstaff`
--
ALTER TABLE `oncallstaff`
  ADD CONSTRAINT `fk_ocs_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_pay_clientID` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`),
  ADD CONSTRAINT `fk_pay_employeeID` FOREIGN KEY (`employeeID`) REFERENCES `employees` (`employeeID`),
  ADD CONSTRAINT `fk_pay_eventID` FOREIGN KEY (`eventID`) REFERENCES `events` (`eventID`),
  ADD CONSTRAINT `fk_pay_transactionID` FOREIGN KEY (`transactionID`) REFERENCES `transactions` (`transactionID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `fk_tr_clientID` FOREIGN KEY (`clientID`) REFERENCES `clients` (`clientID`),
  ADD CONSTRAINT `fk_tr_serviceID` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
