-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 07:47 AM
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
-- Table structure for table `enrolltbl`
--

CREATE TABLE `enrolltbl` (
  `no` int(11) NOT NULL,
  `ref_subjecttbl` int(13) DEFAULT NULL,
  `ref_studenttbl` varchar(13) DEFAULT NULL,
  `ref_stdname` varchar(255) NOT NULL,
  `ref_stdGroups` int(11) NOT NULL,
  `ref_stdroom` varchar(255) NOT NULL,
  `ref_department` varchar(255) NOT NULL,
  `ref_stdImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `enrolltbl`
--

INSERT INTO `enrolltbl` (`no`, `ref_subjecttbl`, `ref_studenttbl`, `ref_stdname`, `ref_stdGroups`, `ref_stdroom`, `ref_department`, `ref_stdImg`) VALUES
(1, 3, '64209010026', 'นายเตชสิทธิ์ แก้ววิเชียร', 2, '2', 'เทคโนโลยีสารสนเทศ', '64209010026.jpg'),
(2, 1, '64209010027', 'นายคชาม์ สร้อยศรี', 2, '2', 'เทคโนโลยีสารสนเทศ', '64209010027.jpg');

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
  `schedule_room` varchar(150) NOT NULL,
  `schedule_teacherName` varchar(150) NOT NULL,
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

INSERT INTO `tbl_schedule` (`schedule_id`, `schedule_title`, `schedule_detail`, `schedule_room`, `schedule_teacherName`, `schedule_startdate`, `schedule_enddate`, `schedule_starttime`, `schedule_endtime`, `schedule_repeatday`, `schedule_createdate`) VALUES
(16, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช', '535', '', '2023-06-20', '2023-06-20', '10:30:00', '12:30:00', '', '2023-06-25 11:17:46'),
(17, 'การเขียนโปรแกรมด้วยภาษา Python', 'ปวช', '', '', '2023-06-23', '2023-06-23', '17:30:00', '18:30:00', '', '2023-06-25 11:22:33'),
(18, 'คอมพิวเตอร์เบื้องต้น 2', 'ปวช', '', '', '2023-06-19', '2023-06-19', '13:30:00', '15:30:00', '', '2023-06-25 11:39:04'),
(19, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช', '', '', '2023-06-21', '2023-06-21', '17:30:00', '18:30:00', '', '2023-06-25 11:41:12'),
(20, 'การออกแบบกราฟิกและแอนิเมชั่น 1', 'ปวส', '', '', '2023-06-19', '2023-06-19', '08:30:00', '10:30:00', '', '2023-06-25 11:42:54');

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
  `permission` int(11) NOT NULL,
  `main_groups` varchar(255) NOT NULL,
  `groups` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `id_card`, `username`, `email`, `pwd`, `fname`, `lname`, `address`, `permission`, `main_groups`, `groups`, `img`) VALUES
(1, '3626299495765', 'EDS-1', 'k@gmail.com', '123', 'กิตติชัย', 'รักษาวงค์', '', 1, '0', 0, 'LINE_ALBUM_รูปนักศึกษาสุดหล่อ+สุดสวย ปวช.22_๒๒๑๒๐๙_15.jpg'),
(30, 'admin', 'admin', 'admin@gmail.com', 'admin', 'Techasit', 'Admin', '', 2, '', 0, ''),
(74, '', 'EDS-002', '', '123', 'บงกรูช', 'เพชรชี่', '', 1, '', 0, 'EDS_.png'),
(75, '', 'EDS-003', '', '123', 'ชััยัยัย', 'ชับัยัยัย', '', 1, '', 0, 'EDS-1.png');

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
-- Indexes for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  ADD PRIMARY KEY (`no`);

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
-- AUTO_INCREMENT for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
