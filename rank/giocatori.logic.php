<?php
include_once "function/getEmpireFlag.php";
include_once "function/getRaceImage.php";
include_once "function/getExpByLevel.array.php";
// $ranking_errors = array();

$rows = $db->countOfAll("player`.`player");
$pages = (int) ceil($rows / $rows_to_show);

$race = isset($_POST['race']) ? $_POST['race'] : ''; // it is named `job` in player.player
$empire = isset($_POST['empire']) ? $_POST['empire'] : '';
$level = isset($_POST['level']) ? $_POST['level'] : '';
$search = isset($_POST['search']) ? trim($_POST['search']) : '';

$query = "SELECT p.name, p.job, p.level, pindex.empire, p.exp
FROM (player.player AS p
INNER JOIN player.player_index AS pindex ON p.account_id = pindex.id
) INNER JOIN account.account AS a ON p.account_id = a.id
WHERE a.status = 'OK' AND
p.name NOT IN (
SELECT gm.mName
FROM common.gmlist AS gm
) ";
if (is_numeric($race) && $race >= 0 && $race <= 7)
	$query.= "AND p.job = $race ";
if (is_numeric($empire) && $empire >= 1 && $empire <= 3)
	$query.= "AND pindex.empire = $empire ";
if (is_numeric($level) && $level > 0)
	$query.= "AND p.level = $level ";
if (!empty($search))
	$query.= "AND p.name LIKE '%".mysql_real_escape_string($search)."%' ";
$query.= "GROUP BY p.name
		 ORDER BY p.level DESC, p.exp DESC
		 LIMIT $query_start , $rows_to_show";

$result = $db->query($query);
$pos = 1 + $query_start;

if (!empty($search)) {
	echo '<p>Visualizzazione risultati di ricerca per <b>"'.htmlentities($search).'"</b>: ';
	$result_rows = $db->numRows($result);
	if (empty($result_rows)) {
		echo 'nessuna corrispondenza trovata.</p>';
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
		
	} else {
		include_once 'function/singularOrPlural.php';
		echo "trovat".singularOrPlural('a',$result_rows)." $result_rows corrispondenz".singularOrPlural('a',$result_rows)."</p>";
	}
}
	
?>