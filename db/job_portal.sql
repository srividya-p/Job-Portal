-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 06:35 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `user_type`) VALUES
(1, 'scs1.laptop@gmail.com', '123456', 'bleh', 'Pika', 'foob', '1'),
(2, 'scs2.laptop@gmail.com', '123456', 'selin', 'sara', 'varghese', '2'),
(3, 'scs3.laptop@gmail.com', '123456', 'ania', 'soft-voice', 'guptaa', '2');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `description`) VALUES
(1, 'ABC', 'IT'),
(9, 'XYZ', 'More I                                ');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int NOT NULL,
  `creator_email` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `creator_email`, `job_title`, `description`, `country`, `state`, `city`) VALUES
(1, 'scs2.laptop@gmail.com', 'Web Developer', 'Front end developer', 'India', 'Maharashtra', 'Pune'),
(2, 'scs3.laptop@gmail.com', 'AI intern', 'ML and DL', 'India', 'Karnataka', 'Banglore'),
(3, 'scs2.laptop@gmail.com', 'Node.js Developer', 'Node and Express', 'India', 'Maharashtra', 'Mumbai'),
(4, 'scs2.laptop@gmail.com', 'Android Developer', 'Kotlin and Java', 'India', 'Tamil Nadu', 'Agaram'),
(9, 'scs2.laptop@gmail.com', 'Android Developer', 'jsjsj', 'Bahrain', 'Muharraq', 'Al Muharraq');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `passingyear` varchar(255) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `aboutme` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `resume` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `fname`, `lname`, `email`, `password`, `mobileno`, `address`, `city`, `state`, `dob`, `age`, `qualification`, `stream`, `passingyear`, `cgpa`, `aboutme`, `skills`, `resume`) VALUES
(1, 'Sara', 'Varghese', 'sara4varghese@gmail.com', 'ODA0MGZiNTRlMGQxODBiOThiZTlmYzFiNzQ2ODFlMGE=', '9892254482', 'b/604, hawamahal, soham gardens, manpada', 'Thane West', 'Maharashtra', '1996-12-15', '23', 'Btech', 'IT', '2019-11-01', '8.6', 'blah', 'blah', 0x3530313836315f657870375f4f4c41502e706466),
(2, 'Srividya', 'Subramanian', 'zookafoob24@gmail.com', 'ZGQ0Njk0ZjNmY2Y4ZWUzY2YzNWI0Njc3YTc1YzY4NjE=', '8976467914', '', '', '', '1999-01-08', '21', 'Btech', 'IT', '2020-09-23', '10', '', '', 0x3530313836315f657870352e706466);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Seeker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
