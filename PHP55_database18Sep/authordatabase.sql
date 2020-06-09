-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 10:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authordatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `authortable`
--

CREATE TABLE `authortable` (
  `AID` int(11) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `AuthorName` varchar(40) DEFAULT NULL,
  `Designation` varchar(20) DEFAULT NULL,
  `Qualification` varchar(20) DEFAULT NULL,
  `OrganizationName` varchar(60) DEFAULT NULL,
  `ProfilePic` varchar(50) DEFAULT NULL,
  `FileType` varchar(10) DEFAULT NULL,
  `password` text,
  `PSD_Flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authortable`
--

INSERT INTO `authortable` (`AID`, `EmailId`, `AuthorName`, `Designation`, `Qualification`, `OrganizationName`, `ProfilePic`, `FileType`, `password`, `PSD_Flag`) VALUES
(1, 'mahendra.shau@gmail.com', 'mahendra', 'Lecturer', 'M.Tech', 'Govt. Polytechnic College Anuppur', 'asd.png', 'png', 'Vineet@1805 ', 1),
(2, 'mahendragupta2211@gmail.com', 'mahendra', 'Lecturer', 'M.Tech', 'Govt. Polytechnic College Anuppur', 'abc.png', 'png', NULL, 0),
(3, 'sg28207@gmail.com', 'Swati Gupta', 'Student', 'BE', 'Govt. Polytechnic College Anuppur', 'satyendra photo.jpg', 'jpg', 'Swati@1234 ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authortable`
--
ALTER TABLE `authortable`
  ADD PRIMARY KEY (`AID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authortable`
--
ALTER TABLE `authortable`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
