<?php // TODO query da controllare
if (isset($_POST['ban'])) {

	$result = $db->execute("UPDATE `account`.`account` SET `status` = 'ASD' WHERE `id` = ( SELECT `account_id`
FROM `player`.`player`
WHERE `name` = '".mysql_real_escape_string($_POST['pg'])."' )
AND `login` NOT IN (
SELECT `mAccount`
FROM `common`.`gmlist`
WHERE `mName` = '".mysql_real_escape_string($_POST['pg'])."'
");
	if ($db->numRows($result) >= 1)
		echo htmlentities($_POST['pg'])." è stato bannato con successo.";
	else
		echo "Si è verificato un errore.";
		
}else{
?>

<h3>Banna account</h3>
<h4>Scrivi il nome di un PG.</h4>
<form method="POST" action="index.php?action=quickban">
	<input type="text" name="pg" placeholder="Nome del PG da bannare" maxlength=16>
	<button name="ban">BAN</button>
</form>
<p>Se premi il pulsante, verrà bannato l'account e quindi tutti i PG ad esso relativi.</p><h5>Ricorda: il BAN va usato solo in casi estremi!</h5>

<?php
}
