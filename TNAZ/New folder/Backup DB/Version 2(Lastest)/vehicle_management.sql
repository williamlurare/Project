-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 01:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `type` varchar(8) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `ret_date` varchar(100) NOT NULL,
  `ret_time` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `resons` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `veh_reg` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL,
  `finished` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `department`, `type`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`) VALUES
(137, 'james obuhuma', 'jamesb', 'CS', 'van', '08/01/2020', '11 : 06 AM', '08/03/2020', '1 : 06 PM', 'UoN', 'ANU', 'Project', 'jobuhuma@anu.ac.ke', 782713621, 1, '104', 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(200) NOT NULL,
  `ModeOfTransport` varchar(200) NOT NULL,
  `req_date` varchar(200) NOT NULL,
  `req_time` varchar(200) NOT NULL,
  `ret_date` varchar(200) NOT NULL,
  `ret_time` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `pickup_point` varchar(200) NOT NULL,
  `Lecture_Mobile` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `ModeOfTransport`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `Lecture_Mobile`) VALUES
(55, '', '07/09/2020', '6 : 14 PM', '07/13/2020', '6 : 14 PM', 'asdAW', 'ANU', 1234567890),
(56, '', '07/09/2020', '6 : 14 PM', '07/13/2020', '6 : 14 PM', 'asdAW', 'ANU', 1234567890),
(57, '', '07/02/2020', '1 : 08 AM', '07/24/2020', '1 : 08 AM', 'USIU', 'ANU', 1234567890),
(58, '', '07/02/2020', '1 : 08 AM', '07/24/2020', '1 : 08 AM', 'USIU', 'ANU', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(11) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `drjoin` varchar(255) NOT NULL,
  `drmobile` varchar(200) NOT NULL,
  `drnid` varchar(30) NOT NULL,
  `drlicense` varchar(30) NOT NULL,
  `drlicensevalid` varchar(100) NOT NULL,
  `draddress` varchar(255) NOT NULL,
  `drphoto` varchar(30) NOT NULL,
  `dr_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drname`, `drjoin`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`, `dr_available`) VALUES
(25, 'CJ', '07/13/2020', '0787556219', '98402124', '33872210', '08/27/2020', ' Groove Street', 'cj.jpg', 1),
(26, 'Big Smoke', '07/21/2020', '0781927521', '314853123', '222991331', '07/30/2020', ' ALL YOU HAVE TO DO IS FOLLOW THE DAMN TRAIN  >:(', 'BS.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL,
  `token` varchar(225) NOT NULL,
  `tokenExpire` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `admin`, `token`, `tokenExpire`) VALUES
(15, 'william', 'luare', 'noble8team@gmail.com', 'will', '1234567890', 0, 'skObQNYZyR', '2020-07-29 23:15:37'),
(36, 'john', 'cena', 'dnbilly@hotmail.com', 'john123', 'kenya2020*', 0, 'Y1h7CgF0QO', '2020-07-30 11:16:28'),
(37, 'josh', 'kamau', 'joshkamaa034@gmail.com', 'mkgamer', '1234567890', 0, '', ''),
(38, 'jane', 'lurare', '17j01acs015@anu.ac.ke', 'mamapati', '1234567890', 0, '', ''),
(39, 'big', 'john', 'wlurare@yahoo.com', 'big', '1234567890', 0, '', ''),
(40, 'james', 'obuhuma', 'jobuhuma@anu.ac.ke', 'jamesb', '1234567890', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `veh_id` int(11) NOT NULL,
  `veh_reg` varchar(100) NOT NULL,
  `veh_type` varchar(20) NOT NULL,
  `chesisno` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `veh_color` varchar(100) NOT NULL,
  `veh_regdate` varchar(100) NOT NULL,
  `veh_description` varchar(255) NOT NULL,
  `veh_photo` varchar(255) NOT NULL,
  `veh_available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`, `veh_available`) VALUES
(45, '104', 'van', '234', 'Toyota', 'White', '07/29/2020', ' ANU Van', 'issavan.jpg', 1),
(48, '107', 'bus', '212', 'Mercedes ', 'White', '07/04/2020', ' White Bus', 'bus.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `driverid` (`driverid`),
  ADD KEY `veh_reg` (`veh_reg`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`veh_id`),
  ADD UNIQUE KEY `veh_reg` (`veh_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
