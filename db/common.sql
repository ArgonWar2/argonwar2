-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2012 at 06:49 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `common`
--

-- --------------------------------------------------------

--
-- Table structure for table `gmhost`
--

CREATE TABLE IF NOT EXISTS `gmhost` (
  `mIP` varchar(16) NOT NULL DEFAULT '',
  PRIMARY KEY (`mIP`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `gmhost`
--

INSERT INTO `gmhost` (`mIP`) VALUES
('109.91.171.8');

-- --------------------------------------------------------

--
-- Table structure for table `gmlist`
--

CREATE TABLE IF NOT EXISTS `gmlist` (
  `mID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mAccount` varchar(16) CHARACTER SET big5 NOT NULL DEFAULT '',
  `mName` varchar(16) NOT NULL DEFAULT '',
  `mContactIP` varchar(16) CHARACTER SET big5 NOT NULL DEFAULT '',
  `mServerIP` varchar(16) CHARACTER SET big5 NOT NULL DEFAULT 'ALL',
  `mAuthority` enum('IMPLEMENTOR','HIGH_WIZARD','GOD','LOW_WIZARD','PLAYER') CHARACTER SET big5 DEFAULT 'PLAYER',
  PRIMARY KEY (`mID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69696977 ;

--
-- Dumping data for table `gmlist`
--

INSERT INTO `gmlist` (`mID`, `mAccount`, `mName`, `mContactIP`, `mServerIP`, `mAuthority`) VALUES
(1, 'blackwolf96', '[GA]Black', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(69019004, 'migliore959asd', '[GA]Exstasy', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(69696970, 'torreluca10', '[GA]Vexen', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(57706, 'jollyroger90', '[GA]FMJ', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(69696971, 'Razor', '[GM]Razor', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(69696975, 'grafico', '[GM]Limbo', '', 'ALL', 'IMPLEMENTOR'),
(2, 'torreluca10', 'Torre', '109.91.171.8', 'ALL', 'IMPLEMENTOR'),
(69696976, 'manuomej96', 'Manuomej96', '', 'ALL', 'IMPLEMENTOR');

-- --------------------------------------------------------

--
-- Table structure for table `locale`
--

CREATE TABLE IF NOT EXISTS `locale` (
  `mKey` varchar(255) NOT NULL DEFAULT '',
  `mValue` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`mKey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locale`
--

INSERT INTO `locale` (`mKey`, `mValue`) VALUES
('SKILL_POWER_BY_LEVEL_TYPE0', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE1', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE2', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE3', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE4', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE5', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE6', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('SKILL_POWER_BY_LEVEL_TYPE7', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125'),
('LOCALE', 'germany'),
('DB_NAME_COLUMN', 'locale_name'),
('SKILL_DAMAGE_BY_LEVEL_UNDER_90', '0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0'),
('SKILL_DAMAGE_BY_LEVEL_UNDER_45', '0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0'),
('SKILL_POWER_BY_LEVEL', '0 5 6 8 10 12 14 16 18 20 22 24 26 28 30 32 34 36 38 40 50 52 54 56 58 60 63 66 69 72 82 85 88 91 94 98 102 106 110 115 125 125 125 125 125');

-- --------------------------------------------------------

--
-- Table structure for table `locale_bug`
--

CREATE TABLE IF NOT EXISTS `locale_bug` (
  `mKey` varchar(255) NOT NULL DEFAULT '',
  `mValue` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`mKey`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locale_bug`
--


-- --------------------------------------------------------

--
-- Table structure for table `spam_db`
--

CREATE TABLE IF NOT EXISTS `spam_db` (
  `word` varchar(15) DEFAULT NULL,
  `score` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spam_db`
--

