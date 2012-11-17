<?php
if (empty($SID)) {
?>
<h2>Login</h2>
<?php
	include 'session/login_form.php';
	
} else {
?>
<h2>Account</h2>
Loggato come <b><?=$_SESSION['usr']?></b> (<a href="<?=ROOT?>session/logout.php">logout</a>)
<?php
	if ($page != 'area-utente') { ?>
	<a class="reserved_area_link" href="<?=ROOT?>area-utente?<?=time()?>">Accedi all'area riservata</a>
<?php
	}
}
