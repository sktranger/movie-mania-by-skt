-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 07:45 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginn`
--

CREATE TABLE `loginn` (
  `USERID` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginn`
--

INSERT INTO `loginn` (`USERID`, `PASSWORD`) VALUES
('amit', 'amitdon'),
('saikat', 'sktranger'),
('sayan', 'sleepyhollow'),
('shweta', 'shawshewta');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `MOVIEID` varchar(50) NOT NULL,
  `MOVIENAME` varchar(50) NOT NULL,
  `SHOW1` varchar(50) NOT NULL,
  `SHOW2` varchar(50) NOT NULL,
  `SHOW3` varchar(50) NOT NULL,
  `SHOW4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`MOVIEID`, `MOVIENAME`, `SHOW1`, `SHOW2`, `SHOW3`, `SHOW4`) VALUES
('M001', 'RAEES', '11:00', '13:30', '15:45', '17:15'),
('M002', 'KAABIL', '11:20', '13:30', '15:40', '17:50'),
('M004', 'JOLLY LLB2', '12:30', '13:50', '14:45', '18:30'),
('M005', 'DEVI', '15:35', '16:55', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `NAME` varchar(50) NOT NULL,
  `MOVIENAME` varchar(50) NOT NULL,
  `SHOWTIME` varchar(50) NOT NULL,
  `SEAT` varchar(50) NOT NULL,
  `RUPEES` varchar(50) NOT NULL,
  `NUMBER OF TICKETS` varchar(50) NOT NULL,
  `TOTAL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`NAME`, `MOVIENAME`, `SHOWTIME`, `SEAT`, `RUPEES`, `NUMBER OF TICKETS`, `TOTAL`) VALUES
('', 'HVVGK', 'UIGG', 'HGGK', 'CFJF', 'IYGTIGT', 'IG'),
('', 'GGUU', 'UFYFUF', '', 'HIFTYIF', 'UYGIIG', 'IYTF'),
('', 'RAEES', '11.10', 'GOLD', '150', '3', '450'),
('', 'TOMAKE CHAI', '13:45', 'DIAMOND-200', '200', '3', '600'),
('', 'RAEES', '11:20', 'DIAMOND-200', '200', '5', '1000'),
('', 'RAEES', '11:2', 'mum', 'GOLD', '3', '450'),
('SAYAN BASAK', 'KAABIL', '13:30', 'GOLD-150', '150', '2', '300'),
('SAYAN BASAK', 'DEVI', '13:15', 'DIAMOND-200', '200', '5', '1000'),
('SAIKAT SEN', 'KAABIL', '13:30', 'GOLD-150', '150', '5', '750');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERID` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PHONE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERID`, `PASSWORD`, `EMAIL`, `PHONE`) VALUES
('debom', '123456', 'dev@gmail.com', '1234567893'),
('prasant', '78963', 'paro@gmail.com', '1020304050'),
('rumi', '12345', 'rumi@gmail.com', '7894561425'),
('saikat', '852', 'sa@gmail.com', '9433419711');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginn`
--
ALTER TABLE `loginn`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`MOVIEID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
