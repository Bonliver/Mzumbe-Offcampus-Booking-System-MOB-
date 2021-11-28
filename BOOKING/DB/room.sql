-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 01:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mob_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `sn` int(11) NOT NULL,
  `room_no` varchar(30) DEFAULT NULL,
  `gender` varchar(30) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`sn`, `room_no`, `gender`, `capacity`, `price`) VALUES
(1, 'B114', 'FEMALE', 2, '300000'),
(2, 'B115', 'FEMALE', 4, '150000'),
(3, 'B116', 'MALE', 2, '500000'),
(100, 'C102', 'MALE', 2, '500000'),
(102, 'D112', 'MALE', 2, '1000000'),
(103, 'D119', 'FEMALE', 3, '40000'),
(104, 'N120', 'FEMALE', 4, '300000'),
(105, 'n350', 'FEMALE', 2, '400000'),
(106, 'n220', 'female', 2, '150000'),
(107, 'P119', 'FEMALE', 2, '500000'),
(108, 'E100', 'MALE', 3, '1000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
