-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 07:25 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prosguide_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(1, 'Redwan', 'Redwan1998', 'Redwan199#', 1998123456, 01312740417),
(2, 'Ruba', 'Rubaba', 'Rubaba1#', 2000123456, 10683863977),
(3, 'Griffin', 'Griffin', 'Griffin1#', 2001123456, 01666666666);


-- --------------------------------------------------------




--
-- Table structure for table `sessions_info`
--

CREATE TABLE `sessions_info` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pri` int(10) NOT NULL,
  `time` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions_info`
--

INSERT INTO `sessions_info` (`id`, `sname`, `cname`, `pri`, `time`, `image`) VALUES
(1, 'Valorant', 'Griffin', 120, '22:00', 'uploads/6113dc9320a609.98406036.png'),
(2, 'Sova Guide', 'Zahzah', 120, '10:00', 'uploads/6113c0e69f3277.83541098.png'),
(3, 'Reyna Guide', 'Spex', 200, '20:00', 'uploads/6113e7613a5a95.03372559.png'),
(4, 'Yoru Guide', 'Twistz', 220, '12:00', 'uploads/6113f5c2204505.02253202.png'),
(5, 'Astra Guide', 'Ish7', 220, '17:00', 'uploads/6113f85eec5373.45160656.png'),
(6, 'Phoenix Guide', 'AsX', 220, '18:00', 'uploads/6113f8703da827.75156144.png');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(5) NOT NULL,
  `com` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `com`) VALUES
(1, 'not good'),
(2, 'bad customer service'),
(3, 'good'),
(4, 'good'),
(5, 'excellent'),
(6, 'useful page'),
(7, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `gamer`
--

CREATE TABLE `gamer` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nid` int(20) NOT NULL,
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gamer`
--

INSERT INTO `gamer` (`id`, `name`, `username`, `password`, `nid`, `num`) VALUES
(1, 'Auspicious', 'Auspicious12', 'Auspicious1#', 2004123456, 01811111111),
(2, 'Amaterasu', 'Amaterasu', 'Amaterasu1#', 2005123456, 01911111111),
(3, 'ItachiUchiha', 'ItachiUchiha', 'ItachiUchiha1#', 2006123456, 01711111111),
(4, 'NarutoUzumaki', 'NarutoUzumaki', 'NarutoUzumaki1#', 2007123456, 01311111111);

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamer`
--
ALTER TABLE `gamer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`nid`);
  
--
-- Indexes for table `sessions_info`
--
ALTER TABLE `sessions_info`
  ADD PRIMARY KEY (`id`);
  
  
  
  
  
  
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sessions_info`
--
ALTER TABLE `sessions_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;


--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gamer`
--
ALTER TABLE `gamer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
