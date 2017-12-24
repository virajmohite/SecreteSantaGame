-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 05:45 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ss_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `validsanta_tb`
--

CREATE TABLE `validsanta_tb` (
  `id` int(11) NOT NULL,
  `s_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssof_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `yourSecreteSanta` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssonTimestamp` timestamp NULL DEFAULT NULL,
  `yssTimestamp` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `validsanta_tb`
--

INSERT INTO `validsanta_tb` (`id`, `s_id`, `s_name`, `ssof_name`, `yourSecreteSanta`, `ssonTimestamp`, `yssTimestamp`) VALUES
(1, '9923166183', 'Mr Nilesh Tippe ', NULL, NULL, NULL, NULL),
(2, '8600405350', 'Ms. Neha Kulkarni', NULL, NULL, NULL, NULL),
(3, '8390948448', 'Ms. Pallavi Gavade', NULL, NULL, NULL, NULL),
(4, '9767844484', 'Mr. Prakash Mazire', NULL, NULL, NULL, NULL),
(5, '9960692559', 'Mr. Prashant Ghanekar Sir', NULL, NULL, NULL, NULL),
(6, '7875669611', 'Mr. Nikhil Kunnure', NULL, NULL, NULL, NULL),
(7, '8625969781', 'Ms. Sonam Gudale', NULL, NULL, NULL, NULL),
(8, '8237189060', 'Mr. Sourabh Raorane', NULL, NULL, NULL, NULL),
(9, '9673849047', 'Ms. Sukhada keni', NULL, NULL, NULL, NULL),
(10, '8087216867', 'Mr. Vinayak Pachalag', NULL, NULL, NULL, NULL),
(11, '7219532001', 'Ms. Neha Joshi', NULL, NULL, NULL, NULL),
(12, '7709034317', 'Mr. Hrushikesh', NULL, NULL, NULL, NULL),
(13, '9850089528', 'Mr. Nishad Joshi', NULL, NULL, NULL, NULL),
(14, '9901068890', 'Ms. Pradnya Bhosale', NULL, NULL, NULL, NULL),
(15, '9049498475', 'Mr. Viraj Mohite', NULL, NULL, NULL, NULL),
(16, '9545992988', 'Ms. Bharati Mandekar', NULL, NULL, NULL, NULL),
(17, '9413769432', 'Mr. Khushal Goyal', NULL, NULL, NULL, NULL),
(18, '9765648872', 'Mr. Kiran Yadav', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `validsanta_tb`
--
ALTER TABLE `validsanta_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `validsanta_tb`
--
ALTER TABLE `validsanta_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
