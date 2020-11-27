-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 27, 2020 at 09:11 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gettop3`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `name`, `email`, `message`) VALUES
(1, 'shikha', 'shikha@gmail.com', 'Hey!!'),
(2, 'shikha', 'shiik@gmail.com', 'hey'),
(3, 'shikha', 'shiik@gmail.com', 'hey'),
(4, 'shik', 'prince124@gmail.com', 'hheyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'OnePlus Buds', 4990),
(2, 'OPPO Enco W51', 4999),
(3, 'boAt Airdopes 381', 1999),
(4, 'Samsung Galaxy Buds', 8990),
(5, 'Sony WF-XB700', 7990),
(6, 'Oppo Encore Free', 5990),
(7, 'Apple Airpods', 12990),
(8, 'Samsung Galaxy Buds+', 10990),
(9, 'Jabra Elite 75t', 5990);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phoneNo` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstName`, `lastName`, `email`, `password`, `phoneNo`) VALUES
(8, 'Abhi', 'xyz', 'abc@gmail.com', 'G4BGKXr5CDdWB2u', 9997580844),
(7, 'Vishal', 'Sharma', 'vishal.sharma_cs18@gla.ac.in', 'vishal@1234', 7669169783),
(6, 'Govind', 'Sharma', 'govindsharma1285@gmail.com', 'Shriram@000', 8445340430),
(9, 'Shikha', 'Parashar', 'shikhaparashar025@gmail.com', 'shikha123', 7300905560),
(10, 'prince', 'parashar', 'prince124@gmail.com', 'prince123', 7300905560);

-- --------------------------------------------------------

--
-- Table structure for table `users_product`
--

DROP TABLE IF EXISTS `users_product`;
CREATE TABLE IF NOT EXISTS `users_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
