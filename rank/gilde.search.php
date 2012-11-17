<?php
include_once '../main.config.php';
include_once '../function/getRace.php';
include_once '../function/getEmpire.php';
?>

<form id="rank_search" method=POST action=classifica>
<fieldset>
	<legend>Ricerca player</legend>
	<ul>
		<li>
			<label for="race">Filtra per razza</label>
			
			<select id="race" name="race">
				<option value="" selected>[Tutte le razze]</option>
				<?php
				include_once 'function/getRace.php';
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
				include_once 'function/getEmpire.php';
				for ($i=1; $i <= 3; $i++) {
				?>
				<option value=<?=$i?>><?=getEmpire($i)?></option>
				<?php
				}
				?>
			</select>
		</li>
		<li>
			<label for="search">Cerca</label>
			<input id="search" name="search" placeholder="Nome PG">
		</li>
	</ul>
	<button name="submit_search">Cerca</button>
</fieldset>
</form>