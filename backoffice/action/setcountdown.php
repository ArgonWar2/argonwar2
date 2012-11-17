<h1>Imposta il countdown</h1>

<?php
if (isset($_POST['submit'])){
	$date = isset($_POST['countdowndate']) ? trim($_POST['countdowndate']) : '';
	$time = isset($_POST['countdowntime']) ? trim($_POST['countdowntime']) : '';
	if (empty($date) || empty($time))
		echo "Nessun campo può essere lasciato vuoto.";
	else {
		$date = explode('-', $date); // [0]=year, [1]=month, [2]=day
		$time = explode(':', $time); // [0]=hour, [1]=minute
		$db->execute("UPDATE backend.countdown
		              SET year=$date[0],
					      month=$date[1],
						  day=$date[2],
						  hour=$hour[0],
						  minute=$minute[1]
					");
		echo "<h4>Database aggiornato. Controlla subito sulla <a href='".ROOT."'>home page</a> se il risultato è quello voluto!</h4>";
	}
}
?>

<form method="POST" action="index.php?action=setcountdown">
	<label for="activatecountdown">Vuoi attivare il countdown?</label>
	<input id="activatecountdown" type="checkbox" name="activatecountdown">
	<label for="countdowndate">Indica la data in cui scadrà il conto alla rovescia (formato AAAA-MM-GG, con trattini separatori)</label>
	<input id="countdowndate" type="date" placeholder="Esempio: 2012-04-23" required>
	<label for="countdowntime">Indica l'ora (formato hh:mm, con doppi puntini separatori)</label>
	<input id="countdowntime" type="text" placeholder="Esempio: 17:45" required>
	<button name="submit">Imposta</button>
</form>
