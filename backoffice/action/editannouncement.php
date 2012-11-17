<h3>Inserisci un annuncio sulla Home</h3>

<?php if (!isset($_POST['submit'])) { ?>

<h4>Questa funzione è riservata solo per casi speciali: non abusarne, per favore.</h4>
<h5>Ciò che scriverai nel box sottostante finirà direttamente sulla home page, dentro un rettangolo rosso, e sarà quindi visibile a tutti. Per rimuovere l'annuncio basta lasciare il box vuoto e fare click su Inserisci.</h5>

<?php } else if (file_put_contents(ANNOUNCEMENT_FILENAME, $_POST['announcement'])) {

		echo "<p>L'annuncio è stato inserito/modificato. Per favore <a href=\"".ROOT."\">controlla immediatamente</a> che il risultato sia quello voluto! In caso contrario provvedi subito a modiicarlo.</p>";
		
} ?>

<form method="POST" action="index.php?action=editannouncement">
	<input name="announcement" maxlength="200" placeholder="Scrivi qui l'annuncio" autofocus>
	<br>
	<small>Lunghezza massima consentita: 200 caratteri (circa 40 parole)</small>
	<br>
	<button name="submit">Inserisci</button>
</form>