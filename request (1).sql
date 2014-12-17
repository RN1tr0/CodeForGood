-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2014 at 09:36 AM
-- Server version: 5.6.20
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gfg`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` varchar(50) NOT NULL,
  `picture` blob NOT NULL,
  `quantity` int(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `priority` int(1) NOT NULL,
`requestid` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1000003 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`name`, `email`, `phone`, `subject`, `description`, `picture`, `quantity`, `location`, `priority`, `requestid`, `category`, `state`) VALUES
('Ankit Ghosalkar', 'sd@d.com', '5852785955', 'df', 'dfd', 0x30, 0, 'United States', 0, 1, '', 0),
('asd', 'sdsd@er.com', '44747474', 'lelnfle', 'flnefnef', 0x30, 0, '123', 0, 2, '', 0),
('Rujuta Kulkarni', 'sdsd@er.com', '343434', 'fefefe', 'dfdsfdsf', 0x30, 0, 'United States', 0, 3, '', 0),
('', '', '', '', '', 0x30, 0, '', 0, 4, '', 0),
('tejas', 'axg5348@rit.edu', '5852785955', 'sdsd', '', 0x30, 0, 'United States', 3, 5, '', 0),
('ankit ghosalkar', 'axg5348@rit.edu', '5852785955', '', '', 0x30, 0, 'United States', 3, 1000001, '', 0),
('Study', '', '', '', '', 0x30, 0, '', 3, 1000002, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`requestid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
