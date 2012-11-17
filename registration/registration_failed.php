<h2>Ci sono degli errori...</h2>
<p>Durante il processo si sono verificati i seguenti errori:</p>
<ul class="errorlist">
<?php foreach ($errors as $error): ?>
	<li><?php print $error; ?></li>
<?php endforeach; ?>
</ul>