<?php

if (empty($SID) && empty($login_errors))
	include_once 'session/session_expired.php';

else if (!empty($login_errors))
	include_once 'home.php';
else {
	$account = $db->queryUniqueObject("SELECT *
									   FROM `account`.`account`
									   WHERE `login` = '".$_SESSION['usr']."'
									 ");
	$players = $db->query("SELECT *
						   FROM `player`.`player`
						   WHERE `account_id` = '$account->id'
						 ");
	$empire = $db->queryUniqueValue("SELECT `empire`
									 FROM `player`.`player_index`
									 WHERE `id` = '$account->id'
								   ");
	include_once 'user_area.logic.php';
	include_once 'function/getEmpireName.php';
?>
<h3>Qui puoi amministrare il tuo account.</h3>

<?php
if (isset($message))
	echo "<p class=\"messaggio\">$message</p>";
?>


<div id=reserved_area>

<form method=POST action="area-utente?<?=time()?>">
	<fieldset>
		<legend>Il tuo account</legend>
		<ul>
			<li>
				<label for=email>Indirizzo e-mail</label>	
				<span>
					<?=$account->email?>
					<?php if ( $account->status != "OK" ) { ?>
					(<a id="change">cambia</a>)
					<?php } ?>
				</span>
				<span>
					<input id="email" name="email" placeholder="Nuova email" type=email>
					<br>
					<button name="change_email">Cambia</button> o <a class="cancel">annulla</a>
				</span>
			</li>

			<li>
				<span>Stato account</span>	
				<span>
					<?php
					include_once 'function/getAccountStatus.php'; 
					echo getAccountStatus($account->status);
					?>
				</span>
			</li>

			<?php if ($account->status == "PENDING") { ?>
			<li>
				<span>Il tuo account non è stato confermato?</span>	
				<span>
					<button name="resend_email">Re-invia l'email di registrazione</button>
				</span>
			</li>
			<?php } ?>

			<li>
				<span>Data creazione</span>
				<span><?=$account->create_time?></span>
			</li>

			<li>
				<span>Ultimo login</span>
				<span><?=$account->last_play?></span>
			</li>
			
			<li>
				<span>Regno</span>
				<span><?=getEmpireName($empire)?></span>
			</li>

			<li>
				<label for=social_id>Codice cancellazione PG</label>
				<span>
					<?=$account->social_id?>
					(<a class="change">cambia</a>)
				</span>
				<span>
					<input id="social_id" name="social_id" type=number maxlength=7 placeholder="Inserisci nuovo codice">
					<br>
					<button name="change_social_id">Cambia</button> o <a class="cancel">annulla</a>
				</span>
			</li>
		</ul>
	</fieldset>
</form>

			<div id="equip_show"></div>	
<?php while ($player = $db->fetchNextObject($players)) { ?>

<?php // for debug purposes, -- print_r($player); ?>

<form enctype="multipart/form-data" method=POST action=area-utente>
	<fieldset>
		<legend><?=$player->name?></legend>
		<ul>
			<li>
				<span>Razza</span>
				<span>
					<?php
					include_once 'function/getRace.php';
					echo getRace($player->job);
					?>
				</span>
			</li>

			<li>
				<label for=avatar>Il tuo Avatar</label>	
				<span>
					<?php
					include_once 'function/startsWith.php';
					$avatar_path;
					if ( startsWith($player->avatar, "http://") )
						$avatar_path = $player->avatar;
					else
						$avatar_path = ROOT.'img/avatars/'.$player->avatar;
					?>
					<img src="<?=$avatar_path?>" alt="Avatar di <?=$player->name?>">
					(<a class="change">cambia</a>)
				</span>
				<span>
					Caricalo dal tuo PC <input id="avatar" name="avatar_upload" type=file>
					<br>
					Sceglilo da Internet <input name="avatar_download" type=url placeholder="Inserisci un URL.">
					<br>
					<small>Dimensione massima 150x150 px.<br>Peso massimo 60 kB.<br>Solo jpg, gif, png.</small>
					<br>
					<br>
					<button name="change_avatar" value="<?=$player->name?>">Cambia</button> o <a class="cancel">annulla</a>
					<!-- progress bar? -->
				</span>
			</li>

			<li>
				<label for=shout>Grido di battaglia</label>
				<span>
					<?=htmlentities($player->shout)?>
					(<a class="change">cambia</a>)
				</span>
				<span>
					<textarea id="shout" name="shout" type=text maxlength=120 placeholder="Scrivi il tuo grido di battaglia!"></textarea>
					<br>
					<small>Max. 120 caratteri</small>
					<br>
					<br>
					<button name="change_shout" value="<?=$player->name?>">Cambia</button> o <a class="cancel">annulla</a>
				</span>
			</li>

			<li>
				<span>Inventario</span>	
				<span>
					<a class="change"><i>non attivo</i>commenta: apri l'inventario di <?=$player->name?> </a>
				</span>
				<span>
				L'inventario sarà disponibile prossimamente! ;-)<br>
				(<a class="cancel">nascondi</a>)
				</span>
			</li>

			<li>
				<label for=unlock_pg>Sblocca PG</label>
				<span>
					<button name=unlock_pg value="<?=$player->name?>">Sblocca</button>
				</span>
			</li>

		</ul>
	</fieldset>
</form>

<?php } ?>


</div>

<p class="attenzione">non abusare del pulsante <b>Sblocca PG</b>. Usalo <b>solo quando necessario</b>! Inoltre, devi aspettare almeno 15 minuti dopo aver sbuggato un PG. <b>Non loggare prima</b> o rischi di dover ripetere la procedura!</p>

<?php }
