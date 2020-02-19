-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 06:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `year2project`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `staffinformation` (
  `StaffID` varchar(20) PRIMARY,
  `FirstName` varchar(30) NULL,
  `LastName` varchar(30) NULL,
  `Sex` char(1) NULL,
  `DeptID` varchar(20) NULL,
  `Phone` varchar(11) NULL,
  `Email` varchar(50) NULL,
  `Username` varchar(10) NULL
  `Password` varchar(5) NULL
  `UserRoleId` varchar(15) NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `staffinformation` (`StaffID`, `FirstName`, `LastName`, `Sex`, `DeptID`, `Phone`, `Email`, `Username`, `Password`, `UserRoleId`) VALUES
(1, 'Arogundade', 'Joseph', 'M', 'csc', 08038525684, 'Joseph@email.com', 'Joseph1234', 12345, 'Joseph1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `staffinformation`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `staffinformation`
  MODIFY `StaffID` int(11) NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
