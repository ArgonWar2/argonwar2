<h2>Top 10</h2>
<ol class="top10">
<?php
include_once 'function/getEmpireSmallFlag.php';
$query = "SELECT p.name, p.job, p.level, pindex.empire, p.exp
FROM (player.player AS p
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id
) INNER JOIN account.account AS a ON p.account_id = a.id
WHERE a.status = 'OK' AND
p.name NOT IN (
SELECT gm.mName
FROM common.gmlist AS gm
)
ORDER BY p.level DESC, p.exp DESC
LIMIT 0 , 10";
$result = $db->query($query);
while ($row = $db->fetchNextObject($result)) {
?>
	<li>
		<span><a class="transition" href="<?=ROOT.'profilo/giocatore/'.$row->name?>"><?=$row->name?></a></span>
		<span>
		<?=getEmpireSmallFlag($row->empire)?>
		</span>	
	</li>	
<?php
}
?>
</ol>
