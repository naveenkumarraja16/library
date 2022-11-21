-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 03:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin'),
('naveenkumarraja16@gmail.com', '16112001');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `name` varchar(30) NOT NULL,
  `bookcode` bigint(10) NOT NULL,
  `librarybook` bigint(30) NOT NULL,
  `salesbook` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`name`, `bookcode`, `librarybook`, `salesbook`) VALUES
('english1', 1, 72, 37),
('english2', 2, 40, 20),
('english3', 3, 39, 15),
('english4', 7, 60, 30),
('english5', 8, 50, 30),
('english6', 12, 50, 30),
('english7', 13, 90, 70),
('english8', 16, 40, 30),
('english9', 17, 50, 30),
('maths1', 18, 50, 40),
('maths2', 19, 40, 30),
('maths3', 20, 50, 40),
('maths4', 21, 50, 30),
('maths5', 22, 29, 20),
('maths6', 23, 50, 30),
('maths7', 24, 40, 25),
('maths8', 25, 50, 40),
('maths9', 26, 20, 20),
('science1', 27, 40, 30),
('science2', 28, 40, 30),
('science3', 29, 40, 30),
('science4', 30, 30, 40),
('science5', 31, 40, 30),
('science6', 32, 50, 40),
('science7', 33, 100, 60),
('science8', 34, 40, 20),
('science9', 35, 20, 10),
('COMPUTER1', 36, 50, 40),
('COMPUTER2', 37, 70, 50),
('COMPUTER3', 38, 80, 50),
('COMPUTER4', 39, 55, 40),
('COMPUTER5', 40, 60, 40),
('COMPUTER6', 41, 60, 40),
('COMPUTER7', 42, 50, 25),
('COMPUTER8', 43, 50, 40),
('COMPUTER9', 44, 50, 40),
('KANNADA1', 45, 50, 40),
('KANNADA2', 46, 60, 40),
('KANNADA3', 47, 20, 10),
('KANNADA4', 48, 30, 20),
('KANNADA5', 49, 30, 15),
('KANNADA6', 50, 30, 10),
('KANNADA7', 51, 20, 5),
('KANNADA8', 52, 10, 4),
('KANNADA9', 53, 30, 15),
('HINDI1', 54, 20, 20),
('HINDI2', 55, 30, 20),
('HINDI3', 56, 30, 30),
('HINDI4', 57, 40, 30),
('HINDI5', 58, 40, 40),
('HINDI6', 59, 40, 30),
('HINDI7', 60, 50, 40),
('HINDI8', 61, 40, 30),
('HINDI9', 62, 40, 30),
('SOCIAL1', 63, 30, 30),
('SOCIAL2', 64, 40, 30),
('SOCIAL3', 65, 30, 40),
('SOCIAL4', 66, 50, 40),
('SOCIAL5', 67, 40, 30),
('SOCIAL6', 68, 50, 40),
('SOCIAL7', 69, 80, 80),
('SOCIAL9', 71, 40, 30),
('SOCIAL8', 72, 30, 25),
('economics1', 73, 30, 10),
('economics2', 74, 30, 15),
('economics3', 75, 33, 30),
('economics4', 76, 30, 15),
('economics5', 77, 30, 25),
('economics6', 78, 40, 30),
('economics7', 79, 30, 25),
('economics8', 80, 30, 15),
('economics9', 81, 30, 15);

-- --------------------------------------------------------

--
-- Table structure for table `createaccount`
--

CREATE TABLE `createaccount` (
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createaccount`
--

INSERT INTO `createaccount` (`name`, `dob`, `email`, `mobile`, `password`) VALUES
('Sunitha', '1998-07-31', 'jay@gmail.com', 1234567890, 'jai'),
('naveen', '2019-12-02', 'naveenkumar@gmail.com', 1111111111, '1111'),
('NAVEEN KUMAR R', '2001-11-16', 'naveenkumarraja16@gmail.com', 7483383124, '16112001'),
('Naveen Kumar R', '2001-11-16', 'naveenkumarrajalaptop@gmail.co', 7483383124, '16112001');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(30) NOT NULL,
  `pending` int(20) NOT NULL,
  `bookname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `pending`, `bookname`) VALUES
('jay@gmail.com', 0, ''),
('naveenkumarraja16@gmail.com', 1, '22');

-- --------------------------------------------------------

--
-- Table structure for table `librarycard`
--

CREATE TABLE `librarycard` (
  `email` varchar(30) NOT NULL,
  `card` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarycard`
--

INSERT INTO `librarycard` (`email`, `card`) VALUES
('naveen@gmail.com', '1'),
('naveenkumarraja16@gmail.com', '2'),
('naveenkumarrajalaptop@gmail.co', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookcode`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `createaccount`
--
ALTER TABLE `createaccount`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `librarycard`
--
ALTER TABLE `librarycard`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `card` (`card`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
