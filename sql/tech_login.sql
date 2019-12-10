-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 10:40 PM
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
-- Table structure for table `tech_login`
--

CREATE TABLE `tech_login` (
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Salary` int(10) NOT NULL,
  `Alloted_hostel` varchar(20) NOT NULL,
  `userId` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tech_login`
--

INSERT INTO `tech_login` (`Name`, `Address`, `Mobile_No`, `Salary`, `Alloted_hostel`, `userId`, `username`, `password`) VALUES
('Ramesh Sharma', 'Prayagraj', 9898987676, 12000, 'Tilak', 't01', 'ramesh', '12345'),
('Mukesh Bihari', 'Bhagalpur', 9887655421, 12500, 'Malviya', 't02', 'mukesh', '12345'),
('Shyam Prakash', 'Chiocki', 7898785465, 11500, 'Tondon', 't03', 'shyam', '12345'),
('Dinesh Kumar Chandra', 'Varanasi', 8586898784, 11500, 'Patel', 't04', 'dinesh', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
