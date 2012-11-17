<?php

$to = 'info@globalgamesitalia.net';

$subject = "[Candidatura GM] " . strip_tags($nome) . strip_tags($cognome) . " - " . strip_tags($account);

$headers = "From: no-reply@globalgamesitalia.net\r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message.= '<img src="http://globalgamesitalia.net/images/cmsbb/logo.png" alt="Global Games Italia">';
$message.= '<table rules="all" style="border-color: #666;" cellpadding="10">'; //start table

$message.= "<tr style='background: #eee;'><td><strong>Nome e cognome:</strong> </td><td>". strip_tags($nome) . strip_tags($cognome) ."</td></tr>"; //1st row

$message.= "<tr><td><strong>Dichiarazione di verità</strong> </td><td>".strip_tags($dichiarazione)."</td></tr>";
$message.= "<tr><td><strong>Data di nascita</strong> </td><td>".strip_tags($datadinascita)."</td></tr>";
$message.= "<tr><td><strong>Stato sociale</strong> </td><td>".strip_tags($statosociale)."</td></tr>";
$message.= "<tr><td><strong>Account</strong> </td><td>".strip_tags($account)."</td></tr>";
$message.= "<tr><td><strong>PG principale</strong> </td><td><a href='http://metin2.globalgamesitalia.net/profilo/giocatore/".strip_tags($pg)."'>".strip_tags($pg)."</td></tr>";
$message.= "<tr><td><strong>Account sul forum</strong> </td><td><a href='http://metin2.globalgamesitalia.net/profilo/giocatore/".strip_tags($accountforum)."'>".strip_tags($accountforum)."</td></tr>";
$message.= "<tr><td><strong>Ore giornaliere su GL (in media)</strong> </td><td>".strip_tags($oregiornaliere)."</td></tr>";
$message.= "<tr><td><strong>Altri Staff di cui è membro</strong> </td><td>".strip_tags($seidellostaff)."</td></tr>";
$message.= "<tr><td><strong>Altri Staff di cui è stato membro</strong> </td><td>".strip_tags($seistatodellostaff)."</td></tr>";
$message.= "<tr><td><strong>Altri giochi online a cui gioca</strong> </td><td>".strip_tags($altreesperienze)."</td></tr>";
$message.= "<tr><td><strong>Descrizione</strong> </td><td>".strip_tags($descrizione)."</td></tr>";

$message.= "</table>"; // end table
$message.= "</body></html>";