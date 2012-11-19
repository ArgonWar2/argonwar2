<?php
include_once '../config.php'; // configuration file
include_once 'boot.php'; // backoffice's bootstrap
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<title><?=INDEX_TITLE?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
<?php include_once 'tinymce.init.html'; ?>
</head>
<body>
	<div id="wrapper">
		<div id="container">
			<h1>GlobalLongju <span class="topsecret">[TOP SECRET]</span> Back-End Interface</h1>
			<?php
			include 'session/login.php';
			if (!empty($SID) && isset($user)){
				if (!empty($action) && getPermissionByAction($actions, $action) >= $user->permission_level) {
					include_once "action/$action.php";
					echo "<br><br>";
					include_once 'historyback.html';
				} else
					include_once "actions.php";
			}
			?>
		</div>
	</div>
</body>
</html>
