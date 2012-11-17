<h3>Nuovo articolo</h3>

<?php
	$errors = array();
if (count($errors) > 0) {
	foreach ($errors as $error)
		echo "<span class=\"error\">$error</span><br>";
}

if (isset($_POST['submit'])) {
	
	$title = isset($_POST['title']) ? trim($_POST['title']) : '';
	$category = isset($_POST['category']) ? trim($_POST['category']) : '';
	$author = isset($_POST['author']) ? trim($_POST['author']) : '';
	$content = isset($_POST['content']) ? trim($_POST['content']) : '';

	if (empty($title) || empty($category) || empty($content)){
		if (empty($title))
			$errors[] = "hai dimenticato di dare un titolo al tuo articolo.";
		if (empty($category))
			$errors[] = "non hai scelto una categoria per il tuo articolo.";
		if (empty($content))
			$errors[] = "devi scrivere qualcosa!!";	
	}else{
		$title	  = mysql_real_escape_string($title);
		$category = mysql_real_escape_string($category);
		$author   = mysql_real_escape_string($author);
		$content  = mysql_real_escape_string($content);
		include_once 'function/getSEOURLbyTitle.php';
		$URL = getSEOURLbyTitle($title);

		$db->execute("INSERT INTO `backend`.`post` (`title`,`category_id`,`author_id`,`content`,`creationDate`,`URL`)
		VALUES ('$title','$category','$author','$content',NOW(),'$URL')");
		echo "<h4>L'articolo è stato inserito con successo nel nostro database</h4>";
	}
} else {
?>

<form method="POST" action="index.php?action=writepost">

	<label for="title">Titolo</label>
	<input id="title" name="title" placeholder="Inserisci un titolo per l'articolo..." maxlength=50 autofocus required>

	<label for="category">Categoria</label>
	<select id="category" name="category">
	<?php
	$result = $db->query("SELECT * FROM `backend`.`category`");
	while( $row = $db->fetchNextObject($result) ) { ?>
		<option value=<?=$row->id?>><?=$row->name?></option>
	<?php } ?>
	</select>

	<input type="hidden" name="author" value="<?=$db->queryUniqueValue("SELECT `id` FROM `backend`.`user` WHERE `name` = '".$_SESSION['usr']."'")?>">

	<textarea name="content" cols="50" rows="15" > 
		Scrivi qui il tuo nuovo articolo :)
	</textarea>

	<button name="submit">Pubblica!</button>
	
	<p>Alcune note:</p>
	<ul>
		<li>Se vuoi inserire una o più immagini, che però hai solo sul tuo PC e non sai come caricarle su Internet, chiedi al capo redattore o ad uno degli amministratori di farlo per te.</li>
		<li>Fa' attenzione con i titoli: quello principale verrà inserito, non c'è bisogno di metterne un altro!</li>
		<li>Quando parli di una pagina specifica del sito, inserisci un link. Per inserire un link, basta semplicemente evidenziare la parola che vuoi far diventare link. Per esempio: se vuoi inserire un link che rimanda alla classifica dei players, basta che scrivi ad esempio "classifica giocatori", poi evidenzi la scritta e fai click sul pulsante del link. Infine, su Link URL, scrivi l'URL COMPLETO della classifica giocatori (in questo caso http://metin2.globalgamesitalia.net/classifica/giocatori).
		<li>Ciò che scriverai sul title del link finirà nel suo relativo tooltip (il fumetto grigio che appare quando passi col puntatore del mouse sopra al link). Se lo lasci vuoto ovviamente non apparirà niente.</li></li>
	</ul>


</form>

<?php
}
