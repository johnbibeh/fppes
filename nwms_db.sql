-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 02:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nwms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `location_tbl`
--

CREATE TABLE IF NOT EXISTS `location_tbl` (
`ID` int(11) NOT NULL,
  `TID` varchar(50) NOT NULL,
  `Local` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `officer_tbl`
--

CREATE TABLE IF NOT EXISTS `officer_tbl` (
`ID` int(11) NOT NULL,
  `TID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Bday` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Stat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_tbl`
--

INSERT INTO `officer_tbl` (`ID`, `TID`, `Name`, `Age`, `Address`, `Contact`, `Bday`, `Status`, `Stat`) VALUES
(1, 'asd', 'adas', '2', 'asdsa', '213123', 'asd', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `sched_tbl`
--

CREATE TABLE IF NOT EXISTS `sched_tbl` (
`id` int(11) NOT NULL,
  `TID` varchar(50) NOT NULL,
  `Stype` varchar(50) NOT NULL,
  `Ttype` varchar(50) NOT NULL,
  `Day` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `SStart` varchar(50) NOT NULL,
  `SEnd` varchar(50) NOT NULL,
  `DriverName` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `GVol` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sched_tbl`
--

INSERT INTO `sched_tbl` (`id`, `TID`, `Stype`, `Ttype`, `Day`, `Location`, `SStart`, `SEnd`, `DriverName`, `Contact`, `Status`, `GVol`) VALUES
(3, 'sd', 'asd', 'ads', 'asd', 'asd', 'asd', 'sdkk', 'k', 'k', 'Reject', 'k'),
(5, 'kqMFM08Q7K', 'asd', 'ads', 'ads@gg.com', 'asd', 'sad', 'asd', 'asd', 'asd', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `truck_tbl`
--

CREATE TABLE IF NOT EXISTS `truck_tbl` (
`ID` int(11) NOT NULL,
  `TID` varchar(50) NOT NULL,
  `EModel` varchar(50) NOT NULL,
  `LCapa` varchar(50) NOT NULL,
  `Status` varchar(40) NOT NULL,
  `PCapa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
`id` int(11) NOT NULL,
  `rid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `rid`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'qweqwe31', 'User', 'b80bb7740288fda1f201890375a60c8f', 'Admin', 'Active'),
(2, 'asad', 'Admin', 'b80bb7740288fda1f201890375a60c8f', 'User', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location_tbl`
--
ALTER TABLE `location_tbl`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `officer_tbl`
--
ALTER TABLE `officer_tbl`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sched_tbl`
--
ALTER TABLE `sched_tbl`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_tbl`
--
ALTER TABLE `truck_tbl`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location_tbl`
--
ALTER TABLE `location_tbl`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `officer_tbl`
--
ALTER TABLE `officer_tbl`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sched_tbl`
--
ALTER TABLE `sched_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `truck_tbl`
--
ALTER TABLE `truck_tbl`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
