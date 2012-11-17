<?php

if (isset($_POST['change_email'])) {
	$new_email = $_POST['email'];
	if ($account->status == 'PENDING') {
		$db->execute("UPDATE `account`.`account`
						  SET `email` = '$new_email'
						  WHERE `id` = $account->id
						 ");
		$message = "E-mail aggiornata correttamente.";
	} 
	else if ($account->status == 'BLOCK')
		$message = "Impossibile aggiornare o rimuovere l'e-mail. Sei bannato!";
	else if ($account->status == 'OK')
		$message = "Impossibile cambiare l'e-mail, poiché il tuo account è attivo.";
}

if (isset($_POST['resend_email'])) {
	$email = $account->email;
	$registration_key = md5($email);
	$username = $account->login;
	include 'registration/registration_mail.php';
	if ( !mail($to, $subject, $message, $headers) )
		$message = "Non è stato possibile reinviare l'email. <a href=\"http://globalgamesitalia.net\">Contatta lo Staff</a>";
	else
		$message = "Ti abbiamo rispedito l'email di registrazione: controlla la tua casella di posta!";
}

if (isset($_POST['change_social_id'])) {
	$new_social_id = trim($_POST['social_id']);
	if (is_numeric($new_social_id) && strlen($new_social_id) <= 7) {
		$db->execute("UPDATE `account`.`account`
					  SET `social_id` = '$new_social_id'
					  WHERE `id` = '".$account->id."'
					");
		$message = "Codice cancellazione PG cambiato con successo.";
	} else
		$message = "Il codice cancellazione non è stato cambiato perché non valido.";
}

if (isset($_POST['unlock_pg'])) {
	$pg = $_POST['unlock_pg'];
	$map; $x; $y;
	switch($empire) {
		case 1:
			$map = "1";
			$x = "469187";
			$y = "964351";
			break;
		case 2:
			$map = "21";
			$x = "55700";
			$y = "157900";
			break;
		case 3:
			$map = "41";
			$x = "969528";
			$y = "278857";
	}
	if (!empty($map) && !empty($x) && !empty($y)) {
		$db->execute("UPDATE `player`.`player`
					  SET x='$x', y='$y', map_index='$map', exit_x='$x', exit_y='$y', exit_map_index='$map'
					  WHERE name='$pg'
					");
		$message = "Sei stato teletrasportato al primo villaggio del tuo regno. Attendi 15 minuti prima di riloggare!";
	} else
		$message = "Si è verificato un errore durante lo sbloccamento del PG.";
}

if (isset($_POST['change_avatar'])) { 
	
	$pg = $_POST['change_avatar'];
	$avatar = isset($_FILES['avatar_upload']) ? $_FILES['avatar_upload'] : NULL;
	//for debug purposes: echo "<pre>"; var_dump($avatar);

	if (is_uploaded_file($avatar['tmp_name'])) {
		if ($avatar['size'] > 61440 ) // 60 kB = 61440 bytes
			$message = "L'avatar che hai scelto è troppo pesante. La grandezza massima è 60 kB.";
		else {
			// Ottengo le informazioni sull'immagine
			list($width, $height, $type, $attr) = getimagesize($avatar['tmp_name']);
			// Controllo che il file sia in uno dei formati GIF, JPG o PNG. Chiaramente deve risultare diverso da tutti questi 3 formati contemporaneamente per dare errore.
			if ( ($type!=1) && ($type!=2) && ($type!=3) )
				$message = "L'avatar deve essere in formato gif, jpg oppure png.";
			else
			if ($width > 150 || $height > 150)
				$message = "L'avatar che hai scelto supera la dimensione massima consentita (150x150 px)."; // TODO resize image instead!!
			else {
				// Stabilisco il nome e l'estensione dell'immagine da salvare
				$avatar_name;
				switch ($type):
					case 1:
						$avatar_name = $pg . ".gif";
						break;
					case 2:
						$avatar_name = $pg . ".jpg";
						break;
					case 3:
						$avatar_name = $pg . ".png";
				endswitch;
				// Upload
				$path = "img/avatars/" . $avatar_name; // you cannot write by http, you have to use the local file system to write files
				if ( !move_uploaded_file($avatar['tmp_name'], $path) )
					$message = "Si è verificato un errore durante l'upload dell'avatar scelto.";
				else {
					$db->execute("UPDATE `player`.`player`
								  SET `avatar` = '$avatar_name'
								  WHERE `name` = '$pg'
								");
					$message = "Avatar caricato con successo!";
				}
			}
		}
	} // if image isn't uploaded, but URL is set
	else if (isset($_POST['avatar_download'])) {
		// for debug purposes: var_dump($_POST['avatar_download']);
		$url = trim($_POST['avatar_download']);

		if (empty($url))
			$message = "Non hai inserito l'URL.";
		else {
			include "function/startsWith.php";
			include "function/endsWith.php";
			if ( !startsWith($url, "http://") )
				$message = "Devi inserire un URL valido.";
			else
			if ( !endsWith($url, ".jpg") && !endsWith($url, ".gif") && !endsWith($url, ".png") )
				$message = "L'immagine che hai scelto da URL non è valida.";
			else {
				$db->execute("UPDATE `player`.`player`
							  SET `avatar` = '$url'
							  WHERE `name` = '$pg'
							");
				$message = "Avatar aggiornato con successo!";
			}			
		}		
	}
	else
		$message = "Non hai scelto nessun avatar. Riprova.";
}

if (isset($_POST['change_shout'])) {
	$pg = $_POST['change_shout'];
	$shout = isset($_POST['shout']) ? trim($_POST['shout']) : '';
	
//	if (empty($shout))
//		$message = "Non puoi lasciare il campo vuoto.";
//	else {
		$db->execute("UPDATE `player`.`player`
					  SET `shout` = '".mysql_real_escape_string($shout)."'
					  WHERE `name` = '$pg'
					");
		$message = "Grido di battaglia aggiornato!";
//	}
}