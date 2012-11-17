<h3>Modera i commenti agli articoli</h3>
<?php include_once 'function/yesOrNo.php'; ?>
<table>
	<thead>
		<tr>
			<th>CID</th>
			<th>PID</th>		
			<th>Contenuto</th>
			<th>Autore</th>			
			<th>Email</th>
			<th>Sito</th>
			<th>Indirizzo IP</th>
			<th>Data</th>
			<th>Approvato?</th>
			<th>Numero di "Mi piace"</th>
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT * FROM `backend`.`comment`");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->id?></td>
			<td><?=$row->post_id?></td>
			<td><?=$row->content?></td>
			<td><?=$row->author?></td>
			<td><?=$row->authorEmail?></td>
			<td><?=$row->authorURL?></td>
			<td><?=$row->authorIP?></td>
			<td><?=$row->date?></td>
			<td><?=yesOrNo($row->isApproved)?></td>
			<td><?=$row->karma?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>
