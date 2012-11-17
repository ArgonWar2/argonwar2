<ul>

<?php

// Inserisci la query per visualizzare:
/* Nome player bannato
	Motivazione (magari si può usare un campo della tabella account)
	e serve anche la data del ban
*/
$banlist = $db->query("SELECT name FROM account.account INNER JOIN player.player ON account.id = player.account_id WHERE account.status = 'BLOCK'");

while ($row = $db->fetchNextObject($banlist))
	echo "<li style='text-align:center'>$row->name</li>";
	
?>

</ul>
