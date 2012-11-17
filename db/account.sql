-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2012 at 09:20 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `real_name` varchar(16) DEFAULT '',
  `social_id` varchar(13) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `phone1` varchar(16) DEFAULT NULL,
  `phone2` varchar(16) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `zipcode` varchar(7) DEFAULT '',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `question1` varchar(48) DEFAULT NULL,
  `answer1` varchar(48) DEFAULT NULL,
  `registration_key` varchar(32) NOT NULL,
  `question2` varchar(48) DEFAULT NULL,
  `answer2` varchar(48) DEFAULT NULL,
  `isOnline` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(8) NOT NULL DEFAULT 'PENDING',
  `securitycode` varchar(192) DEFAULT '',
  `newsletter` tinyint(1) DEFAULT '0',
  `empire` tinyint(4) NOT NULL DEFAULT '0',
  `name_checked` tinyint(1) NOT NULL DEFAULT '0',
  `availDt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mileage` int(11) NOT NULL DEFAULT '0',
  `cash` int(11) NOT NULL DEFAULT '0',
  `gold_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `silver_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `safebox_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `autoloot_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fish_mind_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `marriage_fast_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `money_drop_rate_expire` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ttl_cash` int(11) NOT NULL DEFAULT '0',
  `ttl_mileage` int(11) NOT NULL DEFAULT '0',
  `channel_company` varchar(30) NOT NULL DEFAULT '',
  `last_play` datetime NOT NULL,
  `coins` int(11) NOT NULL DEFAULT '0',
  `web_admin` int(1) NOT NULL DEFAULT '0',
  `web_ip` varchar(15) NOT NULL,
  `web_aktiviert` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `social_id` (`social_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii AUTO_INCREMENT=52233 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `login`, `password`, `real_name`, `social_id`, `email`, `phone1`, `phone2`, `address`, `zipcode`, `create_time`, `question1`, `answer1`, `registration_key`, `question2`, `answer2`, `isOnline`, `status`, `securitycode`, `newsletter`, `empire`, `name_checked`, `availDt`, `mileage`, `cash`, `gold_expire`, `silver_expire`, `safebox_expire`, `autoloot_expire`, `fish_mind_expire`, `marriage_fast_expire`, `money_drop_rate_expire`, `ttl_cash`, `ttl_mileage`, `channel_company`, `last_play`, `coins`, `web_admin`, `web_ip`, `web_aktiviert`) VALUES
(52187, 'Kkra', '*19C4E252FA4E9412D9C7DC2735C5AFFA295F5ECE', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 18:07:45', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52186, 'ninofresco', '*F6BADF72E2640CF30BBA4DB9FE6DE514F7BC2047', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 18:06:48', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52188, 'coffo95', '*3D88A30B2C158AACD1A5391C7396E373A3D55A46', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 18:11:26', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52189, 'cinerea', '*DFA95093C2F1B8A40CF58584EA98EBD0B7EAD95D', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 19:07:21', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52183, 'blackwolf96', '*1C7F9F7D799E50136776A4C818878EE84B935528', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 20:37:58', 0, 0, '', ''),
(52175, 'Mandrake90', '*2BCADA19A642ACCB60F42A8C1DD4D920A01EB08F', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 17:51:32', NULL, NULL, '', NULL, NULL, 0, 'BLOCK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 15:10:36', 0, 0, '', ''),
(52185, 'ruby1997', '*40E983FB918B5BAFF678078CF7370628294883A5', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-13 17:59:37', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52195, 'Gurio', '*8A7BCABCCCD9CF28E28A66BB468BFF8C52DD9931', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-14 09:50:58', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52196, 'lucaberto95', '*1BC31B772A5DFB6B09CA6D6712C9519557CC04DF', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-14 09:53:10', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 16:18:18', 0, 0, '', ''),
(52197, 'olikart', '*72717F05AF433E4BB49084D747A265EC115CFDCC', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-14 15:52:46', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 20:59:32', 0, 0, '', ''),
(52198, 'olikart11', '*72717F05AF433E4BB49084D747A265EC115CFDCC', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-14 15:53:32', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52200, 'migliore959asd', '*1BC31B772A5DFB6B09CA6D6712C9519557CC04DF', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-15 15:55:42', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52201, 'tricki', '*D73F67E4339203F1F3074BDF2A7960AA82B3B2E0', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-15 18:27:46', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52206, 'metin2prova', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-09-18 20:32:56', NULL, NULL, 'c52db7540373093c3b8f359ac8e200ca', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52217, 'unaprova', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-10-18 18:55:23', NULL, NULL, 'cdf0e5b0b851e9ff99d9e19acf22584c', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52167, 'power', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '123', 'foo@bar.net', NULL, NULL, NULL, '', '2011-10-20 22:59:27', NULL, NULL, '123', NULL, NULL, 0, 'OK', '', 0, 3, 0, '0000-00-00 00:00:00', 0, 123456789, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2011-10-20 22:59:27', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52218, 'UnoNuovo', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'foo@bar.net', NULL, NULL, NULL, '', '2011-11-06 21:26:17', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `admin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- Table structure for table `ban_log`
--

DROP TABLE IF EXISTS `ban_log`;
CREATE TABLE IF NOT EXISTS `ban_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  `zeitpunkt` datetime NOT NULL,
  `grund` varchar(200) NOT NULL,
  `typ` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `block_exception`
--

DROP TABLE IF EXISTS `block_exception`;
CREATE TABLE IF NOT EXISTS `block_exception` (
  `login` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- Table structure for table `gametime`
--

DROP TABLE IF EXISTS `gametime`;
CREATE TABLE IF NOT EXISTS `gametime` (
  `UserID` varchar(50) NOT NULL DEFAULT '',
  `paymenttype` tinyint(2) NOT NULL DEFAULT '1',
  `LimitTime` int(11) DEFAULT '0',
  `LimitDt` datetime DEFAULT '1990-01-01 00:00:00',
  `Scores` int(11) DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

-- --------------------------------------------------------

--
-- Table structure for table `gametimeip`
--

DROP TABLE IF EXISTS `gametimeip`;
CREATE TABLE IF NOT EXISTS `gametimeip` (
  `ipid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `ip` varchar(11) NOT NULL DEFAULT '000.000.000',
  `startIP` int(11) NOT NULL DEFAULT '0',
  `endIP` int(11) NOT NULL DEFAULT '255',
  `paymenttype` tinyint(2) NOT NULL DEFAULT '1',
  `LimitTime` int(11) NOT NULL DEFAULT '0',
  `LimitDt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `readme` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`ipid`),
  UNIQUE KEY `ip_uniq` (`ip`,`startIP`,`endIP`),
  KEY `ip_idx` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gametimelog`
--

DROP TABLE IF EXISTS `gametimelog`;
CREATE TABLE IF NOT EXISTS `gametimelog` (
  `login` varchar(16) DEFAULT NULL,
  `type` enum('IP_FREE','FREE','IP_TIME','IP_DAY','TIME','DAY') DEFAULT NULL,
  `logon_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `logout_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `use_time` int(11) DEFAULT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '000.000.000.000',
  `server` varchar(32) NOT NULL DEFAULT '',
  KEY `login_key` (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312;

-- --------------------------------------------------------

--
-- Table structure for table `guild`
--

DROP TABLE IF EXISTS `guild`;
CREATE TABLE IF NOT EXISTS `guild` (
  `id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `iptocountry`
--

DROP TABLE IF EXISTS `iptocountry`;
CREATE TABLE IF NOT EXISTS `iptocountry` (
  `IP_FROM` varchar(16) DEFAULT NULL,
  `IP_TO` varchar(16) DEFAULT NULL,
  `COUNTRY_NAME` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- Table structure for table `is_items`
--

DROP TABLE IF EXISTS `is_items`;
CREATE TABLE IF NOT EXISTS `is_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vnum` int(10) unsigned NOT NULL,
  `kategorie_id` int(10) unsigned NOT NULL,
  `bild` varchar(50) NOT NULL,
  `beschreibung` varchar(200) NOT NULL,
  `preis` int(10) unsigned NOT NULL,
  `anzeigen` varchar(1) NOT NULL,
  `attrtype0` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue0` smallint(6) NOT NULL DEFAULT '0',
  `attrtype1` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue1` smallint(6) NOT NULL DEFAULT '0',
  `attrtype2` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue2` smallint(6) NOT NULL DEFAULT '0',
  `attrtype3` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue3` smallint(6) NOT NULL DEFAULT '0',
  `attrtype4` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue4` smallint(6) NOT NULL DEFAULT '0',
  `attrtype5` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue5` smallint(6) NOT NULL DEFAULT '0',
  `attrtype6` tinyint(4) NOT NULL DEFAULT '0',
  `attrvalue6` smallint(6) NOT NULL DEFAULT '0',
  `socket0` int(10) unsigned NOT NULL DEFAULT '0',
  `socket1` int(10) unsigned NOT NULL DEFAULT '0',
  `socket2` int(10) unsigned NOT NULL DEFAULT '0',
  `socket3` int(10) unsigned NOT NULL DEFAULT '0',
  `socket4` int(10) unsigned NOT NULL DEFAULT '0',
  `socket5` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `is_kategorien`
--

DROP TABLE IF EXISTS `is_kategorien`;
CREATE TABLE IF NOT EXISTS `is_kategorien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `is_log`
--

DROP TABLE IF EXISTS `is_log`;
CREATE TABLE IF NOT EXISTS `is_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `vnum` int(10) unsigned NOT NULL,
  `preis` int(10) unsigned NOT NULL,
  `zeitpunkt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messenger_list`
--

DROP TABLE IF EXISTS `messenger_list`;
CREATE TABLE IF NOT EXISTS `messenger_list` (
  `account` text,
  `companion` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monarch`
--

DROP TABLE IF EXISTS `monarch`;
CREATE TABLE IF NOT EXISTS `monarch` (
  `empire` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned DEFAULT '0',
  `name` varchar(16) DEFAULT NULL,
  `windate` datetime DEFAULT '0000-00-00 00:00:00',
  `money` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`empire`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` varchar(200) NOT NULL,
  `inhalt` text NOT NULL,
  `datum` int(10) unsigned NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `kategorie` int(10) unsigned NOT NULL,
  `author` int(10) unsigned NOT NULL,
  `anzeigen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `psc_log`
--

DROP TABLE IF EXISTS `psc_log`;
CREATE TABLE IF NOT EXISTS `psc_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `card_type` varchar(20) NOT NULL,
  `waehrung` varchar(10) NOT NULL,
  `psc_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `psc_betrag` decimal(5,2) NOT NULL,
  `psc_pass` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `kommentar` varchar(200) NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `safebox`
--

DROP TABLE IF EXISTS `safebox`;
CREATE TABLE IF NOT EXISTS `safebox` (
  `size` text,
  `account_id` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `send_notice`
--

DROP TABLE IF EXISTS `send_notice`;
CREATE TABLE IF NOT EXISTS `send_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `server` varchar(3) NOT NULL DEFAULT '',
  `show_check` tinyint(2) NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `server_settings`
--

DROP TABLE IF EXISTS `server_settings`;
CREATE TABLE IF NOT EXISTS `server_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variable` varchar(20) NOT NULL,
  `beschreibung` varchar(100) NOT NULL,
  `typ` enum('CHA','BOO','INT','DEC') NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `variable` (`variable`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `tele_block`
--

DROP TABLE IF EXISTS `tele_block`;
CREATE TABLE IF NOT EXISTS `tele_block` (
  `account_id` int(11) NOT NULL DEFAULT '0',
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tele_block` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
