<h2>Gilde</h2>
<ol class="top10">
<?php
include_once 'function/getEmpireSmallFlag.php';
$result = $db->query("SELECT g.name, pindex.empire
FROM (((player.guild AS g
INNER JOIN player.guild_member AS gmember ON g.id = gmember.guild_id)
INNER JOIN player.player AS p ON p.id = gmember.pid)
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id)
WHERE gmember.is_general = '1' AND g.name NOT LIKE '%staff%'
ORDER BY g.win DESC
LIMIT 0 , 10");
while ($row = $db->fetchNextObject($result)) { ?>
	<li>
		<span><a class="transition" href="<?=ROOT.'profilo/gilda/'.$row->name?>"><?=$row->name?></a></span>
		<span>
		<?=getEmpireSmallFlag($row->empire)?>
		</span>	
	</li>
<?php
}
?>
</ol>
