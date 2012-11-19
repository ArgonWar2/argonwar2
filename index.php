<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
	<title><?php
	if (is_numeric($n))
		echo $pages[$n]['title']." ";
	echo INDEX_TITLE;
	?></title>
	<?php include_once 'metatags.php'; ?>
	<link rel="shortcut icon" href="<?=ROOT?>img/favicon.ico">	
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/global.css" media="screen">
  <?php if (!empty($page)) { ?>
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/page/<?=$page?>.css" media="screen">
  <?php } ?>
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>css/jquery.qtip.css" media="screen">  
	<?php if ($countdown){ ?>
	<link rel="stylesheet" type="text/css" href="<?=ROOT?>countdown/css/style.css" media="screen">
	<?php } ?>
</head>
<body>
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
  
  <!-- JavaScript starts here, for faster page loading -->
  <script> var ROOT = '<?=ROOT?>'; </script>  
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <?php if ($page != 'classifica') { ?>
	<script src="<?=ROOT?>js/scrollup.js"></script>
  <?php } ?>
	<script src="<?=ROOT?>js/add_bookmark.jquery.js"></script>
	<script src="<?=ROOT?>js/cookie.js"></script>
  <?php if ($page == 'news') { ?>
	<script src="<?=ROOT?>js/LikeHate.js"></script>
	<script src="<?=ROOT?>js/ajax_load_comments.js"></script>
  <?php } ?>
	<!--<script src="<?=ROOT?>js/jquery.bpopup-0.5.1.min.js"></script>-->
	<script src="<?=ROOT?>js/jquery.qtip.min.js"></script>
	<script src="<?=ROOT?>js/functions.js"></script>
	<script src="<?=ROOT?>js/scrollTop.js"></script>
	<?php if ($page == "registrazione") { ?>
	<script src="<?=ROOT?>js/register_step1.js"></script>	
	<?php } ?>
	<?php if ($page == "registrazione_step2") { ?>
	<script src="<?=ROOT?>js/register_step2.js"></script>
	<?php } ?>
	<?php if ($page == "registrazione_step3") { ?>
	<script src="<?=ROOT?>js/register_step3.js"></script>
	<?php } ?>			
	<?php if ($page == 'area-utente') { ?>
	<script src="<?=ROOT?>js/user_area.js"></script>
	<?php } ?>	
	<?php if ($page == 'classifica') { ?>
	<script src="<?=ROOT?>js/rank.js"></script>
	<?php } ?>	
	<?php if ($page == 'profilo' || $page == 'classifica') { ?>
	<!-- jsProgressBarHandler prerequisites : prototype.js -->
	<script src="<?=ROOT?>progressbar/js/prototype/prototype.js"></script>
	<!-- jsProgressBarHandler core -->
	<script> // progress bar
		var defaultOptions = {};
		defaultOptions.boxImage = '<?=ROOT?>progressbar/images/bramus/custom1_box.gif';			// boxImage : image around the progress bar
		defaultOptions.barImage = '';	// Image to use in the progressbar. Can be an array of images too.
	</script>
	<script src="<?=ROOT?>progressbar/js/bramus/jsProgressBarHandler.js"></script>
	<?php } ?>
  <?php if (empty($page) && $countdown) { ?>
	<script src="<?=ROOT?>countdown/js/jquery.lwtCountdown-1.0.js"></script>
	<script language="javascript" type="text/javascript">
		jQuery(document).ready(function() {
			$('#countdown_dashboard').countDown({
				targetDate: {
					'day': 		<?=$time->day?>,
					'month': 	<?=$time->month?>,
					'year': 	<?=$time->year?>,
					'hour': 	<?=$time->hour?>,
					'min': 		<?=$time->minute?>,
					'sec': 		<?=$time->second?>
				}
			});
		});
	</script>	
  <?php } ?>
  <?php include_once 'analyticstracking.php'; // google analytics ?>
</body>
</html>
