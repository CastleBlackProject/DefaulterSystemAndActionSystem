-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 09:13 PM
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
-- Table structure for table `academic_session_master`
--

CREATE TABLE `academic_session_master` (
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Academic_Session_Name` varchar(50) NOT NULL,
  `Academic_Session_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_session_master`
--

INSERT INTO `academic_session_master` (`Academic_Session_Id`, `Academic_Session_Name`, `Academic_Session_Status`) VALUES
(1, '2020-2021', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_master`
--

CREATE TABLE `attendance_master` (
  `Attendance_Id` bigint(20) NOT NULL,
  `Lecture_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Is_Present` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_master`
--

INSERT INTO `attendance_master` (`Attendance_Id`, `Lecture_Id`, `Student_Id`, `Is_Present`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 0),
(8, 1, 8, 1),
(9, 1, 9, 1),
(10, 1, 10, 1),
(11, 1, 11, 1),
(12, 1, 12, 1),
(13, 1, 13, 0),
(14, 1, 14, 1),
(15, 1, 15, 1),
(16, 1, 16, 1),
(17, 1, 17, 1),
(18, 1, 18, 1),
(19, 1, 19, 1),
(20, 1, 20, 1),
(21, 1, 21, 1),
(22, 1, 22, 1),
(23, 1, 23, 0),
(24, 1, 24, 1),
(25, 1, 25, 1),
(26, 1, 26, 1),
(27, 1, 27, 1),
(28, 1, 28, 1),
(29, 1, 29, 1),
(30, 1, 30, 1),
(31, 1, 31, 1),
(32, 1, 32, 1),
(33, 1, 33, 1),
(34, 1, 34, 1),
(35, 1, 35, 1),
(36, 1, 36, 1),
(37, 1, 37, 1),
(38, 1, 38, 1),
(39, 1, 39, 1),
(40, 1, 40, 1),
(41, 1, 41, 1),
(42, 1, 42, 1),
(43, 1, 43, 1),
(44, 1, 44, 0),
(45, 1, 45, 0),
(46, 1, 46, 1),
(47, 1, 47, 1),
(48, 1, 48, 1),
(49, 1, 49, 1),
(50, 1, 50, 1),
(51, 1, 51, 1),
(52, 1, 52, 1),
(53, 1, 53, 1),
(54, 1, 54, 1),
(55, 1, 55, 1),
(56, 1, 56, 1),
(57, 1, 57, 1),
(58, 1, 58, 1),
(59, 1, 59, 1),
(60, 1, 60, 1),
(61, 1, 61, 1),
(62, 1, 62, 0),
(63, 1, 63, 1),
(64, 1, 64, 1),
(65, 1, 65, 1),
(66, 1, 66, 1),
(67, 1, 67, 0),
(68, 1, 68, 1),
(69, 1, 69, 0),
(70, 1, 70, 1),
(71, 1, 71, 0),
(72, 1, 72, 1),
(73, 1, 73, 0),
(74, 1, 74, 1),
(75, 2, 1, 1),
(76, 2, 2, 1),
(77, 2, 3, 1),
(78, 2, 4, 1),
(79, 2, 5, 1),
(80, 2, 6, 1),
(81, 2, 7, 1),
(82, 2, 8, 1),
(83, 2, 9, 1),
(84, 2, 10, 1),
(85, 2, 11, 1),
(86, 2, 12, 1),
(87, 2, 13, 0),
(88, 2, 14, 1),
(89, 2, 15, 1),
(90, 2, 16, 1),
(91, 2, 17, 1),
(92, 2, 18, 1),
(93, 2, 19, 1),
(94, 2, 20, 1),
(95, 2, 21, 1),
(96, 2, 22, 1),
(97, 2, 23, 1),
(98, 2, 24, 1),
(99, 2, 25, 1),
(100, 2, 26, 0),
(101, 2, 27, 1),
(102, 2, 28, 1),
(103, 2, 29, 1),
(104, 2, 30, 1),
(105, 2, 31, 1),
(106, 2, 32, 1),
(107, 2, 33, 1),
(108, 2, 34, 1),
(109, 2, 35, 1),
(110, 2, 36, 1),
(111, 2, 37, 1),
(112, 2, 38, 1),
(113, 2, 39, 1),
(114, 2, 40, 1),
(115, 2, 41, 1),
(116, 2, 42, 1),
(117, 2, 43, 1),
(118, 2, 44, 1),
(119, 2, 45, 1),
(120, 2, 46, 1),
(121, 2, 47, 1),
(122, 2, 48, 1),
(123, 2, 49, 1),
(124, 2, 50, 1),
(125, 2, 51, 1),
(126, 2, 52, 1),
(127, 2, 53, 1),
(128, 2, 54, 0),
(129, 2, 55, 1),
(130, 2, 56, 0),
(131, 2, 57, 0),
(132, 2, 58, 1),
(133, 2, 59, 1),
(134, 2, 60, 0),
(135, 2, 61, 0),
(136, 2, 62, 1),
(137, 2, 63, 0),
(138, 2, 64, 1),
(139, 2, 65, 1),
(140, 2, 66, 1),
(141, 2, 67, 0),
(142, 2, 68, 0),
(143, 2, 69, 0),
(144, 2, 70, 0),
(145, 2, 71, 0),
(146, 2, 72, 1),
(147, 2, 73, 0),
(148, 2, 74, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `Branch_Id` bigint(20) NOT NULL,
  `Branch_Name` varchar(100) NOT NULL,
  `Branch_Code` varchar(50) NOT NULL,
  `Branch_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`Branch_Id`, `Branch_Name`, `Branch_Code`, `Branch_Status`) VALUES
(1, 'Mechanical Engineering', '1', 'Active'),
(2, 'Electronics And Telecommunications Engineering', '2', 'Active'),
(3, 'Instrumentaion Engineering', '3', 'Active'),
(4, 'Computer Engineering', '4', 'Active'),
(5, 'Information Technology', '5', 'Active'),
(6, 'Civil Engineering', '6', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `defaulter_action_master`
--

CREATE TABLE `defaulter_action_master` (
  `Defaulter_Action_Id` bigint(20) NOT NULL,
  `Subject_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `From_Percentage` float NOT NULL,
  `To_Percentage` float NOT NULL,
  `Defaulter_Action` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecture_master`
--

CREATE TABLE `lecture_master` (
  `Lecture_Id` bigint(20) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Subject_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Lecture_Number` int(11) NOT NULL,
  `Lecture_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture_master`
--

INSERT INTO `lecture_master` (`Lecture_Id`, `Academic_Session_Id`, `Subject_Id`, `Staff_Id`, `Lecture_Number`, `Lecture_Date`) VALUES
(1, 1, 38, 4, 1, '2020-10-09'),
(2, 1, 38, 4, 2, '2020-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `semester_master`
--

CREATE TABLE `semester_master` (
  `Semester_Id` bigint(20) NOT NULL,
  `Semester_Name` varchar(50) NOT NULL,
  `Year_Id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_admin_login`
--

CREATE TABLE `staff_admin_login` (
  `Staff_Admin_Login_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Staff_College_Id` varchar(100) NOT NULL,
  `Staff_Password` varchar(100) NOT NULL,
  `Is_Admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_admin_login`
--

INSERT INTO `staff_admin_login` (`Staff_Admin_Login_Id`, `Staff_Id`, `Staff_College_Id`, `Staff_Password`, `Is_Admin`) VALUES
(1, 1, '1', 'test1', 1),
(2, 2, '2', 'test2', 0),
(3, 3, '3', 'test3', 0),
(4, 4, '4', 'test4', 1),
(5, 5, '5', 'test5', 0),
(6, 6, '6', 'test6', 0),
(7, 7, '7', 'test7', 0),
(8, 9, '8', 'test8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_branch_link`
--

CREATE TABLE `staff_branch_link` (
  `Staff_Branch_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Staff_Branch_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_branch_link`
--

INSERT INTO `staff_branch_link` (`Staff_Branch_Id`, `Staff_Id`, `Branch_Id`, `Staff_Branch_Status`) VALUES
(1, 1, 5, 'Active'),
(2, 2, 5, 'Active'),
(3, 3, 5, 'Active'),
(4, 4, 5, 'Active'),
(5, 5, 5, 'Active'),
(6, 6, 5, 'Active'),
(7, 7, 5, 'Active'),
(8, 9, 5, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

CREATE TABLE `staff_master` (
  `Staff_Id` bigint(20) NOT NULL,
  `Staff_College_Id` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` char(10) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Staff_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_master`
--

INSERT INTO `staff_master` (`Staff_Id`, `Staff_College_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Contact`, `Email_Id`, `Address`, `Staff_Status`) VALUES
(1, '1', 'Ashish', '', 'Vanmali', '1980-01-14', 'Male', '', 'ashish.vanmali@vcet.edu.in', '', 'Active'),
(2, '2', 'Madhavi', '', 'Waghmari', '1975-04-01', 'Female', '', 'madhavi.waghmare@vcet.edu.in', '', 'Active'),
(3, '3', 'Archana', '', 'Ekbote', '1976-07-09', 'Female', '', 'archana.ekbote@vcet.edu.in', '', 'Active'),
(4, '4', 'Yogesh', '', 'Pingle', '1977-07-04', 'Male', '', 'yogesh.pingle@vcet.edu.in', '', 'Active'),
(5, '5', 'Mariyam', 'k', 'Jawadwala', '0000-00-00', 'Female', '', 'mariyam.jawadwala@vcet.edu.in', '', 'Active'),
(6, '6', 'Swati', '', 'Saigaonkar', '1983-06-21', 'Female', '', 'swati.saigaonkar@vcet.edu.in', '', 'Active'),
(7, '7', 'Bharati', '', 'Gondhalekar', '1975-08-15', 'Female', '', 'bharati.gondhalekar@vcet.edu.in', '', 'Active'),
(9, '8', 'Kamini', '', 'More', '0000-00-00', 'Female', '', 'kamini.more@vcet.edu.in', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_branch_link`
--

CREATE TABLE `student_branch_link` (
  `Student_Branch_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Student_Branch_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_branch_link`
--

INSERT INTO `student_branch_link` (`Student_Branch_Id`, `Student_Id`, `Branch_Id`, `Student_Branch_Status`) VALUES
(1, 1, 5, 'Active'),
(2, 2, 5, 'Active'),
(3, 3, 5, 'Active'),
(4, 4, 5, 'Active'),
(5, 5, 5, 'Active'),
(6, 6, 5, 'Active'),
(7, 7, 5, 'Active'),
(8, 8, 5, 'Active'),
(9, 9, 5, 'Active'),
(10, 10, 5, 'Active'),
(11, 11, 5, 'Active'),
(12, 12, 5, 'Active'),
(13, 13, 5, 'Active'),
(14, 14, 5, 'Active'),
(15, 15, 5, 'Active'),
(16, 16, 5, 'Active'),
(17, 17, 5, 'Active'),
(18, 18, 5, 'Active'),
(19, 19, 5, 'Active'),
(20, 20, 5, 'Active'),
(21, 21, 5, 'Active'),
(22, 22, 5, 'Active'),
(23, 23, 5, 'Active'),
(24, 24, 5, 'Active'),
(25, 25, 5, 'Active'),
(26, 26, 5, 'Active'),
(27, 27, 5, 'Active'),
(28, 28, 5, 'Active'),
(29, 29, 5, 'Active'),
(30, 30, 5, 'Active'),
(31, 31, 5, 'Active'),
(32, 32, 5, 'Active'),
(33, 33, 5, 'Active'),
(34, 34, 5, 'Active'),
(35, 35, 5, 'Active'),
(36, 36, 5, 'Active'),
(37, 37, 5, 'Active'),
(38, 38, 5, 'Active'),
(39, 39, 5, 'Active'),
(40, 40, 5, 'Active'),
(41, 41, 5, 'Active'),
(42, 42, 5, 'Active'),
(43, 43, 5, 'Active'),
(44, 44, 5, 'Active'),
(45, 45, 5, 'Active'),
(46, 46, 5, 'Active'),
(47, 47, 5, 'Active'),
(48, 48, 5, 'Active'),
(49, 49, 5, 'Active'),
(50, 50, 5, 'Active'),
(51, 51, 5, 'Active'),
(52, 52, 5, 'Active'),
(53, 53, 5, 'Active'),
(54, 54, 5, 'Active'),
(55, 55, 5, 'Active'),
(56, 56, 5, 'Active'),
(57, 57, 5, 'Active'),
(58, 58, 5, 'Active'),
(59, 59, 5, 'Active'),
(60, 60, 5, 'Active'),
(61, 61, 5, 'Active'),
(62, 62, 5, 'Active'),
(63, 63, 5, 'Active'),
(64, 64, 5, 'Active'),
(65, 65, 5, 'Active'),
(66, 66, 5, 'Active'),
(67, 67, 5, 'Active'),
(68, 68, 5, 'Active'),
(69, 69, 5, 'Active'),
(70, 70, 5, 'Active'),
(71, 71, 5, 'Active'),
(72, 72, 5, 'Active'),
(73, 73, 5, 'Active'),
(74, 74, 5, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `student_branch_year_link`
--

CREATE TABLE `student_branch_year_link` (
  `Student_Branch_Year_Id` bigint(20) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Semester_Id` bigint(20) NOT NULL,
  `Year_Id` bigint(20) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_branch_year_link`
--

INSERT INTO `student_branch_year_link` (`Student_Branch_Year_Id`, `Academic_Session_Id`, `Student_Id`, `Branch_Id`, `Semester_Id`, `Year_Id`, `Roll_Number`) VALUES
(1, 1, 1, 5, 5, 3, 1),
(2, 1, 2, 5, 5, 3, 2),
(3, 1, 3, 5, 5, 3, 3),
(4, 1, 4, 5, 5, 3, 4),
(5, 1, 5, 5, 5, 3, 5),
(6, 1, 6, 5, 5, 3, 6),
(7, 1, 7, 5, 5, 3, 7),
(8, 1, 8, 5, 5, 3, 8),
(9, 1, 9, 5, 5, 3, 9),
(10, 1, 10, 5, 5, 3, 10),
(11, 1, 11, 5, 5, 3, 11),
(12, 1, 12, 5, 5, 3, 12),
(13, 1, 13, 5, 5, 3, 13),
(14, 1, 14, 5, 5, 3, 14),
(15, 1, 15, 5, 5, 3, 15),
(16, 1, 16, 5, 5, 3, 16),
(17, 1, 17, 5, 5, 3, 17),
(18, 1, 18, 5, 5, 3, 18),
(19, 1, 19, 5, 5, 3, 19),
(20, 1, 20, 5, 5, 3, 20),
(21, 1, 21, 5, 5, 3, 21),
(22, 1, 22, 5, 5, 3, 22),
(23, 1, 23, 5, 5, 3, 23),
(24, 1, 24, 5, 5, 3, 24),
(25, 1, 25, 5, 5, 3, 25),
(26, 1, 26, 5, 5, 3, 26),
(27, 1, 27, 5, 5, 3, 27),
(28, 1, 28, 5, 5, 3, 28),
(29, 1, 29, 5, 5, 3, 29),
(30, 1, 30, 5, 5, 3, 30),
(31, 1, 31, 5, 5, 3, 31),
(32, 1, 32, 5, 5, 3, 32),
(33, 1, 33, 5, 5, 3, 33),
(34, 1, 34, 5, 5, 3, 34),
(35, 1, 35, 5, 5, 3, 35),
(36, 1, 36, 5, 5, 3, 36),
(37, 1, 37, 5, 5, 3, 37),
(38, 1, 38, 5, 5, 3, 38),
(39, 1, 39, 5, 5, 3, 39),
(40, 1, 40, 5, 5, 3, 40),
(41, 1, 41, 5, 5, 3, 41),
(42, 1, 42, 5, 5, 3, 42),
(43, 1, 43, 5, 5, 3, 43),
(44, 1, 44, 5, 5, 3, 44),
(45, 1, 45, 5, 5, 3, 45),
(46, 1, 46, 5, 5, 3, 46),
(47, 1, 47, 5, 5, 3, 47),
(48, 1, 48, 5, 5, 3, 48),
(49, 1, 49, 5, 5, 3, 49),
(50, 1, 50, 5, 5, 3, 50),
(51, 1, 51, 5, 5, 3, 51),
(52, 1, 52, 5, 5, 3, 52),
(53, 1, 53, 5, 5, 3, 53),
(54, 1, 54, 5, 5, 3, 54),
(55, 1, 55, 5, 5, 3, 55),
(56, 1, 56, 5, 5, 3, 56),
(57, 1, 57, 5, 5, 3, 57),
(58, 1, 58, 5, 5, 3, 58),
(59, 1, 59, 5, 5, 3, 59),
(60, 1, 60, 5, 5, 3, 60),
(61, 1, 61, 5, 5, 3, 61),
(62, 1, 62, 5, 5, 3, 62),
(63, 1, 63, 5, 5, 3, 63),
(64, 1, 64, 5, 5, 3, 64),
(65, 1, 65, 5, 5, 3, 65),
(66, 1, 66, 5, 5, 3, 66),
(67, 1, 67, 5, 5, 3, 67),
(68, 1, 68, 5, 5, 3, 68),
(69, 1, 69, 5, 5, 3, 69),
(70, 1, 70, 5, 5, 3, 70),
(71, 1, 71, 5, 5, 3, 71),
(72, 1, 72, 5, 5, 3, 72),
(73, 1, 73, 5, 5, 3, 73),
(74, 1, 74, 5, 5, 3, 74);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Student_Login_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Student_College_Id` varchar(50) NOT NULL,
  `Student_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Student_Login_Id`, `Student_Id`, `Student_College_Id`, `Student_Password`) VALUES
(1, 1, '174101207', '174101207'),
(2, 2, '181864101', '181864101'),
(3, 3, '181874201', '181874201'),
(4, 4, '181884105', '181884105'),
(5, 5, '181894205', '181894205'),
(6, 6, '181914205', '181914205'),
(7, 7, '181924101', '181924101'),
(8, 8, '181934101', '181934101'),
(9, 9, '181954105', '181954105'),
(10, 10, '181964101', '181964101'),
(11, 11, '181974201', '181974201'),
(12, 12, '181984101', '181984101'),
(13, 13, '181994102', '181994102'),
(14, 14, '182004101', '182004101'),
(15, 15, '182014105', '182014105'),
(16, 16, '182024101', '182024101'),
(17, 17, '182034209', '182034209'),
(18, 18, '182044202', '182044202'),
(19, 19, '182054105', '182054105'),
(20, 20, '182064201', '182064201'),
(21, 21, '182074201', '182074201'),
(22, 22, '182084101', '182084101'),
(23, 23, '182094105', '182094105'),
(24, 24, '182104202', '182104202'),
(25, 25, '182114101', '182114101'),
(26, 26, '182124101', '182124101'),
(27, 27, '182134105', '182134105'),
(28, 28, '182144102', '182144102'),
(29, 29, '182154101', '182154101'),
(30, 30, '182164102', '182164102'),
(31, 31, '182174101', '182174101'),
(32, 32, '182184102', '182184102'),
(33, 33, '182194101', '182194101'),
(34, 34, '182214101', '182214101'),
(35, 35, '182224101', '182224101'),
(36, 36, '182234201', '182234201'),
(37, 37, '182244102', '182244102'),
(38, 38, '182254105', '182254105'),
(39, 39, '182264101', '182264101'),
(40, 40, '182284101', '182284101'),
(41, 41, '182294208', '182294208'),
(42, 42, '182314106', '182314106'),
(43, 43, '182324101', '182324101'),
(44, 44, '182344201', '182344201'),
(45, 45, '182354101', '182354101'),
(46, 46, '182364101', '182364101'),
(47, 47, '182374101', '182374101'),
(48, 48, '182384101', '182384101'),
(49, 49, '182394201', '182394201'),
(50, 50, '182404105', '182404105'),
(51, 51, '182414201', '182414201'),
(52, 52, '182424101', '182424101'),
(53, 53, '182434101', '182434101'),
(54, 54, '182444101', '182444101'),
(55, 55, '182454201', '182454201'),
(56, 56, '182474201', '182474201'),
(57, 57, '182484201', '182484201'),
(58, 58, 'S193894202', 'S193894202'),
(59, 59, 'S19390410', 'S19390410'),
(60, 60, '193914201', '193914201'),
(61, 61, 'S193924105', 'S193924105'),
(62, 62, 'S193934205', 'S193934205'),
(63, 63, 'S193944106', 'S193944106'),
(64, 64, 'S193954210', 'S193954210'),
(65, 65, '193964101', '193964101'),
(66, 66, '174101243', '174101243'),
(67, 67, '	174101192', '	174101192'),
(68, 68, '174102186', '174102186'),
(69, 69, '174101190', '174101190'),
(70, 70, '164101247', '164101247'),
(71, 71, '1741001187', '1741001187'),
(72, 72, '174202241', '174202241'),
(73, 73, '154105174', '154105174'),
(74, 74, '164101195', '164101195');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `Student_Id` bigint(20) NOT NULL,
  `Student_College_Id` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Middle_Name` varchar(50) DEFAULT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(300) DEFAULT NULL,
  `Student_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`Student_Id`, `Student_College_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `Date_Of_Birth`, `Gender`, `Contact`, `Email_Id`, `Address`, `Student_Status`) VALUES
(1, '174101207', 'Nirmit', '', 'Lakhani', '0000-00-00', 'Male', '9167366731', 'nirmitlakhani314@gmail.com', '', 'Active'),
(2, '181864101', 'Mayank', '', 'Agrawal', '0000-00-00', 'Male', '8793156748', 'agrawalmayank039@gmail.com', '', 'Active'),
(3, '181874201', 'Nishmi', '', 'Amin', '0000-00-00', 'Female', '7758082459', 'nishamin9@gmail.com', '', 'Active'),
(4, '181884105', 'Adnan', '', 'Ansari', '0000-00-00', 'Male', '8383969296', 'adnan07ansari07@gmail.com', '', 'Active'),
(5, '181894205', 'Mrunmayee', '', 'Apte', '0000-00-00', 'Female', '9833969647', 'mrunmayeeapte27@gmail.com', '', 'Active'),
(6, '181914205', 'Ruchi', '', 'Bari', '0000-00-00', 'Female', '9923605011', 'ruchi.bari85@gmail.com', '', 'Active'),
(7, '181924101', 'Himanshu', '', 'Bhalala', '0000-00-00', 'Male', '9326367454', 'himanshubhalala73030@gmail.com', '', 'Active'),
(8, '181934101', 'Prashant', '', 'Bhatkal', '0000-00-00', 'Male', '7558635129', 'prashantbhatkal2000@gmail.com', '', 'Active'),
(9, '181954105', 'Suchit', '', 'Borge', '0000-00-00', 'Male', '8879323171', 'suchitborge30@gmail.com', '', 'Active'),
(10, '181964101', 'Ankitkumar', '', 'Chaudhary', '0000-00-00', 'Male', '8805037422', 'islelano55555@gmail.com', '', 'Active'),
(11, '181974201', 'Anjali', '', 'Chaurasiya', '0000-00-00', 'Female', '9702660085', 'anjalichaurasiya90909@gmail.com', '', 'Active'),
(12, '181984101', 'Vikas', '', 'Dabhi', '0000-00-00', 'Male', '7045506035', 'vikas.dabhi7@gmail.com', '', 'Active'),
(13, '181994102', 'Hardik', '', 'Dangiya', '0000-00-00', 'Male', '7021237224', 'dangiyahardik8@gmail.com', '', 'Active'),
(14, '182004101', 'Chirag', '', 'Darji', '0000-00-00', 'Male', '8104379005', 'chiragdarji04@gmail.com', '', 'Active'),
(15, '182014105', 'Jayesh', '', 'Deorukhkar', '0000-00-00', 'Male', '9503088957', 'jddeorukhkar@gmail.com', '', 'Active'),
(16, '182024101', 'Abhishek', '', 'Dhule', '0000-00-00', 'Male', '9137545714', 'abhishek.dhule.79@gmail.com', '', 'Active'),
(17, '182034209', 'Vanashree', '', 'Gaikwad', '0000-00-00', 'Female', '9503473331', 'vanashree.vcet@gmail.com', '', 'Active'),
(18, '182044202', 'Samruddhi', '', 'Gamre', '0000-00-00', 'Female', '8652662341', 'samruddhi.24.99@gmail.com', '', 'Active'),
(19, '182054105', 'Yash', '', 'Gharat', '0000-00-00', 'Male', '7448205547', 'gharatyash2711@gmail.com', '', 'Active'),
(20, '182064201', 'Sweta', '', 'Gupta', '2000-03-22', 'Female', '8208656966', 'shwetagupta22031607@gmail.com', '', 'Active'),
(21, '182074201', 'Aakanksha', '', 'Jadhav', '0000-00-00', 'Female', '9552994941', 'aakanksha2706@gmail.com', '', 'Active'),
(22, '182084101', 'Yash', '', 'Jobalia', '2000-01-02', 'Male', '9769264884', 'jobaliayash@gmail.com', '', 'Active'),
(23, '182094105', 'Romin', '', 'Katre', '0000-00-00', 'Male', '8459737585', 'romin.katre32.rk@gmail.com', '', 'Active'),
(24, '182104202', 'Ankita', '', 'Kawade', '0000-00-00', 'Female', '9372645974', 'ankitakawade2311@gmail.com', '', 'Active'),
(25, '182114101', 'Shrutik', 'Rakesh', 'Kharkar', '0000-00-00', 'Male', '8433232766', 'shrutikharkar3@gmail.com', '', 'Active'),
(26, '182124101', 'Dhruv', '', 'Kathor', '0000-00-00', 'Male', '8208835808', 'dhruvkhator19@gmail.com', '', 'Active'),
(27, '182134105', 'Harsh', '', 'Kore', '0000-00-00', 'Male', '9075336647', 'harsh.kore922@gmail.com', '', 'Active'),
(28, '182144102', 'Paras', 'Mahesh', 'Lad', '0000-00-00', 'Male', '9284389650', 'paaraas93@gmail.com', '', 'Active'),
(29, '182154101', 'Soham', '', 'Madhvani', '0000-00-00', 'Male', '9664314465', 'sohammadhvani@gmail.com', '', 'Active'),
(30, '182164102', 'Karan', '', 'Mane', '0000-00-00', 'Male', '9004239013', 'karankisanmane09@gmail.com', '', 'Active'),
(31, '182174101', 'Krishna', '', 'Maniyar', '0000-00-00', 'Male', '8888354740', 'maniyarkrishna5@gmail.com', '', 'Active'),
(32, '182184102', 'Atul', '', 'Manwar', '0000-00-00', 'Male', '8097972725', 'bmatul139@gmail.com', '', 'Active'),
(33, '182194101', 'Shubham', '', 'Maurya', '0000-00-00', 'Male', '9326896133', 'smmaurya29012001@gmail.com', '', 'Active'),
(34, '182214101', 'Neel', '', 'Mehta', '0000-00-00', 'Male', '9998686763', 'neelmehat9409@gmail.com', '', 'Active'),
(35, '182224101', 'Abhineet', '', 'Menon', '0000-00-00', 'Male', '8552825199', 'menonabhineet@gmail.com', '', 'Active'),
(36, '182234201', 'Aakanksha', '', 'Mohite', '0000-00-00', 'Female', '9967947139', 'aakanksharmohite@gmail.com', '', 'Active'),
(37, '182244102', 'Hridayesh', '', 'More', '0000-00-00', 'Male', '7738756301', 'hridayeshmore16@gmail.com', '', 'Active'),
(38, '182254105', 'Chirag', '', 'Narkar', '0000-00-00', 'Male', '9768114836', 'chiragnarkar2507@gmail.com', '', 'Active'),
(39, '182264101', 'Harsh', '', 'Pandya', '0000-00-00', 'Male', '9833524520', 'harshkalppandya777@gmail.com', '', 'Active'),
(40, '182284101', 'Parag', '', 'Patankar', '0000-00-00', 'Male', '7758075860', 'paragpatankar7@gmail.com', '', 'Active'),
(41, '182294208', 'Riya', '', 'Patil', '0000-00-00', 'Female', '9561659076', 'riyamaheshpatil0701@gmail.com', '', 'Active'),
(42, '182314106', 'Pranay', '', 'Patre', '0000-00-00', 'Male', '9767654726', 'pranaypatre15@gmail.com', '', 'Active'),
(43, '182324101', 'Dhru', '', 'Prajapati', '0000-00-00', 'Male', '9326225071', 'dhruprajapati18@gmail.com', '', 'Active'),
(44, '182344201', 'Jidnyasa', '', 'Raut', '0000-00-00', 'Female', '7507884947', 'jidnyasaraut18@gmail.com', '', 'Active'),
(45, '182354101', 'Aniket', '', 'Shah', '0000-00-00', 'Male', '7977871863', 'aniketshah2407@gmail.com', '', 'Active'),
(46, '182364101', 'Rushank', '', 'Sheta', '0000-00-00', 'Male', '9820225709', 'rushanksheta00@gmail.com', '', 'Active'),
(47, '182374101', 'Isheet', '', 'Shetty', '2000-10-19', 'Male', '9653341482', 'isheetshetty@gmail.com', '', 'Active'),
(48, '182384101', 'Pritam', '', 'Shinde', '0000-00-00', 'Male', '8007500809', 'prit.ps4606@gmail.com', '', 'Active'),
(49, '182394201', 'Sweety', '', 'Singh', '0000-00-00', 'Female', '8104454394', 'sweetysingh@gmail.com', '', 'Active'),
(50, '182404105', 'Prathamesh', '', 'Suryavanshi', '0000-00-00', 'Male', '9821934954', 'prathameshsuryavanshi9@gmail.com', '', 'Active'),
(51, '182414201', 'Anvita ', '', 'Suvarna', '0000-00-00', 'Female', '9769826687', 'anvitasuvarna13@gmail.com', '', 'Active'),
(52, '182424101', 'Shubhamkar ', '', 'Thavi', '0000-00-00', 'Male', '9167221812', 'thavi007@gmail.com', '', 'Active'),
(53, '182434101', 'Dharmesh ', '', 'Thorgavankar	', '0000-00-00', 'Male', '9168816057', 'dharmeshthorgavankar@gmail.com', '', 'Active'),
(54, '182444101', 'Chintan ', '', 'Trivedi', '0000-00-00', 'Male', '7021223174', 'chintantrivedi786@gmail.com', '', 'Active'),
(55, '182454201', 'Yukta ', '', 'Upadhye', '0000-00-00', 'Female', '9975857548', 'yuktaupadhey1@gmail.com', '', 'Active'),
(56, '182474201', 'Ashwini ', '', 'Walavakar', '0000-00-00', 'Female', '9619310434', 'itsashu5656@gmail.com', '', 'Active'),
(57, '182484201', 'Jyoti ', '', 'Yadav', '0000-00-00', 'Female', '7709691784', 'nainay1805@gmail.com', '', 'Active'),
(58, 'S193894202', 'Tejal ', '', 'Ille', '0000-00-00', 'Female', '9967263870', 'tejalille18@gmail.com', '', 'Active'),
(59, 'S19390410', 'Chinmay', '', 'Ingale', '0000-00-00', 'Male', '9082427001', 'chinmay274@gmail.com', '', 'Active'),
(60, '193914201', 'Granthali ', '', 'Jadhav', '0000-00-00', 'Female', '8600957261', 'jadhavgranthali@gmail.com', '', 'Active'),
(61, 'S193924105', 'Ranveer', '', 'kothavale	', '0000-00-00', 'Male', '9167618127', 'ranveerkothavale09@gmail.com', '', 'Active'),
(62, 'S193934205', 'Mansi ', '', 'Malap', '0000-00-00', 'Female', '9028605933', 'malapmansi9@gmail.com', '', 'Active'),
(63, 'S193944106', 'Akshay 	', '', 'More	', '0000-00-00', 'Male', '7276800872', 'moreakshay725@gmail.com', '', 'Active'),
(64, 'S193954210', 'Shivani ', '', 'Shirke	', '0000-00-00', 'Female', '9284410572', 'shivanishirke789@gmail.com', '', 'Active'),
(65, '193964101', 'Hardik  ', '', 'Yewale', '0000-00-00', 'Male', '9987871771', 'yewalehardik@gmail.com', '', 'Active'),
(66, '174101243', 'Ram ', '', 'Vaghani	', '0000-00-00', 'Male', '8080699912', 'ram.vaghani18@gmail.com', '', 'Active'),
(67, '174101192', 'Ankit 	', '', 'Dube', '0000-00-00', 'Male', '8830228121', 'ankitdubey1218@gmail.com', '', 'Active'),
(68, '174102186', 'Dhruvesh ', '', 'Chauhan	', '0000-00-00', 'Male', '8879915943', 'dhruveshccc2200@gmail.com', '', 'Active'),
(69, '174101190', 'Vedant ', '', 'Desai	', '0000-00-00', 'Male', '9527092930', 'vedantdesai2810@gmail.com', '', 'Active'),
(70, '164101247', 'Deepak ', '', 'yadav	', '0000-00-00', 'Male', '9619252507', 'dee1010yadav@gmail.com', '', 'Active'),
(71, '1741001187', 'Sauravkumar 	', '', 'Choudhary', '0000-00-00', 'Male', '7756892987', 'choudharysaurav69@gmail.com', '', 'Active'),
(72, '174202241', 'Shreya ', '', 'Tawre ', '0000-00-00', 'Male', '9373611085', 'shreyatawre123@gmail.com', '', 'Active'),
(73, '154105174', 'Pruthvi', '', ' Hajare	', '0000-00-00', 'Female', '8805433102', 'pruthvihajare29@gmail.com', '', 'Active'),
(74, '164101195', 'Omkar ', '', 'Chavan	', '0000-00-00', 'Male', '9403205472', 'omchavan1998@gmail.com', '', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `Subject_Id` bigint(20) NOT NULL,
  `Subject_Name` varchar(100) NOT NULL,
  `Subject_Code` varchar(50) NOT NULL,
  `Subject_Status` varchar(50) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Semester_Id` bigint(20) NOT NULL
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
(36, 'Environmental Studies', '1166', 'Active', 6, 1),
(37, 'Microcontroller And Embedded Programming', 'ITC501', 'Active', 5, 5),
(38, 'Internet Programming', 'ITC502', 'Active', 5, 5),
(39, 'Advanced Data Management Technology', 'ITC503', 'Active', 5, 5),
(40, 'Cryptography & Network Security', 'ITC504', 'Active', 5, 5),
(41, 'Internet Programming Lab', 'ITL501', 'Active', 5, 5),
(42, 'Security Lab', 'ITL502', 'Active', 5, 5),
(43, 'OLAP Lab', 'ITL503', 'Active', 5, 5),
(44, 'IOT (MiniProject) Lab', 'ITL504', 'Active', 5, 5),
(45, 'Business Communication and Ethics', 'ITL505', 'Active', 5, 5),
(46, 'Advance Data Structures & Analysis of Algorithms', 'ITDL05011', 'Active', 5, 5),
(47, 'Image Processing ', 'ITDL05012', 'De-Active', 5, 5),
(48, 'E-Commerce & E-Business', 'ITDL05013', 'Active', 5, 5),
(49, 'IT Enabled Services', 'ITDL05014', 'De-Active', 5, 5),
(50, 'Computer Graphics & Virtual Reality ', 'ITDL05015', 'De-Active', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subject_staff_link`
--

CREATE TABLE `subject_staff_link` (
  `Subject_Staff_Id` bigint(20) NOT NULL,
  `Subject_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Subject_Staff_Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_staff_link`
--

INSERT INTO `subject_staff_link` (`Subject_Staff_Id`, `Subject_Id`, `Staff_Id`, `Academic_Session_Id`, `Subject_Staff_Status`) VALUES
(1, 37, 2, 1, 'Active'),
(2, 38, 4, 1, 'Active'),
(3, 39, 5, 1, 'Active'),
(4, 40, 3, 1, 'Active'),
(5, 41, 4, 1, 'Active'),
(6, 42, 3, 1, 'Active'),
(7, 43, 5, 1, 'Active'),
(8, 44, 4, 1, 'Active'),
(9, 45, 9, 1, 'Active'),
(10, 46, 6, 1, 'Active'),
(11, 48, 7, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `year_master`
--

CREATE TABLE `year_master` (
  `Year_Id` bigint(20) NOT NULL,
  `Year_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_session_master`
--
ALTER TABLE `academic_session_master`
  ADD PRIMARY KEY (`Academic_Session_Id`);

--
-- Indexes for table `attendance_master`
--
ALTER TABLE `attendance_master`
  ADD PRIMARY KEY (`Attendance_Id`);

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`Branch_Id`);

--
-- Indexes for table `defaulter_action_master`
--
ALTER TABLE `defaulter_action_master`
  ADD PRIMARY KEY (`Defaulter_Action_Id`);

--
-- Indexes for table `lecture_master`
--
ALTER TABLE `lecture_master`
  ADD PRIMARY KEY (`Lecture_Id`);

--
-- Indexes for table `staff_admin_login`
--
ALTER TABLE `staff_admin_login`
  ADD PRIMARY KEY (`Staff_Admin_Login_Id`);

--
-- Indexes for table `staff_branch_link`
--
ALTER TABLE `staff_branch_link`
  ADD PRIMARY KEY (`Staff_Branch_Id`);

--
-- Indexes for table `staff_master`
--
ALTER TABLE `staff_master`
  ADD PRIMARY KEY (`Staff_Id`),
  ADD UNIQUE KEY `Staff_College_Id` (`Staff_College_Id`);

--
-- Indexes for table `student_branch_link`
--
ALTER TABLE `student_branch_link`
  ADD PRIMARY KEY (`Student_Branch_Id`);

--
-- Indexes for table `student_branch_year_link`
--
ALTER TABLE `student_branch_year_link`
  ADD PRIMARY KEY (`Student_Branch_Year_Id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Student_Login_Id`);

--
-- Indexes for table `student_master`
--
ALTER TABLE `student_master`
  ADD PRIMARY KEY (`Student_Id`),
  ADD UNIQUE KEY `Student_College_Id` (`Student_College_Id`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`Subject_Id`);

--
-- Indexes for table `subject_staff_link`
--
ALTER TABLE `subject_staff_link`
  ADD PRIMARY KEY (`Subject_Staff_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_session_master`
--
ALTER TABLE `academic_session_master`
  MODIFY `Academic_Session_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance_master`
--
ALTER TABLE `attendance_master`
  MODIFY `Attendance_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `defaulter_action_master`
--
ALTER TABLE `defaulter_action_master`
  MODIFY `Defaulter_Action_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_master`
--
ALTER TABLE `lecture_master`
  MODIFY `Lecture_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_admin_login`
--
ALTER TABLE `staff_admin_login`
  MODIFY `Staff_Admin_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_branch_link`
--
ALTER TABLE `staff_branch_link`
  MODIFY `Staff_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_branch_link`
--
ALTER TABLE `student_branch_link`
  MODIFY `Student_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student_branch_year_link`
--
ALTER TABLE `student_branch_year_link`
  MODIFY `Student_Branch_Year_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Student_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `Student_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `Subject_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subject_staff_link`
--
ALTER TABLE `subject_staff_link`
  MODIFY `Subject_Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
