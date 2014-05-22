-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2013 at 11:48 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `paging`
--

CREATE TABLE IF NOT EXISTS `paging` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `paging`
--

INSERT INTO `paging` (`id`, `name`, `description`) VALUES
(1, 'kumar', 'asasasasasas'),
(2, 'gaurav', 'qasdkjksdh'),
(3, 'amit', 'asdasdasd'),
(4, 'namit', 'qasdkjksdh'),
(5, 'rajat', 'asasasasasas'),
(6, 'suman', 'qasdkjksdh'),
(7, 'poonam', 'asasasasasas'),
(8, 'rashi', 'qasdkjksdh'),
(9, 'kkumar', 'asasasasasas'),
(10, 'kgaurav', 'qasdkjksdh'),
(11, 'kamit', 'asdasdasd'),
(12, 'knamit', 'qasdkjksdh'),
(13, 'krajat', 'asasasasasas'),
(14, 'ksuman', 'qasdkjksdh'),
(15, 'kpoonam', 'asasasasasas'),
(16, 'krashi', 'asasasasasas'),
(17, 'kugaurav', 'qasdkjksdh'),
(18, 'kuamit', 'asdasdasd'),
(19, 'kunamit', 'qasdkjksdh'),
(20, 'kurajat', 'asasasasasas'),
(21, 'kusuman', 'qasdkjksdh'),
(22, 'kupoonam', 'asasasasasas'),
(23, 'kurashi', 'qasdkjksdh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
