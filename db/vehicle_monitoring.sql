-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 02:54 PM
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
-- Table structure for table `bus_monitoring`
--

CREATE TABLE `bus_monitoring` (
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
-- Dumping data for table `bus_monitoring`
--

INSERT INTO `bus_monitoring` (`id`, `vehicle_no`, `permit`, `insurance`, `tax`, `make`, `model`, `engine_no`, `chass_no`, `no_of_seats`) VALUES
(1, '9630', '2016-09-27', '2016-09-27', '2016-09-27', '2016-09-27', '1020', '10', '50', 60),
(2, '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_monitoring`
--
ALTER TABLE `bus_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_monitoring`
--
ALTER TABLE `bus_monitoring`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
