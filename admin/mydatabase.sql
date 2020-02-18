-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2020 at 04:48 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_example`
--

CREATE TABLE `admin_example` (
  `ID` int(3) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_example`
--

INSERT INTO `admin_example` (`ID`, `Username`, `Password`, `Email`, `Admin`) VALUES
(1, 'Jonathan', '$2y$10$Lub2/Lb.eeGUG4zHSBDBiu8d3eijWAXUAp45zK8lIdaHqcLLrB8XW', 'jedwards8@uclan.ac.uk', 1),
(2, 'Becki', '$2y$10$Lub2/Lb.eeGUG4zHSBDBiu8d3eijWAXUAp45zK8lIdaHqcLLrB8XW', 'rclemson@uclan.ac.uk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_example`
--
ALTER TABLE `admin_example`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_example`
--
ALTER TABLE `admin_example`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
