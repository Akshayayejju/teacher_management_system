-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 04:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `teacher_id` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` enum('Present','Absent','Late') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`teacher_id`, `teacher_name`, `date`, `status`) VALUES
('a1', 'akshaya', '2004-01-30', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE `letter` (
  `teacher_id` varchar(100) NOT NULL,
  `letter` varchar(1000) NOT NULL,
  `complaints` varchar(1000) NOT NULL,
  `created_time` varchar(1000) NOT NULL,
  `created_by` varchar(1000) NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  `user_role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `letter`
--

INSERT INTO `letter` (`teacher_id`, `letter`, `complaints`, `created_time`, `created_by`, `action`, `user_role`) VALUES
('CS21B0222', 'social entrepreneurship.pdf', 'no complaints', '2023-07-27 12:26:37', '', 'accept', ''),
('ec21b021', 'DIC.pptx', 'no complaints', '2023-07-28 15:04:43', '', NULL, ''),
('me21b039', 'EDP.pdf', 'no AC', '2023-07-28 15:05:43', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `teacher_id` varchar(100) NOT NULL,
  `teacher_name` text NOT NULL,
  `performance` enum('verybad','bad','average','good','excellent') NOT NULL,
  `notifications` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`teacher_id`, `teacher_name`, `performance`, `notifications`) VALUES
('CS21B0222', 'Akshaya', 'excellent', 'logo.jpg'),
('ec21b021', 'sriram', 'verybad', 'logo.jpg'),
('me21b039', 'bunny', 'verybad', 'KADINTI HARSHA VARDHAN.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `teacher_id` varchar(100) NOT NULL,
  `teacher_name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`teacher_id`, `teacher_name`, `email`, `phone`, `password`) VALUES
('ak143', 'akshaya', 'ak@gmail.com', 123, '111');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `teacher_id` varchar(100) NOT NULL,
  `teacher_name` text NOT NULL,
  `schedule` varchar(1000) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `created_time` varchar(1000) NOT NULL,
  `created_by` varchar(1000) NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  `user_role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`teacher_id`, `teacher_name`, `schedule`, `course`, `created_time`, `created_by`, `action`, `user_role`) VALUES
('CS21B0223', 'Akshaya', 'KADINTI HARSHA VARDHAN.pdf', 'Resume(YEA AKSHAYA).pdf', '2023-07-27 06:09:09', '', 'pending', ''),
('ec21b021', 'sriram', 'social entrepreneurship.pdf', 'DESIGN OF BRAKES (1).pptx', '2023-07-28 14:52:23', '', NULL, ''),
('me21b039', 'bunny', 'KADINTI HARSHA VARDHAN.pdf', 'harsha passport size photo.jpg', '2023-07-28 14:51:28', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `teacher_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `teacher_id` varchar(100) NOT NULL,
  `teacher_name` text NOT NULL,
  `dob` date NOT NULL,
  `passport_size_photo` varchar(1000) NOT NULL,
  `medical_certificate` varchar(1000) NOT NULL,
  `caste_certificate` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(100) NOT NULL,
  `qualifications` varchar(1000) NOT NULL,
  `experience` varchar(1000) NOT NULL,
  `created_time` varchar(1000) NOT NULL,
  `created_by` varchar(1000) NOT NULL,
  `action` varchar(100) DEFAULT NULL,
  `user_role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`teacher_id`, `teacher_name`, `dob`, `passport_size_photo`, `medical_certificate`, `caste_certificate`, `address`, `phone`, `qualifications`, `experience`, `created_time`, `created_by`, `action`, `user_role`) VALUES
('CS21B0222', 'akshayayejju', '2004-01-30', 'passport size photo.pdf', 'Resume(YEA AKSHAYA).pdf', 'Resume(YEA AKSHAYA).pdf', 'andhra pradesh', 738696, 'Resume(YEA AKSHAYA).pdf', 'btech', '2023-07-27 12:24:28', '', 'reject', ''),
('ec21b021', 'sriram', '1111-11-11', '8 hrs workshop - startup business planning & Pre-Software Development.pdf', 'Value Chain Analysis.docx', 'logo.jpg', 'sri ap', 7777, 'logo.jpg', 'btech', '2023-07-28 15:49:21', '', NULL, ''),
('me21b039', 'bunny', '0066-06-06', 'KADINTI HARSHA VARDHAN.pdf', 'KADINTI HARSHA VARDHAN.pdf', 'KADINTI HARSHA VARDHAN.pdf', 'andhra pradesh', 999, 'Resume(YEA AKSHAYA).pdf', 'btech', '2023-07-28 15:50:33', '', NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `letter`
--
ALTER TABLE `letter`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
