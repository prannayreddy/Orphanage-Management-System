-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 08:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `stored` ()  SELECT * FROM children$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `adopter`
--

CREATE TABLE `adopter` (
  `email` varchar(30) NOT NULL,
  `fname` varchar(10) DEFAULT NULL,
  `lname` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phno` varchar(15) DEFAULT NULL,
  `income` int(11) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adopter`
--

INSERT INTO `adopter` (`email`, `fname`, `lname`, `gender`, `address`, `phno`, `income`, `pwd`) VALUES
('aravind@gmail.com', 'aravind', 'M', 'Male', 'blore', NULL, 30000, '81dc9bdb52d04dc20036dbd8313ed055'),
('diel15cs@cmrit.ac.in', 'diana', 'roy', 'Female', 'pai layout', NULL, 10000, '81dc9bdb52d04dc20036dbd8313ed055'),
('rohan@hotmail.com', 'rohan', 'bhat', 'Male', 'chennai', NULL, 1456, '46d045ff5190f6ea93739da6c0aa19bc'),
('zg@', 'dfgh', 'fgh', 'Male', 'fcgh', NULL, 876, 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `interests` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `fname`, `lname`, `dob`, `interests`, `gender`) VALUES
(1, 'shreyas', 'dass', '2005-11-15', 'photography', 'Male'),
(2, 'vardhini', 'bala', '2010-11-16', 'studying', 'Female'),
(5, 'vihaann', 'reddy', '2014-04-24', 'pokemon', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `email` varchar(30) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `salary` int(11) NOT NULL,
  `position` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`email`, `fname`, `lname`, `salary`, `position`, `gender`, `phno`, `pwd`) VALUES
('abc@abc.com', 'abc', 'def', 10000, 'Asst. Manager', 'Female', '898989', '81dc9bdb52d04dc20036dbd8313ed055'),
('prannaysreddy@gmail.com', 'prannay', 'reddy', 10000, 'manager', 'Male', '9590133123', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `money` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`id`, `name`, `location`, `money`, `date`) VALUES
(2, 'church', 'mg road', 30000, '2017-11-15'),
(5, 'temple', 'australia', 40000, '2017-11-15');

--
-- Triggers `fundraiser`
--
DELIMITER $$
CREATE TRIGGER `trigger_1` AFTER DELETE ON `fundraiser` FOR EACH ROW UPDATE totmoney
SET totmon=totmon-OLD.money,num=num-1
WHERE name="fund"
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_2` AFTER INSERT ON `fundraiser` FOR EACH ROW UPDATE totmoney
SET totmon=totmon+NEW.money,num=num+1
WHERE name="fund"
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `totmoney`
--

CREATE TABLE `totmoney` (
  `name` varchar(20) NOT NULL,
  `num` int(11) NOT NULL,
  `totmon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totmoney`
--

INSERT INTO `totmoney` (`name`, `num`, `totmon`) VALUES
('fund', 2, 70000),
('salary', 2, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopter`
--
ALTER TABLE `adopter`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totmoney`
--
ALTER TABLE `totmoney`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
