-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 01:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` varchar(12) NOT NULL,
  `type` varchar(10) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `os` varchar(10) NOT NULL,
  `pan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `type`, `brand`, `os`, `pan`) VALUES
('APP121', 'Tablet', 'Apple', 'IOS', 'BLXPG4819M'),
('BHF8893', 'Laptop', 'Dell', 'Windows', 'CLTPL8008M'),
('BPZ3210', 'Laptop', 'HP', 'UNIX', 'BLXPG4819M'),
('LN023', 'CellPhone', 'Lenovo', 'Android', NULL),
('LNV', 'Laptop', 'Lenovo', 'Linux', NULL),
('MAC123', 'Laptop', 'Apple', 'Mac OS', NULL),
('OPP54', 'CellPhone', 'Oppo', 'Android', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `pan` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `joining` datetime NOT NULL DEFAULT current_timestamp(),
  `resigning` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`pan`, `name`, `role`, `mail`, `mobile`, `joining`, `resigning`) VALUES
('ABCPL9999M', 'Mayank Aggrawal', 'Manager', 'aggrawalmayank1993@gmail.com', 2345677777, '2022-06-20 13:47:58', NULL),
('ALWPG5809L', 'Yash Sharma', 'Developer', 'yashprakashsharma2000@gmail.co', 7726964216, '2022-05-16 10:59:18', NULL),
('BGRPL1466M', 'Yagvendra Singh', 'Designer', 'singhyagvendra144@gmail.com', 9828361611, '2022-06-16 18:04:17', NULL),
('BLXPG4819M', 'Shankar Singh', 'Developer', 'shankar.khudia@gmail.com', 9929212933, '2022-05-16 10:32:03', NULL),
('CLTPL8008M', 'Ravinder Bhati', 'Designer', 'ravinderbhati@gmail.com', 9358895905, '2022-06-17 16:59:12', NULL),
('XYZPL3456M', 'Prateek Mewara', 'Designer', 'mewaraprateek@gmail.com', 9413551501, '2022-06-17 16:40:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` varchar(12) NOT NULL,
  `action` varchar(10) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`pan`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
