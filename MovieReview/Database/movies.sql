-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 02:00 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `moviescontact`
--

CREATE TABLE `moviescontact` (
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviescontact`
--

INSERT INTO `moviescontact` (`Name`, `Mail`, `Subject`, `Message`) VALUES
('aman', 'aman@mail.com', 'great movies', 'nice one'),
('honey', 'hellsoni@gmail.com', 'enter', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `moviessignup`
--

CREATE TABLE `moviessignup` (
  `Name` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviessignup`
--

INSERT INTO `moviessignup` (`Name`, `Mail`, `Password`) VALUES
('ajay', 'ajay123', ''),
('ajay', 'ajay123', ''),
('aman', 'aman()|', ''),
('aman', 'aman()|', ''),
('honey', 'honey@gmail.com', 'honey()'),
('honey', 'honey@gmail.com', 'honey()'),
('\"\"', '', ''),
('as', 'as@gmail.com', 'as123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
