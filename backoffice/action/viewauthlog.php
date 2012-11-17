<h3>Log degli accessi al backoffice</h3>
<?php
include_once 'function/yesOrNo.php';
include_once 'function/oneToFirst.php';
?>
<table>
	<thead>
		<tr>
			<th>Username</th>
			<th>Loggato con successo?</th>
			<th>Tentativo</th>
			<th>Data e ora</th>
			<th>Indirizzo IP</th>
			<th>Browser e SO</th>
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT `username`,`success`,`attempt`,date_format(`authTime`,'%d/%m/%y %H:%i:%s') as authTime,`IPaddress`,`userAgent` FROM `backend`.`authlog` ORDER BY authTime ASC");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->username?></td>
			<td><?=yesOrNo($row->success)?></td>
			<td><?=oneToFirst($row->attempt)?></td>
			<td><?=$row->authTime?></td>
			<td><?=$row->IPaddress?></td>
			<td><?=$row->userAgent?></td>
		</tr>
<?php
}
?>
	</tbody>
</table>
