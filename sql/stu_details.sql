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
-- Table structure for table `stu_details`
--

CREATE TABLE `stu_details` (
  `Comp_Id` int(10) NOT NULL,
  `Hostel_Name` varchar(20) NOT NULL,
  `Room_No` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Reg_No` varchar(10) NOT NULL,
  `Mobile` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_details`
--

INSERT INTO `stu_details` (`Comp_Id`, `Hostel_Name`, `Room_No`, `Name`, `Reg_No`, `Mobile`) VALUES
(1928, 'Tilak', 321, 'Aditya Bhawsar', '2017CA59', 8878158223),
(3204, 'Tilak', 234, 'Aditya Bhawsar', '2017CA59', 8878158223),
(3453, 'Tilak', 234, 'Aditya Bhawsar', '2017CA59', 7869054123),
(3857, 'Tondon', 321, 'Aditya Bhawsar', '2017CA59', 7869054123),
(4602, 'Tilak', 321, 'Aditya Bhawsar', '2017CA59', 8878158223),
(5169, 'Tilak', 321, 'Aditya Bhawsar', '2017CA59', 8878158223),
(6627, 'Tilak', 321, 'Aditya Bhawsar', '2017CA59', 8878158223),
(7678, 'Tilak', 234, 'Aditya Bhawsar', '2017CA59', 2147483647),
(9865, 'Malviya', 234, 'Aditya Bhawsar', '2017CA59', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD PRIMARY KEY (`Comp_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
