-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 13, 2020 at 02:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `copy`
--

CREATE TABLE `copy` (
  `id` int(1) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Aadhar` varchar(12) DEFAULT NULL,
  `State` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Zip` int(6) NOT NULL,
  `Phone` text DEFAULT NULL,
  `Vehicle No` varchar(8) CHARACTER SET swe7 DEFAULT NULL,
  `Arrival` varchar(20) NOT NULL,
  `Going` varchar(20) CHARACTER SET swe7 NOT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT '1',
  `RoomNo` text DEFAULT NULL,
  `Advance` text CHARACTER SET swe7 DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', 'ramsaoji27');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(3) NOT NULL,
  `Title` varchar(5) CHARACTER SET swe7 DEFAULT NULL,
  `FName` text CHARACTER SET swe7 DEFAULT NULL,
  `LName` text CHARACTER SET swe7 DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(10) CHARACTER SET swe7 NOT NULL,
  `State` varchar(30) CHARACTER SET swe7 NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zip` int(6) NOT NULL,
  `TRoom` varchar(20) CHARACTER SET swe7 NOT NULL,
  `Bed` varchar(10) CHARACTER SET swe7 NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(1) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL,
  `roomno` text CHARACTER SET swe7 NOT NULL,
  `advance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(2) NOT NULL,
  `roomid` varchar(10) CHARACTER SET swe7 NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomid`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, '101', 'Non Ac', 'Single', 'Free', 0),
(2, '102', 'Non Ac', 'Single', 'Free', NULL),
(3, '103', 'Non Ac', 'Single', 'Free', NULL),
(4, '104', 'Non Ac', 'Single', 'Free', NULL),
(5, '105', 'Non Ac', 'Single', 'Free', NULL),
(6, '106', 'Non Ac', 'Single', 'Free', NULL),
(7, '107', 'Non Ac', 'Single', 'Free', NULL),
(8, '108', 'Non Ac', 'Single', 'Free', NULL),
(9, '109', 'Non Ac', 'Single', 'Free', NULL),
(10, '110', 'Non Ac', 'Single', 'Free', NULL),
(11, '201', 'Non Ac', 'Double', 'Free', NULL),
(12, '202', 'Non Ac', 'Double', 'Free', NULL),
(13, '203', 'Non Ac', 'Double', 'Free', NULL),
(14, '204', 'Non Ac', 'Double', 'Free', NULL),
(15, '301', 'Non Ac', 'Triple', 'Free', 0),
(16, '302', 'Non Ac', 'Triple', 'Free', NULL),
(17, '303', 'Non Ac', 'Triple', 'Free', NULL),
(18, '401', 'Non Ac', 'Quad', 'Free', NULL),
(19, '501-AC', 'Ac Room', 'Double', 'Free', 0),
(20, '502-AC', 'Ac Room', 'Double', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(1) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text DEFAULT NULL,
  `LName` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Aadhar` varchar(12) DEFAULT NULL,
  `State` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Zip` int(6) NOT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Vehicle No` varchar(8) CHARACTER SET swe7 DEFAULT NULL,
  `Arrival` varchar(30) CHARACTER SET swe7 NOT NULL,
  `Going` varchar(20) CHARACTER SET swe7 NOT NULL,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` int(1) NOT NULL DEFAULT 1,
  `RoomNo` text DEFAULT NULL,
  `Advance` int(3) NOT NULL DEFAULT 100,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy`
--
ALTER TABLE `copy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `copy`
--
ALTER TABLE `copy`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
