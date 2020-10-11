-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 07:08 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
(25, 25, 5, 'Active');

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
(25, 1, 25, 5, 5, 3, 25);

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
(25, 25, '182114101', '182114101');

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
(25, '182114101', 'Shrutik', 'Rakesh', 'Kharkar', '0000-00-00', 'Male', '8433232766', 'shrutikharkar3@gmail.com', '', 'Active');

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
  `Subject_Staff_Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `Attendance_Id` bigint(20) NOT NULL AUTO_INCREMENT;

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
  MODIFY `Lecture_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_admin_login`
--
ALTER TABLE `staff_admin_login`
  MODIFY `Staff_Admin_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_branch_link`
--
ALTER TABLE `staff_branch_link`
  MODIFY `Staff_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_branch_link`
--
ALTER TABLE `student_branch_link`
  MODIFY `Student_Branch_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student_branch_year_link`
--
ALTER TABLE `student_branch_year_link`
  MODIFY `Student_Branch_Year_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `Student_Login_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student_master`
--
ALTER TABLE `student_master`
  MODIFY `Student_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `Subject_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subject_staff_link`
--
ALTER TABLE `subject_staff_link`
  MODIFY `Subject_Staff_Id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
