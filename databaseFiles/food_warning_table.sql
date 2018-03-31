-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 10:02 PM
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
-- Table structure for table `food_warning_table`
--

CREATE TABLE `food_warning_table` (
  `id` int(11) NOT NULL,
  `food` text NOT NULL,
  `foodWarning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_warning_table`
--

INSERT INTO `food_warning_table` (`id`, `food`, `foodWarning`) VALUES
(1, 'Uncooked Seafood', 'Uncooked seafood is a food that has a risk of infection, and may carry coliform bacteria, salmonella, toxoplasmosis, and other dangerous bacteria. A baby\'s immune system isn\'t fully formed and these serious infections can be deadly.'),
(2, 'Fish and Mercury', 'These foods carry a risk of toxins. \r\nBabies don\'t have the ability to clear mercury out of their systems. In addition, developing brains are believed to be particularly vulnerable to mercury. Consuming mercury during pregnancy may cause brain damage and developmental delays.\r\n\r\nFish high in mercury include tilefish, swordfish, king mackerel, and shark.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_warning_table`
--
ALTER TABLE `food_warning_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_warning_table`
--
ALTER TABLE `food_warning_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
