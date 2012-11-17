<?php
	include 'registration/captcha.php';
	if (isset($_POST['submit']))
		include_once 'registration/registration.logic.php';
	else
		include_once 'registration_form.php';
