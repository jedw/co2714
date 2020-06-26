-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2020 at 04:23 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter4`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(64) NOT NULL,
  `mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `address`, `email`, `mobile`) VALUES
(15, 'Billy', 'Bobbins', '123 Road Street', 'bbobbins@uclan.ac.uk', '0123456789'),
(17, 'Anne', 'Other', '56 Student street', 'aother@uclan.ac.uk', '0987654321'),
(18, 'Bzeckzi', 'Czlemszon', '12 Polish Lane', 'bczlemszon@uclan.ac.uk', '0183756239'),
(19, 'Testy', 'McTestface', '123 test street', 'test@test.com', '012111111'),
(21, 'Lorna', 'McKnight', '123 Lorna street', 'Lorna@test.com', '01222222222'),
(24, 'Matt', 'Horton', '564 Matt Street', 'matt@horton.com', '0192837465'),
(26, 'Brendan', 'Cassidy', 'Somewhere in Blackpool', 'brendan@uclan.ac.uk', '1234567890'),
(27, 'Ioannis', 'The Menace', 'UCLan', 'idoumanis@uclan.ac.uk', '0056983264');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
