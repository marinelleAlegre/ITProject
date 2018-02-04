-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 01:47 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `status` enum('Done','Not yet done') NOT NULL,
  `time` time(4) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `serviceprovider_id` int(11) NOT NULL,
  `servicerequest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chatDate` date NOT NULL,
  `content` varchar(45) NOT NULL,
  `serviceprovider_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customerLastname` varchar(45) NOT NULL,
  `customerFirstname` varchar(50) NOT NULL,
  `req_status` enum('Inactive','Active') NOT NULL DEFAULT 'Inactive',
  `status` enum('Pending','Accepted','Declined') NOT NULL DEFAULT 'Pending',
  `dateOfRegistration` date NOT NULL,
  `pet_type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `custreq`
--

CREATE TABLE `custreq` (
  `customer_id` int(11) NOT NULL,
  `servicerequest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time(4) NOT NULL,
  `total_amount` int(6) NOT NULL,
  `availService_desc` varchar(45) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `product_description` varchar(45) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register_id` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `req_status` enum('Inactive','Active') NOT NULL DEFAULT 'Inactive',
  `status` enum('Pending','Accepted','Declined') NOT NULL,
  `typeOfuser` enum('Customer','Service Provider') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `lastName`, `firstName`, `username`, `password`, `email`, `age`, `gender`, `address`, `contactNumber`, `req_status`, `status`, `typeOfuser`) VALUES
(102, 'Alegre', 'Marinelle', 'marsi', '0dd2d2bfa0038175217810b72b20c283', 'alegre.marinelle@gmail.com', 19, 'F', '349 Balacbac Baguio City', 9234343, 'Active', 'Accepted', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `servicecategory`
--

CREATE TABLE `servicecategory` (
  `servicecategory_id` int(11) NOT NULL,
  `services` enum('pawmed','pawgroom') NOT NULL,
  `customer_id` int(11) NOT NULL,
  `serviceprovider_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicecategory`
--

INSERT INTO `servicecategory` (`servicecategory_id`, `services`, `customer_id`, `serviceprovider_id`) VALUES
(1, 'pawmed', 34, 21),
(2, 'pawgroom', 35, 19),
(3, 'pawmed', 35, 21);

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `serviceprovider_id` int(11) NOT NULL,
  `serviceproviderLastname` varchar(45) NOT NULL,
  `serviceproviderFirstname` varchar(50) NOT NULL,
  `expertise` varchar(45) NOT NULL,
  `dateOfRegistration` date NOT NULL,
  `workedStarted` date NOT NULL,
  `status` enum('Accepted','Declined','Pending') NOT NULL DEFAULT 'Pending',
  `req_status` enum('Active','Inactive') NOT NULL,
  `registration_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `servicerequest_id` int(11) NOT NULL,
  `servicereq_status` enum('Accepted','Declined','Pending') NOT NULL DEFAULT 'Pending',
  `service_description` varchar(45) NOT NULL,
  `service_price` int(6) NOT NULL,
  `servicereqdate` date NOT NULL,
  `servicereq_customerId` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`servicerequest_id`, `servicereq_status`, `service_description`, `service_price`, `servicereqdate`, `servicereq_customerId`) VALUES
(1, 'Pending', 'Checkup', 1000, '2017-05-25', '34'),
(2, 'Pending', 'Groom', 350, '2017-05-26', '35'),
(3, 'Pending', 'Checkup', 1000, '2017-05-26', '35');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `invoice_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `history` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD UNIQUE KEY `appointment_id_UNIQUE` (`appointment_id`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`customer_id`),
  ADD UNIQUE KEY `serviceprovider_id_UNIQUE` (`serviceprovider_id`),
  ADD UNIQUE KEY `servicerequest_id_UNIQUE` (`servicerequest_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD UNIQUE KEY `serviceprovider_id_UNIQUE` (`serviceprovider_id`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`customer_id`),
  ADD UNIQUE KEY `chat_id_UNIQUE` (`chat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`customer_id`);

--
-- Indexes for table `custreq`
--
ALTER TABLE `custreq`
  ADD KEY `customer_id_idx` (`customer_id`),
  ADD KEY `servicerequest_id_idx` (`servicerequest_id`),
  ADD KEY `servicerequest_id_NOT NULL` (`servicerequest_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `customer_id_UNIQUE` (`customer_id`),
  ADD UNIQUE KEY `payment_id_UNIQUE` (`payment_id`),
  ADD UNIQUE KEY `invoice_id_UNIQUE` (`invoice_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD UNIQUE KEY `products_id_UNIQUE` (`products_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `register_id_UNIQUE` (`register_id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `servicecategory`
--
ALTER TABLE `servicecategory`
  ADD PRIMARY KEY (`servicecategory_id`),
  ADD UNIQUE KEY `servicecategory_id_UNIQUE` (`servicecategory_id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`serviceprovider_id`),
  ADD UNIQUE KEY `serviceprovider_id_UNIQUE` (`serviceprovider_id`),
  ADD UNIQUE KEY `registration_id_UNIQUE` (`registration_id`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`servicerequest_id`),
  ADD UNIQUE KEY `servicerequest_id_UNIQUE` (`servicerequest_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`invoice_id`),
  ADD UNIQUE KEY `invoice_id_UNIQUE` (`invoice_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `servicecategory`
--
ALTER TABLE `servicecategory`
  MODIFY `servicecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `serviceprovider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `servicerequest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `custreq`
--
ALTER TABLE `custreq`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `servicerequest_id` FOREIGN KEY (`servicerequest_id`) REFERENCES `servicerequest` (`servicerequest_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
