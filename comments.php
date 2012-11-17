<h4>Commenti</h4>
<?php
include_once 'function/secondsToHumanReadableTerm.php';
$comments = $db->query("SELECT id, author, DATE_FORMAT(postDate,'%e/%c/%Y ore %H:%i') AS postDate, UNIX_TIMESTAMP(postDate) AS postTimestamp, content, likes, dislikes FROM backend.comment WHERE post_id = '$article->id'");
$numberOfComments = $db->numRows($comments);
$URL = $db->queryUniqueValue("SELECT URL FROM `backend`.`post` WHERE id = '$article->id'");

if ($numberOfComments>0) {
	while ($comment = $db->fetchNextObject($comments))
		include 'comment.php';
?>
<a href="<?=ROOT.'news/'.$URL.'#commentform'?>">Aggiungi un commento</a></p>
<?php
} else {
	// non ci sono commenti
?>
<p>Non ci sono ancora commenti.</p>

<?php //per commentare devi essere registrato. registrati ORA!?>
<p>Tu puoi essere il primo! <a href="<?=ROOT.'news/'.$URL.'#commentform'?>">Commenta ORA!</a></p>

<?php
}

if (isset($article_url)) {
	//ci troviamo sulla pagina dell'articolo singolo
	
	if (isset($_POST['submit_comment'])) {
		
		$author = isset($_POST['author']) ? trim($_POST['author']) : '';
		$author = mysql_real_escape_string($author);
		$ip = $_SERVER['REMOTE_ADDR'];
		$post_id = isset($_POST['post_id']) ? $_POST['post_id'] : NULL;
		$post_id = is_numeric($post_id) ? $post_id : NULL;
		$content = isset($_POST['comment']) ? trim($_POST['comment']) : ''; //content(var)'n'comment(POST) are the same.
		
		if ( !empty($author) && !empty($content) ) {
			$db->execute("INSERT INTO `backend`.`comment` 
			(author, authorIP, postDate, isApproved, post_id, content)
			VALUES
			('$author','$ip',NOW(),'1','$post_id','$content')");
			$message = "<b style='color:#0d0'>Il tuo commento è stato aggiunto correttamente.</b>"; //TODO il tuo commento è in fase di approvazione dallo Staff.
		} else
			$message = "<b style='color:#e00'>Non puoi lasciare i campi vuoti!</b>";
		
	}
?>
<a id="commentform"></a>
<p><?php if (isset($message)) echo $message; ?></p>
<form class=table-form method="POST" action="<?=ROOT.'news/'.$article->URL?>#commentform">
	<p>
		<label for="author">Nome</label>
		<input id="author" name="author" type="text" maxlength=30 required>
	</p>
	<!--
	<label for="email">Indirizzo email</label>
	<input id="email" name="email" type="email" required>
	<label for="website">Sito web</label>
	<input id="website" name="website" type="url">
	-->
	<p>
		<label for="comment">Commento</label>
		<textarea id="comment" name=comment placeholder="Scrivi il tuo commento..." maxlength=600 required></textarea>
	</p>
	<input type="hidden" name="post_id" value="<?=$article->id?>">
	<button name="submit_comment">Invia</button>
</form>
<?php
}
