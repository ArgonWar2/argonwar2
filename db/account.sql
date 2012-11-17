-- phpMyAdmin SQL Dump
-- version 3.3.7deb6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 12:46 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-7+squeeze3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
(52193, 'SimoneProva', '*56A2F2C604E1E7EE1BD2B4BD714CEE0412089916', '', '', 'info@simonewebdesign.it', NULL, NULL, NULL, '', '2011-09-13 20:13:54', NULL, NULL, '', NULL, NULL, 1, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52192, 'prova email', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-13 20:08:37', NULL, NULL, '', NULL, NULL, 1, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52191, 'simoprova2', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'asd@asd.it', NULL, NULL, NULL, '', '2011-09-13 19:43:39', NULL, NULL, '', NULL, NULL, 1, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52190, 'Simoprova', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-13 19:38:43', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52187, 'Kkra', '*19C4E252FA4E9412D9C7DC2735C5AFFA295F5ECE', '', '', 'rulessss@hotmail.it', NULL, NULL, NULL, '', '2011-09-13 18:07:45', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52186, 'ninofresco', '*F6BADF72E2640CF30BBA4DB9FE6DE514F7BC2047', '', '', 'nino_96fresco@hotmail.it', NULL, NULL, NULL, '', '2011-09-13 18:06:48', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52188, 'coffo95', '*3D88A30B2C158AACD1A5391C7396E373A3D55A46', '', '', 'coffo95_@hotmail.it', NULL, NULL, NULL, '', '2011-09-13 18:11:26', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52189, 'cinerea', '*DFA95093C2F1B8A40CF58584EA98EBD0B7EAD95D', '', '', 'emabea@live.it', NULL, NULL, NULL, '', '2011-09-13 19:07:21', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52183, 'blackwolf96', '*1C7F9F7D799E50136776A4C818878EE84B935528', '', '', '', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 20:37:58', 0, 0, '', ''),
(52175, 'Mandrake90', '*2BCADA19A642ACCB60F42A8C1DD4D920A01EB08F', '', '', 'andrea90wiz@gmail.com', NULL, NULL, NULL, '', '2011-09-13 17:51:32', NULL, NULL, '', NULL, NULL, 0, 'BLOCK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 15:10:36', 0, 0, '', ''),
(52185, 'ruby1997', '*40E983FB918B5BAFF678078CF7370628294883A5', '', '', 'rubyfresh_97@hotmail.it', NULL, NULL, NULL, '', '2011-09-13 17:59:37', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52194, 'aaaaLOL', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-13 20:19:16', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52195, 'Gurio', '*8A7BCABCCCD9CF28E28A66BB468BFF8C52DD9931', '', '', 'gurio_95@hotmail.it', NULL, NULL, NULL, '', '2011-09-14 09:50:58', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52196, 'lucaberto95', '*1BC31B772A5DFB6B09CA6D6712C9519557CC04DF', '', '', 'lucaberto95@gmail.com', NULL, NULL, NULL, '', '2011-09-14 09:53:10', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 16:18:18', 0, 0, '', ''),
(52197, 'olikart', '*72717F05AF433E4BB49084D747A265EC115CFDCC', '', '', 'cance93@hotmail.it', NULL, NULL, NULL, '', '2011-09-14 15:52:46', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '2011-09-15 20:59:32', 0, 0, '', ''),
(52198, 'olikart11', '*72717F05AF433E4BB49084D747A265EC115CFDCC', '', '', 'cancelloni.cristian@hotmail.it', NULL, NULL, NULL, '', '2011-09-14 15:53:32', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52199, 'Prova', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '', '', 'dasda@asdasd.ddd', NULL, NULL, NULL, '', '2011-09-14 15:55:39', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52200, 'migliore959asd', '*1BC31B772A5DFB6B09CA6D6712C9519557CC04DF', '', '', 'lucaberto95@gmail.com', NULL, NULL, NULL, '', '2011-09-15 15:55:42', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52201, 'tricki', '*D73F67E4339203F1F3074BDF2A7960AA82B3B2E0', '', '', 'far3nait@yahoo.it', NULL, NULL, NULL, '', '2011-09-15 18:27:46', NULL, NULL, '', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52202, 'asd', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'lol@lol.it', NULL, NULL, NULL, '', '2011-09-16 18:05:12', NULL, NULL, 'b6c7425d98a80f90c62c0921044a522c', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52203, 'Simoncino', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-16 18:06:33', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52204, 'prova demerda', '*BBAE266E0E1E92B3A857E20260D41B7BC259297F', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-16 18:24:17', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52205, 'doncaio', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'fushigisou@email.it', NULL, NULL, NULL, '', '2011-09-17 12:30:33', NULL, NULL, '169b735a966e3b8860b13b3dfc29b3f3', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52206, 'metin2prova', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.lol', NULL, NULL, NULL, '', '2011-09-18 20:32:56', NULL, NULL, 'c52db7540373093c3b8f359ac8e200ca', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52207, 'provasimoncino', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-23 00:45:52', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52208, 'Simoneasdasdassa', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-24 16:35:28', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52164, 'Simone', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '0', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-09-24 16:35:49', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52210, 'Tontolone', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '', '2011-09-24 19:34:09', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52211, 'simonet', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'asd@asd.it', NULL, NULL, NULL, '', '2011-09-28 17:45:29', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52212, 'provaSimoo', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-10-05 15:33:54', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52213, 'vittori', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-10-18 17:57:19', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52214, 'vittori2', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-10-18 18:46:18', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52215, 'vittori3', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-10-18 18:49:02', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52216, 'vittori4', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '', '2011-10-18 18:50:04', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52217, 'unaprova', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'xyzzy@autistici.org', NULL, NULL, NULL, '', '2011-10-18 18:55:23', NULL, NULL, 'cdf0e5b0b851e9ff99d9e19acf22584c', NULL, NULL, 0, 'OK', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52167, 'power', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '123', 'asd@lol.it', NULL, NULL, NULL, '', '2011-10-20 22:59:27', NULL, NULL, '123', NULL, NULL, 0, 'OK', '', 0, 3, 0, '0000-00-00 00:00:00', 0, 123456789, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2011-10-20 22:59:27', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '', ''),
(52218, 'UnoNuovo', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '', '2011-11-06 21:26:17', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52219, 'Simozipcode', '*F40DF69635980F48EC575B9EA5ACCD219D420244', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '0', '2011-11-08 00:57:23', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52220, '$usr_escaped', '*49928706F63CAF448B25CA86B92241B1A184891C', '', '', '$email', NULL, NULL, NULL, '$zipcod', '2011-11-08 00:59:28', NULL, NULL, '$registration_key', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '$ip_address', ''),
(52221, 'simozipcode2', '*7E1B02628187315A1854DF1E4D3A80001FAC469C', '', '', 'asd@asd.it', NULL, NULL, NULL, '1', '2011-11-08 01:07:03', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52222, 'Simo990lol', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'root@ads.it', NULL, NULL, NULL, '1', '2011-11-26 20:38:47', NULL, NULL, '642c3918f63f2eb86fbaa1a1f3f4bfa1', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52223, 'Simo990lolasd', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'root@afds.it', NULL, NULL, NULL, '1', '2011-11-26 20:47:54', NULL, NULL, '567915f118e903abd70fa936d2186b1f', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52224, 'Simo990lolasdd', '*F6DD0C0AC75395CB5BFC12C46B8880CD156B4799', '', '', 'root@afds.itf', NULL, NULL, NULL, '1', '2011-11-26 20:48:35', NULL, NULL, '32d50aa7c6eb056ef76642e36dd7566a', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52225, 'FUSHI', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '1', '2011-11-27 13:18:37', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52226, 'SimoneLOL', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '1', '2011-11-28 14:21:06', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52227, 'SimoneLOLZ', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '1', '2011-11-28 14:23:46', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52228, 'SimoneLOLZZ', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'asd@asd.it', NULL, NULL, NULL, '1', '2011-11-28 14:24:05', NULL, NULL, '0ece9b48a4df4f52f5d2abc1fee0da2c', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52229, 'SIMOLOL', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'vit@asd.it', NULL, NULL, NULL, '1', '2011-11-28 14:35:36', NULL, NULL, 'b73666890e533fa8e9e0a0c0e2f09079', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52230, 'SIMOLOLa', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'vit@asd.it', NULL, NULL, NULL, '1', '2011-11-28 14:37:46', NULL, NULL, 'b73666890e533fa8e9e0a0c0e2f09079', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52231, 'provanew', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '1', '2012-01-11 12:15:01', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', ''),
(52232, 'provanew2', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '', '', 'vittorisimone@gmail.com', NULL, NULL, NULL, '1', '2012-01-11 12:20:00', NULL, NULL, '2581b3b87267413ba2eff5e7589f0c39', NULL, NULL, 0, 'PENDING', '', 0, 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '2014-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '0000-00-00 00:00:00', 0, 0, '127.0.0.1', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `admin` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `ban_log`
--

CREATE TABLE IF NOT EXISTS `ban_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  `zeitpunkt` datetime NOT NULL,
  `grund` varchar(200) NOT NULL,
  `typ` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ban_log`
--


-- --------------------------------------------------------

--
-- Table structure for table `block_exception`
--

CREATE TABLE IF NOT EXISTS `block_exception` (
  `login` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `block_exception`
--


-- --------------------------------------------------------

--
-- Table structure for table `gametime`
--

CREATE TABLE IF NOT EXISTS `gametime` (
  `UserID` varchar(50) NOT NULL DEFAULT '',
  `paymenttype` tinyint(2) NOT NULL DEFAULT '1',
  `LimitTime` int(11) DEFAULT '0',
  `LimitDt` datetime DEFAULT '1990-01-01 00:00:00',
  `Scores` int(11) DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=euckr;

--
-- Dumping data for table `gametime`
--


-- --------------------------------------------------------

--
-- Table structure for table `gametimeip`
--

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

--
-- Dumping data for table `gametimeip`
--


-- --------------------------------------------------------

--
-- Table structure for table `gametimelog`
--

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

--
-- Dumping data for table `gametimelog`
--


-- --------------------------------------------------------

--
-- Table structure for table `guild`
--

CREATE TABLE IF NOT EXISTS `guild` (
  `id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guild`
--


-- --------------------------------------------------------

--
-- Table structure for table `iptocountry`
--

CREATE TABLE IF NOT EXISTS `iptocountry` (
  `IP_FROM` varchar(16) DEFAULT NULL,
  `IP_TO` varchar(16) DEFAULT NULL,
  `COUNTRY_NAME` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `iptocountry`
--


-- --------------------------------------------------------

--
-- Table structure for table `is_items`
--

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

--
-- Dumping data for table `is_items`
--


-- --------------------------------------------------------

--
-- Table structure for table `is_kategorien`
--

CREATE TABLE IF NOT EXISTS `is_kategorien` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `is_kategorien`
--


-- --------------------------------------------------------

--
-- Table structure for table `is_log`
--

CREATE TABLE IF NOT EXISTS `is_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned NOT NULL,
  `vnum` int(10) unsigned NOT NULL,
  `preis` int(10) unsigned NOT NULL,
  `zeitpunkt` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `is_log`
--


-- --------------------------------------------------------

--
-- Table structure for table `messenger_list`
--

CREATE TABLE IF NOT EXISTS `messenger_list` (
  `account` text,
  `companion` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messenger_list`
--


-- --------------------------------------------------------

--
-- Table structure for table `monarch`
--

CREATE TABLE IF NOT EXISTS `monarch` (
  `empire` int(10) unsigned NOT NULL DEFAULT '0',
  `pid` int(10) unsigned DEFAULT '0',
  `name` varchar(16) DEFAULT NULL,
  `windate` datetime DEFAULT '0000-00-00 00:00:00',
  `money` bigint(20) unsigned DEFAULT '0',
  PRIMARY KEY (`empire`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `monarch`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

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

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `psc_log`
--

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

--
-- Dumping data for table `psc_log`
--


-- --------------------------------------------------------

--
-- Table structure for table `safebox`
--

CREATE TABLE IF NOT EXISTS `safebox` (
  `size` text,
  `account_id` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safebox`
--


-- --------------------------------------------------------

--
-- Table structure for table `send_notice`
--

CREATE TABLE IF NOT EXISTS `send_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL DEFAULT '0',
  `server` varchar(3) NOT NULL DEFAULT '',
  `show_check` tinyint(2) NOT NULL DEFAULT '0',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `send_notice`
--


-- --------------------------------------------------------

--
-- Table structure for table `server_settings`
--

CREATE TABLE IF NOT EXISTS `server_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `variable` varchar(20) NOT NULL,
  `beschreibung` varchar(100) NOT NULL,
  `typ` enum('CHA','BOO','INT','DEC') NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `variable` (`variable`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `server_settings`
--


-- --------------------------------------------------------

--
-- Table structure for table `tele_block`
--

CREATE TABLE IF NOT EXISTS `tele_block` (
  `account_id` int(11) NOT NULL DEFAULT '0',
  `lastlogin` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tele_block` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- Dumping data for table `tele_block`
--

