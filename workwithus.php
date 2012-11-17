<?php

if (isset($_POST['submit'])) {

	$nome = 				isset($_POST['nome']) ? $_POST['nome'] 						: '<i>vuoto</i>';
	$cognome = 				isset($_POST['cognome']) ? $_POST['cognome'] 				: '<i>vuoto</i>';
	$datadinascita = 		isset($_POST['datadinascita']) ? $_POST['datadinascita'] 	: '<i>vuoto</i>';
	$statosociale = 		isset($_POST['statosociale']) ? $_POST['statosociale'] 		: '<i>vuoto</i>';
	$account = 				isset($_POST['account']) ? $_POST['account'] 				: '<i>vuoto</i>';
	$pg = 					isset($_POST['pg']) ? $_POST['pg'] 							: '<i>vuoto</i>';
	$accountforum = 		isset($_POST['accountforum']) ? $_POST['accountforum'] 		: '<i>vuoto</i>';
	$oregiornaliere = 		isset($_POST['oregiornaliere']) ? $_POST['oregiornaliere'] 	: '<i>vuoto</i>';
	$seidellostaff = 		isset($_POST['seidellostaff']) ? $_POST['seidellostaff'] 	: '<i>vuoto</i>';
	$seistatodellostaff = 	isset($_POST['seistatodellostaff']) ? $_POST['seistatodellostaff'] : '<i>vuoto</i>';
	$altreesperienze = 		isset($_POST['altreesperienze']) ? $_POST['altreesperienze'] : '<i>vuoto</i>';
	$descrizione = 			isset($_POST['descrizione']) ? $_POST['descrizione'] 		: '<i>vuoto</i>';
	$dichiarazione = 		isset($_POST['dichiarazione']) ? 'Sì' 	: '<b>Scartare a priori questa candidatura</b>';

	include_once "workwithus_email.php";
	if ( mail($to, $subject, $message, $headers) )
		echo "<p>La tua candidatura è stata inoltrata correttamente allo Staff. Grazie e buona fortuna!</p>";
	else
		echo "<p>Si è verificato un errore durante l'inoltro della candidatura. Ti preghiamo di contattare direttamente lo Staff.</p>";
}

?>

<p>Caro giocatore di GlobalLongju,</p>

