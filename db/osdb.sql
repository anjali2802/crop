-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 09:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcat` (IN `cid` INT)   SELECT * FROM categories WHERE cat_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone_no` varchar(100) DEFAULT NULL,
  `message` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `message`) VALUES
(1, 'Satish', 'Mishra', 'somya@mgm.com', '656565565', 'testing'),
(2, 'Satish', 'Mishra', 'somya@mgm.com', '656565565', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(4, 'Somya', 'Tyagi', 'somya@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(5, 'Rishabh', 'YAdav', 'rishabh.aktu@gmail.com', 'yadavG@123#@', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(6, 'shaurya', 'yadav', 'shaurya.aktu@gmail.com', 'yadavG@123#@', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(7, 'Somya', 'Tyagi', 'somya321@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(8, 'Anjali', 'Singh', 'anjalisingh@gmail.com', 'Anjali@123', '9555232468', 'Noida', 'Noida'),
(9, 'Anjali', 'Singh', 'somya1@mgm.com', 'Somya@1207', '9555232468', 'Noida', 'Noida'),
(10, 'Anjali', 'Singh', 'annu4504@gmail.com', 'Somya@1207', '9555232468', 'Noida', 'Noida');

--
-- Triggers `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info_backup`
--

CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'Somya', 'Tyagi', 'somya@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(2, 'Somya', 'Tyagi', 'somya@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(3, 'Somya', 'Tyagi', 'somya12@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(4, 'Somya', 'Tyagi', 'somya@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(5, 'Rishabh', 'YAdav', 'rishabh.aktu@gmail.com', 'yadavG@123#@', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(6, 'shaurya', 'yadav', 'shaurya.aktu@gmail.com', 'yadavG@123#@', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(7, 'Somya', 'Tyagi', 'somya321@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(8, 'Anjali', 'Singh', 'anjalisingh@gmail.com', 'Anjali@123', '9555232468', 'Noida', 'Noida'),
(9, 'Anjali', 'Singh', 'somya1@mgm.com', 'Somya@1207', '9555232468', 'Noida', 'Noida'),
(10, 'Anjali', 'Singh', 'annu4504@gmail.com', 'Somya@1207', '9555232468', 'Noida', 'Noida'),
(12, 'puneeth', 'Reddy', 'puneethreddy951@gmail.com', '123456789', '9448121558', '123456789', 'sdcjns,djc'),
(14, 'hemanthu', 'reddy', 'hemanthreddy951@gmail.com', '123456788', '6526436723', 's,dc wfjvnvn', 'b efhfhvvbr'),
(15, 'hemu', 'ajhgdg', 'keeru@gmail.com', '346778', '536487276', ',mdnbca', 'asdmhmhvbv'),
(16, 'venky', 'vs', 'venkey@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(19, 'abhishek', 'bs', 'abhishekbs@gmail.com', 'asdcsdcc', '9871236534', 'bangalore', 'hassan'),
(20, 'pramod', 'vh', 'pramod@gmail.com', '124335353', '9767645653', 'ksbdfcdf', 'sjrgrevgsib'),
(21, 'prajval', 'mcta', 'prajvalmcta@gmail.com', '1234545662', '202-555-01', 'bangalore', 'kumbalagodu'),
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(23, 'hemanth', 'reddy', 'hemanth@gmail.com', 'Puneeth@123', '9876543234', 'Bangalore', 'Kumbalagodu'),
(24, 'newuser', 'user', 'newuser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu'),
(25, 'otheruser', 'user', 'otheruser@gmail.com', 'puneeth@123', '9535688928', 'Bangalore', 'Kumbalagodu'),
(26, 'Somya', 'Tyagi', 'somya@mgm.com', 'Somya@1207', '9958341507', 'H 128 Lajpatnagar Ghaziabad UP 201005', 'Ghaziabad'),
(27, 'rishabh ', 'yadav', 'somya1@mgm.com', 'Somya@123', '9958341507', 'D 128, Lajpatnagar, Sahibabad , Ghaziabad', 'Ghaziabad'),
(28, 'rishabhyadav', 'yadav', 'rishabh.aktu@gmail.com', 'yadavG@123#@', '8076707151', 'D 128, Lajpatnagar, Ghaziabad UP', 'Ghaziabad'),
(29, 'rishabhyadav', 'yadav', 'rishabh.aktu1@gmail.com', 'yadavG@123#@', '8076707151', 'D 128, Lajpatnagar, Ghaziabad UP', 'Ghaziabad'),
(30, 'rishabhyadav', 'yadav', 'rishabh.aktu11@gmail.com', 'yadavG@123#@', '8076707151', 'D 128, Lajpatnagar, Ghaziabad UP', 'Ghaziabad'),
(31, 'rishabhyadav', 'yadav', 'rishabh.aktu111@gmail.com', 'yadavG@123#@', '8076707151', 'D 128, Lajpatnagar, Ghaziabad UP', 'Ghaziabad'),
(32, 'Somya', 'Tyagi', 'somya112@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(33, 'Somya', 'Tyagi', 'somyatyagi@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(34, 'Somya', 'Tyagi', 'somyatyagi@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(35, 'Somya', 'Tyagi', 'somya123@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad'),
(36, 'Somya', 'Tyagi', 'somya123@mgm.com', 'Somya@1207', '9958341507', 'D 128 Lajpat Nagar Ghaziabad UP 201005', 'Ghaziabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
