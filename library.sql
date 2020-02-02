-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 06:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookstall`
--

CREATE TABLE `bookstall` (
  `Id` int(11) NOT NULL,
  `Bookcode` int(11) NOT NULL,
  `Bookname` varchar(15) NOT NULL,
  `Author` varchar(10) NOT NULL,
  `Description` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Publisher` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookstall`
--

INSERT INTO `bookstall` (`Id`, `Bookcode`, `Bookname`, `Author`, `Description`, `Price`, `Publisher`) VALUES
(2, 101, 'valya kadha', 'ramu', 'nice', 111, 'ramanujan'),
(3, 102, 'kandathum ketta', 'akashavaan', 'kollam', 11500, 'radio'),
(4, 103, 'wings of fire', 'A P J abdu', 'heavy', 1000, 'A P J'),
(5, 104, 'balarama', 'Reveendran', 'entertaining section', 10, 'mathrubhumi'),
(10, 500, 'aradha', 'eeeee', 'nyz', 8000, 'iiiiiii');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookstall`
--
ALTER TABLE `bookstall`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookstall`
--
ALTER TABLE `bookstall`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
