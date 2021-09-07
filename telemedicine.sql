-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 02:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `App_ID` int(11) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `D_ID` int(11) NOT NULL,
  `App_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`App_ID`, `P_ID`, `D_ID`, `App_Date`) VALUES
(4, 2, 1, '2021-09-04 21:09:02'),
(22, 2, 1, '2021-09-07 12:29:00'),
(23, 2, 1, '2021-09-08 01:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_ID` int(11) NOT NULL,
  `D_FirstName` varchar(250) DEFAULT NULL,
  `D_LastName` varchar(250) DEFAULT NULL,
  `Edu_Level` varchar(250) DEFAULT NULL,
  `Bmdc_Reg_No` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Contact_No` varchar(150) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Spec_ID` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_FirstName`, `D_LastName`, `Edu_Level`, `Bmdc_Reg_No`, `DOB`, `Contact_No`, `Email`, `Password`, `Spec_ID`) VALUES
(1, 'Imtiaz', 'Habib', 'bsc', '1', '0000-00-00', '01681651501', 'imtiazhabib7@gmail.com', '123', 3),
(2, 'hasan', 'khan', 'fcps', '12345', '2021-09-05', '01681651510', 'hasan@gmail.com', '1234', 1),
(3, 'jakir', 'hossaine', 'fcps', '124578', '2021-09-06', '01681651501', 'jsjdfsdj@gmail.com', '12456', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_ID` int(11) NOT NULL,
  `P_FirstName` varchar(250) DEFAULT NULL,
  `P_LastName` varchar(250) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Password` varchar(150) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_FirstName`, `P_LastName`, `Email`, `Password`, `DOB`) VALUES
(1, 'kabir', 'Habib', 'a@gmail.com', '123', '0000-00-00'),
(2, 'munna', 'hossaine', 'munna@gmail.com', '12345', '2021-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `Spc_ID` int(11) NOT NULL,
  `Spc_Name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`Spc_ID`, `Spc_Name`) VALUES
(1, 'Cardiology'),
(2, 'Oncology'),
(3, 'Medicine'),
(4, 'Endocrinology'),
(5, 'Dermatology'),
(6, 'Pediatrics'),
(7, 'Gynecology'),
(8, 'Medicine'),
(9, 'Opthalmology'),
(10, 'Orthopaedics'),
(11, 'ENT'),
(12, 'COVID-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
