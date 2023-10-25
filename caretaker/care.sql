-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 18, 2023 at 12:43 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretaker`
--

DROP TABLE IF EXISTS `caretaker`;
CREATE TABLE IF NOT EXISTS `caretaker` (
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `caretaker`
--

INSERT INTO `caretaker` (`name`, `dob`, `email`, `place`, `password`, `phone`) VALUES
('Asha', '2023-10-02', 'Asha@123', 'kochi', 'Asha@123', '09998774561'),
('Kevin', '2023-10-01', 'Kevin@123', 'kochi', 'Kevin@123', '08899456456');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `place` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`name`, `dob`, `email`, `place`, `password`, `phone`) VALUES
('ajdbakjsdad', '0000-00-00', 'adsjasdkj@123', 'aluva', 'adsjasdkj@123', '94841612121'),
('Newbi', '0000-00-00', 'Newbi@123', 'aluva', 'Newbi@123', '01225544651');





DROP TABLE IF EXISTS `child`;
CREATE TABLE IF NOT EXISTS `child` (
  `pname` varchar(255) NOT NULL,
    `ptype` varchar(255) NOT NULL,
        `special` varchar(255) NOT NULL,
    `place` varchar(255) NOT NULL,
    `avail` varchar(255) NOT NULL,

  `gender` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL,
  
  `phone` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
DROP TABLE IF EXISTS `senior`;
CREATE TABLE IF NOT EXISTS `senior` (
  `pname` varchar(255) NOT NULL,
    `ptype` varchar(255) NOT NULL,
        `special` varchar(255) NOT NULL,
    `place` varchar(255) NOT NULL,
    `avail` varchar(255) NOT NULL,

  `gender` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL,
  
  `phone` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `physcho`;
CREATE TABLE IF NOT EXISTS `physcho` (
  `pname` varchar(255) NOT NULL,
    `ptype` varchar(255) NOT NULL,
        `special` varchar(255) NOT NULL,
    `place` varchar(255) NOT NULL,
    `avail` varchar(255) NOT NULL,

  `gender` varchar(100) NOT NULL,
  `adress` varchar(255) NOT NULL,
  
  `phone` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
