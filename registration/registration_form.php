<?php
$realm = isset($_GET['realm']) ? $_GET['realm'] : '';
$race  = isset($_GET['race'])  ? $_GET['race']  : '';
?>
<form id=registration method=post action="<?=ROOT?>registrazione_step3/<?=$realm?>/<?=$race?>">

	<fieldset>
	
		<legend>Riempi tutti i campi per concludere la registrazione.</legend> <!--legend-->

		<ol>

			<li class="transition">
				<label for=username title="Questo sarà il tuo account, con il quale accederai al sito e al gioco.">Account</label>
				<input id=username name=username type=text maxlength=16 placeholder="Il tuo account di gioco" required autofocus>
			</li>

			<li class="transition">
				<label for=playername title="Dai un nome al tuo primo personaggio giocante.">Nickname</label>
				<input id=playername name=playername type=text maxlength=16 placeholder="Il nome del tuo PG">
			</li>
			
			<li class="transition">
				<label for=email title="Inserisci un indirizzo email valido.">Email</label>				
				<input id=email name=email type=email placeholder="indirizzo@email.it" required>
			</li>
			
			<li class="transition">
				<label for=password title="Scegli una password robusta, per evitare il furto di account.">Password</label>
				<input id=password name=password type=password maxlength=16 placeholder="Almeno 6 caratteri, massimo 16" required>
			</li>

			<li class="transition">
				<label for=pass_two>Ripeti password</label>
				<input id=pass_two name=pass_two type=password maxlength=16 required>
			</li>
			
			<li class="transition">
				<label for=captcha><?=$captcha_question?></label>
				<input id=captcha name=captcha type=number maxlength=2 required>
			</li>
		</ol>

	</fieldset>
	
	<fieldset>
		<ul>
			<li class="grey-gradient transition">
				<label for="TOSaccepted">Ho letto e accettato le <a href="<?=ROOT?>TOS" target="_blank">condizioni di utilizzo</a></label>
				<input id="TOSaccepted" type="checkbox" name="TOSaccepted" checked>
			</li>
			<li class="grey-gradient transition">
				<label for="warnByMail">Voglio ricevere una notifica via email quando apre il server</label>
				<input id="warnByMail" type="checkbox" name="warnByMail" checked> <!-- saved as zipcode -->
			</li>
		</ul>	
	</fieldset>
	
	<fieldset>
	
		<button type=submit name=submit class="transition">Registrati!</button>
	
	</fieldset>

	<input type=hidden name=f value="<?=$firstNumber?>">
	<input type=hidden name=s value="<?=$secondNumber?>">
	<input type=hidden name=o value="<?=$operator?>">

</form>
