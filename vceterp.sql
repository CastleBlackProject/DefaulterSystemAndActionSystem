-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 08:17 PM
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
  `Academic_Session_Id` bigint(10) NOT NULL,
  `Academic_Session_Name` varchar(20) NOT NULL,
  `Academic_Session_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_session_master`
--

INSERT INTO `academic_session_master` (`Academic_Session_Id`, `Academic_Session_Name`, `Academic_Session_Status`) VALUES
(1, '2018-2019', 'Active'),
(2, '2019-2020', 'Active'),
(3, '2020-2021', 'Active'),
(4, '2021-2022', 'Active'),
(5, '2017-2018', 'De-Active');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_master`
--

CREATE TABLE `attendance_master` (
  `Attendance_Id` bigint(20) NOT NULL,
  `Lecture_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Is_Present` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `Branch_Id` int(5) NOT NULL,
  `Branch_Name` varchar(100) NOT NULL,
  `Branch_Code` varchar(10) NOT NULL,
  `Branch_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_master`
--

INSERT INTO `branch_master` (`Branch_Id`, `Branch_Name`, `Branch_Code`, `Branch_Status`) VALUES
(1, 'Mechanical Engineering', '1', 'Active'),
(2, 'Electronics And Telecommunications Engineering', '2', 'Active'),
(3, 'Instrumentation Engineering', '3', 'Active'),
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

-- --------------------------------------------------------

--
-- Table structure for table `semester_master`
--

CREATE TABLE `semester_master` (
  `Semester_Id` int(2) NOT NULL,
  `Semester_Name` varchar(50) NOT NULL,
  `Year_Id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester_master`
--

INSERT INTO `semester_master` (`Semester_Id`, `Semester_Name`, `Year_Id`) VALUES
(1, 'SEMESTER 1', 1),
(2, 'SEMESTER 2', 1),
(3, 'SEMESTER 3', 2),
(4, 'SEMESTER 4', 2),
(5, 'SEMESTER 5', 3),
(6, 'SEMESTER 6', 3),
(7, 'SEMESTER 7', 4),
(8, 'SEMESTER 8', 4);

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
(3, 3, '3', 'test3', 1),
(4, 4, '4', 'test4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_branch_link`
--

CREATE TABLE `staff_branch_link` (
  `Staff_Branch_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Branch_Id` bigint(20) NOT NULL,
  `Staff_Branch_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

CREATE TABLE `staff_master` (
  `Staff_Id` bigint(10) NOT NULL,
  `Staff_College_Id` varchar(50) NOT NULL,
  `First_Name` text NOT NULL,
  `Middle_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` text NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Staff_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_branch_link`
--

CREATE TABLE `student_branch_link` (
  `Student_Branch_Id` bigint(5) NOT NULL,
  `Student_Id` bigint(5) NOT NULL,
  `Branch_Id` bigint(5) NOT NULL,
  `Student_Branch_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_branch_year_link`
--

CREATE TABLE `student_branch_year_link` (
  `Student_Branch_Year_Id` bigint(10) NOT NULL,
  `Academic_Session_Id` bigint(10) NOT NULL,
  `Student_Id` bigint(10) NOT NULL,
  `Branch_Id` bigint(10) NOT NULL,
  `Semester_Id` bigint(20) NOT NULL,
  `Year_Id` bigint(10) NOT NULL,
  `Roll_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Student_Login_Id` bigint(20) NOT NULL,
  `Student_Id` bigint(20) NOT NULL,
  `Student_College_Id` varchar(100) NOT NULL,
  `Student_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE `student_master` (
  `Student_Id` bigint(10) NOT NULL,
  `Student_College_Id` varchar(50) NOT NULL,
  `First_Name` text NOT NULL,
  `Middle_Name` text NOT NULL,
  `Last_Name` text NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Gender` text NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email_Id` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Student_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `subject_staff_link`
--

CREATE TABLE `subject_staff_link` (
  `Subject_Staff_Id` bigint(20) NOT NULL,
  `Subject_Id` bigint(20) NOT NULL,
  `Staff_Id` bigint(20) NOT NULL,
  `Academic_Session_Id` bigint(20) NOT NULL,
  `Subject_Staff_Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `year_master`
--

CREATE TABLE `year_master` (
  `Year_Id` int(2) NOT NULL,
  `Year_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `year_master`
--

INSERT INTO `year_master` (`Year_Id`, `Year_Name`) VALUES
(1, 'FE'),
(2, 'SE'),
(3, 'TE'),
(4, 'BE');

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
  ADD PRIMARY KEY (`Branch_Id`),
  ADD UNIQUE KEY `Branch_Name` (`Branch_Name`),
  ADD UNIQUE KEY `Branch_Code` (`Branch_Code`),
  ADD KEY `Branch_Id` (`Branch_Id`);

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
-- Indexes for table `semester_master`
--
ALTER TABLE `semester_master`
  ADD PRIMARY KEY (`Semester_Id`),
  ADD KEY `Semister_Id` (`Semester_Id`),
  ADD KEY `SEM_YEAR_ID_CNSTRNT` (`Year_Id`);

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
  ADD PRIMARY KEY (`Subject_Id`),
  ADD KEY `Branch_Id` (`Branch_Id`,`Semester_Id`);

--
-- Indexes for table `subject_staff_link`
--
ALTER TABLE `subject_staff_link`
  ADD PRIMARY KEY (`Subject_Staff_Id`);

--
-- Indexes for table `year_master`
--
ALTER TABLE `year_master`
  ADD PRIMARY KEY (`Year_Id`),
  ADD KEY `Year_Id` (`Year_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_session_master`
--
ALTER TABLE `academic_session_master`
  MODIFY `Academic_Session_Id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attendance_master`
--
ALTER TABLE `attendance_master`
  MODIFY `Attendance_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch_master`
--
ALTER TABLE `branch_master`
  MODIFY `Branch_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `defaulter_action_master`
--
ALTER TABLE `defaulter_action_master`
  MODIFY `Defaulter_Action_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecture_master`
--
ALTER TABLE `lecture_master`
  MODIFY `Lecture_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_admin_login`
--
ALTER TABLE `staff_admin_login`
  MODIFY `Staff_Admin_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_branch_link`
--
ALTER TABLE `staff_branch_link`
  MODIFY `Staff_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `Staff_Id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_branch_link`
--
ALTER TABLE `student_branch_link`
  MODIFY `Student_Branch_Id` bigint(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_branch_year_link`
--
ALTER TABLE `student_branch_year_link`
  MODIFY `Student_Branch_Year_Id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Student_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `Student_Id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `Subject_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subject_staff_link`
--
ALTER TABLE `subject_staff_link`
  MODIFY `Subject_Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `semester_master`
--
ALTER TABLE `semester_master`
  ADD CONSTRAINT `SEM_YEAR_ID_CNSTRNT` FOREIGN KEY (`Year_Id`) REFERENCES `year_master` (`Year_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
