<h3>Membri dello Staff</h3>
<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Grado</th>
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT `name`, `permission_name`
FROM `backend`.`user`");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->name?></td>
			<td><?=$row->permission_name?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>

<h3>Permessi</h3>
<table>
	<thead>
		<tr>
			<th>Grado</th>
			<th>Livello</th>
			<th>Sigla</th>
			<th>Descrizione</th>
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT * FROM `backend`.`permission`");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->name?></td>
			<td><?=$row->level?></td>
			<td>[<?=$row->abbreviation?>]</td>
			<td><?=$row->description?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>
