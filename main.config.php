<?php
	include_once 'global_definitions.php';
	include_once 'class/DB.php';
	$db = new DB(HOSTNAME,USERNAME,PASSWORD);
	include_once 'session/session.php';
	$page = isset($_GET['p']) ? $_GET['p'] : '';
	
//	if ($page == 'profilo') { //mettilo su profile.php, dovrai fare una pagina unica.
	$profiletype = isset($_GET['profiletype']) ? $_GET['profiletype'] : 'giocatore';
	$profilename = isset($_GET['profilename']) ? $_GET['profilename'] : '';
//	}

	if ($page == 'registrazione_step2' && !isset($_GET['realm']))
		header('Location: '.ROOT.'registrazione');	
	
	include_once 'pages.array.php';
	foreach ($pages as $p)
		$valid_pages[] = $p['friendlyurl'];
	$n = array_search($page,$valid_pages);
	
	$countdown = $db->queryUniqueValue("SELECT value from backend.settings where name = 'countdown'");
