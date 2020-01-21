-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 11:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `clinicaddress` varchar(30) NOT NULL,
  `clinictiming` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `slot` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `dname`, `clinicaddress`, `clinictiming`, `department`, `date`, `slot`, `status`) VALUES
(5, 'jebin', 'ajumal', 'chavadimukka', '1pm-5pm', 'ortho', '0000-00-00', '9am', 'Approved'),
(5, 'mujeeb', 'ajumal', 'chavadimukka', '1pm-5pm', 'ortho', '2020-01-22', '4pm', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nationalid` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `clinicaddress` varchar(50) NOT NULL,
  `clinictiming` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `dname`, `email`, `nationalid`, `qualification`, `experience`, `department`, `clinicaddress`, `clinictiming`, `mobile`, `username`, `password`, `status`) VALUES
(4, 'ashiq', 'mail@gmail.com', '78964', 'mbbs', '5', 'cardio', 'sreekaryam', '9am-5pm', 9874563210, 'ashiq', '12345', 'Approved'),
(5, 'ajumal', 'ajumal@gmail.com', '789654', 'mbbs', '2', 'ortho', 'chavadimukka', '1pm-5pm', 9874563210, 'ajumal', '123456', 'Approved'),
(9, 'nikhil', 'nikhil@gmail.com', '963258', 'mbbs', '3', 'ortho', 'chennithala', '1pm-5pm', 9874563210, 'nikhil', '123456', 'pending'),
(10, 'sam', 'mail@gmail.com', '963258', 'mbbs', '5', 'neurology', 'trivandrum', '1pm-5pm', 9847563210, 'sam', '123456', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nationalid` varchar(30) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `age`, `email`, `nationalid`, `mobile`, `username`, `password`) VALUES
(3, 'jebin', 'male', 23, 'jj@gmail.com', '789654', 9847072366, 'jebin', 123456),
(7, 'mujeeb', 'male', 23, 'mail@gmail.com', '98748', 9874563210, 'mujeeb', 12345),
(10, 'jijo', 'male', 23, 'j@mail.com', '968', 6321459877, 'jijo', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
