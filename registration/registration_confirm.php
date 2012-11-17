<?php

$key = isset($_GET['key']) ? mysql_real_escape_string($_GET['key']) : ''; 
$errors = array();

if ( empty($key) )
	$errors[] = "La chiave di registrazione è vuota.";
else {
	$new_user = $db->queryUniqueValue("SELECT `login`
					FROM `account`.`account`
					WHERE `registration_key` = '$key' AND `status` = 'PENDING'
				    ");
	if (!$new_user)
		$errors[] = "Il tuo account è già attivo!";
	else {
		$db->execute("UPDATE `account`
					SET `status` = 'OK'
					WHERE `registration_key` = '$key'");
		include_once 'registration/registration_account_activated.php';
	}
}

if (count($errors) > 0)
	include_once 'registration/registration_activation_failed.php';
