<?php
if (empty($SID)) {
?>
<h2>Login</h2>
<?php
	include 'session/login_form.php';
} else if ($_SERVER['REMOTE_ADDR'] != $db->queryUniqueValue("SELECT `IPaddress` FROM `backend`.`user` WHERE `name` = '".$_SESSION['usr']."'")) {
?>
<h2>La tua sessione non è più valida. Per favore riloggati.</h2>
<?php
	include 'session/login_form.php';
	die("<br>Potrebbe essere necessario chiudere e riaprire il browser.");
} else {
?>

<h2>Account</h2>
Loggato come <b><?=$_SESSION['usr']?></b> <small>{<a style="color:gray" href="<?=B_ROOT?>session/logout.php">logout</a>}</small>
<?php
}
?>