<li class="transition">
	<span><?=$pos++?></span>
	<span><a class="transition" href="<?=ROOT.'profilo/giocatore/'.$row->name?>"><?=$row->name?></a></span>
	<span><?=getRaceImage($row->job)?></span>
	<span><?=$row->level?></span>
	<span><?=getEmpireFlag($row->empire)?></span>
	<span>
		<?php
		$_level = $row->level - 1;
		$_max = $getExpByLevel[$_level]; // TODO aggiungere gli altri livelli sull'array prima di avere un notice undefined offset
		$_multiplier = 0;
		if ($_max > 0)
			$_multiplier = 100 / $_max;
		?>
		<span class="progressBar" id="exp"><?=$row->exp * $_multiplier?></span>
	</span>
</li>