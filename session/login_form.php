<form action="<?=ROOT?>area-utente?<?=time()?>" method="post">
	<label for="user">Username</label>
	<input id="user" name="user" type="text" maxlength=16>
	<label for="pass">Password</label>
	<input id="pass" name="pass" type="password" maxlength=16>
	<button type=submit name=login>Login</button>
</form>
<?php
if (!empty($login_errors)) {
	foreach($login_errors as $error) {
	?>
	<span class="login_error"><?=$error?></span>
	<?php
	}
}
