-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 02:58 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyvoice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume_format1`
--

CREATE TABLE `resume_format1` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` int(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `objective` varchar(200) NOT NULL,
  `degree_name` varchar(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `e_month` varchar(100) NOT NULL,
  `e_year` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `comapany_name` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `emp_to_Month` varchar(100) NOT NULL,
  `emp_to_year` varchar(100) NOT NULL,
  `emp_from_month` varchar(100) NOT NULL,
  `emp_from_year` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `ref_name` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `ref_company` varchar(100) NOT NULL,
  `ref_company_email` varchar(50) NOT NULL,
  `ref_company_phone` varchar(22) NOT NULL,
  `ref_company_address` varchar(200) NOT NULL,
  `created_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_format1`
--

INSERT INTO `resume_format1` (`id`, `first_name`, `last_name`, `phone`, `email`, `address`, `city`, `state`, `pincode`, `country`, `objective`, `degree_name`, `school_name`, `qualification`, `location`, `e_month`, `e_year`, `job_title`, `comapany_name`, `job_location`, `emp_to_Month`, `emp_to_year`, `emp_from_month`, `emp_from_year`, `skills`, `language`, `ref_name`, `relationship`, `ref_company`, `ref_company_email`, `ref_company_phone`, `ref_company_address`, `created_date_time`) VALUES
(1, '', 'fdsdfs', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-16 18:09:50'),
(2, '', 'sdfdfds', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-16 18:11:29'),
(3, '', 'kljgkldfj', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-12-16 18:13:13'),
(4, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(5, '', 'kljfglkfdjg', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(6, 'lkjgklfdjgkljdfklglkdfj', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(7, '', 'kgjkljgfd', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(8, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(9, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(10, '', '', '', '', '', '', '', 0, '', 'bkjbcsbic', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(11, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(12, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(13, '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(14, '', '', '', '', '', '', '', 0, '', '', 'fdvd', 'bbdfjvb', 'Graduate', 'https://localhost/sky_voice/home/format1_form', 'fdvd', 'fdvd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(15, '', '', '', '', '', '', '', 0, '', '', 'fdvd', 'bbdfjvb', 'Graduate', 'https://localhost/sky_voice/home/format1_form', 'fdvd', 'fdvd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(16, '', '', '', '', '', '', '', 0, '', '', '', '', 'Post Graduate', 'https://localhost/sky_voice/home/format1_form', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(17, '', '', '', '', '', '', '', 0, '', '', '', '', 'Post Graduate', 'https://localhost/sky_voice/home/format1_form', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(18, '', '', '', '', '', '', '', 0, '', '', '', '', 'Post Graduate', 'https://localhost/sky_voice/home/format1_form', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(19, '', '', '', '', '', '', '', 0, '', '', 'hjhefe', 'iuhefui', 'Post Graduate', 'https://localhost/sky_voice/home/format1_form', 'hjhefe', 'hjhefe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume_format1`
--
ALTER TABLE `resume_format1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume_format1`
--
ALTER TABLE `resume_format1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
