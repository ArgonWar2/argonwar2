-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2012 at 09:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `authlog`
--

DROP TABLE IF EXISTS `authlog`;
CREATE TABLE IF NOT EXISTS `authlog` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `attempt` tinyint(1) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `authTime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `IPaddress` varchar(15) NOT NULL,
  `userAgent` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `buglog`
--

DROP TABLE IF EXISTS `buglog`;
CREATE TABLE IF NOT EXISTS `buglog` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `bugReportDate` datetime NOT NULL,
  `bugReportContent` text NOT NULL,
  `isProcessed` tinyint(1) NOT NULL DEFAULT '0',
  `playerName` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `buglog`
--

INSERT INTO `buglog` (`id`, `bugReportDate`, `bugReportContent`, `isProcessed`, `playerName`) VALUES
(1, '2011-11-16 15:11:10', 'fdsf dsf dfs ', 1, 'giustino'),
(2, '2011-11-08 15:11:17', 'sdf sdfsdsdf', 0, 'leone'),
(3, '2011-11-11 15:11:22', 'sd hgfh ', 0, 'stupidocane'),
(4, '2011-11-22 15:11:28', 'fg hfg h', 0, 'asdlol'),
(5, '2011-11-01 15:11:33', 'fhj tjfh fghj', 1, 'lolllll'),
(6, '2011-11-16 15:11:10', 'Ciao [GM]. Allora, ci sarebbe un errore di merda quando uno entra in Atlantide 2. Il mio pg viene blokkato!!!! xke???? lo so k sn un bm e qnd scrivo cm 1 bm, ma prfvr aiuttm!!!!!! LOL<br> NOOB SAIBOT AHAHAHAH Questa è solo una prova ragazzi. ahahah scherzavo.<br><br>\r\nSaluti a tutti, belli e brutti!', 0, 'giustino'),
(7, '2011-11-08 15:11:17', 'sdf sdfsdsdf', 1, 'leone'),
(8, '2011-11-11 15:11:22', 'sd hgfh ', 0, 'stupidocane'),
(9, '2011-11-22 15:11:28', 'fg hfg h', 0, 'asdlol'),
(10, '2011-11-01 15:11:33', 'fhj tjfh fghj', 0, 'lolllll');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'news'),
(2, 'announcements');

-- --------------------------------------------------------

--
-- Table structure for table `changelog`
--

DROP TABLE IF EXISTS `changelog`;
CREATE TABLE IF NOT EXISTS `changelog` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `version` varchar(10) NOT NULL DEFAULT '0.0.0',
  `description` text NOT NULL,
  `changeDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `changelog`
--

INSERT INTO `changelog` (`id`, `version`, `description`, `changeDate`) VALUES
(1, '1.3.2', '<p>Fixati alcuni bug.</p>', '2011-11-16 12:11:35'),
(2, '1.4.0', '<p>Aggiunta la mappa di Halloween.</p>', '2011-11-19 16:23:56'),
(3, '2.0.0', '<p>una descrizione</p>', '2011-11-19 18:50:33'),
(4, '2.0.1', '<p>Inserisci una descrizione piccola</p>', '2011-11-19 19:12:57'),
(5, '2.0.2', '<p>asdasdasdasdasdasdInserisci una descrizione</p>', '2011-11-29 19:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `author` varchar(30) NOT NULL,
  `authorEmail` varchar(100) NOT NULL,
  `authorURL` varchar(200) NOT NULL,
  `authorIP` varchar(100) NOT NULL,
  `postDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isApproved` tinyint(1) NOT NULL DEFAULT '0',
  `post_id` smallint(6) NOT NULL,
  `content` text NOT NULL,
  `likes` mediumint(9) NOT NULL DEFAULT '0',
  `dislikes` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `author`, `authorEmail`, `authorURL`, `authorIP`, `postDate`, `isApproved`, `post_id`, `content`, `likes`, `dislikes`) VALUES
