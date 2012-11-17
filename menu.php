<?php
$menu = array(
	''							=> 'Home',
	'news'					=> 'News',
	'registrazione' => 'Registrati',
	'item-shop'			=> 'Item&nbsp;Shop',
	'download'			=> 'Download',
	'classifica'		=> 'Classifica',
	'aiuto'					=> 'Assistenza'
);
?>
<ul id="menu">
<?php

foreach ($menu as $m) {
?>
	<li>
		<a <?php if ($page == array_search($m,$menu)) 
		            echo 'class="current_page"';
		   ?> href=<?=ROOT.array_search($m,$menu)?>><?=$m?></a>
	</li>
<?php
}
