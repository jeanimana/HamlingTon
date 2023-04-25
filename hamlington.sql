-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 05:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamlington`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `apId` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `nationId` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `regDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`apId`, `fname`, `lname`, `dob`, `gender`, `email`, `phone`, `nationId`, `province`, `district`, `sector`, `cell`, `village`, `regDate`) VALUES
(2, 'kamana', 'armstrong', '2001-01-30', '', 'hirwaarmystrong@gmail.com', '0783200660', '2323232323', 'kigali', 'Gasabo', 'kacyiru', 'kamutwa', 'kanserege', NULL),
(3, 'sdadas', 'asdasd', '2023-03-14', 'F', 'hirwaarmystrong@gmail.com', '0783200661', '', 'kigali', 'Gasabo', 'kacyiru', 'kamutwa', 'kanserege', NULL),
(4, 'uwimana', 'KL', '2002-06-04', 'M', 'hirwastavo@gmail.com', '0783200661', '232323223', 'kigali', 'Gasabo', 'kacyiru', 'kamutwa', 'kanserege', NULL),
(5, 'dddi', 'awerf', '2007-07-11', 'M', 'hirwaarmystrong@gmail.com', '0783200661', '333421124321223', 'kigali', 'Gasabo', 'kacyiru', 'kamutwa', 'kanserege', NULL),
(6, 'ikirezi', 'divine', '2023-03-08', 'F', 'hirwaarmystrong@gmail.com', '0783200660', '8223823892389', 'kigali', 'Gasabo', 'kacyiru', 'kamutwa', 'kanserege', '2023-03-30'),
(7, 'asdfsd', 'sdasdasd', '2222-02-21', 'F', '', '079', '2123223', 'jk', 'jkkjhjkh', 'khhkj', 'jkhkjhjkh', 'kjhk', '2023-03-30'),
(8, 'kjkljjhjk', 'jkhjkhjkjk', '2299-02-22', 'M', 'hirwastavo@gmail.com', '0783200660', '2928282', 'jkhjkhjkhjk', 'kjhjkhjkhjkh', 'jkhjkhjkhjkh', 'kjhjkhjkjkhjkh', 'jjkhjjhjhk', '2023-03-30'),
(9, 'kjkljjhjk', 'jkhjkhjkjk', '2299-02-22', 'M', 'hirwastavo@gmail.com', '0783200660', '2928282', 'jkhjkhjkhjk', 'kjhjkhjkhjkh', 'jkhjkhjkhjkh', 'kjhjkhjkjkhjkh', 'jjkhjjhjhk', '2023-03-30'),
(10, 'kjkljjhjk', 'jkhjkhjkjk', '2299-02-22', 'M', 'hirwastavo@gmail.com', '0783200660', '2928282', 'jkhjkhjkhjk', 'kjhjkhjkhjkh', 'jkhjkhjkhjkh', 'kjhjkhjkjkhjkh', 'jjkhjjhjhk', '2023-03-30'),
(11, 'kjhjklhsdjkhajk', 'jkhjkhjkhjkhjkhjk', '2021-08-08', 'M', 'hirwaarmystrong@gmail.com', '8989898989', '89898998989', '89hjkhjkhjkhjk', '9jihhjkhjkh', 'jkhjkhjkhjkh', 'jkjkhjkhjkh', 'jkhjkhjkhjk', '2023-03-30'),
(12, 'yuygyugy', 'yuyuuyu', '2222-02-22', 'M', 'hirwastavo@gmail.com', '0783200661', '453445454545', 'yuyututyu', 'yutyutyu', 'yutyut', 'yutyutyutyu', 'yutuy', '2023-03-30'),
(13, 'denzo', 'anitha', '2023-03-29', 'M', 'hirwaarmystrong@gmail.com', '0783200661', '877878787878', 'kigali', 'Gasabo', 'jkhjkhjkhjkh', 'kamutwa', 'kanserege', '2023-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `apId` int(11) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`apId`, `action`) VALUES
(1, 'Approved'),
(2, 'Approved'),
(3, 'Disapproved'),
(4, 'Approved'),
(5, 'Disapproved'),
(6, 'Approved'),
(7, 'Disapproved'),
(8, 'Approved'),
(9, 'Approved'),
(10, 'Approved'),
(11, 'Approved'),
(12, 'Disapproved'),
(13, 'Disapproved');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mesId` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `gender`, `dob`, `email`, `username`, `password`) VALUES
(4, 'uwimpuhwe', 'Leoncia', 'F', '2023-03-15', 'anitah@gmail.com', 'anitah', '12'),
(5, 'simbi', 'christian', 'M', '1983-11-23', 'simbi2327@gmail.com', 'christian', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`apId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mesId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `apId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
