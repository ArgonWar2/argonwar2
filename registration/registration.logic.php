<?php
$errors = array();	
$username = isset($_POST['username']) ? $_POST['username'] : '';
$email	  = isset($_POST['email'])	  ? $_POST['email']	   : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$pass_two = isset($_POST['pass_two']) ? $_POST['pass_two'] : '';
$captcha  = isset($_POST['captcha'])  ? $_POST['captcha']  : '';
$realm	  = isset($_GET['realm'])	  ? $_GET['realm']	   : '';
$race	  = isset($_GET['race'])	  ? $_GET['race']	   : '';
$playername = isset($_POST['playername']) ? $_POST['playername'] : '';

if ( empty($username) || empty($email) || empty($password) || empty($pass_two) ) {
	if ( empty($username) )
		$errors[] = "Il campo Nickname non può essere vuoto.";
	if ( empty($email) )
		$errors[] = "L'indirizzo email è richiesto.";
	if ( empty($password) )
		$errors[] = "La password è obbligatoria.";
	if ( empty($pass_two) )
		$errors[] = "È necessario digitare la password una seconda volta.";
} else {
	if (!preg_match('/^[A-Za-z0-9]+\z/', $username)) // use "^\w+$^" if you want to allow "-" and "_"
		$errors[] = "L'account deve contenere solo caratteri alfanumerici.";
	if (!preg_match('/^[A-Za-z0-9]*\z/', $playername)) // in this case, empty string is allowed (* instead of +)
		$errors[] = "Il nickname deve contenere solo caratteri alfanumerici.";
	if (strlen($username) < 3)
		$errors[] = "L'account deve essere di almeno 3 caratteri.";
	if (strlen($playername) < 3)
		$errors[] = "Il nome del pg deve essere lungo almeno 3 caratteri!";
	if (strlen($password) < 6)
		$errors[] = "La password deve essere lunga almeno 6 caratteri.";
	if ( $captcha != $correct_answer )
		$errors[] = "Non hai risposto correttamente al test di Turing.";
	if ( $password != $pass_two )
		$errors[] = "Le due password non coincidono.";
	if (!isset($_POST['TOSaccepted']))
		$errors[] = "Devi accettare i termini di servizio se vuoi proseguire con la registrazione.";
	else if (count($errors) <= 0) {
		$password = mysql_real_escape_string($password);
		$_check_user = $db->queryUniqueValue("SELECT `login` FROM `account`.`account` WHERE `login` = '$username'"); // returns NULL if no rows are selected (this is normal behavior)
		if ( strcasecmp($_check_user,$username) == 0 ) // case-insensitive compare. 0 means they are equal.
			$errors[] = "Esiste già un giocatore con il nick <b>$username</b>: ti invitiamo a sceglierne un altro più epico!";
		else {
			$registration_key = md5($email);
			$ip_address = $_SERVER['REMOTE_ADDR'];
			// Start Bonus: si potrebbe impostare questo valore di default sul db, così da evitare questa parte di codice..
			$bonus_expire_date = '2014-01-01 00:00:00';
			$safebox_expire 	 = $bonus_expire_date;
			$fish_mind_expire  = $bonus_expire_date;
			$autoloot_expire	 = $bonus_expire_date;
			// End Bonus
			$zipcode = isset($_POST['warnByMail']) ? 1 : 0; // warn by mail is temporary saved in $zipcode
			$db->execute("INSERT INTO `account`.`account` 
			(`login`, `password`, `email`, `create_time`, `web_ip`,`registration_key`, `safebox_expire`, `fish_mind_expire`, `autoloot_expire`, `zipcode`)
			VALUES 
			('$username', PASSWORD('$password'), '$email', NOW(), '$ip_address', '$registration_key', '$safebox_expire', '$fish_mind_expire', '$autoloot_expire', '$zipcode')");
			
			// Start player creation logic
			if (is_numeric($race) && $race >= 0 && $race <= 7 &&
				is_numeric($realm) && $realm >= 1 && $realm <= 3) {
				
				$playername = mysql_real_escape_string($playername);
		
				$account_id = $db->lastInsertedId();
				$db->execute("INSERT INTO player.player 
				SET 
				account_id = '$account_id', 
				name = '$playername', 
				job = '$race'
				");
				
				$player_id = $db->lastInsertedId();
				$db->execute("INSERT INTO player.player_index 
				SET
				id = '$account_id', 
				pid1 = '$player_id', 
				empire = '$realm'
				");
				
			} else
				$errors[] = "I dati immessi durante la creazione del personaggio non erano validi: il tuo pg non è stato creato, ma potrai crearlo direttamente in gioco.";
			// End player creation logic
			
			include_once 'registration/registration_mail.php';
			if ( !mail($to, $subject, $message, $headers) )
				$errors[] = "Non è stato possibile inviare l'email di conferma.";
			else //registrazione completata
				include_once 'registration/registration_completed.php';
		}
	}
}
if (count($errors) > 0) // registrazione fallita, oppure pg non creato
	include_once 'registration/registration_failed.php';
?>