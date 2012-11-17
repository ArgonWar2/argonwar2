<?php
include_once "function/getEmpireFlag.php";
// $ranking_errors = array();

$rows = $db->countOfAll("player`.`guild");
$pages = (int) ceil($rows / $rows_to_show);

// $race = isset($_POST['race']) ? $_POST['race'] : ''; // it is named `job` in player.player
$empire = isset($_POST['empire']) ? $_POST['empire'] : '';
$search = isset($_POST['search']) ? trim($_POST['search']) : '';


// TODO Finire query. Manca count dei membri. Prova questa sotto
/*
 SELECT g.name, COUNT(p.name)
 FROM (player.player AS p
 INNER JOIN player.guild_member AS gmember ON p.id = gmember.pid)
 INNER JOIN player.guild AS g ON g.id = gmember.guild_id;
*/
/*
<li>
	<span>Pos.</span>
	<span>Nome</span>
	<span>Membri</span>
	<span>V</span>
	<span>P</span>
	<span>S</span>
	<span>Regno</span>
</li>
*/


$query = "SELECT g.name, g.win, g.draw, g.loss, pindex.empire
FROM (((player.guild AS g
INNER JOIN player.guild_member AS gmember ON g.id = gmember.guild_id)
INNER JOIN player.player AS p ON p.id = gmember.pid)
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id)
WHERE gmember.is_general = '1' AND g.name NOT LIKE '%staff%'
ORDER BY g.win DESC
LIMIT 0 , 10";





if (is_numeric($race) && $race >= 0 && $race <= 7)
	$query.= "AND p.job = $race ";
if (is_numeric($empire) && $empire >= 1 && $empire <= 3)
	$query.= "AND pindex.empire = $empire ";
if (!empty($search))
	$query.= "AND p.name LIKE '%".mysql_real_escape_string($search)."%' ";
$query.= "GROUP BY p.name
		 ORDER BY p.level DESC, p.exp DESC
		 LIMIT $query_start , $rows_to_show";

$result = $db->query($query);
$pos = 1 + $query_start;

if (!empty($search))
	echo '<p>Visualizzazione risultati di ricerca per <b>"'.htmlentities($search).'"</b>:</p>';
$result_rows = $db->numRows($result);
if (empty($result_rows)) {
	echo '<p>nessuna corrispondenza trovata.</p>';
	$query = "SELECT p.name, p.job, p.level, pindex.empire, p.exp
		 FROM player.player AS p 
		 INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id
		 WHERE p.name NOT IN ( SELECT gm.mName
							   FROM common.gmlist AS gm ) ";
	if (is_numeric($race) && $race >= 0 && $race <= 7)
		$query.= "AND p.job = $race ";
	if (is_numeric($empire) && $empire >= 1 && $empire <= 3)
		$query.= "AND pindex.empire = $empire ";		
	$query.= "GROUP BY p.name
			 ORDER BY p.level DESC, p.exp DESC
			 LIMIT $query_start , $rows_to_show";
	$result = $db->query($query);
	
	}
?>