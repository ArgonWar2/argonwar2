<?php
$headers = "From: Global Games Italia <no-reply@globalgamesitalia.net>\r\n".
		   "Reply-To: Global Games Italia <info@globalgamesitalia.net>\r\n".
		   "X-Mailer: PHP/".phpversion();
$to      = $email;
$subject = "Registrazione a GlobalLongju Metin2";
$link 	 = "http://metin2.globalgamesitalia.net/conferma-registrazione/$registration_key";
$message = "Ciao $username,\r\n\r\n";
$message.= "Per confermare la tua iscrizione al Server, fai click sul link sottostante:";
$message.= "\r\n\r\n$link\r\n\r\n";
$message.= "Grazie per averci scelto e buon divertimento!\r\n\r\n";
$message.= "Global Games Italia\r\n";
$message.= "www.globalgamesitalia.net";
