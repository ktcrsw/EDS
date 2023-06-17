-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 03:26 AM
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
  `teacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subjecttbl`
--

INSERT INTO `subjecttbl` (`subject_id`, `subject_name`, `subject_des`, `teacherID`) VALUES
(1, 'คอมพิวเตอร์เบื้องต้น 1', 'ปวช.', 0),
(2, 'คอมพิวเตอร์เบื้องต้น 2', 'ปวช.', 0),
(3, 'คอมพิวเตอร์เบื้องต้น 3', 'ปวช.', 0),
(4, 'หลักการออกแบบระบบ 1', 'ปวช.', 0),
(5, 'หลักการออกแบบระบบ 2', 'ปวช.', 0),
(6, 'หลักการออกแบบระบบ 3', 'ปวช.', 0),
(7, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช.', 0),
(8, 'ฐานข้อมูลเบื้องต้น 2', 'ปวช.', 0),
(9, 'คณิตศาสตร์คอมพิวเตอร์ 1', 'ปวช.', 0),
(10, 'คณิตศาสตร์คอมพิวเตอร์ 2', 'ปวส.', 0),
(11, 'การเขียนโปรแกรมด้วยภาษา Python', 'ปวช. / ปวส.', 0),
(12, 'การเขียนโปรแกรมด้วยภาษา C และ C++', 'ปวช. / ปวส.', 0),
(13, 'หลักการออกแบบระบบ 1', 'ปวช. / ปวส.', 0),
(14, 'หลักการออกแบบระบบ 2', 'ปวช. / ปวส.', 0),
(15, 'หลักการออกแบบระบบ 3', 'ปวช. / ปวส.', 0),
(16, 'การสร้างฐานข้อมูลด้วยภาษา SQL', 'ปวช. / ปวส.', 0),
(17, 'การออกแบบกราฟิกและแอนิเมชั่น 1', 'ปวช. / ปวส.', 0),
(18, 'การออกแบบกราฟิกและแอนิเมชั่น 2', 'ปวช. / ปวส.', 0),
(19, 'การออกแบบกราฟิกและแอนิเมชั่น 3', 'ปวช. / ปวส.', 0),
(20, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 1', 'ปวช. / ปวส.', 0),
(21, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 2', 'ปวช. / ปวส.', 0),
(22, 'ระบบเครือข่ายเบื้องต้น 1', 'ปวช. / ปวส.', 0),
(23, 'ระบบเครือข่ายเบื้องต้น 2', 'ปวช. / ปวส.', 0),
(24, 'การใช้โปรแกรมสำนักงานเบื้องต้น 1', 'ปวช. / ปวส.', 0),
(25, 'การใช้โปรแกรมสำนักงานเบื้องต้น 2', 'ปวช. / ปวส.', 0),
(26, 'การสร้างเกม 1', 'ปวช. / ปวส.', 0),
(27, 'การสร้างเกม 2', 'ปวช. / ปวส.', 0),
(28, 'ฝึกงาน', 'ปวช. / ปวส.', 0),
(29, 'กิจกรรมสถานประกอบการ 1', 'ปวช. / ปวส.', 0),
(30, 'กิจกรรมสถานประกอบการ 2', 'ปวช. / ปวส.', 0),
(31, 'กิจกรรมสถานประกอบการ 3', 'ปวช.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `id_card` varchar(13) DEFAULT NULL,
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

INSERT INTO `users` (`u_id`, `id_card`, `email`, `pwd`, `fname`, `lname`, `address`, `permission`, `main_groups`, `groups`, `img`) VALUES
(1, '3626299495765', 'k@gmail.com', '123', 'Kittichai', 'Raksawong', '', 1, '0', 0, 'LINE_ALBUM_รูปนักศึกษาสุดหล่อ+สุดสวย ปวช.22_๒๒๑๒๐๙_15.jpg'),
(30, 'admin', 'admin@gmail.com', 'admin', 'Techasit', 'Admin', '', 2, '', 0, ''),
(42, 'usr', '64209010030@gmail.com', '1234', 'User', 'Demo', '', 0, '', 0, 'LINE_ALBUM_รูปนักศึกษาสุดหล่อ+สุดสวย ปวช.22_๒๒๑๒๐๙_15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`no`);

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
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
