-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 02:56 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `position` text,
  `name` text,
  `dob` date DEFAULT NULL,
  `stream` text,
  `btech_marks` text,
  `btech_inst` text,
  `hs_marks` text,
  `hs_inst` text,
  `s_marks` text,
  `s_inst` text,
  `skills` text,
  `gender` text,
  `address` text,
  `mobile_no` text,
  `email` text,
  `linkedin` text,
  `portofolio` text,
  `file` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `position`, `name`, `dob`, `stream`, `btech_marks`, `btech_inst`, `hs_marks`, `hs_inst`, `s_marks`, `s_inst`, `skills`, `gender`, `address`, `mobile_no`, `email`, `linkedin`, `portofolio`, `file`) VALUES
(33, 'PHP Developer', 'SAYANTA DEY', '2018-02-06', 'CSE', '75.43', 'BGI', '73.4', 'BTROAD', '83.57', 'BTROAD', 'CSS,PHP,JS', 'M', '27/19, A. K. Mukherjee Road', '9088906552', 'sayantadey0@gmail.com', 'http://localhost/maplegraph/Project.php', 'http://localhost/maplegraph/Project.php', '79728-Sayanta Dey without sign.pdf'),
(34, 'PHP Developer', 'SAYANTA DEY', '2018-02-06', 'CSE', '75.43', 'BGI', '73.4', 'BTROAD', '83.57', 'BTROAD', 'CSS,PHP,JS', 'M', '27/19, A. K. Mukherjee Road', '9088906552', 'sayantadey0@gmail.com', 'http://localhost/maplegraph/Project.php', 'http://localhost/maplegraph/Project.php', 'Sayanta Dey without sign.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
