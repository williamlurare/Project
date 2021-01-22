-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 10:07 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'noble8team@gmail.com', 'Test@1234', '2019-05-31 20:31:45', '2019-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`ID`, `Name`) VALUES
(1, '1 - Zannar'),
(2, '2 - Johnson'),
(3, '3 - Cashman');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Hostel` varchar(1000) NOT NULL,
  `RoomNo` varchar(100) NOT NULL,
  `Fees` int(100) NOT NULL,
  `StudentID` varchar(210) NOT NULL,
  `FirstName` text NOT NULL,
  `MiddleName` text NOT NULL,
  `LastName` text NOT NULL,
  `Gender` text NOT NULL,
  `Contact` int(200) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Hostel`, `RoomNo`, `Fees`, `StudentID`, `FirstName`, `MiddleName`, `LastName`, `Gender`, `Contact`, `Email`) VALUES
(158, '3', '3', 19000, '16m01acs018', 'Joshua', 'K', 'Kamua', 'male', 790062567, '16m01acs018@anu.ac.ke'),
(160, '2', '2', 11000, '19m01acs015', 'James', 'cs', 'Obuhuma', 'male', 799762567, '19m01acs015@anu.ac.ke'),
(165, '3', '1', 19000, '17j01acs015', 'William', 'Juma', 'Lurare', 'male', 798674874, '17j01acs015@anu.ac.ke');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `ID_Room` varchar(10) NOT NULL,
  `ID_Hostel` int(100) NOT NULL,
  `RoomType` varchar(100) NOT NULL,
  `Fees` varchar(10000) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `ID_Room`, `ID_Hostel`, `RoomType`, `Fees`, `posting_date`) VALUES
