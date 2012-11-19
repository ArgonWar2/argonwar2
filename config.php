<?php

/* NO CACHE
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//*/

/* SHOW ERRORS
error_reporting(E_ALL);
ini_set("display_errors", 1);
//*/

// Database connection parameters
define("HOSTNAME", "127.0.0.1");
define("USERNAME", "root");
define("PASSWORD", "");

define("ROOT", "http://localhost/Mt2CMS/"); 
define("CLIENT_DOWNLOAD_URL", "http://example.com/path/to/webinstaller.exe");
define("DOWNLOAD_EXTERNAL_LINK", "http://www.multiupload.com/F00BARB4Z");
define("INDEX_TITLE", ":: GlobalLongju :: Metin2 Shard by Global Games Italia - Server Dedicato Metin2");
define("ANNOUNCEMENT_FILENAME", "announcement.txt");


include_once 'class/DB.php';
$db = new DB(HOSTNAME,USERNAME,PASSWORD);
include_once 'session/session.php';
$page = isset($_GET['p']) ? $_GET['p'] : '';


$profiletype = isset($_GET['profiletype']) ? $_GET['profiletype'] : 'giocatore';
$profilename = isset($_GET['profilename']) ? $_GET['profilename'] : '';


if ($page == 'registrazione_step2' && !isset($_GET['realm']))
	header('Location: '.ROOT.'registrazione');

include_once 'pages.array.php';
foreach ($pages as $p)
	$valid_pages[] = $p['friendlyurl'];
$n = array_search($page,$valid_pages);

$countdown = $db->queryUniqueValue("SELECT value from backend.settings where name = 'countdown'");
