-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 02:26 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_details`
--

CREATE TABLE `bus_details` (
  `id` int(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `permit` date NOT NULL,
  `insurance` date NOT NULL,
  `tax` date NOT NULL,
  `make` date NOT NULL,
  `model` varchar(1000) NOT NULL,
  `engine_no` varchar(1000) NOT NULL,
  `chass_no` varchar(1000) NOT NULL,
  `no_of_seats` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_details`
--

INSERT INTO `bus_details` (`id`, `vehicle_no`, `permit`, `insurance`, `tax`, `make`, `model`, `engine_no`, `chass_no`, `no_of_seats`) VALUES
(1, 'TN52k9578', '2016-09-26', '2016-09-26', '2016-09-26', '2016-09-26', '1', '2', '1', 1),
(5, 'tn28v5362', '2016-10-16', '2016-10-16', '2016-10-09', '2016-10-08', '1', 'abc123', 'qqqabcxyz', 510);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(10) NOT NULL,
  `catagory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`) VALUES
(5, 'Electrical Works'),
(6, 'Fc Expenditure'),
(4, 'Machine Works');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `id` int(10) NOT NULL,
  `vehicle_id` int(10) NOT NULL,
  `catagory_id` int(10) NOT NULL,
  `cost` int(255) NOT NULL,
  `date_of_entry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `vehicle_id`, `catagory_id`, `cost`, `date_of_entry`) VALUES
(1, 1, 5, 1000, '2016-09-29'),
(3, 1, 4, 0, '2016-09-29'),
(4, 1, 5, 100, '2016-09-28'),
(5, 1, 6, 46, '2016-09-29'),
(6, 1, 4, 120, '2016-09-29'),
(7, 1, 6, 124444, '2016-09-29'),
(8, 1, 5, 0, '2016-09-29'),
(9, 1, 5, 1000, '2016-09-29'),
(10, 1, 5, 0, '2016-09-29'),
(11, 1, 5, -787687768, '2016-09-29'),
(12, 1, 5, 0, '2016-09-29'),
(13, 1, 5, 0, '2016-09-29'),
(14, 1, 5, 0, '2016-09-29'),
(15, 1, 5, 0, '2016-09-01'),
(16, 1, 5, 11110, '2016-09-30'),
(17, 1, 5, 0, '2016-09-30'),
(18, 1, 5, 0, '2016-09-30'),
(19, 1, 5, -111, '2016-09-30'),
(20, 1, 5, 11, '2016-09-30'),
(21, 1, 5, 0, '2016-09-30'),
(22, 4, 6, 2134, '2016-09-30'),
(23, 4, 6, 2134, '2016-09-30'),
(24, 4, 6, 2134, '2016-09-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_details`
--
ALTER TABLE `bus_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicle_no` (`vehicle_no`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`catagory_name`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_details`
--
ALTER TABLE `bus_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
