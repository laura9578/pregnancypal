-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2018 at 03:28 AM
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
-- Table structure for table `medicine_warning_table`
--

CREATE TABLE `medicine_warning_table` (
  `id` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `medicine` text NOT NULL,
  `medicineWarning` text NOT NULL,
  `timesSearched` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_warning_table`
--

INSERT INTO `medicine_warning_table` (`id`, `user_id`, `medicine`, `medicineWarning`, `timesSearched`) VALUES
(1, 0, 'Aspirin', 'This is usually used as a pain reliever, however it isn\'t considered safe to take during pregnancy as it can cause harm to the baby', 0),
(2, 0, 'Ibuprofen', 'This is used as a pain reliever and can be found in drugs such as Advil. This can cause harm to the baby if used during pregnancy.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_warning_table`
--
ALTER TABLE `medicine_warning_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_warning_table`
--
ALTER TABLE `medicine_warning_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
