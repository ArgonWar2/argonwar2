<h3>Tutti gli account di GlobalLongju</h3>
<?php include_once '../function/getAccountStatus.php'; ?>

<table>
	<thead>
		<tr>
			<?php if ($user->permission_level <= 0) { ?>		
			<th>ID</th>
			<?php } ?>			
			<th>Account</th>
			<?php if ($user->permission_level <= 0) { ?>
			<th>Email</th>
			<?php } ?>
			<th>Status</th>
			<th>Registrato il</th>
			<th>Ultimo login</th>			
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT `id`,`login`,`email`,`status`,date_format(`create_time`, '%d/%m/%y %H:%m') as ctime, date_format(`last_play`, '%d/%m/%y %H:%m') as lastplay FROM `account`.`account` ORDER by ctime DESC");

if ($user->permission_level <= 0) {
	while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->id?></td>
			<td><?=$row->login?></td>
			<td><?=$row->email?></td>
			<td><?=getAccountStatus($row->status)?></td>
			<td><?=$row->ctime?></td>
			<td><?=$row->lastplay?></td>
		</tr>
<?php
	}
} else {
	while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->login?></td>
			<td><?=getAccountStatus($row->status)?></td>
			<td><?=$row->ctime?></td>
			<td><?=$row->lastplay?></td>
		</tr>
<?php
	}
}
?>
	</tbody>
</table>
