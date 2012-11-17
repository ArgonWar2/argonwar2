<h3>Changelog update</h3>
<h4>Sistema di software versioning semi automatico</h4>
<?php
$latestVersion = $db->queryUniqueValue("select version from backend.changelog order by changeDate desc");

if (isset($_POST['submit'])) {

	$description = isset($_POST['description']) ? trim($_POST['description']) : '';
	$latestVersion = explode('.',$latestVersion);
	$h = $latestVersion[0];
	$m = $latestVersion[1];
	$l = $latestVersion[2];
	$versioningType = isset($_POST['versioningtype']) ? trim($_POST['versioningtype']) : ''; 
	if (!empty($versioningType)) {
		switch($versioningType) {
			case 'high':
				++$h;
				$m = 0;
				$l = 0;
				break;
			case 'medium':
				++$m;
				$l = 0;
				break;
			case 'low':
				++$l;
				break;
			default:
				die('Errore brutto!!');
		}
		$latestVersion[0] = $h;
		$latestVersion[1] = $m;
		$latestVersion[2] = $l;
		$version = implode('.',$latestVersion);
		
		if (!empty($description)) {
			$db->execute("INSERT INTO backend.changelog(
						version,
						description,
						changedate
						)
						VALUES (
						'$version', '$description', NOW()
						)");
			echo "<p>Il client è stato aggiornato correttamente. <a href=\"http://metin2.globalgamesitalia.net/ultimi-aggiornamenti\">Controlla il changelog adesso</a></p>";
		} else 
			die ("devi inserire una descrizione!!");
	}

} else {

?>


<h4>Le modifiche al client di GlobalLongju possono essere di tre tipi:</h4>
<ul>
	<li><b>Normale</b> - scegli questo tipo di modifica quando aggiungi una nuova feature al client (per esempio una nuova mappa, dei nuovi mob ecc.)</li>
	<li><b>Lieve</b> - questo tipo di modifica è il più comune. Si tratta semplicemente di uno o più bug risolti, del tutto o in parte.</li>
	<li><b>Massiccia</b> - questa modifica viene fatta solo nei casi in cui al client viene fatta una modifica tale da influire pesantemente sul gameplay.</li>
</ul>
	


<h4>Indica la tipologia di modifica da te effettuata</h4>

<form method="POST" action="index.php?action=updatechangelog">
	<input name="versioningtype" type="radio" value="medium"> Normale <br>
	<input name="versioningtype" type="radio" value="low"> Lieve <br>	
	<input name="versioningtype" type="radio" value="high"> Massiccia <br>


	<h4>La versione attuale del client è:</h4>

	<span id="latestVersion" class="clientVersion"><?=$latestVersion?></span>

	<h4>Con la tua modifica, la versione diventerà la seguente:</h4>

	<span id="nextVersion" class="clientVersion"></span>

	<h4>Vuoi continuare?</h4><a name="yes">Sì</a> / <a>No</a><br>
	
	<div id="continue">
		<h4>Descrivi la tua modifica</h4>
		
		<textarea name="description">Inserisci una descrizione</textarea>

		<button name="submit">Aggiorna il Client</button>
	</div>
</form>

<?php

}
