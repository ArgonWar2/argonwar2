<h3>Log dei bug</h3>
<?php include_once 'function/yesOrNo.php'; ?>
<table>
	<thead>
		<tr>
			<th>Data segnalazione</th>
			<th>Descrizione del bug</th>
			<th>Segnalato da</th>
			<th>Processato?</th>			
		</tr>
	</thead>
	<tbody>
<?php
$result = $db->query("SELECT date_format(`bugReportDate`,'%d/%m/%Y alle %H:%i') as reportDate,`bugReportContent`,`isProcessed`,`playerName` FROM `backend`.`buglog` ORDER BY reportDate ASC, isProcessed ASC");
while ($row = $db->fetchNextObject($result)) { ?>
		<tr>
			<td><?=$row->reportDate?></td>
			<td><?=$row->bugReportContent?></td>
			<td><?=$row->playerName?></td>			
			<td><?=yesOrNo($row->isProcessed)?></td>
		</tr>
<?php
}
?>
	</tbody>
</table
