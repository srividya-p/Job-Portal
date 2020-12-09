-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2020 at 08:42 AM
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
(1, 'jobportal1000@gmail.com', 'jp@12345', 'admin', 'Pika', 'foob');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `job_post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`job_post_id`, `user_id`, `status`) VALUES
(13, 6, 'applied'),
(15, 6, 'selected'),
(16, 6, 'not selected');

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
(43, 'Company1', 'Company Description\r\n		            	                                                                                                                                ', 'Algeria', 'cfkc', 'cfkmc', '2018-01-20', 'scs1.laptop@gmail.com', '9326012248', 'abc@1234', '/ip/companyFiles/profilePics/company1.jpg', '/ip/companyFiles/formDocs/company1.pdf', 1),
(45, 'Company2', 'Company Description\r\n		            	                                                ', 'Belgium', 'asa', 'cfkmc', '2018-01-21', 'scs2.laptop@gmail.com', '9326012248', 'abc@1234', '/ip/companyFiles/profilePics/company2.jpg', '/ip/companyFiles/formDocs/company2.pdf', 1),
(48, 'Company3', 'Company Description\r\n		            	', 'India', 'cfkc', 'cfkmc', '2018-01-05', 'scs3.laptop@gmail.com', '9326012248', 'abc@1234', '/ip/companyFiles/profilePics/company3.png', '/ip/companyFiles/formDocs/company3.pdf', 1);

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
  `city` varchar(50) NOT NULL,
  `openings` int(11) NOT NULL,
  `salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `creator_email`, `job_title`, `description`, `country`, `state`, `city`, `openings`, `salary`) VALUES
(13, 'scs1.laptop@gmail.com', 'Android ', 'abc', 'Bangladesh', 'Select State', 'Select City', 2, 2000),
(14, 'scs1.laptop@gmail.com', 'Node Dev', 'abc', 'Bahamas', 'Grand Cay', 'Grand Cay', 1, 4000),
(15, 'scs2.laptop@gmail.com', 'AI/ML', 'abc', 'Azerbaijan', 'Istisu', 'Kalbajar', 1, 10000),
(16, 'scs2.laptop@gmail.com', 'Web Dev', 'abc', 'Argentina', 'Garza', 'Santiago del Estero', 2, 1000),
(17, 'scs2.laptop@gmail.com', 'Developer', 'abc', 'Belgium', 'Brussels', 'Brussels Capital', 1, 12345),
(20, 'scs3.laptop@gmail.com', 'Android ', 'qw', 'Barbados', 'Checker Hall', 'Saint Lucy', 1, 1234);

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
  `resume` varchar(200) NOT NULL,
  `profile_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `fname`, `lname`, `email`, `password`, `mobileno`, `address`, `country`, `city`, `state`, `dob`, `age`, `qualification`, `stream`, `passingyear`, `cgpa`, `aboutme`, `skills`, `resume`, `profile_img`) VALUES
(6, 'Srividya', 'Subramanian', 'srividya.ssa@gmail.com', 'abc@1234', '9326012248', 'Lake City Towers', '', 'Saida', 'Saida', '1999-01-21', '21', 'B. A.', 'Science', '2020-10-22', '10', '', '', '/ip/seekerFiles/resumes/Recovery.pdf', '/ip/img/person_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `querydesk`
--

CREATE TABLE `querydesk` (
  `email` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `querydesk`
--

INSERT INTO `querydesk` (`email`, `message`) VALUES
('hello', 'hello'),
('scs1.laptop@gmail.com', 'qwert'),
('scs2.laptop@gmail.com', 'abcc'),
('srividya.ssa@gmail.com', 'Who are you');

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
  ADD KEY `job_post_id` (`job_post_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `job_post_id` FOREIGN KEY (`job_post_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `job_seeker` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
