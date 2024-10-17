-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waste_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_tbl`
--

CREATE TABLE `accounts_tbl` (
  `ID` int(11) NOT NULL,
  `AID` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Mname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Brgy` varchar(100) NOT NULL,
  `Bday` varchar(100) NOT NULL,
  `Age` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Usertype` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Kasali` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL,
  `date_updated` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `accounts_tbl`
--

INSERT INTO `accounts_tbl` (`ID`, `AID`, `Fname`, `Mname`, `Lname`, `Address`, `Brgy`, `Bday`, `Age`, `Gender`, `Email`, `Username`, `Password`, `Usertype`, `Status`, `Kasali`, `date_created`, `date_updated`) VALUES
(1, 'acc001', 'John', 'Sabuya', 'Rodolfo', 'Brixton Ville Camarin Caloocan City', '175', '06-24-1998', '19', 'Male', 'rodolfonardinio24@gmail.com', 'ImAdmin', 'b80bb7740288fda1f201890375a60c8f', 'Admin', 'Active', 'Yes', '03-27-2018', '03-27-2018'),
(2, 'dr001', 'Robin', 'Ha', 'Padilla', 'Dyan lang', '176', '11-11-1998', '19', 'Male', 'robin@gmail.com', 'Robin', 'b80bb7740288fda1f201890375a60c8f', 'Driver', 'Active', 'Yes', '03-27-2018', '03-27-2018'),
(3, 'off001', 'Terisita', 'Mae', 'Punggalantong', 'Camarin Caloocan City', '177', '12-11-1998', '19', 'Female', 'teritamae@gmail.com', 'Terista', 'b80bb7740288fda1f201890375a60c8f', 'Officer', 'Active', 'Yes', '03-27-2018', '03-27-2018'),
(4, '7LkVsZl78E', 'Lyn', 'L', 'Gallego', 'Phase 8b P4 b11 l21 BSCC', '175', '2001-11-18', '23', 'Female', 'gallegolorrielyn@immaculada.edu.ph', 'lyn', '4a7d1ed414474e4033ac29ccb8653d9b', 'Customer', 'Active', 'Yes', '2024-06-11 05:13:56pm', '2024-06-11 05:13:56pm');

-- --------------------------------------------------------

--
-- Table structure for table `brgy_tbl`
--

CREATE TABLE `brgy_tbl` (
  `ID` int(11) NOT NULL,
  `BID` varchar(100) NOT NULL,
  `Brgy` varchar(100) NOT NULL,
  `NoRequest` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Lat` varchar(100) NOT NULL,
  `Longt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `brgy_tbl`
--

INSERT INTO `brgy_tbl` (`ID`, `BID`, `Brgy`, `NoRequest`, `Status`, `Lat`, `Longt`) VALUES
(1, 'b0001', '175', '1', 'Moderate', '14.7656', '121.0378');

-- --------------------------------------------------------

--
-- Table structure for table `driver_tbl`
--

CREATE TABLE `driver_tbl` (
  `ID` int(11) NOT NULL,
  `DID` varchar(100) NOT NULL,
  `LicenseID` varchar(100) NOT NULL,
  `AssignTruck` varchar(100) NOT NULL,
  `AssignmentNo` varchar(100) NOT NULL,
  `AccomplishNo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `driver_tbl`
--

INSERT INTO `driver_tbl` (`ID`, `DID`, `LicenseID`, `AssignTruck`, `AssignmentNo`, `AccomplishNo`) VALUES
(1, 'dr001', 'txt01239', 'tr001', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `officer_tbl`
--

CREATE TABLE `officer_tbl` (
  `ID` int(11) NOT NULL,
  `OFID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Work` varchar(100) NOT NULL,
  `AssignmentNo` varchar(100) NOT NULL,
  `AccomplishNo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `officer_tbl`
--

INSERT INTO `officer_tbl` (`ID`, `OFID`, `Name`, `Work`, `AssignmentNo`, `AccomplishNo`) VALUES
(1, 'off001', 'Terisita Mae Punggalantong', 'Operation Manager', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `report_tbl`
--

CREATE TABLE `report_tbl` (
  `ID` int(11) NOT NULL,
  `RID` varchar(100) NOT NULL,
  `ReportBy` varchar(100) NOT NULL,
  `Brgy` varchar(100) NOT NULL,
  `Proved` varchar(100) NOT NULL,
  `Mess` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `created_date` varchar(100) NOT NULL,
  `updated_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `report_tbl`
--

INSERT INTO `report_tbl` (`ID`, `RID`, `ReportBy`, `Brgy`, `Proved`, `Mess`, `Status`, `created_date`, `updated_date`) VALUES
(1, 'rep001', 'acc001', 'b0001', 'Wala pa', 'Madumi po dto ang dameng panget sa paligid', 'Approved', '03-20-2018', '03-20-2018');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_tbl`
--

CREATE TABLE `schedule_tbl` (
  `ID` int(11) NOT NULL,
  `SID` varchar(100) NOT NULL,
  `AID` varchar(100) NOT NULL,
  `DID` varchar(100) NOT NULL,
  `TID` varchar(100) NOT NULL,
  `BID` varchar(100) NOT NULL,
  `RID` varchar(100) NOT NULL,
  `Start_at` varchar(100) NOT NULL,
  `End_at` varchar(100) NOT NULL,
  `SchedType` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule_tbl`
--

INSERT INTO `schedule_tbl` (`ID`, `SID`, `AID`, `DID`, `TID`, `BID`, `RID`, `Start_at`, `End_at`, `SchedType`, `Status`) VALUES
(1, 's001', 'acc001', 'dr001', 'tr001', 'b001', 'r001', '03-27-2018', '02-28-2018', 'Morning', 'Ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `truck_tbl`
--

CREATE TABLE `truck_tbl` (
  `ID` int(11) NOT NULL,
  `TID` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `AssignDriver` varchar(100) NOT NULL,
  `PlateNo` varchar(100) NOT NULL,
  `Capacity` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `truck_tbl`
--

INSERT INTO `truck_tbl` (`ID`, `TID`, `Description`, `AssignDriver`, `PlateNo`, `Capacity`, `Status`) VALUES
(1, 'tr001', 'PangBasuraTo', 'dr001', 'XXX-692', '15kg', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgy_tbl`
--
ALTER TABLE `brgy_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `driver_tbl`
--
ALTER TABLE `driver_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `officer_tbl`
--
ALTER TABLE `officer_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report_tbl`
--
ALTER TABLE `report_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `truck_tbl`
--
ALTER TABLE `truck_tbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts_tbl`
--
ALTER TABLE `accounts_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brgy_tbl`
--
ALTER TABLE `brgy_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver_tbl`
--
ALTER TABLE `driver_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `officer_tbl`
--
ALTER TABLE `officer_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_tbl`
--
ALTER TABLE `report_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `truck_tbl`
--
ALTER TABLE `truck_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
