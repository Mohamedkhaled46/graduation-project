-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:08 PM
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
-- Database: `eyecell`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sectorid` int(11) NOT NULL,
  `sectornumber` int(11) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'pending',
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `userid`, `sectorid`, `sectornumber`, `status`, `date`) VALUES
(15, 159159159, 546, 2, 'pending', '2022-05-23 15:50:34'),
(16, 753753753, 21, 2, 'pending', '2022-05-23 19:22:19'),
(17, 753753753, 21, 5, 'pending', '2022-05-23 19:23:04'),
(18, 852852852, 21, 3, 'pending', '2022-05-23 21:03:22'),
(19, 963963963, 15, 9, 'pending', '2022-05-23 21:16:36'),
(20, 4617, 21, 15, 'pending', '2022-05-23 22:34:50'),
(21, 566, 99, 3, 'pending', '2022-05-25 00:27:03'),
(22, 566, 99, 3, 'pending', '2022-05-25 00:31:19'),
(23, 566, 99, 1, 'pending', '2022-05-25 00:31:53'),
(24, 566, 99, 1, 'pending', '2022-05-25 00:32:09'),
(25, 566, 99, 1, 'pending', '2022-05-25 00:32:14'),
(26, 566, 99, 2, 'pending', '2022-05-25 01:14:59'),
(27, 566, 99, 8, 'pending', '2022-05-25 01:15:56'),
(28, 566, 99, 52, 'pending', '2022-05-25 01:16:28'),
(29, 4617, 99, 2, 'pending', '2022-05-25 01:18:10'),
(30, 566, 99, 3, 'pending', '2022-05-25 01:24:33'),
(31, 566, 99, 10, 'pending', '2022-05-25 01:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('', '', '', 'aaaaaaaaaaaaaaaa'),
('', '', '', 'i want to join'),
('mohamed', 'mookhaled46@gmail.com', 'ainshams', 'join'),
('mohamed', 'aa@mm', 'ainshams', ';lk'),
('mohamed', 'mookhaled46@gmail.com', 'ainshams', 'join'),
('mohamed khaled', 'mookhaled46@gmail.com', 'ainshams', 'can i join');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `borrowid` int(11) NOT NULL,
  `status` varchar(300) NOT NULL DEFAULT 'no',
  `date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `borrowid`, `status`, `date`) VALUES
(9, 11, 'yes', '2022-05-21 22:54:58'),
(10, 12, 'yes', '2022-05-21 22:55:14'),
(11, 13, 'yes', '2022-05-21 23:32:03'),
(12, 14, 'yes', '2022-05-23 15:37:45'),
(13, 15, 'yes', '2022-05-23 15:50:34'),
(14, 16, 'yes', '2022-05-23 19:22:19'),
(15, 17, 'yes', '2022-05-23 19:23:04'),
(16, 18, 'yes', '2022-05-23 21:03:22'),
(17, 19, 'yes', '2022-05-23 21:16:37'),
(18, 20, 'yes', '2022-05-23 22:34:50'),
(19, 21, 'yes', '2022-05-25 00:27:03'),
(20, 22, 'yes', '2022-05-25 00:31:19'),
(21, 23, 'yes', '2022-05-25 00:31:53'),
(22, 24, 'yes', '2022-05-25 00:32:09'),
(23, 25, 'yes', '2022-05-25 00:32:14'),
(24, 26, 'yes', '2022-05-25 01:14:59'),
(25, 27, 'yes', '2022-05-25 01:15:56'),
(26, 28, 'yes', '2022-05-25 01:16:29'),
(27, 29, 'yes', '2022-05-25 01:18:10'),
(28, 30, 'yes', '2022-05-25 01:24:33'),
(29, 31, 'yes', '2022-05-25 01:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(45) NOT NULL,
  `name_arabic` varchar(45) NOT NULL,
  `name_latin` varchar(45) NOT NULL,
  `group_name` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `photo` blob NOT NULL,
  `box_no` float NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `type`, `name_arabic`, `name_latin`, `group_name`, `description`, `photo`, `box_no`, `number`) VALUES
(99, 'sector', 'الذره', 'f', 'fossil', 'fossil', 0x32323070782dd8add982d9845fd8b0d8b1d8a95f30312e6a7067, 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `department` varchar(45) NOT NULL,
  `rank` varchar(45) NOT NULL DEFAULT 'prof',
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `major` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `department`, `rank`, `password`, `email`, `major`) VALUES
(321, 'Mohamed', 'cs', ' student', 'caf1a3dfb505ffed0d024130f58c5cfa', 'mookhaled46@gmail.com', 'cs-math'),
(566, 'diaa', 'cs', 'prof', 'db85e2590b6109813dafa101ceb2faeb', 'mookhaled46@gmail.com', 'cs-math'),
(888, 'Mohamed', 'cs', ' student', '0a113ef6b61820daa5611c870ed8d5ee', 'mookhaled46@gmail.com', 'cs-math'),
(4617, 'safaa', 'cs', 'admin', '0397758f8990c1b41b81b43ac389ab9f', 'mookhaled46@gmaill.com', 'cs-math');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
