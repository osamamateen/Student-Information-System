-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 12:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `id` int(7) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` text NOT NULL,
  `cnic` int(13) NOT NULL,
  `zip` int(7) NOT NULL,
  `country` text NOT NULL,
  `domicile` varchar(20) NOT NULL,
  `ssc_board` varchar(30) NOT NULL,
  `ssc_perc` varchar(13) NOT NULL,
  `ssc_year` varchar(13) NOT NULL,
  `hsc_board` varchar(30) NOT NULL,
  `hsc_perc` varchar(13) NOT NULL,
  `hsc_year` varchar(13) NOT NULL,
  `program` varchar(13) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `ques` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student2`
--

INSERT INTO `student2` (`id`, `fname`, `lname`, `dob`, `email`, `mobile`, `gender`, `address`, `cnic`, `zip`, `country`, `domicile`, `ssc_board`, `ssc_perc`, `ssc_year`, `hsc_board`, `hsc_perc`, `hsc_year`, `program`, `roll_no`, `image`, `password`, `ques`, `answer`) VALUES
(10, 'osama', 'Mateen', '2019-11-23', 'osamamateen23@gmail.com', '03008236587', 'Male', 'B123 Block 6 Gulshan - e -Iqbal Karachi ', 42101, 65, 'pakistan', 'sindh', 'Sindh', '76', '2013', 'Sindh', '80', '2016', 'BSCS', 22275, 'IMG_9510.jpg', 'student', '1', 'simba'),
(60, 'Sarah', 'Hasnain', '2019-12-13', 'sarah@gmail.com', '1234567890', 'Female', 'Pechs Karachi', 42101, 789, 'pakistan', 'sindh', 'Sindh', '75', '2013', 'Sindh', '80', '2016', 'BSCS', 1234, '2.jpg', 'student', '1', 'simba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student2`
--
ALTER TABLE `student2`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