(1, 'C0', 3, 'TYPE II', '19000', '2019-08-01 03:53:23'),
(2, 'C1', 3, 'TYPE II', '19000', '2019-08-01 03:53:23'),
(3, 'C2', 3, 'TYPE II', '19000', '2019-08-01 03:53:23'),
(4, 'C3', 3, 'TYPE II', '19000', '2019-08-01 03:53:23'),
(20, 'C5', 3, 'TYPE II', '19000', '2019-08-01 04:23:12'),
(5, 'J0', 2, 'TYPE IV', '11000', '2019-08-01 03:53:23'),
(6, 'J1', 2, 'TYPE IV', '11000', '2019-08-01 03:53:24'),
(7, 'J2', 2, 'TYPE IV', '11000', '2019-08-01 03:53:24'),
(8, 'J3', 2, 'TYPE IV', '11000', '2019-08-01 03:53:24'),
(9, 'Z0', 1, 'TYPE III', '16000', '2019-08-01 03:53:24'),
(10, 'Z1', 1, 'TYPE III', '16000', '2019-08-01 03:53:24'),
(11, 'Z2', 1, 'TYPE III', '16000', '2019-08-01 03:53:24'),
(12, 'Z3', 1, 'TYPE III', '16000', '2019-08-01 03:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `room1`
--

CREATE TABLE `room1` (
  `id` int(100) NOT NULL,
  `ID_Room` varchar(100) NOT NULL,
  `ID_Hostel` int(100) NOT NULL,
  `RoomType` varchar(100) NOT NULL,
  `Fees` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room1`
--

INSERT INTO `room1` (`id`, `ID_Room`, `ID_Hostel`, `RoomType`, `Fees`) VALUES
(1, 'ZannarOne', 1, 'III', 16000),
(2, 'ZannarTwo', 1, 'III', 16000),
(3, 'ZannarThree', 1, 'III', 16000),
(4, '1', 2, 'IV', 11000),
(5, 'J2', 2, 'IV', 11000),
(6, 'J3', 2, 'IV', 11000),
(7, 'C1', 3, 'II', 11000),
(8, 'C2', 3, 'II', 19000),
(9, 'C3', 3, 'II', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(1, 10, 'test@gmail.com', '', '', '', '2016-06-22 06:16:42'),
(2, 10, 'test@gmail.com', '', '', '', '2016-06-24 11:20:28'),
(4, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-24 11:22:47'),
(5, 10, 'test@gmail.com', 0x3a3a31, '', '', '2016-06-26 15:37:40'),
(6, 20, 'Benjamin@gmail.com', 0x3a3a31, '', '', '2016-06-26 16:40:57'),
(7, 10, 'test@gmail.com', 0x3a3a31, '', '', '2019-02-10 07:43:43'),
(8, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:49:33'),
(9, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:52:11'),
(10, 21, 'flga@gmail.com', 0x3a3a31, '', '', '2019-02-10 08:54:58'),
(11, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-19 16:42:46'),
(12, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-19 18:16:11'),
(13, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-19 18:19:32'),
(14, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-20 05:41:22'),
(15, 23, '16m01acs018@anu.ac.ke', 0x3a3a31, '', '', '2019-06-20 05:46:26'),
(16, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-20 05:56:01'),
(17, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-20 06:13:08'),
(18, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-20 10:43:38'),
(19, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-26 07:55:23'),
(20, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-26 15:22:57'),
(21, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-26 19:30:04'),
(22, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-26 19:30:08'),
(23, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-27 05:12:39'),
(24, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-27 05:22:19'),
(25, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-06-27 05:59:55'),
(26, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 15:50:26'),
(27, 24, '17j01acs099@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 18:18:03'),
(28, 24, '17j01acs099@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 18:18:52'),
(29, 24, '17j01acs099@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 18:34:12'),
(30, 25, '16m01acs022@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 18:36:29'),
(31, 26, '17j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-01 19:09:00'),
(32, 26, '17j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 11:10:39'),
(33, 26, '17j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 14:50:10'),
(34, 26, '17j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 14:50:12'),
(35, 27, '17j01acs030@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 15:20:16'),
(36, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 16:43:35'),
(37, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 16:44:44'),
(38, 27, '17j01acs030@anu.ac.ke', 0x3a3a31, '', '', '2019-07-02 16:46:59'),
(39, 28, '15j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-03 11:35:07'),
(40, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-03 12:48:17'),
(41, 28, '15j01acs021@anu.ac.ke', 0x3a3a31, '', '', '2019-07-04 18:18:04'),
(42, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 08:54:05'),
(43, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 08:56:20'),
(44, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 10:18:24'),
(45, 29, '18j01aba009@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 10:53:03'),
(46, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 11:56:26'),
(47, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 12:13:27'),
(48, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-09 14:09:03'),
(49, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 08:09:44'),
(50, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 08:11:18'),
(51, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 11:47:54'),
(52, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 12:07:28'),
(53, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 12:22:06'),
(54, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 12:25:18'),
(55, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 12:26:00'),
(56, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 13:30:32'),
(57, 30, '19j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 14:12:43'),
(58, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 19:00:54'),
(59, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 19:24:50'),
(60, 30, '19j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-10 19:29:41'),
(61, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:31:33'),
(62, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:35:17'),
(63, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:37:20'),
(64, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:40:50'),
(65, 22, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:46:47'),
(66, 30, '19j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:48:02'),
(67, 30, '19j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 04:50:38'),
(68, 30, '19j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 05:23:36'),
(69, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 06:16:14'),
(70, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 11:51:08'),
(71, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-11 11:55:41'),
(72, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-15 08:15:39'),
(73, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-15 09:20:54'),
(74, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-15 09:21:37'),
(75, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-16 09:29:49'),
(76, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-16 09:30:36'),
(77, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-16 09:34:50'),
(78, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-18 06:46:40'),
(79, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-18 06:46:41'),
(80, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-18 06:47:10'),
(81, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-18 06:50:06'),
(82, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-24 11:23:19'),
(83, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-24 13:03:23'),
(84, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-24 13:03:44'),
(85, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 06:11:26'),
(86, 34, '18j01aba010@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 06:17:35'),
(87, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 12:21:54'),
(88, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 12:27:22'),
(89, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 12:44:53'),
(90, 35, '18j01acs042@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 12:47:58'),
(91, 35, '18j01acs042@anu.ac.ke', 0x3a3a31, '', '', '2019-07-25 12:52:43'),
(92, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-26 07:32:25'),
(93, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-26 09:40:56'),
(94, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-26 09:48:13'),
(95, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 11:52:18'),
(96, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 11:52:54'),
(97, 36, '18j01aba020@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 12:41:31'),
(98, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 13:13:21'),
(99, 36, '18j01aba020@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 13:13:51'),
(100, 36, '18j01aba020@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 13:22:43'),
(101, 36, '18j01aba020@anu.ac.ke', 0x3a3a31, '', '', '2019-07-29 13:39:46'),
(102, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 11:59:38'),
(103, 37, '19m01acs018@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 18:24:47'),
(104, 37, '19m01acs018@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 18:29:55'),
(105, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 18:51:08'),
(106, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 18:52:30'),
(107, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 18:54:56'),
(108, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:02:44'),
(109, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:04:04'),
(110, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:08:22'),
(111, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:11:18'),
(112, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:18:21'),
(113, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:28:32'),
(114, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:30:01'),
(115, 34, '18j01aba010@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:31:11'),
(116, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:31:32'),
(117, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:32:34'),
(118, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:33:50'),
(119, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 19:34:19'),
(120, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 20:29:52'),
(121, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 21:17:27'),
(122, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-07-31 21:36:57'),
(123, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-08-01 03:53:49'),
(124, 23, '16m01acs018@anu.ac.ke', 0x3a3a31, '', '', '2019-08-01 03:56:34'),
(125, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-08-01 04:16:58'),
(126, 38, '19m01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-08-01 06:21:26'),
(127, 38, '19m01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-08-01 06:29:43'),
(128, 32, '17j01acs015@anu.ac.ke', 0x3a3a31, '', '', '2019-08-03 04:48:33'),
(129, 39, '19m01acs020@anu.ac.ke', 0x3a3a31, '', '', '2019-08-19 09:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) NOT NULL,
  `passUdateDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `firstName`, `middleName`, `lastName`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(23, '16m01acs018', 'Joshua', 'K', 'Kamua', 'male', 790062567, '16m01acs018@anu.ac.ke', 'Kenya123', '2019-06-20 05:45:32', '', ''),
(24, '17j01acs099', 'Bob', 'Jeff', 'Bob', 'male', 509864022, '17j01acs099@anu.ac.ke', '12345', '2019-07-01 18:17:28', '', ''),
(25, '16m01acs022', 'Lol', 'Lol', 'Lol', 'male', 7986741234, '16m01acs022@anu.ac.ke', '123', '2019-07-01 18:36:12', '', ''),
(26, '17j01acs021', 'loll', 'lolll', 'lolllll', 'female', 509864022, '17j01acs021@anu.ac.ke', '1234', '2019-07-01 19:08:51', '', ''),
(27, '17j01acs030', 'bol', 'bol', 'bol', 'others', 790062567, '17j01acs030@anu.ac.ke', '123', '2019-07-02 15:20:00', '', ''),
(28, '15j01acs021', 'Will', 'Jeff', 'Lol', 'male', 798674874, '15j01acs021@anu.ac.ke', '12', '2019-07-03 11:34:44', '', ''),
(29, '18j01aba009', 'Young', 'Billy', 'Bangs', 'male', 712345678, '18j01aba009@anu.ac.ke', 'bangs1', '2019-07-09 10:52:49', '', ''),
(30, '19j01acs015', 'Tchalla', 'Juma', 'Wakanda', 'male', 752143212, '19j01acs015@anu.ac.ke', '4321', '2019-07-10 14:12:26', '', ''),
(32, '17j01acs015', 'William', 'Juma', 'Lurare', 'male', 798674874, '17j01acs015@anu.ac.ke', '123', '2019-07-11 06:15:59', '01-08-2019 09:47:08', ''),
(34, '18j01aba010', 'Will', 'lol', 'JEff', 'male', 798674874, '18j01aba010@anu.ac.ke', '123', '2019-07-25 06:17:08', '', ''),
(38, '19m01acs015', 'James', 'cs', 'Obuhuma', 'male', 799762567, '19m01acs015@anu.ac.ke', '123', '2019-08-01 06:21:19', '', ''),
(39, '19m01acs020', 'william', 'juma', 'lurare', 'male', 798674874, '19m01acs020@anu.ac.ke', '12', '2019-08-19 09:17:10', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ID_Room`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Hostel` (`ID_Hostel`),
  ADD KEY `ID_Hostel_2` (`ID_Hostel`);

--
-- Indexes for table `room1`
--
ALTER TABLE `room1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Room` (`ID_Room`),
  ADD KEY `ID_Hostel` (`ID_Hostel`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `room1`
--
ALTER TABLE `room1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`ID_Hostel`) REFERENCES `hostels` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
