<?php include_once 'main.config.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
	<title>
	<?php
	if (is_numeric($n))
		echo $pages[$n]['title']." ";
	echo INDEX_TITLE;
	?>
	</title>
	<?php include_once 'metatags.php'; ?>
	<link rel="shortcut icon" href="<?=ROOT?>img/favicon.ico">	
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/global.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/page/<?=$page?>.css" media="screen">
	<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/main.config.js"></script>	
	<script type="text/javascript" src="<?=ROOT?>js/scrollup.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/add_bookmark.jquery.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/cookie.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/LikeHate.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/ajax_load_comments.js"></script>	
	<!--<script type="text/javascript" src="<?=ROOT?>js/jquery.bpopup-0.5.1.min.js"></script>-->
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/jquery.qtip.css" media="screen">
	<script type="text/javascript" src="<?=ROOT?>js/jquery.qtip.min.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/functions.js"></script>
	<script type="text/javascript" src="<?=ROOT?>js/scrollTop.js"></script>
	<?php if ($page == "registrazione") { ?>
	<script type="text/javascript" src="<?=ROOT?>js/register_step1.js"></script>	
	<?php } ?>
	<?php if ($page == "registrazione_step2") { ?>
	<script type="text/javascript" src="<?=ROOT?>js/register_step2.js"></script>
	<?php } ?>
	<?php if ($page == "registrazione_step3") { ?>
	<script type="text/javascript" src="<?=ROOT?>js/register_step3.js"></script>
	<?php } ?>			
	<?php if ($page == 'area-utente') { ?>
	<script type="text/javascript" src="js/user_area.js"></script>
	<?php } ?>	
	<?php if ($page == 'classifica') { ?>
	<script type="text/javascript" src="<?=ROOT?>js/rank.js"></script>
	<?php } ?>	
	<?php if ($page == 'profilo' || $page == 'classifica') { ?>
	<!-- jsProgressBarHandler prerequisites : prototype.js -->
	<script type="text/javascript" src="<?=ROOT?>progressbar/js/prototype/prototype.js"></script>
	<!-- jsProgressBarHandler core -->
	<script type="text/javascript" src="<?=ROOT?>progressbar/js/bramus/jsProgressBarHandler.js"></script>
	<?php } ?>
	<?php if ($countdown){ ?>
	<script type="text/javascript" src="<?=ROOT?>countdown/js/jquery.lwtCountdown-1.0.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>countdown/css/style.css" media="screen">
	<?php } ?>
</head>
<body><?php include_once 'analyticstracking.php'; ?>
	<div id="header">
		<?php include_once 'scrollup.php'; ?>
	</div>
	<div id="navbar">
		<?php include_once 'menu.php'; ?>
	</div>
	<div id="columns">
		<div id="c1">
			<div id="left">
				<?php
				include_once 'session/login.php';
				include_once 'top10players.php';
				include_once 'stats.php';			
				?>
			</div>
		</div>
		<div id="c2">
			<div id="center">
				<?php
				if (is_numeric($n)) {
					echo "<h1>".$pages[$n]['title']."</h1>";
					if (!empty($pages[$n]['subtitle']))
						echo "<h3>".$pages[$n]['subtitle']."</h3>";
					include_once $pages[$n]['filename'];
				} else {
					echo "<h1>GlobalLongju</h1>";
					include_once 'home.php';
				}
				?>
			</div>
		</div>
		<div id="c3">
			<div id="right">
				<?php
				include_once 'top10guilds.php';
				include_once 'trailer.php';
				include_once 'news_small_list.php';
				include_once 'social.php';
				?>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php include_once 'footer.php'; ?>
	</div>
</body>
</html>
