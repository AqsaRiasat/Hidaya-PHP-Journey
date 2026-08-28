-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2026 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `aca_id` int(11) NOT NULL,
  `can_id` int(11) DEFAULT NULL,
  `degree` varchar(30) DEFAULT NULL,
  `institute` varchar(40) DEFAULT NULL,
  `passing_year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`aca_id`, `can_id`, `degree`, `institute`, `passing_year`) VALUES
(301, 1, 'BS CS', 'PUCIT', 2023),
(302, 2, 'BS SE', 'NED', 2024),
(303, 3, 'BS IT', 'COMSATS', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(11) NOT NULL,
  `can_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `apply_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `can_id`, `job_id`, `apply_date`) VALUES
(801, 1, 201, '2024-05-01'),
(802, 1, 203, '2024-05-02'),
(803, 2, 202, '2024-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `applicationstatus`
--

CREATE TABLE `applicationstatus` (
  `status_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicationstatus`
--

INSERT INTO `applicationstatus` (`status_id`, `comp_id`, `app_id`, `status`, `update_date`) VALUES
(1001, 101, 801, 'Shortlisted', '2024-05-10'),
(1002, 101, 802, 'Under Review', '2024-05-11'),
(1003, 102, 803, 'Rejected', '2024-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `can_id` int(11) NOT NULL,
  `can_name` varchar(30) DEFAULT NULL,
  `can_email` varchar(35) DEFAULT NULL,
  `can_phone` varchar(15) DEFAULT NULL,
  `can_city` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`can_id`, `can_name`, `can_email`, `can_phone`, `can_city`) VALUES
(1, 'Ali Ahmed', 'ali@email.com', '03001111111', 'Lahore'),
(2, 'Sara Khan', 'sara@email.com', '03002222222', 'Karachi'),
(3, 'Bilal Hassan', 'bilal@email.com', '03003333333', 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(40) DEFAULT NULL,
  `comp_email` varchar(35) DEFAULT NULL,
  `comp_address` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comp_id`, `comp_name`, `comp_email`, `comp_address`) VALUES
(101, 'Tech Solutions', 'hr@tech.com', 'Lahore'),
(102, 'Soft Engineers', 'hr@soft.com', 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `comp_id`, `contact_number`) VALUES
(701, 101, '0421111111'),
(702, 101, '0422222222'),
(703, 102, '0213333333');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `exp_id` int(11) NOT NULL,
  `can_id` int(11) DEFAULT NULL,
  `company_name` varchar(40) DEFAULT NULL,
  `job_title` varchar(40) DEFAULT NULL,
  `years` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`exp_id`, `can_id`, `company_name`, `job_title`, `years`) VALUES
(601, 1, 'ABC Company', 'Developer', 2),
(602, 2, 'XYZ Ltd', 'Intern', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(40) DEFAULT NULL,
  `job_salary` int(11) DEFAULT NULL,
  `job_location` varchar(30) DEFAULT NULL,
  `comp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `job_salary`, `job_location`, `comp_id`) VALUES
(201, 'PHP Developer', 50000, 'Lahore', 101),
(202, 'Frontend Developer', 45000, 'Karachi', 102),
(203, 'Database Admin', 60000, 'Lahore', 101);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qual_id` int(11) NOT NULL,
  `can_id` int(11) DEFAULT NULL,
  `cert_name` varchar(40) DEFAULT NULL,
  `institute` varchar(40) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qual_id`, `can_id`, `cert_name`, `institute`, `year`) VALUES
(401, 1, 'Web Development', 'Tech Academy', 2023),
(402, 2, 'Python', 'Online Course', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `shortlist`
--

CREATE TABLE `shortlist` (
  `short_id` int(11) NOT NULL,
  `comp_id` int(11) DEFAULT NULL,
  `can_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `shortlist_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shortlist`
--

INSERT INTO `shortlist` (`short_id`, `comp_id`, `can_id`, `job_id`, `shortlist_date`) VALUES
(901, 101, 1, 201, '2024-05-10'),
(902, 102, 2, 202, '2024-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `skill_id` int(11) NOT NULL,
  `can_id` int(11) DEFAULT NULL,
  `skill_name` varchar(30) DEFAULT NULL,
  `proficiency` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`skill_id`, `can_id`, `skill_name`, `proficiency`) VALUES
(501, 1, 'PHP', 'Expert'),
(502, 1, 'MySQL', 'Expert'),
(503, 2, 'React', 'Intermediate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`aca_id`),
  ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `can_id` (`can_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `applicationstatus`
--
ALTER TABLE `applicationstatus`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `app_id` (`app_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`can_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qual_id`),
  ADD KEY `can_id` (`can_id`);

--
-- Indexes for table `shortlist`
--
ALTER TABLE `shortlist`
  ADD PRIMARY KEY (`short_id`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `can_id` (`can_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `can_id` (`can_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic`
--
ALTER TABLE `academic`
  ADD CONSTRAINT `academic_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`);

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `applicationstatus`
--
ALTER TABLE `applicationstatus`
  ADD CONSTRAINT `applicationstatus_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company` (`comp_id`),
  ADD CONSTRAINT `applicationstatus_ibfk_2` FOREIGN KEY (`app_id`) REFERENCES `application` (`app_id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company` (`comp_id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company` (`comp_id`);

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`);

--
-- Constraints for table `shortlist`
--
ALTER TABLE `shortlist`
  ADD CONSTRAINT `shortlist_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `company` (`comp_id`),
  ADD CONSTRAINT `shortlist_ibfk_2` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`),
  ADD CONSTRAINT `shortlist_ibfk_3` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`can_id`) REFERENCES `candidate` (`can_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
