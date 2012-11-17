<?php 

		$mysql_host 	= "localhost";
		$mysql_user 	= "root";
		$mysql_pass 	= "12345";
		$mysql_db	= "player";

		mysql_connect($mysql_host, $mysql_user, $mysql_pass) OR
		die("Error: ".mysql_error());	
		
		mysql_select_db($mysql_db) OR
		die("Error: ".mysql_error());
