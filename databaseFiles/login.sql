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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(4) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `duedate` date NOT NULL,
  `profilepic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `email`, `duedate`, `profilepic`) VALUES
(8, 'bob', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c', 'a@b.com', '2020-12-12', 'Logo.jpg'),
(10, 'James', '4b591f93c712931e3fb91a2d0f9199735b7c9c430c903e8442e1f9e2bf34aa7f5bf3e48714359bf44902d9d42fc51153992a8d989d6beab7143d2425fa325782', 'james@example.com', '2018-05-05', 'Logo.jpg'),
(11, 'Bailey', '3bbed9c106ceaea9e1d1f851b493a52582ae6f6deab8170da43da346a8710622b21d6c2ca14c6336bdc770f161673bef5edad6e65d86b05be62817bc9088d924', 'bailey@example.com', '2018-09-08', 'FEE97156-6C44-405C-CB1B-F09EA9DA1B82.jpg'),
(12, 'Jack', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'jack@example.com', '2018-11-30', 'Logo.jpg'),
(13, 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff', 'test@test.com', '2018-12-10', 'default.jpg'),
(14, 'laura', '7249334c32fc05f3c7565f315c09f5cb40ba40fccad8a39a7b0e488e34b3db0526e6367615d22378c9e630939dff5037c61cb7cd4ffadb858d44e4ef56e02986', 'laura@example.com', '2019-04-15', '336CAC41-90B5-AF38-F907-2C203A439D63.jpg'),
(15, 'testing', '521b9ccefbcd14d179e7a1bb877752870a6d620938b28a66a107eac6e6805b9d0989f45b5730508041aa5e710847d439ea74cd312c9355f1f2dae08d40e41d50', 'testing@test', '2019-02-16', 'DA30464D-DCEE-F93F-A6DB-014512A5BBB8.jpg'),
(16, 'gary', '5d941e2b48f2e708c6c0a95702c5806d9926b39e38e21cfa4ef8ccb941e282aa60ca652edb0996025dc8de605b0947034828e8706adfeb36bf373eecf05d1d97', 'gary@test', '2019-04-15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
