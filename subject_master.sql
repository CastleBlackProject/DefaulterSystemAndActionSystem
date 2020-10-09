-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 08:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vceterp`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `Subject_Id` int(20) NOT NULL,
  `Subject_Name` varchar(50) NOT NULL,
  `Subject_Code` varchar(50) NOT NULL,
  `Subject_Status` varchar(10) NOT NULL,
  `Branch_Id` int(2) NOT NULL,
  `Semester_Id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`Subject_Id`, `Subject_Name`, `Subject_Code`, `Subject_Status`, `Branch_Id`, `Semester_Id`) VALUES
(1, 'Applied Physics-I', '1111', 'Active', 1, 1),
(2, 'Applied Chemistry-I', '1112', 'Active', 1, 1),
(3, 'Applied Mathematics-I', '1113', 'Active', 1, 1),
(4, 'Engineering Mechanics', '1114', 'Active', 1, 1),
(5, 'Basic Electrical Engineering', '1115', 'Active', 1, 1),
(6, 'Environmental Studies', '1116', 'Active', 1, 1),
(7, 'Applied Physics-I', '1121', 'Active', 2, 1),
(8, 'Applied Chemistry-I', '1122', 'Active', 2, 1),
(9, 'Applied Mathematics-I', '1123', 'Active', 2, 1),
(10, 'Engineering Mechanics', '1124', 'Active', 2, 1),
(11, 'Basic Electrical Engineering', '1125', 'Active', 2, 1),
(12, 'Environmental Studies', '1126', 'Active', 2, 1),
(13, 'Applied Physics-I', '1131', 'Active', 3, 1),
(14, 'Applied Chemistry-I', '1132', 'Active', 3, 1),
(15, 'Applied Mathematics-I', '1133', 'Active', 3, 1),
(16, 'Engineering Mechanics', '1134', 'Active', 3, 1),
(17, 'Basic Electrical Engineering', '1135', 'Active', 3, 1),
(18, 'Environmental Studies', '1136', 'Active', 3, 1),
(19, 'Applied Physics-I', '1141', 'Active', 4, 1),
(20, 'Applied Chemistry-I', '1142', 'Active', 4, 1),
(21, 'Applied Mathematics-I', '1143', 'Active', 4, 1),
(22, 'Engineering Mechanics', '1144', 'Active', 4, 1),
(23, 'Basic Electrical Engineering', '1145', 'Active', 4, 1),
(24, 'Environmental Studies', '1146', 'Active', 4, 1),
(25, 'Applied Physics-I', '1151', 'Active', 5, 1),
(26, 'Applied Chemistry-I', '1152', 'Active', 5, 1),
(27, 'Applied Mathematics-I', '1153', 'Active', 5, 1),
(28, 'Engineering Mechanics', '1154', 'Active', 5, 1),
(29, 'Basic Electrical Engineering', '1155', 'Active', 5, 1),
(30, 'Environmental Studies', '1156', 'Active', 5, 1),
(31, 'Applied Physics-I', '1161', 'Active', 6, 1),
(32, 'Applied Chemistry-I', '1162', 'Active', 6, 1),
(33, 'Applied Mathematics-I', '1163', 'Active', 6, 1),
(34, 'Engineering Mechanics', '1164', 'Active', 6, 1),
(35, 'Basic Electrical Engineering', '1165', 'Active', 6, 1),
(36, 'Environmental Studies', '1166', 'Active', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`Subject_Id`),
  ADD KEY `Branch_Id` (`Branch_Id`,`Semester_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `Subject_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
