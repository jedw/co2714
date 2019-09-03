-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2019 at 07:33 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

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
-- Table structure for table `ajaxcheckuser`
--

CREATE TABLE `ajaxcheckuser` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajaxcheckuser`
--

INSERT INTO `ajaxcheckuser` (`ID`, `firstname`, `surname`, `username`, `password`, `email`) VALUES
(1, 'Jonathan', 'Edwards', 'jedwards', 'qwerty', 'jedwards8@uclan.ac.uk'),
(2, 'Jonathan', 'Edwards', 'jedwards1', 'asdfgh', 'email@email.com'),
(3, 'Jonathan', 'Edwards', 'jedwards8', 'qwerty', 'jonathan@email.com'),
(4, 'Fred', 'Bloggs', 'FBloggs', 'Qwertyuiop123', 'fbloggs@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `ID` int(11) NOT NULL,
  `cat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`ID`, `cat`) VALUES
(1, 'pink cat'),
(2, 'blue cat'),
(3, 'brown cat'),
(4, 'black cat');

-- --------------------------------------------------------

--
-- Table structure for table `cicrud`
--

CREATE TABLE `cicrud` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cicrud`
--

INSERT INTO `cicrud` (`id`, `title`, `content`) VALUES
(1, 'Test', 'This is a test'),
(2, 'Also', 'Here is another test');

-- --------------------------------------------------------

--
-- Table structure for table `coords`
--

CREATE TABLE `coords` (
  `id` int(3) NOT NULL,
  `team` varchar(50) NOT NULL,
  `lat` decimal(8,6) NOT NULL,
  `lon` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coords`
--

INSERT INTO `coords` (`id`, `team`, `lat`, `lon`) VALUES
(1, 'TeamAwesome', '53.763703', '-2.708945'),
(2, 'TeamHappy', '53.760367', '-2.704868'),
(3, 'TheWinners', '53.757196', '-2.707379');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `title`, `content`) VALUES
(1, 'JavaScript', 'Yesterday I remembered that I hated JavaScript'),
(2, 'Another Record', 'I can\'t think of anything'),
(3, 'Another Record', 'I can\'t think of anything');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(1, 'jedw', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memid`, `firstname`, `lastname`) VALUES
(1, 'Jonathan', 'Edwards'),
(2, 'Lorna', 'McKnight'),
(3, 'Matt', 'Horton'),
(4, 'Nicky', 'Danino'),
(5, 'Zaki', 'El-Haroun'),
(6, 'Zimin', 'Wu'),
(7, 'Nick', 'Mitchell'),
(8, 'Lesley', 'May');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `ID` int(3) NOT NULL,
  `Forname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`ID`, `Forname`, `Surname`, `Age`) VALUES
(1, 'Jonathan', 'Edwards', 34),
(5, 'Mickey', 'Mouse', 80),
(6, 'Donald', 'Duck', 90),
(7, 'Wiley', 'Coyote', 70),
(8, 'Fred', 'Flintstone', 55);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(3) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `surname`, `password`, `email`) VALUES
(1, 'Jonathan', 'Edwards', 'qwerty', 'jedwards8@uclan.ac.uk'),
(2, 'Nicky', 'Danino', 'asdfgh', 'ndanino@uclan.ac.uk'),
(3, 'Matthew', 'Horton', 'zxcvbnm', 'mplhorton@uclan.ac.uk'),
(4, 'Zimin', 'Wu', 'asdfghjkl', 'zwu1@uclan.ac.uk'),
(5, 'Zaki', 'El-Haroun', 'network', 'zmel-haroun@uclan.ac.uk'),
(6, 'Nick', 'Mitchell', 'asdfghjkl', 'npmitchell@uclan.ac.uk'),
(7, 'Lorna', 'McKnight', 'qwertyuiop', 'lmcknight@uclan.ac.uk'),
(8, 'Chris', 'Casey', 'qwertyuiop', 'ccasey@uclan.ac.uk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajaxcheckuser`
--
ALTER TABLE `ajaxcheckuser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cicrud`
--
ALTER TABLE `cicrud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coords`
--
ALTER TABLE `coords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajaxcheckuser`
--
ALTER TABLE `ajaxcheckuser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cicrud`
--
ALTER TABLE `cicrud`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coords`
--
ALTER TABLE `coords`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
