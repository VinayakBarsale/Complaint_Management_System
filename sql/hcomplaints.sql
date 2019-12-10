-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 07:14 PM
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
-- Table structure for table `hcomplaints`
--

CREATE TABLE `hcomplaints` (
  `Comp_id` int(5) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Sub_Category` varchar(10) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Date_Time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcomplaints`
--

INSERT INTO `hcomplaints` (`Comp_id`, `Category`, `Sub_Category`, `Description`, `Date_Time`) VALUES
(3204, 'Electrical', 'Light', 'yash', '2018-11-03 15:27:45.000000'),
(1928, 'Electrical', 'Light', '424fslkfjffds rd', '2018-11-03 15:29:58.000000'),
(5169, 'Electrical', 'Light', 'dada', '2018-11-03 15:34:37.000000'),
(3453, 'Electrical', 'Fan', 'ijiiioo', '2018-11-03 17:37:52.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
