<?php
header('Content-Type: application/rss+xml');
include_once 'main_config.php';
include_once 'class/DB.php';
echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>";
?>
<rss version="2.0">
	<channel>
	
	    <title>GlobalLongju Metin2 News</title>
        <link>http://metin2.globalgamesitalia.net/rss</link>
        <description>Le ultime novità di GlobalLongju Metin2, by Global Games Italia.</description>
        <language>it-it</language>
        <docs>http://www.rssboard.org/rss-specification</docs>
		<!--
		<image>
			<title>GlobalLongju</title>
			<link>http://metin2.globalgamesitalia.net</link>
			<description>Metin2 Italian Shard</description>			
			<url>http://metin2.globalgamesitalia.net/logo.png</url>
		</image>
		-->
		<lastBuildDate><?php echo date('D, j M Y H:i:s') . " GMT"; ?></lastBuildDate>
<?php
$articles = $db->query("SELECT post.title, user.name AS author, date_format(post.creationDate, '%a, %e %b %Y %H:%i:%s GMT') AS pubDate, category.name AS category, post.content, COUNT( comment.id ) AS comments, post.likes, post.hates
FROM ((( backend.post
INNER JOIN backend.user ON post.author_id = user.id)
INNER JOIN backend.category ON post.category_id = category.id)
LEFT JOIN backend.comment ON post.id = comment.post_id)
WHERE post.isPublished = '1'
GROUP BY post.id
ORDER BY post.creationDate DESC");

while ($article = $db->fetchNextObject($articles)) { ?>
		<item>
			<title><?=$article->title?></title>
			<description><![CDATA[<?=$article->content?>]]></description>
			<link>http://metin2.globalgamesitalia.net/news</link>
			<pubDate><?=$article->pubDate?></pubDate>
			<!--<guid></guid>-->
		</item>
<?php 
}
?>
	</channel>
</rss>