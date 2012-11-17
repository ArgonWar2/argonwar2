<?php
$valid_ranktypes = array('giocatori','gilde');
$ranktype = @in_array($_GET['ranktype'], $valid_ranktypes) ? $_GET['ranktype'] : 'giocatori';
$rows_to_show = 50;
$_page = (int) isset($_GET['page']) ? $_GET['page'] : 1; //page is NOT p
$query_start = ($_page * $rows_to_show) - $rows_to_show;
?>

<h1>Hall of Fame</h1>
<h3>Nomi che hanno fatto la storia.</h3>

<a id="show_search" class="gray-link transition" rel="<?=ROOT?>rank/<?=$ranktype?>.search.php">Ricerca avanzata</a>
<?php
if ($ranktype == 'giocatori')
	$rt = 'gilde';
else
	$rt = 'giocatori';
?>
<a class="gray-link transition" href="<?=ROOT?>classifica/<?=$rt?>">Passa alla classifica <?=$rt?></a>

<?php
//include_once "rank/$ranktype.search.php";
include_once "rank/$ranktype.logic.php";
?>

<ul id="classifica">
<?php
include_once "rank/$ranktype.head.php";
while ($row = $db->fetchNextObject($result))
	include "rank/$ranktype.body.php";
?>
</ul>

<nav id="rank">
<?php if ($_page >= 2 && !($_page > $pages)) { ?>
	<a class="transition" href="<?=ROOT.'classifica/'.$ranktype.'/'.$_page-1?>">&lt;&lt; Pos. successive</a>
<?php }
	  for ($i = 1; $i <= $pages; $i++) { ?>
	<a class="transition<?php if ($_page == $i) echo ' current_page';?>" href="<?=ROOT.'classifica/'.$ranktype.'/'.$i?>"><?=$i?></a>
<?php } 	
	  if ($_page >= 1 && !($_page >= $pages)) { ?>
	<a class="transition" href="<?=ROOT.'classifica/'.$ranktype.'/'.$_page+1?>">Pos. precedenti &gt;&gt;</a>	
<?php } ?>
</nav>

<a class="scrollTop gray-link transition" href="#header">Torna su</a>