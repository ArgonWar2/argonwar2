<h3>Tutti gli articoli</h3>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Titolo</th>
			<th>Categoria</th>
			<th>Autore</th>
			<th>Contenuto</th>
			<th>Pubblicato?</th>
			<th>Creato il</th>
			<th>Ultima modifica</th>			
		</tr>
	</thead>
	<tbody>
<?php
include_once "../function/truncateLongText.php";
include_once "function/yesOrNo.php";

$result = $db->query("SELECT 
post.id,
post.title,
category.name AS category,
user.name as author,
post.content,
post.isPublished,
post.creationDate,
post.lastEditDate
FROM (( backend.post 
INNER JOIN backend.category ON post.category_id = category.id)
INNER JOIN backend.user ON post.author_id = user.id)
GROUP BY post.id
ORDER BY creationDate");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->id?></td>
			<td><?=$row->title?></td>
			<td><?=$row->category?></td>
			<td><?=$row->author?></td>
			<td><?=truncateLongText($row->content, 30)?></td>
			<td><?=yesOrNo($isPublished)?></td>
			<td><?=$row->creationDate?></td>
			<td>
			<?php
			if ($row->lastEditDate == "00-00-0000 00:00:00")
				echo "Mai";
			else
				echo $row->lastEditDate;
			?>
			</td>
		</tr>
<?php
}
?>
	</tbody>
</table>
