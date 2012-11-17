<?php
include_once 'function/secondsToHumanReadableTerm.php';

$article_url = isset($_GET['article']) ? trim($_GET['article']) : '';

$article_query = "SELECT post.id, post.title, user.name AS author, DATE_FORMAT(creationDate,'%e/%c/%Y') AS creationDate, UNIX_TIMESTAMP(creationDAte) AS creationTime, category.name AS category, post.content, COUNT( comment.id ) AS comments, post.likes, post.hates, post.URL
	FROM ((( backend.post
	INNER JOIN backend.user ON post.author_id = user.id)
	INNER JOIN backend.category ON post.category_id = category.id)
	LEFT JOIN backend.comment ON post.id = comment.post_id)
	WHERE post.isPublished = '1'";
if (!empty($article_url))
	$article_query.= " AND post.URL = '".mysql_real_escape_string($article_url)."' ";
$article_query.= "GROUP BY post.id
	ORDER BY post.creationDate DESC";


if (!empty($article_url)) {
	/* il titolo dell'articolo è sull'url, quindi visualizza il singolo articolo con i relativi commenti */
	$article = $db->queryUniqueObject($article_query);
	if ($article){
		include_once 'article.php';
		include_once 'comments.php';
	}else
		echo '<p class="attenzione">l\'articolo non esiste.</p>';

} else {
	/* visualizza la lista completa degli articoli */
	$articles = $db->query($article_query);
	while ($article = $db->fetchNextObject($articles))
		include 'article.php';
}
