<?php

$player = $db->queryUniqueObject("SELECT `id`,`account_id`,`name`,`job`,`playtime`,`level`,`st`,`ht`,`dx`,`iq`,`gold`,`alignment`,DATE_FORMAT(`last_play`,'il %d/%m/%y alle ore %H:%i') AS `last_play`,`avatar`,`shout` 		    FROM `player`.`player`
								  WHERE `name` = '".mysql_real_escape_string($profilename)."'
								");


/*$account = $db->queryUniqueObject("SELECT `id`,DATE_FORMAT(`create_time`,'%d/%m/%Y') AS `create_time`,`isOnline`,`empire`,`cash`
								   FROM `account`.`account`
								   WHERE `id` = '$player->account_id'
								 ");
/*$empire = $db->queryUniqueValue("SELECT `empire`
								 FROM `player`.`player_index`
								 WHERE `id` = '$account->id'
							   ");
$guild_member = $db->queryUniqueObject("SELECT `guild_id`, `is_general`
									   FROM `player`.`guild_member`
									   WHERE `pid` = '$player->id'
									 ");
*/
$guild = $db->queryUniqueObject("SELECT *
FROM `player`.`guild`
WHERE `name` = '".$_GET['profilename']."'
");
if(!guild)
	die('<p class="attenzione">la gilda non esiste.</p>');

	echo "<pre>";
	print_r($guild);
	echo "</pre>";

?>
<h1><?=$guild->name?></h1>

<div id="player_profile"> <!-- todo sostituire con div guild_profile -->

	<div>
		<?php
		
		include_once 'function/startsWith.php';
		/*
		if (startsWith($player->avatar, "http://"))
			$avatar_path = $player->avatar;
		else
			$avatar_path = ROOT.'img/avatars/'.$player->avatar;
		*/
		?>
		<!--<div style="background-image:url('<?=$avatar_path?>')">-->
		</div>
		<div>
			<span><?=$guild->name?></span>
			<!--<span><?=htmlentities($player->shout)?></span>-->
			<span>Intro (non ancora implementata)</span>
		</div>
	</div>
	
	<div class="grey-gradient">
		<ul>
			<li>
				<span >Vittorie</span>
				<span>
					<?=$guild->win?>
				</span>
			</li>
			<li>
				<span>Pareggi</span>
				<span>
					<?=$guild->draw?>
				</span> 
			</li>
			<li>
				<span>Sconfitte</span>
				<span>
					<?=$guild->loss?>
				</span>
			</li>
			<li>
				<span>Regno</span>
				<span>
					<?php
					include_once 'function/getEmpireName.php';
					echo "-";
					?>
				</span>
			</li>
			<li>
				<span>Exp</span>
				<span>
					<?=number_format($guild->exp 0, '', '.')?>
				</span>
			</li>
			<li>
				<span>Livello</span>
				<span>
					<b><?=$guild->level?></b>
				</span>
			</li>

			<li>
				<span>Capo</span>
				<span>
				-
				</span>
			</li>
			<li>
				<span>Membri</span>
				<span>
				<ol><!-- order by level desc -->
					<li>Uno</li>
					<li>Douerkljads</li>
					<li>TreEASdklj35</li>		
				</ol>				
				</span>
			</li>
		</ul>			
	</div>
</div>

<a onclick="history.back()"><< Torna indietro</a>
