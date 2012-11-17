<h3>Cambia i rate</h3>
<h4>Inserisci solo valori numerici: il segno % verrà aggiunto automaticamente.</h4>
<?php
if (isset($_POST['submit'])) {

	if (!empty($_POST['exprate'])) {	
		if (is_numeric($_POST['exprate'])) {
			$value = $_POST['exprate'];
			$db->execute("UPDATE `backend`.`settings`
			SET `value` = '$value'
			WHERE `settings`.`name` = 'exp'
			AND `settings`.`group` = 'rate'
			");
			$message[] = "Il rate EXP è stato aggiornato correttamente";
		} else
			$message[] = "Il rate EXP NON è stato aggiornato! Devi inserire un valore numerico.";
	}

	if (!empty($_POST['yangrate'])) {	
		if (is_numeric($_POST['yangrate'])) {
			$value = $_POST['yangrate'];
			$db->execute("UPDATE `backend`.`settings`
			SET `value` = '$value'
			WHERE `settings`.`name` = 'yang'
			AND `settings`.`group` = 'rate'
			");
			$message[] = "Il rate YANG è stato aggiornato correttamente";
		} else
			$message[] = "Il rate YANG NON è stato aggiornato! Devi inserire un valore numerico.";
	}

	if (!empty($_POST['droprate'])) {	
		if (is_numeric($_POST['droprate'])) {
			$value = $_POST['droprate'];
			$db->execute("UPDATE `backend`.`settings`
			SET `value` = '$value'
			WHERE `settings`.`name` = 'drop'
			AND `settings`.`group` = 'rate'
			");
			$message[] = "Il rate DROP è stato aggiornato correttamente";
		} else
			$message[] = "Il rate DROP NON è stato aggiornato! Devi inserire un valore numerico.";
	}	

}

if (isset($message)) { ?>
<ul class="errorlist">
<?php foreach ($message as $m): ?>
	<li><?php echo $m; ?></li>
<?php endforeach; ?>
</ul>
<?php } ?>


<form method="POST" action="index.php?action=changerates">
	<label for="exprate">EXP Rate</label>
	<input id="exprate" name="exprate" type="number" maxlength=3>
	<label for="yangrate">Yang Rate</label>
	<input id="yangrate" name="yangrate" type="number" maxlength=3>
	<label for="droprate">Drop Rate</label>
	<input id="droprate" name="droprate" type="number" maxlength=3>
	<button name="submit">Cambia</button>
</form>
