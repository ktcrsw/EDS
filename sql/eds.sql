-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:29 PM
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
-- Database: `eds`
--

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
  `subject_des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `subjecttbl`
--

INSERT INTO `subjecttbl` (`subject_id`, `subject_name`, `subject_des`) VALUES
(1, 'คอมพิวเตอร์เบื้องต้น 1', 'ปวช.'),
(2, 'คอมพิวเตอร์เบื้องต้น 2', 'ปวช.'),
(3, 'คอมพิวเตอร์เบื้องต้น 3', 'ปวช.'),
(4, 'หลักการออกแบบระบบ 1', 'ปวช.'),
(5, 'หลักการออกแบบระบบ 2', 'ปวช.'),
(6, 'หลักการออกแบบระบบ 3', 'ปวช.'),
(7, 'ฐานข้อมูลเบื้องต้น 1', 'ปวช.'),
(8, 'ฐานข้อมูลเบื้องต้น 2', 'ปวช.'),
(9, 'คณิตศาสตร์คอมพิวเตอร์ 1', 'ปวช.'),
(10, 'คณิตศาสตร์คอมพิวเตอร์ 2', 'ปวส.'),
(11, 'การเขียนโปรแกรมด้วยภาษา Python', 'ปวช. / ปวส.'),
(12, 'การเขียนโปรแกรมด้วยภาษา C และ C++', 'ปวช. / ปวส.'),
(13, 'หลักการออกแบบระบบ 1', 'ปวช. / ปวส.'),
(14, 'หลักการออกแบบระบบ 2', 'ปวช. / ปวส.'),
(15, 'หลักการออกแบบระบบ 3', 'ปวช. / ปวส.'),
(16, 'การสร้างฐานข้อมูลด้วยภาษา SQL', 'ปวช. / ปวส.'),
(17, 'การออกแบบกราฟิกและแอนิเมชั่น 1', 'ปวช. / ปวส.'),
(18, 'การออกแบบกราฟิกและแอนิเมชั่น 2', 'ปวช. / ปวส.'),
(19, 'การออกแบบกราฟิกและแอนิเมชั่น 3', 'ปวช. / ปวส.'),
(20, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 1', 'ปวช. / ปวส.'),
(21, 'การพัฒนาโปรแกรมบนอุปกรณ์เคลื่อนที่ 2', 'ปวช. / ปวส.'),
(22, 'ระบบเครือข่ายเบื้องต้น 1', 'ปวช. / ปวส.'),
(23, 'ระบบเครือข่ายเบื้องต้น 2', 'ปวช. / ปวส.'),
(24, 'การใช้โปรแกรมสำนักงานเบื้องต้น 1', 'ปวช. / ปวส.'),
(25, 'การใช้โปรแกรมสำนักงานเบื้องต้น 2', 'ปวช. / ปวส.'),
(26, 'การสร้างเกม 1', 'ปวช. / ปวส.'),
(27, 'การสร้างเกม 2', 'ปวช. / ปวส.'),
(28, 'ฝึกงาน', 'ปวช. / ปวส.'),
(29, 'กิจกรรมสถานประกอบการ 1', 'ปวช. / ปวส.'),
(30, 'กิจกรรมสถานประกอบการ 2', 'ปวช. / ปวส.'),
(31, 'กิจกรรมสถานประกอบการ 3', 'ปวช.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `id_card` varchar(13) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `id_card`, `username`, `email`, `pwd`, `fname`, `lname`, `permission`) VALUES
(1, '3626299495765', 'k.raksawong', 'k@gmail.com', '123', 'Kittichai', 'Raksawong', 1),
(26, '1011103382291', 't.teerasak', 't@gmail.com', '123456', '', '', 1),
(27, '1134095776622', 'c.chanakan', 'c@gmail.com', '1234', '', '', 1),
(28, '1413818936484', 'b.bongkot', 'b@gmail.com', 'abc', 'Bongkotphetr', 'Lnwza007', 1),
(29, '1413818936445', 'K.kacha', 'k2@gmail.com', '1233333', '', '', 1),
(30, 'admin', 'admin', 'admin@gmail.com', 'admin', 'Techasit', 'Admin', 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `subjecttbl`
--
ALTER TABLE `subjecttbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
