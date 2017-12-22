-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 06:16 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtek-final`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `ranking` int(2) DEFAULT NULL,
  `contacting_phone_number` varchar(20) DEFAULT NULL,
  `feedback_messages` longtext,
  `feedback_date` date NOT NULL,
  `consideration_date` date DEFAULT NULL,
  `feedback_status` int(2) NOT NULL,
  `checked_description` longtext,
  `request_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `ranking`, `contacting_phone_number`, `feedback_messages`, `feedback_date`, `consideration_date`, `feedback_status`, `checked_description`, `request_id`) VALUES
(1, 5, '09062652263', 'The service was great, Thank You', '2017-03-31', NULL, 1, NULL, 8),
(2, 1, '09062652216', 'Good job', '2017-04-01', NULL, 1, NULL, 4),
(3, 7, '09062652251', 'My dog is now able to eat, thank you.', '2017-04-12', NULL, 1, NULL, 6),
(4, 4, '09062652210', 'Great Work Guys', '2017-04-02', NULL, 1, NULL, 5),
(5, 4, '09062652238', 'My dog is now so lively thank to you guys', '2017-04-14', NULL, 1, NULL, 2),
(6, 9, '09062652288', 'Good work boys', '2017-04-02', NULL, 1, NULL, 3),
(7, 2, '09062652224', 'Thank you very much for taking care of my dog', '2017-04-03', NULL, 1, NULL, 9),
(8, 4, '09062652221', 'Great Job', '2017-04-06', NULL, 1, NULL, 1),
(9, 7, '09062652283', 'Magnificent work, thank you', '2017-04-06', NULL, 1, NULL, 10),
(10, 8, '09062652280', 'Thanks', '2017-04-13', NULL, 1, NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pet_service`
--

CREATE TABLE `pet_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `service_description` varchar(45) NOT NULL,
  `service_price` int(10) DEFAULT NULL,
  `service_picture` longblob,
  `service_hours` int(4) NOT NULL,
  `sp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet_service`
--

INSERT INTO `pet_service` (`service_id`, `service_name`, `service_description`, `service_price`, `service_picture`, `service_hours`, `sp_id`) VALUES
(1, 'Grooming', 'Hair cut, shower, nail trim and etc.', 142, NULL, 1, 15),
(2, 'Walking', 'Having a hard time keeping up with your pets ', 238, NULL, 1, 13),
(3, 'Vacination', 'Anti rabies..', 176, NULL, 1, 12),
(4, 'Pet Sitting', 'While you are away let us visit your cat or s', 127, NULL, 1, 14),
(5, 'Overnight Visits', '"Almost Overnight" Pet Sitting service provid', 399, NULL, 1, 15),
(6, 'Training', 'Trains your pet tricks like fetch, behave and', 187, NULL, 1, 12),
(7, 'Dog Boarding', 'Does your dog need a cozy, friendly home to s', 258, NULL, 1, 13),
(8, 'Subcutaneous Shots and Fluids', 'Like us, many pets require prescribed medicat', 362, NULL, 1, 12),
(9, 'Pet Taxi', 'When your pet has errands of its own to run, ', 377, NULL, 1, 14),
(10, 'Group Off-Leash Adventures', 'While you are stuck at work let your dog go o', 336, NULL, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `description`) VALUES
(1, 'customer', 'Customer role with limited access right'),
(2, 'service provider', 'service provider role with servicing right'),
(3, 'admin', 'admin role with admin access right');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `request_id` int(11) NOT NULL,
  `request_date` date DEFAULT NULL,
  `start_servicing` date DEFAULT NULL,
  `end_servicing` date DEFAULT NULL,
  `request_status` int(2) UNSIGNED ZEROFILL NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `sp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`request_id`, `request_date`, `start_servicing`, `end_servicing`, `request_status`, `service_id`, `account_id`, `sp_id`) VALUES
(1, NULL, '2017-04-03', '2017-04-18', 01, 3, 2, 12),
(2, NULL, '2017-04-10', '2017-04-19', 01, 2, 2, 13),
(3, NULL, '2017-04-03', '2017-04-18', 01, 2, 9, 14),
(4, NULL, '2017-04-13', '2017-04-18', 01, 8, 10, 15),
(5, NULL, '2017-04-04', '2017-04-22', 01, 7, 10, 15),
(6, NULL, '2017-04-09', '2017-04-22', 01, 2, 6, 14),
(7, NULL, '2017-04-06', '2017-04-16', 01, 9, 6, 13),
(8, NULL, '2017-03-31', '2017-04-19', 01, 7, 3, 15),
(9, NULL, '2017-04-08', '2017-04-17', 01, 7, 8, 12),
(10, NULL, '2017-03-31', '2017-04-16', 01, 6, 1, 13),
(11, NULL, NULL, NULL, 01, 9, 11, 14),
(12, NULL, NULL, NULL, 01, 4, 11, 12),
(13, NULL, NULL, NULL, 01, 10, 11, 15),
(14, NULL, NULL, NULL, 01, 1, 11, 15),
(15, NULL, NULL, NULL, 01, 4, 11, 12),
(16, NULL, NULL, NULL, 01, 10, 11, 13),
(17, NULL, NULL, NULL, 01, 1, 11, 14),
(18, NULL, NULL, NULL, 01, 4, 11, 12),
(19, NULL, NULL, NULL, 01, 10, 11, 15),
(20, NULL, NULL, NULL, 01, 8, 11, 14),
(21, NULL, NULL, NULL, 01, 3, 11, 13),
(22, NULL, NULL, NULL, 01, 2, 11, 12),
(23, NULL, NULL, NULL, 01, 8, 11, 15),
(24, NULL, NULL, NULL, 01, 3, 11, 13),
(25, NULL, NULL, NULL, 01, 2, 11, 14),
(26, NULL, NULL, NULL, 01, 6, 11, 12),
(27, NULL, NULL, NULL, 01, 3, 11, 15);

-- --------------------------------------------------------

--
-- Table structure for table `sp_profile`
--

CREATE TABLE `sp_profile` (
  `account_id` int(11) NOT NULL,
  `sp_profile_id` int(11) NOT NULL,
  `services_offered` varchar(255) DEFAULT NULL,
  `pet_specialization` varchar(255) DEFAULT NULL,
  `self_introduction` varchar(255) DEFAULT NULL,
  `years_experience` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `account_id` int(11) NOT NULL,
  `username` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `middle_name` varchar(45) DEFAULT NULL,
  `status` int(2) UNSIGNED ZEROFILL NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `user_picture` longblob,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`account_id`, `username`, `password`, `address`, `first_name`, `last_name`, `middle_name`, `status`, `email_address`, `birthday`, `phone_number`, `user_picture`, `role_id`) VALUES
(1, 'john123', '123', '#1 liwanag Baguio City', 'Jonathan', 'Francisco', 'Mandy', 01, '1@gmail.com', '2017-04-25', '09062354522', NULL, 1),
(2, 'jack23', '123', '#2 upper Baguio City', 'Matky', 'Siano', 'Porde', 01, '2@gmail.com', '2017-04-25', '09062354590', NULL, 1),
(3, 'lianne52', '123', '#3 lower Baguio City', 'Nathan', 'Neil', 'Vargas', 01, '3@gmail.com', '2017-04-25', '09062354577', NULL, 1),
(4, 'jason65', '123', '#4 middle Baguio CIty', 'Jason', 'Martin', 'Pablo', 01, '4@gmail.com', '2017-04-25', '09062354553', NULL, 1),
(5, 'melody14', '123', '#5 gilid Baguio City', 'Melody', 'Fernandez', 'Padla', 01, '5@gmail.com', '2017-04-25', '09062354518', NULL, 1),
(6, 'alex74', '123', '#6 gitna Baguio City', 'Alexandra', 'Dela Cruz', 'Curpoz', 01, '6@gmail.com', '2017-04-25', '09062354584', NULL, 1),
(7, 'reuel95', '123', '#7 kanan Baguio City', 'Reuela', 'Martiniz', 'Cortizano', 01, '7@gmail.com', '2017-04-25', '09062354525', NULL, 1),
(8, 'bianca58', '123', '#8 kaliwa Baguio City', 'Padpad', 'Catherine', 'Bianca', 01, '8@gmail.com', '2017-04-25', '09062354531', NULL, 1),
(9, 'holly32', '123', '#91 marcus Baguio City', 'Manto', 'Corque', 'Horly', 01, '9@gmail.com', '2017-04-25', '09062354593', NULL, 1),
(10, 'may45', '123', '#92 marcus high Baguio City', 'Marko', 'Santos', 'Satal', 01, '10@gmail.com', '2017-04-25', '09062354549', NULL, 1),
(11, 'mehdi', '123', 'baguio', 'Mehdi', 'Afsari', '', 02, 'mehdi@mail.com', '1986-07-29', '09062658383', '', 1),
(12, 'sp1', 'sp', 'baguio', 'Johny', 'Cruzal', 'Mai', 02, 'sp1@gmail.com', '1991-02-10', '09171234512', '', 2),
(13, 'sp2', 'sp', 'baguio', 'Marko', 'Prada', 'Curabez', 02, 'sp2@gmail.com', '1992-01-10', '09171234513', '', 2),
(14, 'sp3', 'sp', 'baguio', 'Samuel', 'Maritnez', 'Batom', 02, 'sp3@gmail.com', '2000-01-10', '09171234556', '', 2),
(15, 'sp4', 'sp', 'baguio', 'SerVere', 'Proder', 'Sap', 02, 'sp4@gmail.com', '1998-01-10', '09171234590', '', 2),
(16, 'admin', 'admin', 'baguio', 'Mon', 'Dela', 'Joel', 02, 'mon@gmail.com', '1997-12-19', '09171234561', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `fk_request_id_idx` (`request_id`);

--
-- Indexes for table `pet_service`
--
ALTER TABLE `pet_service`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `service_name_UNIQUE` (`service_name`),
  ADD UNIQUE KEY `service_description_UNIQUE` (`service_description`),
  ADD KEY `FK_SP_idx` (`sp_id`),
  ADD KEY `FK_spid_idx` (`sp_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name_UNIQUE` (`role_name`),
  ADD UNIQUE KEY `description_UNIQUE` (`description`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `FK_user_account_idx` (`account_id`),
  ADD KEY `FK_sp_id` (`sp_id`),
  ADD KEY `fk_pet_service_idx` (`service_id`);

--
-- Indexes for table `sp_profile`
--
ALTER TABLE `sp_profile`
  ADD PRIMARY KEY (`account_id`,`sp_profile_id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `email_address_UNIQUE` (`email_address`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD KEY `FK_user_account_role_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_request_id` FOREIGN KEY (`request_id`) REFERENCES `service_request` (`request_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pet_service`
--
ALTER TABLE `pet_service`
  ADD CONSTRAINT `FK_spid` FOREIGN KEY (`sp_id`) REFERENCES `user_account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_request`
--
ALTER TABLE `service_request`
  ADD CONSTRAINT `FK_sp_id` FOREIGN KEY (`sp_id`) REFERENCES `user_account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sp_profile`
--
ALTER TABLE `sp_profile`
  ADD CONSTRAINT `sp_key` FOREIGN KEY (`account_id`) REFERENCES `user_account` (`account_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_account`
--
ALTER TABLE `user_account`
  ADD CONSTRAINT `FK_user_account_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
