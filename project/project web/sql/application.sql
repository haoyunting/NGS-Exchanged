-- phpMyAdmin SQL Dump
-- version 4.3.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 17, 2019 at 04:28 PM
-- Server version: 5.5.32-MariaDB
-- PHP Version: 5.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_zj`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `begintime` varchar(15) DEFAULT NULL,
  `days` varchar(15) DEFAULT NULL,
  `reason` varchar(15) DEFAULT NULL,
  `applytime` varchar(15) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `checker` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `username`, `department`, `begintime`, `days`, `reason`, `applytime`, `status`, `checker`) VALUES
(1, 'zhang', 'Finance', '2019-05-17', '2', 'go home', '3:00', 'agree', 'admin'),
(3, 'chen', 'Marketing', '2019-04-29', '3', 'go home', '4:00', 'agree', 'admin'),
(4, 'hao', 'Personnel', '2019-05-30', '2', 'thick', '4:00', 'agree', 'admin'),
(5, 'gu', 'Board of Direct', '2019-05-31', '1', 'get married', '5:00', 'waiting', 'admin'),
(6, 'ding', 'Marketing', '2019-05-31', '1', 'have business', '6:00', 'waiting', 'admin'),
(7, '', 'Finance', '2019-06-07', '', '', NULL, NULL, NULL),
(8, 'ding', 'Finance', '2019-05-03', '2', 'go home', NULL, NULL, NULL),
(9, 'ding', 'Personnel', '2019-05-10', '3', 'sick', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
