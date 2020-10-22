-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2020 at 05:59 AM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`) VALUES
(1, 'scs3.laptop@gmail.com', '123456', 'admin', 'Pika', 'foob');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `jo_post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `country` varchar(50) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `form_doc` varchar(200) NOT NULL,
  `verified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `description`, `country`, `stream`, `website`, `date`, `email`, `phone`, `password`, `photo`, `form_doc`, `verified`) VALUES
(32, 'clkmef', 'Company Description\r\n		            	', 'Bahamas', 'asa', 'cfkmc', '2018-01-10', 'scs2.laptop@gmail.com', '9326012248', 'abc@1234', '/ip/companyFiles/profilePics/Srividya .jpg', '/ip/companyFiles/formDocs/Srividya-Resume.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `creator_email` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `creator_email`, `job_title`, `description`, `country`, `state`, `city`) VALUES
(1, 'scs2.laptop@gmail.com', 'Web Developer', 'Front end developer', 'India', 'Rajasthan', 'Agucha'),
(2, 'scs1.laptop@gmail.com', 'AI intern', 'ML and DL', 'India', 'Karnataka', 'Banglore'),
(3, 'scs2.laptop@gmail.com', 'Node.js Developer', 'Node and Express', 'India', 'Maharashtra', 'Mumbai'),
(4, 'scs2.laptop@gmail.com', 'Android Developer', 'Kotlin and Java', 'India', 'Tamil Nadu', 'Agaram');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(100) NOT NULL,
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
  `resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `fname`, `lname`, `email`, `password`, `mobileno`, `address`, `country`, `city`, `state`, `dob`, `age`, `qualification`, `stream`, `passingyear`, `cgpa`, `aboutme`, `skills`, `resume`) VALUES
(6, 'Srividya', 'Subramanian', 'srividya.subramanian77@gmail.com', 'MWRkZjFkNDBmYzBkOWZmNTIyMzQ3OTAxODkxODI1MTM=', '9326012248', 'Lake City Towers', 'Algeria', 'Saida', 'Saida', '1999-01-21', '21', 'B. A.', 'Science', '2020-10-22', '10', '', '', '/ip/seekerFiles/resumes/Recovery.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
