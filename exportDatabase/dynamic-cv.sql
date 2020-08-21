-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 04:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamic-cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `storedata`
--

CREATE TABLE `storedata` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telnumber` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `education` text NOT NULL,
  `skills` text NOT NULL,
  `reference` text NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storedata`
--

INSERT INTO `storedata` (`name`, `address`, `telnumber`, `email`, `age`, `nationality`, `marital`, `education`, `skills`, `reference`, `userid`) VALUES
('Arpita', 'dhaka', 17, 'aroy6852@gmail.com', 22, 'Bangladeshi', 's', 'a', 'aaaa', 'aaaa', 1),
('Oindrila', 'dhaka', 1788, 'aroy6852@gmail.com', 22, 'Bangladeshi', 's', 'Graduate', 'Sleeping', 'none', 5),
('Oindrila', 'dhaka', 1788, 'aroy6852@gmail.com', 22, 'Bangladeshi', 's', 'Graduate', 'Sleeping', 'none', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storedata`
--
ALTER TABLE `storedata`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storedata`
--
ALTER TABLE `storedata`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
