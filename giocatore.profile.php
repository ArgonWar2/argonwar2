<?php

$player = $db->queryUniqueObject("SELECT `id`,`account_id`,`name`,`job`,`playtime`,`level`,`st`,`ht`,`dx`,`iq`,`gold`,`exp`,`alignment`,DATE_FORMAT(`last_play`,'il %d/%m/%y alle ore %H:%i') AS `last_play`,`avatar`,`shout` 		    FROM `player`.`player`
								  WHERE `name` = '".mysql_real_escape_string($profilename)."'
								");
if (!$player)
	die ('<p class="attenzione">il giocatore non esiste.</p>');

$account = $db->queryUniqueObject("SELECT `id`,DATE_FORMAT(`create_time`,'%d/%m/%Y') AS `create_time`,`isOnline`,`empire`,`cash`
								   FROM `account`.`account`
								   WHERE `id` = '$player->account_id'
								 ");
/*$empire = $db->queryUniqueValue("SELECT `empire`
								 FROM `player`.`player_index`
								 WHERE `id` = '$account->id'
							   ");*/
$guild_member = $db->queryUniqueObject("SELECT `guild_id`, `is_general`
									   FROM `player`.`guild_member`
									   WHERE `pid` = '$player->id'
									 ");
$guild = $db->queryUniqueValue("SELECT `name`
								FROM `player`.`guild`
								WHERE `id` = '$guild_member->guild_id'
							  ");
?>
<h2><?=$player->name?></h2>

<div id="player_profile">

	<div>
		<?php
		include_once 'function/startsWith.php';
		if (startsWith($player->avatar, "http://"))
			$avatar_path = $player->avatar;
		else
			$avatar_path = ROOT.'img/avatars/'.$player->avatar;
		?>
		<div style="background-image:url('<?=$avatar_path?>')">
		</div>
		<div>
			<span><?=$player->name?></span>
			<span><?=htmlentities($player->shout)?></span>
		</div>
	</div>
	
	<div class="grey-gradient">
		<ul>
			<li>
				<span >Razza</span>
				<span>
					<?php
						include_once 'function/getRace.php';
						echo getRace($player->job);
					?>
				</span>
			</li>
			<?php
			$moltiplicatore = 0.8; // è il risultato di 100 / 125, per ottenere 125% come se fosse base 100%
			//$min = 0;
			//$max = 125;
			//$low = 25;
			//$high = 100;
			?>
			<li>
				<span>Vitalità</span>
				<span>
					<span class="progressBar" id="ht"><?=$player->ht * $moltiplicatore?></span>
				</span> 
			</li>
			<li>
				<span>Intelligenza</span>
				<span>
					<span class="progressBar" id="iq"><?=$player->iq * $moltiplicatore?></span>
				</span>
			</li>
			<li>
				<span>Forza</span>
				<span>
					<span class="progressBar" id="st"><?=$player->st * $moltiplicatore?></span>
				</span>
			</li>
			<li>
				<span>Destrezza</span>
				<span>
					<span class="progressBar" id="dx"><?=$player->dx * $moltiplicatore?></span>
				</span>
			</li>
			<li>
				<span>Livello</span>
				<span>
					<b><?=$player->level?></b>
				</span>
			</li>
			<li>
				<span>EXP</span>
				<span>
					<?=number_format($player->exp, 0, '', '.')?>
				</span>
			</li>			
			<li>
				<span>Regno</span>
				<span>
					<?php
					include_once 'function/getEmpireName.php';
					echo getEmpireName($account->empire);
					?>
				</span>
			</li>
			<li>
				<span>Gilda</span>
				<span>
					<?php
					if (empty($guild))
						echo "Nessuna";
					else {
						echo $guild;
						if ($guild_member->is_general)
							echo " (capo)";
					}
					?>
				</span>
			</li>
			<li>
				<span>Karma</span>
				<span>
					<?php
					include_once 'function/getAlignment.php';
					echo getAlignment($player->alignment);
					?>
				</span>
			</li>
			<li>
				<span>Yang</span>
				<span class="yang">
					<?=number_format($player->gold, 0, '', '.')?>
				</span>
			</li>			
			<li>
				<span>Gioca dal</span>
				<span>
					<?=$account->create_time?>
				</span>
			</li>
		<!-- duelli vinti e persi? -->
			<li>
				<span>Tempo trascorso in game</span>
				<span>
					<?php
					include_once 'function/secondsToHumanReadable.php';
					echo secondsToHumanReadable($player->playtime*60);
					?>
				</span>
			</li>
			<li>
				<span>Ultimo login</span>
				<span>
					<?php
					if (startsWith($player->last_play, "il 00"))
						echo "Mai";
					else
						echo $player->last_play;
					?>
				</span>
			</li>
			<li>
				<span>È online?</span>
				<span>
					<?php if ($account->isOnline): ?>
					<img src="<?=ROOT?>img/stats/green.png" alt="È online!">
					<?php else: ?>
					<img src="<?=ROOT?>img/stats/red.png" alt="Non è online">
					<?php endif; ?>
				</span>
			</li>			
		</ul>			
	</div>
</div>

<a onclick="history.back()"><< Torna indietro</a>
