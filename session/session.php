<?php

$login_errors = array();

$SID = isset($_COOKIE[ini_get('session.name')]) ? $_COOKIE[ini_get('session.name')] : '';

if (!empty($SID))
	session_start($SID);
else {
	if (isset($_POST['login'])) {
		$login_usr = isset($_POST['user']) ? mysql_real_escape_string($_POST['user']) : '';
		$login_pwd = isset($_POST['pass']) ? mysql_real_escape_string($_POST['pass']) : '';

		if (empty($login_usr) || empty($login_pwd))
			$login_errors[] = "Inserisci i tuoi dati per loggarti.";
		else {
			$check_if_user_exists_query = "SELECT `login`
											FROM `account`.`account`
											WHERE `login` = '$login_usr' AND `password` = PASSWORD('$login_pwd')";
			$usr = $db->queryUniqueValue($check_if_user_exists_query); //returns NULL if no rows are selected (this is normal behavior)
			if ( strcasecmp($login_usr, $usr) == 0 ) { // case-insensitive compare. 0 means they are equal.
				session_start();
				$SID = session_id();
				$_SESSION['usr'] = $usr;
				setcookie(session_name(), $SID, 0, ROOT);
			}
			else {
				$login_errors[] = "Username e/o password errati.";
			}
		}
	}
}
