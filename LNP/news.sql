-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 10:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `ID` int(11) NOT NULL,
  `Highlights` varchar(1000) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Brief` varchar(1000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `india`
--

CREATE TABLE `india` (
  `ID` int(200) NOT NULL,
  `Highlights` varchar(1000) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Brief` varchar(1000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `india`
--

INSERT INTO `india` (`ID`, `Highlights`, `Title`, `Brief`, `Content`, `Date`, `Image`) VALUES
(1, 'kkn', 'Enter title', 'mlm', 'nkn k kn', '2018-06-21', 'Politician-512.png'),
(2, 'kkn', 'Enter title', 'mlm', 'nkn k kn', '2018-06-17', 'Politician-512.png'),
(3, 'kkn', 'Enter title', 'mlm', 'nkn k kn', '2018-06-17', 'Politician-512.png');

-- --------------------------------------------------------

--
-- Table structure for table `politics`
--

CREATE TABLE `politics` (
  `ID` int(200) NOT NULL,
  `Highlights` varchar(1000) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Brief` varchar(1000) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `ID` int(200) NOT NULL,
  `Highlights` varchar(1000) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Brief` varchar(500) NOT NULL,
  `Content` varchar(10000) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trending`
--

INSERT INTO `trending` (`ID`, `Highlights`, `Title`, `Brief`, `Content`, `Date`, `Image`) VALUES
(1, 'Lmy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramng Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text', 'Enter title Enter title Enter title Enter tidwwwwwwwwwd dqdqdqdd qdqd', 'dqdqEnter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title Enter title ddddqd d qd qdqd  dqdq d q d qdq  d qdd q d qd qdqdqd  qdqdqd', 'wqqw', '2018-06-19', 'Idea_Electricity_Bulb_Innovation_Innovative_Lightbulb1-512.png'),
(11, 'wda', 'dw', 'dwdw', 'qwqewd', '2018-06-14', 'Politician-512.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `india`
--
ALTER TABLE `india`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `politics`
--
ALTER TABLE `politics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `india`
--
ALTER TABLE `india`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `politics`
--
ALTER TABLE `politics`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trending`
--
ALTER TABLE `trending`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
