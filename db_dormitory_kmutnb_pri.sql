-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 06:28 PM
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
-- Database: `db_dormitory_kmutnb_pri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admins`
--

CREATE TABLE `tb_admins` (
  `adm_id` int(255) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  `adm_salt` varchar(30) NOT NULL,
  `adm_fullname` varchar(80) NOT NULL,
  `adm_description` varchar(40) DEFAULT NULL,
  `adm_status` smallint(2) NOT NULL DEFAULT 2,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admins`
--

INSERT INTO `tb_admins` (`adm_id`, `adm_username`, `adm_password`, `adm_salt`, `adm_fullname`, `adm_description`, `adm_status`, `created_at`, `updated_at`) VALUES
(2, 'ChitsanuphongChaihong', 'a031a66d974057e4e9fa96acd96d2b9412845aa0cb0b4c067755f78298317a2c', 'Nz9Dh4JWbP5vuQ7)LpJM8XQHLAb51', 'helloworld', '', 1, '2022-02-09 17:15:17', '2022-02-09 17:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_books`
--

CREATE TABLE `tb_books` (
  `book_id` int(255) NOT NULL,
  `branch_id` int(255) DEFAULT NULL,
  `room_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_branchs`
--

CREATE TABLE `tb_branchs` (
  `branch_id` int(255) NOT NULL,
  `fac_id` int(255) DEFAULT NULL,
  `branch_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_branchs`
--

INSERT INTO `tb_branchs` (`branch_id`, `fac_id`, `branch_name`, `created_at`, `updated_at`) VALUES
(0, NULL, '-', '2021-11-25 08:41:28', '2021-11-25 08:41:28'),
(1, 1, 'วิศวกรรมระบบเครื่องมือวัด (InSE)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(2, 2, 'วิทยาศาสตร์การอาหารและโภชนาการ (FSN)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(3, 2, 'เทคโนโลยีอุตสาหกรรมเกษตรและการจัดการ (FSM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(4, 2, 'พัฒนาผลิตภัณฑ์อุตสาหกรรมเกษตร (APD)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(5, 2, 'นวัตกรรมและเทคโนโลยีการพัฒนาผลิตภัณฑ์ (IPD)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(6, 3, 'การจัดการอุตสาหกรรม (IMT)', '2021-06-23 16:47:57', '2021-11-26 12:27:12'),
(7, 3, 'การจัดการอุตสาหกรรม (SMIM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(8, 3, 'เทคโนโลยีสารสนเทศ (IT)', '2021-06-23 16:47:57', '2021-11-24 17:39:07'),
(9, 3, 'เทคโนโลยีสารสนเทศ (ITI)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(10, 3, 'วิศวกรรมสารสนเทศและเครือข่าย (INE)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(11, 3, 'วิทยาการสารสนเทศประยุกต์ (MITM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(12, 3, 'วิทยาการสารสนเทศประยุกต์ (SMITM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(13, 3, 'คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CA)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(14, 3, 'คอมพิวเตอร์ช่วยออกแบบและบริหารงานก่อสร้าง (CDM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(15, 3, 'เทคโนโลยีเครื่องจักรกลเกษตร (ATM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(16, 3, 'เทคโนโลยีเครื่องจักรกลเกษตร (TAM)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(17, 3, 'เทคโนโลยีเครื่องจักรกลเกษตร (TAT)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(18, 4, 'บริหารธุรกิจอุตสาหกรรมและการค้า (IBT)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(19, 4, 'บริหารธุรกิจอุตสาหกรรมและการค้า (IBTT)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(20, 4, 'บริหารธุรกิจอุตสาหกรรมและการค้า (MIBT)', '2021-06-23 16:47:57', '2021-06-23 16:47:57'),
(21, 4, 'บริหารธุรกิจอุตสาหกรรมและการค้า (SMIBT)', '2021-06-23 16:47:57', '2021-06-23 16:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buildings`
--

CREATE TABLE `tb_buildings` (
  `building_id` int(255) NOT NULL,
  `building_name` varchar(100) NOT NULL,
  `building_gender` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buildings`
--

INSERT INTO `tb_buildings` (`building_id`, `building_name`, `building_gender`, `created_at`, `updated_at`) VALUES
(1, 'หอพักชาย', 0, '2021-06-23 16:47:30', '2021-11-28 16:35:19'),
(2, 'หอพักหญิง 1', 1, '2021-06-23 16:47:30', '2021-11-19 18:30:28'),
(3, 'หอพักหญิง 2', 1, '2021-06-23 16:47:30', '2021-11-19 18:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_facultys`
--

CREATE TABLE `tb_facultys` (
  `fac_id` int(255) NOT NULL,
  `fac_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_facultys`
--

INSERT INTO `tb_facultys` (`fac_id`, `fac_name`, `created_at`, `updated_at`) VALUES
(1, 'วิศวกรรมศาสตร์', '2021-06-23 16:47:51', '2021-06-23 16:47:51'),
(2, 'อุตสาหกรรมเกษตร', '2021-06-23 16:47:51', '2021-11-24 14:38:07'),
(3, 'เทคโนโลยีและการจัดการอุตสาหกรรม', '2021-06-23 16:47:51', '2021-12-01 09:22:56'),
(4, 'บริหารธุรกิจและอุตสาหกรรมบริการ', '2021-06-23 16:47:51', '2021-06-23 16:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_familys`
--

CREATE TABLE `tb_familys` (
  `fam_id` int(255) NOT NULL,
  `std_id` int(255) NOT NULL,
  `fam_sex` smallint(2) NOT NULL,
  `fam_firstname` varchar(35) NOT NULL,
  `fam_lastname` varchar(35) NOT NULL,
  `fam_tel` varchar(15) NOT NULL,
  `fam_career` varchar(40) DEFAULT NULL,
  `fam_work_at` varchar(200) DEFAULT NULL,
  `fam_status` smallint(2) NOT NULL DEFAULT 1,
  `person_status` smallint(2) NOT NULL,
  `person_is` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_familys`
--

INSERT INTO `tb_familys` (`fam_id`, `std_id`, `fam_sex`, `fam_firstname`, `fam_lastname`, `fam_tel`, `fam_career`, `fam_work_at`, `fam_status`, `person_status`, `person_is`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'สมชาย1', 'ยิ่งยศ', '0987654312', 'พนักงานบริษัท', 'สำนักงานพัฒนาชุมชน อำเภอโนนสูง จังหวัดนครราชสีมา', 1, 1, 1, '2021-08-13 11:13:12', '2021-12-19 15:45:16'),
(2, 1, 2, 'สมหญิง', 'มิ้งหมาย', '0912345672', 'ข้าราชการ', 'ทิปโก้แอลฟัลท์ นครราชสีมา', 1, 2, 2, '2021-08-13 11:13:12', '2021-12-19 15:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fixs`
--

CREATE TABLE `tb_fixs` (
  `fix_id` int(11) NOT NULL,
  `std_id` int(11) DEFAULT NULL,
  `fix_detail` text NOT NULL,
  `fix_area` varchar(256) DEFAULT NULL,
  `fix_status` smallint(2) NOT NULL DEFAULT 2,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_floors`
--

CREATE TABLE `tb_floors` (
  `floor_id` int(255) NOT NULL,
  `building_id` int(255) NOT NULL,
  `floor_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_floors`
--

INSERT INTO `tb_floors` (`floor_id`, `building_id`, `floor_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ชั้น 1', '2021-06-23 16:47:42', '2021-10-07 10:58:45'),
(2, 1, 'ชั้น 2', '2021-06-23 16:47:42', '2021-10-07 11:01:01'),
(3, 1, 'ชั้น 3', '2021-06-23 16:47:42', '2021-10-06 19:07:26'),
(4, 1, 'ชั้น 4', '2021-06-23 16:47:42', '2021-10-06 20:42:00'),
(5, 1, 'ชั้น 5', '2021-06-23 16:47:42', '2021-10-07 11:01:22'),
(6, 2, 'ชั้น 1', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(7, 2, 'ชั้น 2', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(8, 2, 'ชั้น 3', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(9, 2, 'ชั้น 4', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(10, 2, 'ชั้น 5', '2021-06-23 16:47:42', '2021-10-06 19:08:26'),
(11, 3, 'ชั้น 1', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(12, 3, 'ชั้น 2', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(13, 3, 'ชั้น 3', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(14, 3, 'ชั้น 4', '2021-06-23 16:47:42', '2021-06-23 16:47:42'),
(15, 3, 'ชั้น 5', '2021-06-23 16:47:42', '2021-10-06 19:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(255) NOT NULL,
  `news_header` varchar(200) NOT NULL,
  `news_link_img` text DEFAULT NULL,
  `news_link_main` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `news_header`, `news_link_img`, `news_link_main`, `created_at`, `updated_at`) VALUES
(1, 'แจ้งรายชื่อคืนค่าธรรมเนียมหอพัก เทอม 2/2563', 'https://scontent.fnak3-1.fna.fbcdn.net/v/t39.30808-6/230416470_4445025982194625_2209175313587516729_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=0debeb&_nc_ohc=V9sulIV9ZZIAX9HI7ar&_nc_ht=scontent.fnak3-1.fna&oh=7ce1599a515eb7c6b5075b3e9f7f4907&oe=619BC7F6', 'https://www.facebook.com/media/set?vanity=225226107507988&set=a.4445028878861002', '2021-11-18 10:38:47', '2021-12-19 15:39:36'),
(2, 'ข้อปฏิบัติสำหรับนักศึกษาที่จะเข้าพักอาศัยหอพัก มจพ.ปราจีนบุรี', 'https://scontent.fnak3-1.fna.fbcdn.net/v/t39.30808-6/201648458_4439730502724173_6790846650173252622_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=0debeb&_nc_ohc=FTYCuWbARnMAX_ZlP4a&tn=s415-R5my2YCHhei&_nc_ht=scontent.fnak3-1.fna&oh=fe7ef2a374cc4a4206ecd5633f3428e9&oe=619BFB23', 'https://www.facebook.com/media/set?vanity=225226107507988&set=a.4439731072724116', '2021-11-18 10:39:10', '2021-12-19 15:39:28'),
(3, 'แบบฟอร์มจ่ายค่าธรรมเนียมหอพักภาคเรียน 1/2564', 'https://scontent.fnak3-1.fna.fbcdn.net/v/t1.6435-9/187033751_4238704356160123_1927512122548820499_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=0debeb&_nc_ohc=PruhZNNxwRQAX-cTcql&tn=s415-R5my2YCHhei&_nc_ht=scontent.fnak3-1.fna&oh=71ce8ada51f2f2dd20c22c5c2cd5e5d3&oe=61BB2715', 'https://www.facebook.com/media/set/?vanity=225226107507988&set=a.4238849449478947', '2021-11-18 10:41:32', '2021-11-28 16:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rooms`
--

CREATE TABLE `tb_rooms` (
  `room_id` int(255) NOT NULL,
  `floor_id` int(255) NOT NULL,
  `room_name` varchar(10) NOT NULL,
  `room_member` smallint(2) NOT NULL,
  `room_status` smallint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(100) NOT NULL,
  `status_date_start` varchar(20) DEFAULT NULL,
  `status_date_stop` varchar(20) DEFAULT NULL,
  `status_switch` smallint(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `status_name`, `status_date_start`, `status_date_stop`, `status_switch`, `created_at`, `update_at`) VALUES
(1, 'system_book', '02/02/2022', '02/11/2022', 3, '2021-07-31 16:43:43', '2022-02-09 17:11:46'),
(2, 'system_register', NULL, NULL, 1, '2021-11-30 13:30:48', '2021-12-01 05:26:24'),
(3, 'system_main', NULL, NULL, 0, '2021-11-30 13:30:48', '2022-02-09 17:11:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_students`
--

CREATE TABLE `tb_students` (
  `std_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `std_status` smallint(2) NOT NULL,
  `std_username` varchar(25) NOT NULL,
  `std_password` varchar(255) NOT NULL,
  `std_salt` varchar(30) NOT NULL,
  `std_sex` smallint(2) NOT NULL,
  `std_firstname` varchar(35) NOT NULL,
  `std_lastname` varchar(35) NOT NULL,
  `std_nickname` varchar(20) NOT NULL,
  `std_address` text NOT NULL,
  `std_idcard` varchar(15) NOT NULL,
  `std_blood` smallint(2) NOT NULL,
  `std_religion` smallint(2) NOT NULL,
  `std_birthday` date NOT NULL,
  `std_id_student` varchar(15) DEFAULT NULL,
  `std_tel` varchar(15) NOT NULL,
  `std_email` varchar(50) NOT NULL,
  `std_edu_academy` varchar(50) NOT NULL,
  `std_edu_degree` smallint(2) NOT NULL,
  `std_edu_comple` varchar(50) NOT NULL,
  `std_sponsor` smallint(2) NOT NULL,
  `std_howmuch` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_students`
--

INSERT INTO `tb_students` (`std_id`, `branch_id`, `room_id`, `std_status`, `std_username`, `std_password`, `std_salt`, `std_sex`, `std_firstname`, `std_lastname`, `std_nickname`, `std_address`, `std_idcard`, `std_blood`, `std_religion`, `std_birthday`, `std_id_student`, `std_tel`, `std_email`, `std_edu_academy`, `std_edu_degree`, `std_edu_comple`, `std_sponsor`, `std_howmuch`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, 0, 'ChitsanuphongChaihong', 'a031a66d974057e4e9fa96acd96d2b9412845aa0cb0b4c067755f78298317a2c', 'Nz9Dh4JWbP5vuQ7)LpJM8XQHLAb51', 0, 'ชิษณุพงศ์', 'ไชยหงษ์', 'หมูแฮม', '684/1  ม.1 ต.สุรนารี อ.เมืองนครราชสีมา จ.สุโขทัย 30001', '1309902912822', 3, 5, '2001-11-02', '6306021621138', '0999773491', 'Inwza111@email.com', 'วิทยาลัยเทคนิคนครราชสีมา', 2, '2563', 10, 3800, '2031-12-23 15:41:33', '2022-02-09 17:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tb_books`
--
ALTER TABLE `tb_books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `rom_id` (`room_id`);

--
-- Indexes for table `tb_branchs`
--
ALTER TABLE `tb_branchs`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `tb_branchs_ibfk_1` (`fac_id`);

--
-- Indexes for table `tb_buildings`
--
ALTER TABLE `tb_buildings`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `tb_facultys`
--
ALTER TABLE `tb_facultys`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `tb_familys`
--
ALTER TABLE `tb_familys`
  ADD PRIMARY KEY (`fam_id`),
  ADD KEY `std_id` (`std_id`) USING BTREE;

--
-- Indexes for table `tb_fixs`
--
ALTER TABLE `tb_fixs`
  ADD PRIMARY KEY (`fix_id`),
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `tb_floors`
--
ALTER TABLE `tb_floors`
  ADD PRIMARY KEY (`floor_id`),
  ADD KEY `building_id` (`building_id`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tb_rooms`
--
ALTER TABLE `tb_rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `floor_id` (`floor_id`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `rom_id` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `adm_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_books`
--
ALTER TABLE `tb_books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_branchs`
--
ALTER TABLE `tb_branchs`
  MODIFY `branch_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_buildings`
--
ALTER TABLE `tb_buildings`
  MODIFY `building_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_facultys`
--
ALTER TABLE `tb_facultys`
  MODIFY `fac_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_familys`
--
ALTER TABLE `tb_familys`
  MODIFY `fam_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_fixs`
--
ALTER TABLE `tb_fixs`
  MODIFY `fix_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_floors`
--
ALTER TABLE `tb_floors`
  MODIFY `floor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_rooms`
--
ALTER TABLE `tb_rooms`
  MODIFY `room_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_students`
--
ALTER TABLE `tb_students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_books`
--
ALTER TABLE `tb_books`
  ADD CONSTRAINT `tb_books_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `tb_branchs` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_books_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `tb_rooms` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_branchs`
--
ALTER TABLE `tb_branchs`
  ADD CONSTRAINT `fac_id` FOREIGN KEY (`fac_id`) REFERENCES `tb_facultys` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_familys`
--
ALTER TABLE `tb_familys`
  ADD CONSTRAINT `tb_familys_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `tb_students` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_fixs`
--
ALTER TABLE `tb_fixs`
  ADD CONSTRAINT `std_id` FOREIGN KEY (`std_id`) REFERENCES `tb_students` (`std_id`) ON DELETE SET NULL;

--
-- Constraints for table `tb_floors`
--
ALTER TABLE `tb_floors`
  ADD CONSTRAINT `tb_floors_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `tb_buildings` (`building_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rooms`
--
ALTER TABLE `tb_rooms`
  ADD CONSTRAINT `tb_rooms_ibfk_1` FOREIGN KEY (`floor_id`) REFERENCES `tb_floors` (`floor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_students`
--
ALTER TABLE `tb_students`
  ADD CONSTRAINT `tb_students_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `tb_branchs` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_students_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `tb_rooms` (`room_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
