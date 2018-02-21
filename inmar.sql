-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 06:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactslist`
--

CREATE TABLE `contactslist` (
  `name` varchar(20) NOT NULL,
  `cemail` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `ownermail` varchar(20) NOT NULL,
  `groupname` varchar(20) NOT NULL,
  `groupid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactslist`
--

INSERT INTO `contactslist` (`name`, `cemail`, `phoneno`, `ownermail`, `groupname`, `groupid`) VALUES
('ahmed', 'ahmed@inmar.com', '7997406467', 'mouni@inmar.com', 'pvpsit', 1000),
('srinivas', 'srinu@inmar.com', '7674911756', 'mouni@inmar.com', 'vrsec', 4567),
('amani', 'amani@inmar.com', '9000974529', 'mouni@inmar.com', 'NULL', 0),
('lakshmi', 'lakshmi@inmar.com', '9666854097', 'mouni@inmar.com', 'NULL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupsdata`
--

CREATE TABLE `groupsdata` (
  `groupname` varchar(20) NOT NULL,
  `groupid` varchar(10) NOT NULL,
  `ownermail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupsdata`
--

INSERT INTO `groupsdata` (`groupname`, `groupid`, `ownermail`) VALUES
('pvpsit', '1000', 'mouni@inmar.com'),
('vrsec', '4567', 'mouni@inmar.com');

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Aadhar` varchar(15) NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`Name`, `Email`, `Password`, `Gender`, `Aadhar`, `PhoneNumber`) VALUES
('mounika', 'mouni@inmar.com', '*It123', 'female', 'ASDF12345', '7674911756');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupsdata`
--
ALTER TABLE `groupsdata`
  ADD PRIMARY KEY (`groupid`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
