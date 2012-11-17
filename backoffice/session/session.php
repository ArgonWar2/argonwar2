<?php
//backoffice session
$login_errors = array();
$login_usr;
$login_pwd;
$IP = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$SID = isset($_COOKIE[ini_get('session.name')]) ? $_COOKIE[ini_get('session.name')] : '';

if (!empty($SID))
	session_start($SID);
else {
	if (isset($_POST['login'])) {
		$login_usr = isset($_POST['un']) ? mysql_real_escape_string($_POST['un']) : '';
		$login_pwd = isset($_POST['pw']) ? mysql_real_escape_string($_POST['pw']) : '';

		if (empty($login_usr) || empty($login_pwd))
			$login_errors[] = "Inserisci i tuoi dati per loggarti.";
		else {
			$check_if_user_exists_query = "SELECT `name`
											FROM `backend`.`user`
											WHERE `name` = '$login_usr' AND `pass` = PASSWORD('$login_pwd')";
			$_check = $db->queryUniqueValue($check_if_user_exists_query); //returns NULL if no rows are selected (this is normal behavior)
			if ( strcasecmp($login_usr, $_check) == 0 ) { // case-insensitive compare. 0 means they are equal.
				session_start();
				$SID = session_id();
				$_SESSION['usr'] = $_check;
				setcookie(session_name(), $SID, 0, B_ROOT);
				// setcookie('IP_ADDRESS', $IP, 0, B_ROOT);
				$db->execute("UPDATE `backend`.`user`
				SET `IPaddress` = '$IP'
				WHERE `name` = '$login_usr' AND `pass` = PASSWORD('$login_pwd')
				");
				$db->execute("INSERT INTO `backend`.`authlog`
				(username,success,authTime,IPaddress,userAgent)
				VALUES
				('$login_usr','1',NOW(),'$IP','$userAgent')");
			}
			else {
				$lastAttempt = $db->queryUniqueValue("SELECT attempt FROM backend.authlog WHERE username = '$login_usr' ORDER BY authTime DESC");	
				$lastAttempt++;
				$db->execute("INSERT INTO `backend`.`authlog`
				(username,attempt,success,authTime,IPaddress,userAgent)
				VALUES
				('$login_usr','$lastAttempt','0',NOW(),'$IP','$userAgent')");

				$login_errors[] = "Username e/o password errati.";
			}
		}
	}
}
