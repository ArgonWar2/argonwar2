<li class="transition">
	<span><?=$pos++?></span>
	<span><a class="transition" href="<?=ROOT.'profilo/gilda/'.$row->name?>"><?=$row->name?></a></span>
	<span><?=getRaceImage($row->job)?></span>
	<span><?=$row->level?></span>	
	<span><?=$row->exp?></span>
	<span><?=getEmpireFlag($row->empire)?></span>	
</li>