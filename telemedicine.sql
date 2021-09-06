-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
  `Spec_ID` int(250) DEFAULT NULL,
  `fee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_FirstName`, `D_LastName`, `Edu_Level`, `Bmdc_Reg_No`, `DOB`, `Contact_No`, `Email`, `Password`, `Spec_ID`, `fee`) VALUES
(1, 'Ahnaf ', 'Akif', 'MBBS', '65778544', '0000-00-00', '0944451234', 'ahnafakif@gmail.com', '123456', 0, 500),
(2, 'Kamal', 'Hasan', 'MBBS', '5545894', '2019-09-09', '4567452', 'kamal@gmail.com', '123', 0, 1000),
(3, 'Afia', 'Sultana', 'MBBS', '3345678', '1986-09-08', '09876555', 'sul@gmail.com', '123456', 0, 500),
(4, 'Khondokar', 'Iqbal', 'MBBS', '556774', '1984-09-06', '556432', 'kh@gmail.com', '1234', 0, 1000);

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
(1, 'Faria', 'Kanak', 'fr@gmail.com', '123456', '1990-10-15'),
(2, 'Afjal', 'Hossain', 'afjal@gmail.com', '1234567', '1995-09-09'),
(3, 'Nasrin', 'Akhtar', 'nasrin@gmail.com', '123', '1986-09-08');

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
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`Spc_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `Spc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
