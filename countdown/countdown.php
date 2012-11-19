<?php require_once "countdown/config.php";

if ( $date['secs'][2]	<= 0 &&
	 $date['mins'][2]	<= 0 &&
	 $date['hours'][2]	<= 0 &&
	 $date['days'][2]	<= 0 &&
	 $date['weeks'][2]	<= 0
   ){
?>

	<h2 class="subtitle">- Il conto alla rovescia è terminato! -</h2>

<?php

	} else {
	
?>

<div id="container">

	<h1 class="countdown_title">GRANDE<br>APERTURA</h1>
	<h2 class="subtitle">- 21 Dicembre 2012 -</h2>
	
	<!-- Countdown dashboard start -->
	<div id="countdown_dashboard">
		<div class="dash weeks_dash">
			<span class="dash_title">weeks</span>
			<div class="digit"><?=$date['weeks'][0]?></div>
			<div class="digit"><?=$date['weeks'][1]?></div>
		</div>

		<div class="dash days_dash">
			<span class="dash_title">days</span>
			<div class="digit"><?=$date['days'][0]?></div>
			<div class="digit"><?=$date['days'][1]?></div>
		</div>

		<div class="dash hours_dash">
			<span class="dash_title">hours</span>
			<div class="digit"><?=$date['hours'][0]?></div>
			<div class="digit"><?=$date['hours'][1]?></div>
		</div>

		<div class="dash minutes_dash">
			<span class="dash_title">minutes</span>
			<div class="digit"><?=$date['mins'][0]?></div>
			<div class="digit"><?=$date['mins'][1]?></div>
		</div>

		<div class="dash seconds_dash">
			<span class="dash_title">seconds</span>
			<div class="digit"><?=$date['secs'][0]?></div>
			<div class="digit"><?=$date['secs'][1]?></div>
		</div>

	</div>
	<!-- Countdown dashboard end -->


	<div class="dev_comment">
		<h3>GlobalLongju è tornato.</h3><a href="registrazione"> Iscriviti subito</a> e partecipa anche tu<br>al grande evento di apertura.
	</div>

</div>

<?php } ?>