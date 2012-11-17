<?php
include_once '../main.config.php';
include_once '../function/getRace.php';
include_once '../function/getEmpire.php';
?>
<form id="rank_search" method=POST action=classifica>
	<ul>
		<li>
			<label for="race">Filtra per razza</label>
			
			<select id="race" name="race">
				<option value="" selected>[Tutte le razze]</option>
				<?php
				for ($i=0; $i <= 7; $i++) {
				?>
				<option value=<?=$i?>><?=getRace($i)?></option>
				<?php
				}
				?>
			</select>
		</li>
		<li>
			<label for="empire">Filtra per regno</label>
			<select id="empire" name="empire">
				<option value="" selected>[Tutti i regni]</option>
				<?php
				for ($i=1; $i <= 3; $i++) {
				?>
				<option value=<?=$i?>><?=getEmpire($i)?></option>
				<?php
				}
				?>
			</select>
		</li>
		<li>
			<label for="level">Filtra per livello</label>
			<select id="level" name="level">
				<option value="" selected>[Tutti i livelli]</option>				
				<?php
				$highest_level = $db->queryUniqueValue("SELECT MAX(player.level) FROM player.player");
				for ($i=1; $i <= $highest_level; $i++) { 
				?>
				<option value=<?=$i?>><?=$i?></option>
				<?php
				}
				?>
			</select>
		</li>
		<li>
			<label for="search">Cerca</label>
			<input id="search" name="search" placeholder="Nome">
		</li>
	</ul>
	<button name="submit_search">Cerca</button>
</form>