<p>Il ruolo di <b>Game Master</b> (d'ora in poi <b>GM</b>), come ogni altro richiede tempo e competenza.<br>
Il ruolo del <b>GM</b> consiste nell'aiutare e indirizzare i nuovi e vecchi utenti di GlobalLongju Metin2 che fanno richiesta di aiuto in gioco, oltre che monitorare l'utenza e far sì che le regole vengano rispettate: è pertanto richiesta una buona conoscenza del gioco e un'approfondita conoscenza dei regolamenti e delle dinamiche di gioco.</p>

<p>Altresì, ti sia ben chiaro che i <b>GM</b>, come il resto dello Staff, non guadagnano nulla a fare il proprio lavoro nell'ambito di questo gioco. Non ci sono privilegi, non c'è trattamento di favore né remunerazione: chi si accinge a ricoprire tale veste, viene costantemente monitorato alla pari di qualsiasi altro utente, se non anche di più, sia da parte dei <b>Game Administrators</b> (<b>GA</b>), sia dai <b>GM</b> stessi.</p>
 
<p>È un ruolo di responsabilità, e come tale ad accettarne gli oneri si mette in luce e discussione anche la propria 
serietà nonché maturità. Ti suggeriamo, pertanto, di proporti <b>solo se realmente consideri di poterlo fare</b>.</p>

<h3>È possibile mantenere il PG di gioco?</h3>
<p><b>Assolutamente sì</b>: il PG di gioco è totalmente distaccato dallo Staff, questo vuol dire che non viene negata a nessuno la possibilità di giocare anche facendo parte del nostro Team. I due ruoli sono ben distinti, ed ogni membro dello Staff viene trattato come un normalissimo personaggio giocante, al pari di tutti gli altri.</p>

<hr>

<p>Per poter entrare a far parte dello Staff di Global Games Italia, oltre ad aver ben chiaro quanto sopra scritto, bisogna possedere i seguenti requisiti minimi:</p>

<ul>
    <li>Età minima 16 anni</li>
    <li>Avere un minimo di 4 mesi di esperienza nel gioco</li>
    <li>Possedere un headset, ovvero cuffie e microfono</li>
    <li>Avere una disponibilità di tempo minima di 3 ore al giorno</li>
    <li>Possedere un account sul <a href="http://globalgamesitalia.net">forum</a></li>
    <li>Ottima conoscenza della lingua italiana (gradito anche l'inglese)</li>
    <li>Saper lavorare bene in team</li>
</ul>

    <h2>Modulo di richiesta<br>candidatura a Game Master</h2>

<form method="POST" action="lavora-con-noi" class="table-form">

	<fieldset><legend>Dati anagrafici</legend>
		<p>
			<label for="nome">Nome</label>
			<input id="nome" type="text" placeholder="Il tuo nome vero" required>
		</p>
		<p>		
			<label for="cognome">Cognome</label>
			<input id="cognome" type="text" placeholder="Il tuo cognome" required>	
		</p>
		<p>		
			<label for="datadinascita">Data di nascita</label>
			<input id="datadinascita" type="date" required>
		</p>		
		</p>
			<label for="statosociale">Stato attuale</label>							
			<input type="radio" name="statosociale" value="Studente">Studente		
			<input type="radio" name="statosociale" value="Lavoratore">Lavoratore	
			<input type="radio" name="statosociale" value="Disoccupato">Disoccupato	
 		</p>       
	</fieldset>

	<fieldset><legend>Dati relativi alla tua presenza nella comunità</legend>
		<p>
		<label for="account">Account di gioco</label>
		<input id="account" type="text" placeholder="Indica il tuo account di gioco" required>
		</p>
		<p>		
		<label for="pg">Il tuo PG</label>
		<input id="pg" type="text" placeholder="Nickname del tuo PG principale" required>
		</p>
		<p>
		<label for="accountforum">Account sul forum</label>
		<input id="accountforum" type="text" placeholder="Indica il tuo account sul forum" required>
		</p>
		<p>
		<label for="oregiornaliere">Quante ore dedichi in media ogni giorno a GlobalLongju?</label>
		<input id="oregiornaliere" type="number" required>
		</p>		
	</fieldset>
	
	<fieldset><legend>Le tue esperienze nei giochi online</legend>

		<p>	
		<label for="seidellostaff">Giochi online in cui sei dello Staff</label>
		<input id="seidellostaff" type="text" placeholder="" required>
		</p>
		<p>		
		<label for="seistatodellostaff">Giochi online in cui sei stato parte dello Staff</label>
		<input id="seistatodellostaff" type="text" placeholder="" required>
		</p>
		<p>		
		<label for="altreesperienze">Altri giochi online a cui partecipi</label>
		<input id="altreesperienze" type="text" placeholder="" required>
		</p>		
	</fieldset>

		<p>	
		<label for="descrizione">Una breve descrizione di te stesso</label>
		<textarea id="descrizione" type="text" placeholder="Descrivi te stesso caratterialmente e il motivo per cui vorresti diventare GM. Quali sono le tue aspettative da questo ruolo? E quali obiettivi ti poni? Indica inoltre qualunque dettaglio che ritieni potenzialmente utile all'accettazione della tua candidatura." required></textarea>
		</p>
		
    <label for="dichiarazione">Dichiaro che quanto sopra indicato corrisponde a verità e che per eventuali falsità questa medesima richiesta non potrà esser valutata e autorizzo in tal caso lo Staff di Global Games Italia a prendere provvedimenti nei miei confronti sul forum e sul gioco</label> <input name="dichiarazione" type="checkbox" required>

<button name="submit">INVIA</button>

</form>

<p>Se l'esito della candidatura sarà positivo, ti contatterà direttamente un membro dello Staff di Global Games Italia. Se ci sarà da parte tua anche una sola sollecitazione a sapere l'esito della richiesta, quest'ultima verrà <b>scartata immediatamente</b>.

<p>Se non ricevi risposta entro un mese dall'invio della candidatura vuol dire che sei stato scartato.</p>

<p>Saluti</p>

<p>
Lo Staff di Global Games Italia<br>
<a href="http://globalgamesitalia.net">www.globalgamesitalia.net</a>
</p>
