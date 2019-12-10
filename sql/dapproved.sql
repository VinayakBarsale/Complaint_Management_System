-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 10:38 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `dapproved`
--

CREATE TABLE `dapproved` (
  `ApprovedBy` varchar(20) NOT NULL,
  `Date_Time` date NOT NULL,
  `comp_id` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Reg_No` varchar(10) NOT NULL,
  `Dept` varchar(30) NOT NULL,
  `Cmp_Category` varchar(20) NOT NULL,
  `Cmp_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dapproved`
--

INSERT INTO `dapproved` (`ApprovedBy`, `Date_Time`, `comp_id`, `Name`, `Reg_No`, `Dept`, `Cmp_Category`, `Cmp_desc`) VALUES
('HOD', '2018-11-06', '2983', 'Aditya Bhawsar', '2017CA59', 'CSE', 'Ragging', 'I have been Ragged. BY yash Bakliwal MCA 2nd year'),
('HOD', '2018-11-08', '5247', 'Naman Kashayap', '2017CA12', 'CSE', 'Ragging', 'I hate EXAM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
