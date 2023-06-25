-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2023 at 06:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `testMessages`
--

DROP TABLE IF EXISTS `testMessages`;
CREATE TABLE IF NOT EXISTS `testMessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testMessages`
--

INSERT INTO `testMessages` (`id`, `message`) VALUES
(57, 'qqq'),
(58, 'qqq'),
(59, 'qqq'),
(60, '<b>aaa</b>'),
(61, 'asdas\r\nasdas\r\n\r\nasdas\r\n\r\nasdasdas\r\n\r\n\r\nasdsad\r\n'),
(62, 'asdas\r\nasd\r\n\r\n\r\nasd\r\n\r\n\r\n\r\nasdasd'),
(63, '<b>a</b>\r\n\r\nsadas\r\n\r\n\r\nasdasd'),
(64, '<script>alert(\'hello\')</script>'),
(65, '<script>alert(\'hello\')</script>'),
(66, 'htmlentities'),
(67, 'sdfsdfsdfds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
