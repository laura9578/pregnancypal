-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 03:27 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pregnancy_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(4) NOT NULL,
  `userid` int(4) NOT NULL,
  `title` varchar(150) NOT NULL,
  `event` varchar(255) NOT NULL,
  `eventDate` varchar(15) NOT NULL,
  `eventMonth` varchar(255) NOT NULL,
  `eventYear` varchar(255) NOT NULL,
  `eventTime` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `userid`, `title`, `event`, `eventDate`, `eventMonth`, `eventYear`, `eventTime`) VALUES
(14, 8, 'test', 'testing', '15', '08', '2018', '08:15:00.000000'),
(15, 8, 'test', 'testing', '15', '08', '2018', '07:14:00.000000'),
(16, 8, 'test', 'testing', '15', '08', '2018', '07:14:00.000000'),
(17, 8, 'test', 'testing', '15', '08', '2018', '09:08:00.000000'),
(18, 8, 'test', 'testing', '', '08', '2018', '09:08:00.000000'),
(19, 8, 'test', 'testing', '', '08', '2018', '10:11:00.000000'),
(20, 8, 'test', 'testing', '', '10', '2018', '13:10:00.000000'),
(22, 8, 'test', 'testing', '10', '08', '2018', '09:13:00.000000'),
(23, 8, 'test', 'testing', '15', '08', '2018', '07:10:00.000000'),
(24, 8, 'Coursework 2 - Project Schedule', 'PAGEVIEW', '15', '08', '2018', '12:00:00.000000'),
(25, 8, 'Psychology Critique Coursework', 'CW', '15', '08', '2018', '09:00:00.000000'),
(26, 8, 'test', 'testing', '11', '08', '2018', '10:00:00.000000'),
(27, 8, 'Psychology Critique Coursework', 'pagevisit', '15', '08', '2018', '10:00:00.000000'),
(28, 8, 'Coursework 2 - Project Schedule', 'CW', '10', '08', '2018', '08:00:00.000000'),
(29, 8, 'Psychology Critique Coursework', 'CW', '10', '08', '2018', '09:00:00.000000'),
(30, 8, 'test', 'CW', '10', '08', '2018', '07:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_fk_userid` FOREIGN KEY (`userid`) REFERENCES `login` (`userid`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
