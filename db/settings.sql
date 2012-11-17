-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 19, 2012 at 10:01 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `group` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `group`) VALUES
(1, 'countdown', '1', 'countdown'),
(2, 'Exp', '500', 'rate'),
(3, 'Drop', '300', 'rate'),
(4, 'Yang', '350', 'rate'),
(5, 'day', '01', 'countdown'),
(6, 'month', '02', 'countdown'),
(7, 'year', '2012', 'countdown'),
(8, 'hour', '00', 'countdown'),
(9, 'minute', '00', 'countdown'),
(10, 'second', '0', 'countdown'),
(13, 'title', 'GRANDE APERTURA', 'countdown'),
(14, 'subtitle', '- 1 FEBBRAIO 2012 -', 'countdown'),
(15, 'description_title', 'GlobalLongju è tornato.', 'countdown'),
(16, 'description', '<a href="registrazione">Iscriviti subito</a> e partecipa anche tu al grande evento di apertura.', 'countdown');
