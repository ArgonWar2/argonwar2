<?php $random_quote = rand(0, count($hacker_quotes)-1); ?>
<h2 class="quote">"<?=$hacker_quotes[$random_quote]['quote']?>"</h2>
<h3 class="quote">- <?=$hacker_quotes[$random_quote]['author']?></h3>

<ol>
<?php foreach($actions as $a){
	if ($a['permission'] >= $user->permission_level) {?>
	<li>
		<a href="?action=<?=$a['action']?>"><?=$a['label']?></a>
	</li>
<?php }} ?>
</ol>
