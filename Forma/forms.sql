-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2023 at 12:29 PM
-- Server version: 5.7.35-38
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cl17859_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text,
  `userEmail` text,
  `userPassword` text,
  `userMessage` text,
  `gender` text,
  `agree` text,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `userName`, `userEmail`, `userPassword`, `userMessage`, `gender`, `agree`) VALUES
(7, 'gwrg', 'wergwrg', 'gewrgfd', 'gsfgr', 'Greg', 'rthb'),
(9, '', '', '', '', '', ''),
(11, 'va', '', '', '', 'men', 'on'),
(12, 'mlk', '', '', '', 'men', 'on'),
(14, 'uilui', '', 'lji', 'l', 'women', ''),
(15, 'va', '', '', '', 'women', 'on'),
(16, 'va', '', '', '', 'women', 'on'),
(17, 'gerg', '', '', '', 'women', 'on'),
(18, 'rge', '', '', '', 'women', 'on'),
(20, 'htr', '', '', '', 'women', ''),
(21, 'ntyj', '', '', '', 'men', ''),
(23, '', '', '', '', 'women', 'on'),
(24, '', '', '', '', 'women', 'on'),
(25, '', '', '', '', 'women', 'on'),
(26, '', '', '', '', 'women', 'on'),
(27, '', '', '', '', 'women', 'on'),
(28, '', '', '', '', 'women', 'on'),
(29, '', '', '', '', 'women', 'on'),
(30, '', '', '', '', 'women', 'on'),
(31, '', '', '', '', 'women', 'on'),
(32, 'роргшотл', '', '', '', 'men', ''),
(33, 'qwertyui', '', '', '', 'men', ''),
(34, '', '', '', '', '', ''),
(36, 'zzz', 'zzz@zz', 'dorraz-fidryq-qEmce0', 'Zerg', 'men', ''),
(38, 'thedrhftby', 'ytnhzrg`@gstrhty', '', '', 'women', 'on'),
(39, '', '', '', '', 'women', 'on'),
(40, '', '', '', '', 'women', 'on'),
(41, '', '', '', '', 'women', 'on'),
(43, 'Казявка', 'kazyavka@mail.ru', 'kazyavka', 'Казявка', 'women', 'on'),
(44, 'Nfnfhc', 'Hvjfh', 'Mfjghrjd', '', 'women', 'on'),
(45, '', '', '', '', 'women', 'on'),
(46, '', '', '', '', 'women', 'on'),
(47, '', '', '', '', 'women', 'on');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
