<h2>News</h2>
<?php
$articles_list = $db->query("SELECT title FROM backend.post WHERE post.isPublished = '1' ORDER BY creationDate DESC LIMIT 0 , 10");
?>

<ul id="news-list">
<?php
while ($title = $db->fetchNextObject($articles_list)) {
?>
	<li>
		<a href="<?=ROOT?>news"><?=$title->title?></a>
	</li>
<?php
}
?>
</ul>
