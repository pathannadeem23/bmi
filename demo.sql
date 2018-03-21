-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2016 at 03:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`username`, `password`) VALUES
('healthcare', 'health100');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `hosp` varchar(30) NOT NULL,
  `cnt` varchar(11) NOT NULL,
  `addr` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `hosp`, `cnt`, `addr`) VALUES
(7, '555', 'll', '56666', 'llll'),
(6, 'kajol', 'icon', '896321145', 'bandra'),
(8, '999', 'llllll', '325464664', 'll'),
(9, '233333', 'lllllpp', 'lvshvdv', 'bandra'),
(10, '9554455', 'aasd', 'mannnn', 'kkoooo'),
(11, '632111', 'aaa', 'pooja', 'bandra'),
(12, 'lpppp', 'kkkk', '256633', 'ppkkf'),
(13, '12366', 'kkk', '78999', 'llllpp'),
(14, '2223', 'kkkkk', '7896444455', 'mumbra'),
(17, 'nadeem', 'karva', '9632145632', 'ambivli'),
(18, 'poo55', 'king', '7963210025', 'bnadra'),
(19, 'akash', 'matoshri', '9856321456', 'dombivli');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `nm` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `weight` int(10) NOT NULL,
  `height` int(10) NOT NULL,
  `bmi` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `nm`, `dob`, `name`, `gender`, `contact`, `weight`, `height`, `bmi`) VALUES
(2, 'rejoe', '1994-09-20', 'kajol', 'Female', '62397777', 55, 160, 21),
(4, 'll', '1995-05-10', '', 'Female', '698745566', 50, 153, 21),
(5, 'qqq', '2016-12-23', '', 'Female', '5889999', 60, 180, 19),
(6, 'sid', '1996-05-20', 'kajol', 'Male', '6987412356', 60, 140, 31),
(7, 'manjiri', '1995-05-10', 'akash', 'Female', '9632145631', 50, 160, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