(1, 'Fabius', 'fabiusz@hotmail.com', 'http://fabius.example.net/rotfl', '192.123.53.46', '2011-10-26 00:00:00', 1, 1, 'This is a sample comment. ASD.', 0, 0),
(2, 'Lorenzo', 'lory@asd.it', '', '12.12.34.567', '2011-11-08 12:45:34', 1, 1, 'This is another sample comment. LOL! Questo qui però è lunghissimo. Guardaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa lol. Lorem ipsum dolor sit amet. Consecuteur adipiscing elit.', 3, 0),
(3, 'OminoVolante', 'OminoVolante@hotmail.it', 'http://uomochevola.it', '1.3.4.5', '2011-11-26 00:00:00', 0, 2, 'fsd.', 5, 1),
(4, 'Salame', 'salam@ads.it', '', '12.34.56.34', '2011-11-15 00:00:00', 1, 5, 'MA LOL', 1, 0),
(5, 'Yuppy', 'ya@ea.it', '', '2.4.5.6', '2011-11-14 00:00:00', 1, 5, 'ROTFL', 2, 0),
(6, 'Jonny è quasi magia', 'asdlol@asd.it', '', '1.2.3.4', '2011-11-09 00:00:00', 1, 3, 'Vivaaaa!!!', 1, 2),
(7, 'Francesco', '', '', '127.0.0.1', '2011-12-09 12:01:18', 1, 1, 'eheheh...', 0, 1),
(8, 'BlackWolf96', '', '', '127.0.0.1', '2011-12-09 12:01:53', 1, 1, 'u.u', 0, 0),
(9, 'Simo990', '', '', '127.0.0.1', '2011-12-09 12:50:07', 1, 1, 'Quello sopra di me è nabbo!\r\n\r\n\r\nQuello sotto di più asd\r\n\r\n.', 0, 0),
(10, 'Simo990', '', '', '127.0.0.1', '2011-12-09 12:50:15', 1, 1, 'Quello sopra di me è nabbo!\r\n\r\n\r\nQuello sotto di più asd\r\n\r\n.', 1, 0),
(11, 'Simo990', '', '', '127.0.0.1', '2011-12-09 12:50:58', 1, 1, 'Quello sopra di me è nabbo!\r\n\r\n\r\nQuello sotto di più asd\r\n\r\n.', 0, 0),
(12, 'prova <html> asd', '', '', '127.0.0.1', '2011-12-09 12:51:44', 1, 1, '<script malevolo="asd">Non fungerà</script>', 0, 0),
(13, 'Giovanna', '', '', '127.0.0.1', '2011-12-09 21:37:27', 1, 2, 'Siiiiiiiiii!!!', 0, 2),
(14, 'KilleR96', '', '', '127.0.0.1', '2011-12-09 21:40:28', 1, 2, 'Fantastico! Ma quando aprite??', 13, 12),
(15, 'Gianluca', '', '', '127.0.0.1', '2011-12-09 21:40:55', 1, 2, 'Dai cazzo!', 0, 1),
(16, 'Gianluca', '', '', '127.0.0.1', '2011-12-09 21:42:59', 1, 2, 'Dai cazzo!', 1, 0),
(17, '1Prova', '', '', '127.0.0.1', '2011-12-09 23:57:08', 1, 2, 'Questo è un commento di prova, per raggiungere la lunghezza massima. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla condimentum dolor quis quam iaculis eget euismod mauris aliquam. Integer vel velit diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam dictum rhoncus feugiat. Proin sit amet luctus lectus. Aliquam erat volutpat. Praesent ut purus nibh, vitae rutrum est. Pellentesque sollicitudin ligula non ante vulputate porta. In vel velit dui. Vivamus eu lacus at sem vulputate sagittis at a massa. Donec sed ullamcorper nulla.', 1, 0),
(18, '2Prova', '', '', '127.0.0.1', '2011-12-09 23:58:03', 1, 2, 'Un commento...', 6, 0),
(19, 'Max. lungh. del nome è questa.', '', '', '127.0.0.1', '2011-12-09 23:59:07', 1, 2, 'Scrivi il tuo commento...', 1, 0),
(20, 'comment', '', '', '127.0.0.1', '2011-12-10 00:00:41', 1, 2, 'asd', 1, 0),
(21, 'comment2', '', '', '127.0.0.1', '2011-12-10 00:00:51', 1, 2, 'lol.', 0, 1),
(22, 'JAck', '', '', '127.0.0.1', '2011-12-10 12:05:26', 1, 3, 'La ficaaaa!!!\r\n\r\nxD', 14, 0),
(23, 'Mi Piace', '', '', '127.0.0.1', '2011-12-10 14:24:20', 1, 2, 'Questo commento dovrebbe essere piaciuto 4 volte in tutto, ma segna 3 perché qualcuno ha messo dislike (sempre io lol). Praticamente: +4 -1 = +3', 4, 1),
(24, 'Non mi piace', '', '', '127.0.0.1', '2011-12-10 14:24:40', 1, 2, 'Questo commento deve avere 6 non mi piace.', 3, 9),
(25, '*-*', '', '', '127.0.0.1', '2011-12-13 17:52:39', 1, 4, 'Che mito!', 0, 1),
(26, '*-*', '', '', '127.0.0.1', '2011-12-13 17:52:50', 1, 4, 'Che mito!', 1, 0),
(27, 'Paolo', '', '', '127.0.0.1', '2011-12-13 18:03:16', 1, 7, 'Che cagata di articolo xD', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

DROP TABLE IF EXISTS `countdown`;
CREATE TABLE IF NOT EXISTS `countdown` (
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `second` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`year`, `month`, `day`, `hour`, `minute`, `second`) VALUES
(2012, 21, 12, 21, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `level` tinyint(1) NOT NULL,
  `name` varchar(20) NOT NULL,
  `abbreviation` varchar(3) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`level`, `name`, `abbreviation`, `description`) VALUES
(0, 'GAME_ADMINISTRATOR', 'GA', 'Onnipotente.'),
(0, 'WEB_ADMINISTRATOR', 'WA', 'Onnipotente, e per giunta bulo.'),
(1, 'SUPER_GAME_MASTER', 'SGM', 'Oltre ai normali GM, può anche creare nuovi items.'),
(2, 'GAME_MASTER', 'GM', 'Visualizza la lista degli account (può anche bannare).'),
(3, 'CHIEF_REPORTER', 'CR', 'Pubblica gli articoli e li modifica a suo piacimento.'),
(4, 'REPORTER', 'R', 'Può scrivere articoli e modificarli, ma solo quelli scritti da egli stesso.');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `author_id` tinyint(4) NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  `isPublished` tinyint(1) NOT NULL DEFAULT '0',
  `creationDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lastEditDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `likes` smallint(6) NOT NULL,
  `hates` smallint(6) NOT NULL,
  `URL` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `category_id`, `author_id`, `content`, `isPublished`, `creationDate`, `lastEditDate`, `likes`, `hates`, `URL`) VALUES
(2, 'L''articolo di prova.', 1, 1, '<p>Ciao a tutti, questo &egrave; l''articolo di prova di <strong>Simone</strong>.</p>\r\n<p>Simone dovrebbe essere apparso in grassetto, nel paragrafo soprastante. <em>Questa frase, invece, dovrebbe essere tutta in corsivo.</em></p>\r\n<p><em><strong>Questo nuovo paragrafo deve essere grassetto e corsivo.</strong></em></p>\r\n<p><em><span style="text-decoration: underline;"><strong>Quest''altro invece grassetto, corsivo e pure sottolineato! Ma non &egrave; un link.</strong></span></em></p>\r\n<p><strong><a title="asd" href="classifica/giocatori">Questo invece s&igrave;, e dovrebbe rimandare alla classifica giocatori.</a></strong></p>\r\n<p><strong><br /></strong>Questa &egrave; una semplice lista:</p>\r\n<ul>\r\n<li>asd</li>\r\n<li>lol</li>\r\n<li>xD</li>\r\n</ul>\r\n<p><a name="lista"></a>Questa &egrave; una lista ordinata (e pure &agrave;ncora):</p>\r\n<ol>\r\n<li>sugo</li>\r\n<li>pastasciutta</li>\r\n<li>pizza</li>\r\n<li>THIS IS SPARTA!!!!!!!!</li>\r\n</ol>\r\n<p>Questo dovrebbe essere un titolo h3:</p>\r\n<h3>ITS OVER 9000!!!!!!1!!1!1</h3>\r\n<p><span style="background-color: #ff0000;">Questo dovrebbe avere uno sfondo rosso.</span></p>\r\n<p><span style="color: #ffff00;">Questo dovrebbe essere giallo.</span></p>\r\n<p style="text-align: center;">Questo testo deve essere centrato.</p>\r\n<p style="text-align: right;">Questo allineato a destra.</p>\r\n<p style="text-align: left;">Quanto fa x<sup>2</sup>+y+z = 0 ? x<sub>1 = nyannyannyannyannyannyan</sub>nyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyannyan</p>\r\n<p style="text-align: left;">(era una prova per vedere se c''&egrave; word-break attivo.)</p>\r\n<p style="text-align: left;"><a href="#lista">Questo link dovrebbe rimandare all''&agrave;ncora lista.</a></p>\r\n<hr style="height: 5px; width: 100%;" size="5" width="100%" />\r\n<p style="text-align: left;">Ma lol. <img title="Embarassed" src="../tinymce/jscripts/tiny_mce/plugins/emotions/img/smiley-embarassed.gif" alt="Embarassed" border="0" />&lt;-- dovrebbe essere una faccina</p>\r\n<p style="text-align: left;">Qualche carattere speciale, per concludere: &frasl;&Theta;&hearts;&frac14;&bull;&Chi;</p>\r\n<p style="text-align: left;">FINISH HIM!</p>\r\n<p style="text-align: left;"><img style="vertical-align: middle; border: 5px solid black;" src="http://images.wikia.com/mk/images/2/22/Mortal_Kombat.png" alt="FATALITY" width="400" height="254" /></p>\r\n<p><em></em></p>', 1, '2011-11-07 19:03:45', '0000-00-00 00:00:00', 0, 3, 'l-articolo-di-prova'),
(8, 'Un articolo di prova non pubblicato.', 1, 1, '<p>Scrivi qui il tuo nuovo articolo :)</p>', 0, '2011-11-14 21:33:56', '0000-00-00 00:00:00', 0, 0, 'un-articolo-di-prova-non-pubblicato'),
(18, 'Prossimamente...', 1, 1, '<p><img style="vertical-align: middle;" src="../../../img/globallogo_trasp.png" alt="" /></p>\r\n<p>Benvenuti in <strong>GlobalLongju Metin2</strong>!</p>\r\n<p>Nuove entusiasmanti sfide vi aspettano, per un divertimento davvero senza fine. Il Server GlobalLongju non &egrave; ancora online, ma potete gi&agrave; <a title="Registrati adesso!" href="../../../registrazione" target="_blank">registrarvi</a> per la prossima sessione di gioco, che non sar&agrave; n&eacute; una alfa n&eacute; una beta... e <strong>non finir&agrave; mai</strong>!<br /><br />I pi&ugrave; affezionati tra di voi si ricorderanno della<strong> beta di GlobalLongju</strong> e di quell''intensa settimana di gioco successiva all''apertura. Il server fin&igrave; troppo presto, per colpa di un nostro errore perdemmo tutti i vostri dati e ci trovammo costretti a chiudere il Server.<br /><br />Decidemmo di riaprire l''anno seguente... per l''esattezza, il <strong>1&deg; febbraio 2012</strong>. In tutto questo tempo ovviamente non siamo restati con le mani in mano, noi dello <a href="../../../staff" target="_blank">Staff</a> abbiamo implementato centinaia di cose nel gioco, c''&egrave; chi ha fatto Quest, chi ha disegnato <strong>armi e armature da zero</strong>, chi ha inventato <strong>nuovi mob</strong>, nuovi <abbr title="Non-player character">NPC</abbr> e cos&igrave; via. Insomma stavolta siamo davvero pronti per ripartire alla grande!<br /><br />Ma... c''&egrave; un problema. Uno dei <abbr title="Game Administrator">GA</abbr> pi&ugrave; importanti sta attualmente passando un periodo difficile, e purtroppo non pu&ograve; permettersi di dedicare molto tempo a GlobalLongju. Per questo motivo, l''apertura del Server &egrave; rimandata a data da destinarsi.<br /><br />Sperando di poter aprire il nuovo Server il pi&ugrave; presto possibile, vi mando un saluto da parte di tutto lo Staff di <a href="http://globalgamesitalia.net" target="_blank">Global Games Italia</a>. Continuate a seguirci su <a href="http://facebook.com/GlobalLongju" target="_blank">Facebook</a>, <a href="http://twitter.com/GlobalGamesIta" target="_blank">Twitter</a> e <a href="http://www.youtube.com/user/GlobalGamesItalia" target="_blank">YouTube</a>, oppure tramite il nostro <a href="../../../rss" target="_blank">feed <abbr title="Really Simple Syndication">RSS</abbr></a>. Ne vedrete delle belle!</p>\r\n<p>A presto,</p>\r\n<p>Lo Staff di Global Games Italia</p>', 1, '2012-01-09 17:02:21', '0000-00-00 00:00:00', 0, 0, 'prossimamente'),
(19, 'Data di apertura ufficiale', 1, 1, '<p>L''attesa &egrave; finita ragazzi! Finalmente abbiamo la <strong>data ufficiale di apertura del Server</strong>!</p>\r\n<h3>1&deg; Aprile 2012</h3>\r\n<p>Tenetevi forte, sar&agrave; un''esperienza a dir poco eccitante! Abbiamo deciso di svelarvi alcune features segrete, <strong>in anteprima assoluta</strong> sul nuovissimo GlobalLongju!</p>\r\n<p><img style="vertical-align: middle; border: 10px solid grey;" src="../../../img/levelling2.png" alt="Level Up!" /></p>\r\n<p>Le quest di GlobalLongju sono assolutamente <span style="font-weight: bold;">inedite</span>, questo significa che giocherete missioni nuove, mai viste fino a d''ora.</p>\r\n<p>Di seguito ecco alcune tra le migliori features di GlobalLongju, presenti gi&agrave; nel Client uscito a Ottobre 2011 e completamente rinnovate nel 2012:</p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li>Achievement System</li>\r\n<li>Premium system in game</li>\r\n<li>Item-shop nell''inventario</li>\r\n<li>Posta tra giocatori</li>\r\n<li>Bug reporter</li>\r\n<li>Nuove mappe (create da zero!!)</li>\r\n<li>Mappa Premium</li>\r\n<li>Nuovi villaggi (!!!)</li>\r\n<li>Nuove armi originali e ultra potenti</li>\r\n<li>Nuovi Boss tremendamente difficili da sconfiggere</li>\r\n<li>Nuovi oggetti segreti sparsi per le mappe</li>\r\n<li>Nuovi Mob inediti su Metin2</li>\r\n<li>Mappe esclusive per expare e mappa tornei PvP&nbsp; </li>\r\n</ul>\r\n<p>Ricordiamo che tutte le Quest e gli NPC sono stati<strong> tradotti in Italiano al 100%</strong> dal competente Staff di <a title="Vai al forum" href="http://globalgamesitalia.net" target="_blank">Global Games Italia</a>, che ha voluto regalarvi un<strong> gameplay indimenticabile mai visto prima d''ora in Metin2</strong>.</p>\r\n<p>Non mancate all''appuntamento il <strong>1&deg; aprile 2012</strong>! Vi vogliamo numerosissimi!!</p>\r\n<p><img style="float: right;" src="../../../img/coco.png" alt="" /></p>\r\n<p>Lo Staff di Global Games Italia</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 1, '2012-02-05 11:56:07', '0000-00-00 00:00:00', 0, 0, 'data-di-apertura-ufficiale');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `IPaddress` varchar(12) NOT NULL DEFAULT '0',
  `permission_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `IPaddress`, `permission_name`) VALUES
(1, 'simo990', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '127.0.0.1', 'WEB_ADMINISTRATOR'),
(2, 'test1', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '0.0.0.0', 'SUPER_GAME_MASTER'),
(3, 'test2', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '127.0.0.1', 'GAME_MASTER'),
(4, 'test3', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '127.0.0.1', 'CHIEF_REPORTER'),
(5, 'test4', '*033325B717C9347C9FD49BA1F76B0D3D6253ACD9', '0.0.0.0', 'REPORTER'),
(6, 'admin', '*C142FB215B6E05B7C134B1A653AD4B455157FD79', '127.0.0.1', 'WEB_ADMINISTRATOR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
