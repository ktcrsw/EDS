-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 06:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `no` int(11) NOT NULL,
  `ref_subjectID` int(11) DEFAULT NULL,
  `ref_teacherID` int(11) DEFAULT NULL,
  `ref_stdID` varchar(255) DEFAULT NULL,
  `check_in_status` varchar(255) DEFAULT NULL,
  `groups` int(11) NOT NULL,
  `check_in_date` varchar(255) DEFAULT NULL,
  `save_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classschedule`
--

CREATE TABLE `classschedule` (
  `classSchedule_id` int(11) NOT NULL,
  `classSchedule_subjectName` varchar(255) DEFAULT NULL,
  `classSchedule_teacherName` varchar(255) DEFAULT NULL,
  `classSchedule_Course` varchar(255) NOT NULL,
  `classSchedule_Room` varchar(255) NOT NULL,
  `classSchedule_date` varchar(255) DEFAULT NULL,
  `classSchedule_Start` varchar(255) DEFAULT NULL,
  `classSchedule_End` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `classschedule`
--

INSERT INTO `classschedule` (`classSchedule_id`, `classSchedule_subjectName`, `classSchedule_teacherName`, `classSchedule_Course`, `classSchedule_Room`, `classSchedule_date`, `classSchedule_Start`, `classSchedule_End`) VALUES
(2, 'คอมพิวเตอร์เบื้องต้น 1', 'อ.คชาม์', 'ปวช.', '535', 'พุธ', '14.30', '15.30 '),
(7, 'ฝึกงาน', 'อ.บงกชเพชร', 'ปวส.', '', 'ศุกร์', '17.30', '18.30'),
(8, 'หลักการออกแบบระบบ 3', 'อ.คชาม์', 'ปวช', '533', 'พุธ', '14.30', '16.30'),
(11, 'คอมพิวเตอร์เบื้องต้น 1', 'กิตติชัย', 'ปวช', '530', 'จันทร์', '8.30', '9.30'),
(12, 'ฐานข้อมูลเบื้องต้น 1', 'กิตติชัย', 'ปวช', '530', 'จันทร์', '10.30', '12.30');

-- --------------------------------------------------------

--
-- Table structure for table `classtbl`
--

CREATE TABLE `classtbl` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `class_limit` int(11) DEFAULT NULL,
  `class_time` varchar(255) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createscore`
--

CREATE TABLE `createscore` (
  `createScoreID` int(11) NOT NULL,
  `createScoreTeacherID` int(11) DEFAULT NULL,
  `createScoreMind` int(11) DEFAULT NULL,
  `createScoreTheory` int(11) DEFAULT NULL,
  `createScoreCarry` int(11) DEFAULT NULL,
  `createScoreFinal` int(11) DEFAULT NULL,
  `createScoreStartDate` date DEFAULT NULL,
  `createScoreEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollsubject`
--

CREATE TABLE `enrollsubject` (
  `nullID` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `schedule_title` varchar(255) NOT NULL,
  `ref_studenttbl` varchar(255) DEFAULT NULL,
  `ref_stdfname` varchar(255) DEFAULT NULL,
  `ref_stdlname` varchar(255) DEFAULT NULL,
  `ref_stdGroups` int(11) DEFAULT NULL,
  `ref_years` int(11) DEFAULT NULL,
  `ref_status` int(11) DEFAULT NULL,
  `ref_stdImg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `enrollsubject`
--

INSERT INTO `enrollsubject` (`nullID`, `schedule_id`, `u_id`, `schedule_title`, `ref_studenttbl`, `ref_stdfname`, `ref_stdlname`, `ref_stdGroups`, `ref_years`, `ref_status`, `ref_stdImg`) VALUES
(1, 17, 1, 'การเขียนโปรแกรมด้วยภาษา Python', '64209010026', 'เตชสิทธิ์', 'แก้ววิเชียร', 2, 3, 1, '64209010026.jpg\n'),
(2, 17, 1, 'การเขียนโปรแกรมด้วยภาษา Python', '64209010027', 'คชาม์', 'สร้อยศรี', 2, 3, 1, '64209010027.jpg'),
(3, 17, 1, 'การเขียนโปรแกรมด้วยภาษา Python', '64209010028', 'ทรงพล', 'คำภูมี', 2, 3, 1, '64209010028.png'),
(4, 17, 1, 'การเขียนโปรแกรมด้วยภาษา Python', '64209010030', 'กิตติชัย', 'รักษาวงค์', 2, 3, 1, '64209010030.png');

-- --------------------------------------------------------

--
-- Table structure for table `enrolltbl`
--

CREATE TABLE `enrolltbl` (
  `no` int(11) NOT NULL,
  `ref_course` varchar(255) NOT NULL,
  `ref_studenttbl` varchar(13) DEFAULT NULL,
  `ref_stdfname` varchar(255) NOT NULL,
  `ref_stdlname` varchar(255) NOT NULL,
  `ref_sex` varchar(10) NOT NULL,
  `ref_stdGroups` int(11) NOT NULL,
  `ref_years` varchar(255) NOT NULL,
  `ref_department` varchar(255) NOT NULL,
  `ref_status` int(11) NOT NULL,
  `ref_stdImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `enrolltbl`
--

INSERT INTO `enrolltbl` (`no`, `ref_course`, `ref_studenttbl`, `ref_stdfname`, `ref_stdlname`, `ref_sex`, `ref_stdGroups`, `ref_years`, `ref_department`, `ref_status`, `ref_stdImg`) VALUES
(1, 'ปวช', '64209010026', 'เตชสิทธิ์', 'แก้ววิเชียร', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 1, '64209010026.jpg'),
(2, 'ปวช', '64209010027', 'คชาม์', 'สร้อยศรี', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 1, '64209010027.jpg'),
(3, 'ปวช', '64209010028', 'ทรงพล', 'คำภูมี', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 1, '64209010028.png'),
(4, 'ปวช', '64209010030', 'กิตติชัย', 'รักษาวงค์', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 1, '64209010030.png'),
(5, 'ปวช', '64209010031', 'สุทธิชัย', 'ตะกุดโฉม', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010031.png'),
(6, 'ปวช', '64209010032', 'พัชรพล', 'ธรเสนา', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010032.png'),
(7, 'ปวช', '64209010033', 'บงกชเพชร', 'ยอดกระโทก', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010033.png'),
(8, 'ปวช', '64209010034', 'ธีรศักดิ์', 'พลเมืองนิด', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010034.png'),
(9, 'ปวช', '64209010035', 'ภูชิต', 'สายวินัย', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010035.png'),
(10, 'ปวช', '64209010038', 'ชนากานต์', 'พงษ์สุทธิ์', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010038.png'),
(11, 'ปวช', '64209010042', 'ศิวนาถ', 'ธนทรัพย์อำไพ', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '64209010042.png'),
(12, 'ปวช', '64209010002', 'ศุภนิมิต', 'พยัคฆพงศ์', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(13, 'ปวช', '64209010003', 'ศรยุทธ', 'ทองใส', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(14, 'ปวช', '64209010004', 'กฤษฏ์', 'ถาวโร', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(15, 'ปวช', '64209010005', 'มนัญชัย', 'น้อยไทย', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(16, 'ปวช', '64209010006', 'อรุณรัตน์', 'ประชานันท์', 'หญิง', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(17, 'ปวช', '64209010007', 'กิติศักดิ์', 'ศรีนามหวด', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(18, 'ปวช', '64209010008', 'นนทนันท์', 'ชุมคำไฮ', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(19, 'ปวช', '64209010009', 'วิรัตน์', 'เบ้าทองหล่อ', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(20, 'ปวช', '64209010010', 'วราวุฒิ', 'ขาวขำ', 'ชาย', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(21, 'ปวช', '64209010011', 'นภิสรา', 'อิทธิสาร', 'หญิง', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(22, 'ปวช', '64209010012', 'เวียงพิงค์', 'โคตรภักดี', 'หญิง', 1, '3', 'เทคโนโลยีสารสนเทศ', 1, ''),
(23, 'ปวช', '64209010013', 'พัชราภา', 'สาริยา', 'หญิง', 1, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(24, 'ปวช', '64209010045', 'ชนาธิป', 'ปัทมวงศ์จริยา', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(25, 'ปวช', '64209010047', 'ศิริวัฒน์', 'อุทัยมาตย์', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(26, 'ปวช', '64209010048', 'พันธกร', 'โพพะนา', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(27, 'ปวช', '64209010049', 'ธนัตปรีชา ', 'มังคลานิมิตร', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, ''),
(28, 'ปวช', '64209010050', 'ธนกฤต', 'แสนเมือง', 'ชาย', 2, '3', 'เทคโนโลยีสารสนเทศ', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `enrolltbl_high`
--

CREATE TABLE `enrolltbl_high` (
  `no` int(11) NOT NULL,
  `ref_course` varchar(255) NOT NULL,
  `ref_studenttbl` varchar(13) DEFAULT NULL,
  `ref_stdfname` varchar(255) NOT NULL,
  `ref_stdlname` varchar(255) NOT NULL,
  `ref_stdGroups` int(11) NOT NULL,
  `ref_years` varchar(255) NOT NULL,
  `ref_department` varchar(255) NOT NULL,
  `ref_status` int(11) NOT NULL,
  `ref_stdImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `enrolltbl_high`
--

INSERT INTO `enrolltbl_high` (`no`, `ref_course`, `ref_studenttbl`, `ref_stdfname`, `ref_stdlname`, `ref_stdGroups`, `ref_years`, `ref_department`, `ref_status`, `ref_stdImg`) VALUES
(1, 'ปวส', '64209010026', 'เตชสิทธิ์', 'แก้ววิเชียร', 2, '1', 'เทคโนโลยีสารสนเทศ', 0, '64209010026.jpg'),
(2, 'ปวส', '64209010027', 'คชาม์', 'สร้อยศรี', 2, '1', 'เทคโนโลยีสารสนเทศ', 1, '64209010027.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filesID` int(11) NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `fileDescription` varchar(255) DEFAULT NULL,
  `fileYears` varchar(255) DEFAULT NULL,
  `fileStatus` int(11) DEFAULT NULL,
  `fileDate` date NOT NULL,
  `filesLinks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`filesID`, `fileName`, `fileDescription`, `fileYears`, `fileStatus`, `fileDate`, `filesLinks`) VALUES
(1, 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง หยุดเรียนกรณีพิเศษ', 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง หยุดเรียนกรณีพิเศษ', '2566', 1, '2023-07-11', 'test.pdf'),
(2, 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง ผลการประกวดและตัดสินแผนธุรกิจ', 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง ผลการประกวดและตัดสินแผนธุรกิจ', '2566', 1, '2023-07-11', '5.7.66.png'),
(3, 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง พ้นสภาพการเป็นนักศึกษา ระดับประกาศนียบัตรวิชาชีพ พุทธศักราช ๒๕๖๒ ประจำปีการศึกษา ๒๕๖๖', 'ประกาศวิทยาลัยเทคนิคอุดรธานี เรื่อง พ้นสภาพการเป็นนักศึกษา ระดับประกาศนียบัตรวิชาชีพ พุทธศักราช ๒๕๖๒ ประจำปีการศึกษา ๒๕๖๖', '2566', 1, '2023-07-11', 'A4.7.66.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `filestudent`
--

CREATE TABLE `filestudent` (
  `filesStudentID` int(11) NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `fileDescription` varchar(255) DEFAULT NULL,
  `fileYears` varchar(255) DEFAULT NULL,
  `fileStatus` int(11) DEFAULT NULL,
  `fileDate` date NOT NULL,
  `filesLinks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `filestudent`
--

INSERT INTO `filestudent` (`filesStudentID`, `fileName`, `fileDescription`, `fileYears`, `fileStatus`, `fileDate`, `filesLinks`) VALUES
(1, 'รายชื่อนักเรียน ปวช.3/1', 'รายชื่อนักเรียน ปวช.3/1 ปีการศึกษา 2566', '2566', 1, '2023-07-21', 'voc-3-1.php');

-- --------------------------------------------------------

--
-- Table structure for table `mcheck`
--

CREATE TABLE `mcheck` (
  `no` int(11) NOT NULL,
  `ref_teacherID` int(11) DEFAULT NULL,
  `ref_stdID` varchar(255) DEFAULT NULL,
  `ref_stdName` varchar(255) DEFAULT NULL,
  `ref_date` varchar(255) DEFAULT NULL,
  `ref_checkInStatus` varchar(255) DEFAULT NULL,
  `ref_group` varchar(255) DEFAULT NULL,
  `ref_department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_name` varchar(255) DEFAULT NULL,
  `n_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `save_classschedule`
--

CREATE TABLE `save_classschedule` (
  `no` int(11) NOT NULL,
  `classSchedule_subjectName` varchar(255) DEFAULT NULL,
  `classSchedule_teacherName` varchar(255) DEFAULT NULL,
  `classSchedule_Room` varchar(255) DEFAULT NULL,
  `classSchedule_date` varchar(255) DEFAULT NULL,
  `classSchedule_Start` varchar(255) DEFAULT NULL,
  `classSchedule_End` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `save_classschedule`
--

INSERT INTO `save_classschedule` (`no`, `classSchedule_subjectName`, `classSchedule_teacherName`, `classSchedule_Room`, `classSchedule_date`, `classSchedule_Start`, `classSchedule_End`) VALUES
(1, 'ฐานข้อมูลเบื้องต้น 1', 'กิตติชัย', '530', 'จันทร์', '10.30', '12.30');

-- --------------------------------------------------------

--
-- Table structure for table `statusstudent`
--

CREATE TABLE `statusstudent` (
  `no` int(11) NOT NULL,
  `statusValue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `statusstudent`
--

INSERT INTO `statusstudent` (`no`, `statusValue`) VALUES
(1, 'มาเรียน'),
(2, 'ขาดเรียน'),
(3, 'ลาป่วย'),
(4, 'ลากิจ'),
(5, 'สาย');

-- --------------------------------------------------------

--
-- Table structure for table `stdtbl`
--

CREATE TABLE `stdtbl` (
  `std_id` varchar(20) NOT NULL,
  `std_name` varchar(255) DEFAULT NULL,
  `std_mindscore` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stdtbl`
--

INSERT INTO `stdtbl` (`std_id`, `std_name`, `std_mindscore`) VALUES
('64209010026', 'นายเตชสิทธิ์ แก้ววิเชียร', 100),
('64209010027', 'นายคชาม์ สร้อยศรี', 100),
('64209010028', 'นายทรงพล คำภูมี', 100),
('64209010030', 'นายกิตติชัย รักษาวงค์', 100),
('64209010031', 'นายสุทธิชัย ตะกรุดโฉม', 100),
('64209010032', 'นายพัชรพล ธรเสนา', 100),
('64209010033', 'นายบงกชเพชร ยอดกระโทก', 100),
('64209010034', 'นายธีรศักดิ์ พลเมืองนิตย์', 100),
('64209010036', 'นายภูชิต สายวิชัย', 100),
('64209010037', 'นายธนาคิม สีหานาทัง', 100),
('64209010038', 'นายชนากานต์ พงษ์สุทธิ์', 100),
('64209010039', 'นางสาวภัคจิรา ญาติสังกัด', 100),
('64209010042', 'นายศิวนาถ ธนทรัพย์อำไพ', 100),
('64209010045', 'นายชนาธิป ปัทมวงศ์จริยา', 100),
('64209010046', 'นางสาวอริสา ม่วงเมืองแสน', 100),
('64209010047', 'นายศิริวัฒน์ อุทัยมาตย์', 100),
('64209010048', 'นายพันธกร โพพะนา', 100),
('64209010049', 'นายธนัตปรีชา มังคลานิมิตร', 100),
('64209010050', 'นายธนกฤต แสนเมือง', 100);

-- --------------------------------------------------------

--
-- Table structure for table `subjecttbl`
--

CREATE TABLE `subjecttbl` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `subject_des` varchar(255) NOT NULL,
  `subject_subNum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subjecttbl`
--

INSERT INTO `subjecttbl` (`subject_id`, `subject_name`, `subject_des`, `subject_subNum`) VALUES
(1, 'คอมพิวเตอร์เบื้องต้น 1', 'ปวช.', '20001-0001'),
(2, 'คอมพิวเตอร์เบื้องต้น 2', 'ปวช.', '20001-0002'),
(3, 'คอมพิวเตอร์เบื้องต้น 3', 'ปวช.', '20001-0003'),
(4, 'หลักการออกแบบระบบ 1', 'ปวช.', '20001-0004'),
(5, 'หลักการออกแบบระบบ 2', 'ปวช.', '20001-0005'),
(6, 'หลักการออกแบบระบบ 3', 'ปวช.', '20001-0006'),
(7, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช.', '20001-0007'),
(8, 'ฐานข้อมูลเบื้องต้น 2', 'ปวช.', '20001-0008'),
(9, 'คณิตศาสตร์คอมพิวเตอร์ 1', 'ปวช.', '20001-0009'),
(10, 'คณิตศาสตร์คอมพิวเตอร์ 2', 'ปวส.', '20001-0010'),
(11, 'การเขียนโปรแกรมด้วยภาษา Python', 'ปวช. / ปวส.', '20001-0011'),
(12, 'การเขียนโปรแกรมด้วยภาษา C และ C++', 'ปวช. / ปวส.', '20001-0012'),
(13, 'หลักการออกแบบระบบ 1', 'ปวช. / ปวส.', '20001-0013'),
(14, 'หลักการออกแบบระบบ 2', 'ปวช. / ปวส.', '20001-0014'),
(15, 'หลักการออกแบบระบบ 3', 'ปวช. / ปวส.', '20001-0015'),
(16, 'การสร้างฐานข้อมูลด้วยภาษา SQL', 'ปวช. / ปวส.', '20001-0016'),
(17, 'การออกแบบกราฟิกและแอนิเมชั่น 1', 'ปวช. / ปวส.', '20001-0017'),
(18, 'การออกแบบกราฟิกและแอนิเมชั่น 2', 'ปวช. / ปวส.', '20001-0018'),
(19, 'การออกแบบกราฟิกและแอนิเมชั่น 3', 'ปวช. / ปวส.', '20001-0019'),
(20, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 1', 'ปวช. / ปวส.', '20001-0020'),
(21, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 2', 'ปวช. / ปวส.', '20001-0021'),
(22, 'ระบบเครือข่ายเบื้องต้น 1', 'ปวช. / ปวส.', '20001-0022'),
(23, 'ระบบเครือข่ายเบื้องต้น 2', 'ปวช. / ปวส.', '20001-0023'),
(24, 'การใช้โปรแกรมสำนักงานเบื้องต้น 1', 'ปวช. / ปวส.', '20001-0024'),
(25, 'การใช้โปรแกรมสำนักงานเบื้องต้น 2', 'ปวช. / ปวส.', '20001-0025'),
(26, 'การสร้างเกม 1', 'ปวช. / ปวส.', '20001-0026'),
(27, 'การสร้างเกม 2', 'ปวช. / ปวส.', '20001-0027'),
(28, 'ฝึกงาน', 'ปวช. / ปวส.', '20001-0028'),
(29, 'กิจกรรมสถานประกอบการ 1', 'ปวช. / ปวส.', '20001-0029'),
(30, 'กิจกรรมสถานประกอบการ 2', 'ปวช. / ปวส.', '20001-0030'),
(31, 'กิจกรรมสถานประกอบการ 3', 'ปวช.', '20001-0031');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(11) NOT NULL,
  `schedule_title` varchar(256) NOT NULL,
  `schedule_detail` text NOT NULL,
  `schedule_classYears` int(11) NOT NULL,
  `schedule_classGroup` int(11) NOT NULL,
  `schedule_room` varchar(150) NOT NULL,
  `schedule_teacherName` varchar(150) NOT NULL,
  `schedule_teacherID` int(11) NOT NULL,
  `schedule_startdate` date NOT NULL,
  `schedule_enddate` date NOT NULL,
  `schedule_starttime` time NOT NULL,
  `schedule_endtime` time NOT NULL,
  `schedule_repeatday` varchar(20) NOT NULL,
  `schedule_createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `schedule_title`, `schedule_detail`, `schedule_classYears`, `schedule_classGroup`, `schedule_room`, `schedule_teacherName`, `schedule_teacherID`, `schedule_startdate`, `schedule_enddate`, `schedule_starttime`, `schedule_endtime`, `schedule_repeatday`, `schedule_createdate`) VALUES
(16, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช', 3, 1, '535', 'กิตติชัย รักษาวงค์', 1, '2023-06-20', '2023-06-20', '10:30:00', '12:30:00', '', '2023-06-25 11:17:46'),
(17, 'การเขียนโปรแกรมด้วยภาษา Python', 'ปวช', 3, 2, '', 'กิตติชัย รักษาวงค์', 1, '2023-06-23', '2023-06-23', '17:30:00', '18:30:00', '', '2023-06-25 11:22:33'),
(22, 'ฐานข้อมูลเบื้องต้น 2', 'ปวส', 0, 0, '', 'กิตติชัย รักษาวงค์', 0, '2023-07-10', '2023-08-28', '12:01:00', '22:02:00', '', '2023-07-09 08:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL,
  `main_groups` varchar(255) NOT NULL,
  `groups` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `id_card`, `username`, `email`, `pwd`, `fname`, `lname`, `address`, `phone`, `birthday`, `permission`, `main_groups`, `groups`, `img`) VALUES
(1, '3626299495765', 'EDS0001', 'kittichai@eds.ac.th', '123', 'กิตติชัย', 'รักษาวงค์', '  วิทยาลัยเทคนิคอุดรธานี', '0959611962', '13/04/2548', 1, '0', 0, 'EDS0001.jfif'),
(30, 'admin', 'admin', 'admin@eds.ac.th', 'admin', 'Techasit', 'Admin', 'วิทยาลัยเทคนิคอุดรธานี', '0951155655', '12/02/2535', 2, '', 0, 'admin.png'),
(74, '1313144949856', 'EDS-2', 'bongkruttt@eds.ac.th', '123', 'บงกรูช', 'เพชรชี่', 'วิทยาลัยเทคนิคอุดรธานี', '089999999', '15/01/2536', 1, '', 0, 'EDS_0.png'),
(75, '8746545155516', 'EDS-003', 'chaiyot@eds.ac.th', '123', 'ชััยัยัย', 'ชับัยัยัย', ' วิทยาลัยเทคนิคอุดรธานี', '04888888', '28/05/2522', 1, '', 0, 'EDS-003.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `classschedule`
--
ALTER TABLE `classschedule`
  ADD PRIMARY KEY (`classSchedule_id`);

--
-- Indexes for table `createscore`
--
ALTER TABLE `createscore`
  ADD PRIMARY KEY (`createScoreID`);

--
-- Indexes for table `enrollsubject`
--
ALTER TABLE `enrollsubject`
  ADD PRIMARY KEY (`nullID`);

--
-- Indexes for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`filesID`);

--
-- Indexes for table `filestudent`
--
ALTER TABLE `filestudent`
  ADD PRIMARY KEY (`filesStudentID`);

--
-- Indexes for table `mcheck`
--
ALTER TABLE `mcheck`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `save_classschedule`
--
ALTER TABLE `save_classschedule`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `statusstudent`
--
ALTER TABLE `statusstudent`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stdtbl`
--
ALTER TABLE `stdtbl`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classschedule`
--
ALTER TABLE `classschedule`
  MODIFY `classSchedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `createscore`
--
ALTER TABLE `createscore`
  MODIFY `createScoreID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollsubject`
--
ALTER TABLE `enrollsubject`
  MODIFY `nullID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `filesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `filestudent`
--
ALTER TABLE `filestudent`
  MODIFY `filesStudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mcheck`
--
ALTER TABLE `mcheck`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `save_classschedule`
--
ALTER TABLE `save_classschedule`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statusstudent`
--
ALTER TABLE `statusstudent`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
