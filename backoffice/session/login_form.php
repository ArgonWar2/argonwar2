<form name="login" action="index.php" method="POST">
	<fieldset>
		<legend>Effettua il login</legend>
		<p>
			<label for="un">Username:</label>
			<input id="un" type="text" name="un" required>
		</p>
		<p>
			<label for="pw">Password:</label>
			<input id="pw" type="password" name="pw" required>
		</p>				
		<button type=submit name=login>Log In</button>
	</fieldset>
</form>
<?php
if (!empty($login_errors)) {
	foreach($login_errors as $error) {
	?>
		<span class="login_error"><?=$error?></span>
	<?php
	}
}
