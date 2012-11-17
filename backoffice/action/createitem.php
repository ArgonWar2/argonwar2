<h3>Crea Item&trade;</h3>

<?php
if (!empty($SID) && isset($user)) {

	if(isset($_POST['owner_id'])){
		$owner_id=$_POST['owner_id'];
		$window=$_POST['window'];
		$pos=$_POST['pos'];
		$count=$_POST['count'];
		$vnum=$_POST['vnum'];
		$socket0=$_POST['socket0'];
		$socket1=$_POST['socket1'];
		$socket2=$_POST['socket2'];
		$socket3=$_POST['socket3'];
		$socket4=$_POST['socket4'];
		$socket5=$_POST['socket5'];
		$attrtype0=$_POST['attrtype0'];
		$attrtype1=$_POST['attrtype1'];
		$attrtype2=$_POST['attrtype2'];
		$attrtype3=$_POST['attrtype3'];
		$attrtype4=$_POST['attrtype4'];
		$attrtype5=$_POST['attrtype5'];
		$attrtype6=$_POST['attrtype6'];
		$attrvalue0=$_POST['attrvalue0'];
		$attrvalue1=$_POST['attrvalue1'];
		$attrvalue2=$_POST['attrvalue2'];
		$attrvalue3=$_POST['attrvalue3'];
		$attrvalue4=$_POST['attrvalue4'];
		$attrvalue5=$_POST['attrvalue5'];
		$attrvalue6=$_POST['attrvalue6'];
		$request="INSERT INTO `player`.`item` (`id`, `owner_id`, `window`, `pos`, `count`, `vnum`, `socket0`, `socket1`, `socket2`, `socket3`, `socket4`, `socket5`, `attrtype0`, `attrvalue0`, `attrtype1`, `attrvalue1`, `attrtype2`, `attrvalue2`, `attrtype3`, `attrvalue3`, `attrtype4`, `attrvalue4`, `attrtype5`, `attrvalue5`, `attrtype6`, `attrvalue6`) 
		VALUES ('NULL', '$owner_id', '$window', '$pos', '$count', '$vnum', '$socket0', '$socket1', '$socket2', 'NULL', 'NULL', 'NULL', '$attrtype0', '$attrvalue0', '$attrtype1', '$attrvalue1', '$attrtype2', '$attrvalue2', '$attrtype3', '$attrvalue3', '$attrtype4', '$attrvalue4', '$attrtype5', '$attrvalue5', '$attrtype6', '$attrvalue6');";
		if ($window == 'MALL')
			$finestra = "la finestra dell'Item Shop";
		else
			$finestra = "il magazzino";
			
		if($db->query($request))
			echo("Item creato! Controlla $finestra :)");
		else
			echo("Item non creato :(");
	} else 
		echo "<FORM action='?action=createitem' method='post' name='form01'>

<center><table border='0' width='95%' align='center'>
<tr>


<td>Id dell'account</td><td> 
<input tabindex='1' name='owner_id' class='application' size='30' /></td>
</tr>

<td>Finestra dove andrà l'item</td><td> 
<select name='window'>
<option value='MALL'>Item Shop</option>
<option value='SAFEBOX'>Magazzino</option>
</select>
</td>
</tr>

<td>Posizione</td><td> 
<input tabindex='1' name='pos' class='application' size='30' /></td>
</tr>

<tr>
<td>Quantità</td><td> 
<select name='count'>
<option value='1'>1</option>
<option value='25'>25</option>
<option value='50'>50</option>
<option value='100'>100</option>
<option value='150'>150</option>
<option value='200'>200</option>
</select>
</td>
</tr>

<tr>
<td>Value dell'item</td><td> 
<input tabindex='2' name='vnum' class='application' size='30' /></td>
</tr>

<tr>
<td>Pietra n°1</td><td> 
<select name='socket0'>
<option> </option>
<option value='28030'>Pietra della Perforazione +0</option>
<option value='28130'>Pietra della Perforazione +1</option>
<option value='28230'>Pietra della Perforazione +2</option>
<option value='28330'>Pietra della Perforazione +3</option>
<option value='28430'>Pietra della Perforazione +4</option>
<option value='28530'>Pietra della Perforazione +5</option>
<option value='28630'>Pietra della Perforazione +6</option>
<option>-----------</option>
<option value='28031'>Pietra del Colpo Mortale +0</option>
<option value='28131'>Pietra del Colpo Mortale +1</option>
<option value='28231'>Pietra del Colpo Mortale +2</option>
<option value='28331'>Pietra del Colpo Mortale +3</option>
<option value='28431'>Pietra del Colpo Mortale +4</option>
<option value='28531'>Pietra del Colpo Mortale +5</option>
<option value='28631'>Pietra del Colpo Mortale +6</option>
<option>-----------</option>
<option value='28032'>Pietra della Ripetizione +0</option>
<option value='28132'>Pietra della Ripetizione +1</option>
<option value='28232'>Pietra della Ripetizione +2</option>
<option value='28332'>Pietra della Ripetizione +3</option>
<option value='28432'>Pietra della Ripetizione +4</option>
<option value='28532'>Pietra della Ripetizione +5</option>
<option value='28632'>Pietra della Ripetizione +6</option>
<option>-----------</option>
<option value='28033'>Pietra Anti-Guerriero +0</option>
<option value='28133'>Pietra Anti-Guerriero +1</option>
<option value='28233'>Pietra Anti-Guerriero +2</option>
<option value='28333'>Pietra Anti-Guerriero +3</option>
<option value='28433'>Pietra Anti-Guerriero +4</option>
<option value='28533'>Pietra Anti-Guerriero +5</option>
<option value='28633'>Pietra Anti-Guerriero +6</option>
<option>-----------</option>
<option value='28034'>Pietra Anti-Ninja +0</option>
<option value='28134'>Pietra Anti-Ninja +1</option>
<option value='28234'>Pietra Anti-Ninja +2</option>
<option value='28334'>Pietra Anti-Ninja +3</option>
<option value='28434'>Pietra Anti-Ninja +4</option>
<option value='28534'>Pietra Anti-Ninja +5</option>
<option value='28634'>Pietra Anti-Ninja +6</option>
<option>-----------</option>
<option value='28035'>Pietra Anti-Sura +0</option>
<option value='28135'>Pietra Anti-Sura +1</option>
<option value='28235'>Pietra Anti-Sura +2</option>
<option value='28335'>Pietra Anti-Sura +3</option>
<option value='28435'>Pietra Anti-Sura +4</option>
<option value='28535'>Pietra Anti-Sura +5</option>
<option value='28635'>Pietra Anti-Sura +6</option>
<option>-----------</option>
<option value='28036'>Pietra Anti-Shamana +0</option>
<option value='28136'>Pietra Anti-Shamana +1</option>
<option value='28236'>Pietra Anti-Shamana +2</option>
<option value='28336'>Pietra Anti-Shamana +3</option>
<option value='28436'>Pietra Anti-Shamana +4</option>
<option value='28536'>Pietra Anti-Shamana +5</option>
<option value='28636'>Pietra Anti-Shamana +6</option>
<option>-----------</option>
<option value='28037'>Pietra del Mostro +0</option>
<option value='28137'>Pietra del Mostro +1</option>
<option value='28237'>Pietra del Mostro +2</option>
<option value='28337'>Pietra del Mostro +3</option>
<option value='28437'>Pietra del Mostro +4</option>
<option value='28537'>Pietra del Mostro +5</option>
<option value='28637'>Pietra del Mostro +6</option>
<option>-----------</option>
<option value='28038'>Pietra dell'Evasione +0</option>
<option value='28138'>Pietra dell'Evasione +1</option>
<option value='28238'>Pietra dell'Evasione +2</option>
<option value='28338'>Pietra dell'Evasione +3</option>
<option value='28438'>Pietra dell'Evasione +4</option>
<option value='28538'>Pietra dell'Evasione +5</option>
<option value='28638'>Pietra dell'Evasione +6</option>
<option>-----------</option>
<option value='28039'>Pietra dell'Inchino +0</option>
<option value='28139'>Pietra dell'Inchino +1</option>
<option value='28239'>Pietra dell'Inchino +2</option>
<option value='28339'>Pietra dell'Inchino +3</option>
<option value='28439'>Pietra dell'Inchino +4</option>
<option value='28539'>Pietra dell'Inchino +5</option>
<option value='28639'>Pietra dell'Inchino +6</option>
<option>-----------</option>
<option value='28040'>Pietra della Magia +0</option>
<option value='28140'>Pietra della Magia +1</option>
<option value='28240'>Pietra della Magia +2</option>
<option value='28340'>Pietra della Magia +3</option>
<option value='28440'>Pietra della Magia +4</option>
<option value='28540'>Pietra della Magia +5</option>
<option value='28640'>Pietra della Magia +6</option>
<option>-----------</option>
<option value='28041'>Pietra della Vitalità +0</option>
<option value='28141'>Pietra della Vitalità +1</option>
<option value='28241'>Pietra della Vitalità +2</option>
<option value='28341'>Pietra della Vitalità +3</option>
<option value='28441'>Pietra della Vitalità +4</option>
<option value='28541'>Pietra della Vitalità +5</option>
<option value='28641'>Pietra della Vitalità +6</option>
<option>-----------</option>
<option value='28042'>Pietra della Difesa +0</option>
<option value='28142'>Pietra della Difesa +1</option>
<option value='28242'>Pietra della Difesa +2</option>
<option value='28342'>Pietra della Difesa +3</option>
<option value='28442'>Pietra della Difesa +4</option>
<option value='28542'>Pietra della Difesa +5</option>
<option value='28642'>Pietra della Difesa +6</option>
<option>-----------</option>
<option value='28043'>Pietra della Fretta +0</option>
<option value='28143'>Pietra della Fretta +1</option>
<option value='28243'>Pietra della Fretta +2</option>
<option value='28343'>Pietra della Fretta +3</option>
<option value='28443'>Pietra della Fretta +4</option>
<option value='28543'>Pietra della Fretta +5</option>
<option value='28643'>Pietra della Fretta +6</option>
<option>-----------</option>
<option value='28000'>Pietra del Massacro +0</option>
<option value='28100'>Pietra del Massacro +1</option>
<option value='28104'>Pietra della Paranoia +1</option>
<option value='28200'>Pietra del Massacro +2</option>
<option value='28300'>Pietra del Massacro +3</option>
</select>
</td>
</tr>

<tr>
<td>Pietra n°2</td><td> 
		<select name='socket1'>
		<option> </option>
<option value='28030'>Pietra della Perforazione +0</option>
<option value='28130'>Pietra della Perforazione +1</option>
<option value='28230'>Pietra della Perforazione +2</option>
<option value='28330'>Pietra della Perforazione +3</option>
<option value='28430'>Pietra della Perforazione +4</option>
<option value='28530'>Pietra della Perforazione +5</option>
<option value='28630'>Pietra della Perforazione +6</option>
<option>-----------</option>
<option value='28031'>Pietra del Colpo Mortale +0</option>
<option value='28131'>Pietra del Colpo Mortale +1</option>
<option value='28231'>Pietra del Colpo Mortale +2</option>
<option value='28331'>Pietra del Colpo Mortale +3</option>
<option value='28431'>Pietra del Colpo Mortale +4</option>
<option value='28531'>Pietra del Colpo Mortale +5</option>
<option value='28631'>Pietra del Colpo Mortale +6</option>
<option>-----------</option>
<option value='28032'>Pietra della Ripetizione +0</option>
<option value='28132'>Pietra della Ripetizione +1</option>
<option value='28232'>Pietra della Ripetizione +2</option>
<option value='28332'>Pietra della Ripetizione +3</option>
<option value='28432'>Pietra della Ripetizione +4</option>
<option value='28532'>Pietra della Ripetizione +5</option>
<option value='28632'>Pietra della Ripetizione +6</option>
<option>-----------</option>
<option value='28033'>Pietra Anti-Guerriero +0</option>
<option value='28133'>Pietra Anti-Guerriero +1</option>
<option value='28233'>Pietra Anti-Guerriero +2</option>
<option value='28333'>Pietra Anti-Guerriero +3</option>
<option value='28433'>Pietra Anti-Guerriero +4</option>
<option value='28533'>Pietra Anti-Guerriero +5</option>
<option value='28633'>Pietra Anti-Guerriero +6</option>
<option>-----------</option>
<option value='28034'>Pietra Anti-Ninja +0</option>
<option value='28134'>Pietra Anti-Ninja +1</option>
<option value='28234'>Pietra Anti-Ninja +2</option>
<option value='28334'>Pietra Anti-Ninja +3</option>
<option value='28434'>Pietra Anti-Ninja +4</option>
<option value='28534'>Pietra Anti-Ninja +5</option>
<option value='28634'>Pietra Anti-Ninja +6</option>
<option>-----------</option>
<option value='28035'>Pietra Anti-Sura +0</option>
<option value='28135'>Pietra Anti-Sura +1</option>
<option value='28235'>Pietra Anti-Sura +2</option>
<option value='28335'>Pietra Anti-Sura +3</option>
<option value='28435'>Pietra Anti-Sura +4</option>
<option value='28535'>Pietra Anti-Sura +5</option>
<option value='28635'>Pietra Anti-Sura +6</option>
<option>-----------</option>
<option value='28036'>Pietra Anti-Shamana +0</option>
<option value='28136'>Pietra Anti-Shamana +1</option>
<option value='28236'>Pietra Anti-Shamana +2</option>
<option value='28336'>Pietra Anti-Shamana +3</option>
<option value='28436'>Pietra Anti-Shamana +4</option>
<option value='28536'>Pietra Anti-Shamana +5</option>
<option value='28636'>Pietra Anti-Shamana +6</option>
<option>-----------</option>
<option value='28037'>Pietra del Mostro +0</option>
<option value='28137'>Pietra del Mostro +1</option>
<option value='28237'>Pietra del Mostro +2</option>
<option value='28337'>Pietra del Mostro +3</option>
<option value='28437'>Pietra del Mostro +4</option>
<option value='28537'>Pietra del Mostro +5</option>
<option value='28637'>Pietra del Mostro +6</option>
<option>-----------</option>
<option value='28038'>Pietra dell'Evasione +0</option>
<option value='28138'>Pietra dell'Evasione +1</option>
<option value='28238'>Pietra dell'Evasione +2</option>
<option value='28338'>Pietra dell'Evasione +3</option>
<option value='28438'>Pietra dell'Evasione +4</option>
<option value='28538'>Pietra dell'Evasione +5</option>
<option value='28638'>Pietra dell'Evasione +6</option>
<option>-----------</option>
<option value='28039'>Pietra dell'Inchino +0</option>
<option value='28139'>Pietra dell'Inchino +1</option>
<option value='28239'>Pietra dell'Inchino +2</option>
<option value='28339'>Pietra dell'Inchino +3</option>
<option value='28439'>Pietra dell'Inchino +4</option>
<option value='28539'>Pietra dell'Inchino +5</option>
<option value='28639'>Pietra dell'Inchino +6</option>
<option>-----------</option>
<option value='28040'>Pietra della Magia +0</option>
<option value='28140'>Pietra della Magia +1</option>
<option value='28240'>Pietra della Magia +2</option>
<option value='28340'>Pietra della Magia +3</option>
<option value='28440'>Pietra della Magia +4</option>
<option value='28540'>Pietra della Magia +5</option>
<option value='28640'>Pietra della Magia +6</option>
<option>-----------</option>
<option value='28041'>Pietra della Vitalità +0</option>
<option value='28141'>Pietra della Vitalità +1</option>
<option value='28241'>Pietra della Vitalità +2</option>
<option value='28341'>Pietra della Vitalità +3</option>
<option value='28441'>Pietra della Vitalità +4</option>
<option value='28541'>Pietra della Vitalità +5</option>
<option value='28641'>Pietra della Vitalità +6</option>
<option>-----------</option>
<option value='28042'>Pietra della Difesa +0</option>
<option value='28142'>Pietra della Difesa +1</option>
<option value='28242'>Pietra della Difesa +2</option>
<option value='28342'>Pietra della Difesa +3</option>
<option value='28442'>Pietra della Difesa +4</option>
<option value='28542'>Pietra della Difesa +5</option>
<option value='28642'>Pietra della Difesa +6</option>
<option>-----------</option>
<option value='28043'>Pietra della Fretta +0</option>
<option value='28143'>Pietra della Fretta +1</option>
<option value='28243'>Pietra della Fretta +2</option>
<option value='28343'>Pietra della Fretta +3</option>
<option value='28443'>Pietra della Fretta +4</option>
<option value='28543'>Pietra della Fretta +5</option>
<option value='28643'>Pietra della Fretta +6</option>
		<option>-----------</option>
<option value='28000'>Pietra del Massacro +0</option>
<option value='28100'>Pietra del Massacro +1</option>
<option value='28104'>Pietra della Paranoia +1</option>
<option value='28200'>Pietra del Massacro +2</option>
<option value='28300'>Pietra del Massacro +3</option>
</select>
</td>
</tr>

<tr>
<td>Pietra n°3</td><td> 
		<select name='socket2'>
		<option> </option>
<option value='28030'>Pietra della Perforazione +0</option>
<option value='28130'>Pietra della Perforazione +1</option>
<option value='28230'>Pietra della Perforazione +2</option>
<option value='28330'>Pietra della Perforazione +3</option>
<option value='28430'>Pietra della Perforazione +4</option>
<option value='28530'>Pietra della Perforazione +5</option>
<option value='28630'>Pietra della Perforazione +6</option>
<option>-----------</option>
<option value='28031'>Pietra del Colpo Mortale +0</option>
<option value='28131'>Pietra del Colpo Mortale +1</option>
<option value='28231'>Pietra del Colpo Mortale +2</option>
<option value='28331'>Pietra del Colpo Mortale +3</option>
<option value='28431'>Pietra del Colpo Mortale +4</option>
<option value='28531'>Pietra del Colpo Mortale +5</option>
<option value='28631'>Pietra del Colpo Mortale +6</option>
<option>-----------</option>
<option value='28032'>Pietra della Ripetizione +0</option>
<option value='28132'>Pietra della Ripetizione +1</option>
<option value='28232'>Pietra della Ripetizione +2</option>
<option value='28332'>Pietra della Ripetizione +3</option>
<option value='28432'>Pietra della Ripetizione +4</option>
<option value='28532'>Pietra della Ripetizione +5</option>
<option value='28632'>Pietra della Ripetizione +6</option>
<option>-----------</option>
<option value='28033'>Pietra Anti-Guerriero +0</option>
<option value='28133'>Pietra Anti-Guerriero +1</option>
<option value='28233'>Pietra Anti-Guerriero +2</option>
<option value='28333'>Pietra Anti-Guerriero +3</option>
<option value='28433'>Pietra Anti-Guerriero +4</option>
<option value='28533'>Pietra Anti-Guerriero +5</option>
<option value='28633'>Pietra Anti-Guerriero +6</option>
<option>-----------</option>
<option value='28034'>Pietra Anti-Ninja +0</option>
<option value='28134'>Pietra Anti-Ninja +1</option>
<option value='28234'>Pietra Anti-Ninja +2</option>
<option value='28334'>Pietra Anti-Ninja +3</option>
<option value='28434'>Pietra Anti-Ninja +4</option>
<option value='28534'>Pietra Anti-Ninja +5</option>
<option value='28634'>Pietra Anti-Ninja +6</option>
<option>-----------</option>
<option value='28035'>Pietra Anti-Sura +0</option>
<option value='28135'>Pietra Anti-Sura +1</option>
<option value='28235'>Pietra Anti-Sura +2</option>
<option value='28335'>Pietra Anti-Sura +3</option>
<option value='28435'>Pietra Anti-Sura +4</option>
<option value='28535'>Pietra Anti-Sura +5</option>
<option value='28635'>Pietra Anti-Sura +6</option>
<option>-----------</option>
<option value='28036'>Pietra Anti-Shamana +0</option>
<option value='28136'>Pietra Anti-Shamana +1</option>
<option value='28236'>Pietra Anti-Shamana +2</option>
<option value='28336'>Pietra Anti-Shamana +3</option>
<option value='28436'>Pietra Anti-Shamana +4</option>
<option value='28536'>Pietra Anti-Shamana +5</option>
<option value='28636'>Pietra Anti-Shamana +6</option>
<option>-----------</option>
<option value='28037'>Pietra del Mostro +0</option>
<option value='28137'>Pietra del Mostro +1</option>
<option value='28237'>Pietra del Mostro +2</option>
<option value='28337'>Pietra del Mostro +3</option>
<option value='28437'>Pietra del Mostro +4</option>
<option value='28537'>Pietra del Mostro +5</option>
<option value='28637'>Pietra del Mostro +6</option>
<option>-----------</option>
<option value='28038'>Pietra dell'Evasione +0</option>
<option value='28138'>Pietra dell'Evasione +1</option>
<option value='28238'>Pietra dell'Evasione +2</option>
<option value='28338'>Pietra dell'Evasione +3</option>
<option value='28438'>Pietra dell'Evasione +4</option>
<option value='28538'>Pietra dell'Evasione +5</option>
<option value='28638'>Pietra dell'Evasione +6</option>
<option>-----------</option>
<option value='28039'>Pietra dell'Inchino +0</option>
<option value='28139'>Pietra dell'Inchino +1</option>
<option value='28239'>Pietra dell'Inchino +2</option>
<option value='28339'>Pietra dell'Inchino +3</option>
<option value='28439'>Pietra dell'Inchino +4</option>
<option value='28539'>Pietra dell'Inchino +5</option>
<option value='28639'>Pietra dell'Inchino +6</option>
<option>-----------</option>
<option value='28040'>Pietra della Magia +0</option>
<option value='28140'>Pietra della Magia +1</option>
<option value='28240'>Pietra della Magia +2</option>
<option value='28340'>Pietra della Magia +3</option>
<option value='28440'>Pietra della Magia +4</option>
<option value='28540'>Pietra della Magia +5</option>
<option value='28640'>Pietra della Magia +6</option>
<option>-----------</option>
<option value='28041'>Pietra della Vitalità +0</option>
<option value='28141'>Pietra della Vitalità +1</option>
<option value='28241'>Pietra della Vitalità +2</option>
<option value='28341'>Pietra della Vitalità +3</option>
<option value='28441'>Pietra della Vitalità +4</option>
<option value='28541'>Pietra della Vitalità +5</option>
<option value='28641'>Pietra della Vitalità +6</option>
<option>-----------</option>
<option value='28042'>Pietra della Difesa +0</option>
<option value='28142'>Pietra della Difesa +1</option>
<option value='28242'>Pietra della Difesa +2</option>
<option value='28342'>Pietra della Difesa +3</option>
<option value='28442'>Pietra della Difesa +4</option>
<option value='28542'>Pietra della Difesa +5</option>
<option value='28642'>Pietra della Difesa +6</option>
<option>-----------</option>
<option value='28043'>Pietra della Fretta +0</option>
<option value='28143'>Pietra della Fretta +1</option>
<option value='28243'>Pietra della Fretta +2</option>
<option value='28343'>Pietra della Fretta +3</option>
<option value='28443'>Pietra della Fretta +4</option>
<option value='28543'>Pietra della Fretta +5</option>
<option value='28643'>Pietra della Fretta +6</option>
		<option>-----------</option>
<option value='28000'>Pietra del Massacro +0</option>
<option value='28100'>Pietra del Massacro +1</option>
<option value='28104'>Pietra della Paranoia +1</option>
<option value='28200'>Pietra del Massacro +2</option>
<option value='28300'>Pietra del Massacro +3</option>
</select>
</td>
</tr>

<tr>
<td>Bonus n°1</td><td> 
<select name='attrtype0'>
<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select>			
</td>
</tr>

<tr>
<td>Valore del Bonus n°1</td><td> 
<input tabindex='2' name='attrvalue0' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°2</td><td> 
		<select name='attrtype1'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valore del Bonus n°2</td><td> 
<input tabindex='2' name='attrvalue1' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°3</td><td> 
		<select name='attrtype2'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valore del Bonus n°3</td><td> 
<input tabindex='2' name='attrvalue2' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°4</td><td> 
		<select name='attrtype3'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valore del Bonus n°4</td><td> 
<input tabindex='2' name='attrvalue3' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°5</td><td> 
		<select name='attrtype4'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valroe del Bonus n°5</td><td> 
<input tabindex='2' name='attrvalue4' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°6</td><td> 
		<select name='attrtype5'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possiblità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valore del Bonus n°6</td><td> 
<input tabindex='2' name='attrvalue5' class='application' size='30' /></td>
</tr>

<tr>
<td>Bonus n°7</td><td> 
		<select name='attrtype6'>
		<option> </option>
<option value='1'>Max HP</option>
<option value='2'>MAX MP</option>
<option value='3'>VIT</option>
<option value='4'>INT</option>
<option value='5'>STR</option>
<option value='6'>DEX</option>
<option value='7'>Velocità Attacco</option>
<option value='8'>Velocità di movimento</option>
<option value='9'>Velocità Magia</option>
<option value='10'>Rigenerazione HP</option>
<option value='11'>Rigenerazione MP</option>
<option value='12'>Possibilità di avvelenamento</option>
<option value='13'>Possibilità di svenimento</option>
<option value='14'>Possibilità di rallentamento</option>
<option value='15'>Possibilità su colpi critici</option>
<option value='16'>Possibilità su colpi trafiggenti</option>
<option value='17'>Forte contro Mezziuomini</option>
<option value='18'>Forte contro animali</option>
<option value='19'>Forte contro orchi</option>
<option value='20'>Forte contro esoterici</option>
<option value='21'>Forte contro zombie</option>
<option value='22'>Forte contro diavolo</option>
<option value='23'>Danni assorbiti da HP</option>
<option value='24'>Danni assorbiti da MP</option>
<option value='25'>Possibilità di prendere MP dall'avversario</option>
<option value='26'>Possibilità di mantenere MP da colpi</option>
<option value='27'>Possibilità di bloccare un attacco corporale</option>
<option value='28'>Possibilità di schivare freccie</option>
<option value='29'>Difesa Spada</option>
<option value='30'>Difesa Spadone</option>
<option value='31'>Difesa Pugnale</option>
<option value='32'>Resistenza Lampo</option>
<option value='33'>Difesa ventaglio</option>
<option value='34'>Resistenza Freccia</option>
<option value='35'>Difesa fuoco</option>
<option value='36'>Difesa lampo</option>
<option value='37'>Resistenza Magia</option>
<option value='38'>Resistenza</option>
<option value='39'>Riflettere attacco corporale</option>
<option value='40'>Riflettere maledizione</option>
<option value='41'>Resisteza all'avvelenamento</option>
<option value='42'>Possibilità di rigenerazione MP</option>
<option value='43'>Possibilità di EXP bonus</option>
<option value='44'>Possibilità di lasciar cadere yang</option>
<option value='45'>Possibilità di far cadere il doppio degli item</option>
<option value='46'>Aumenta l'effetto</option>
<option value='47'>Possibilità di rigenerazione HP</option>
<option value='48'>Immune contro svenimento</option>
<option value='49'>Immune contro rallentamento</option>
<option value='50'>Immune contro caduta</option>
<option value='52'>Raggio d'azione dell'arco</option>
<option value='53'>Valore d'attacco</option>
<option value='54'>Difesa</option>
<option value='55'>Valore d'attacco magico</option>
<option value='56'>Difesa magica</option>
<option value='58'>Max resistenza</option>
<option value='59'>Forte contro guerriero</option>
<option value='60'>Forte contro ninja</option>
<option value='61'>Forte contro sura</option>
<option value='62'>Forte contro shamana</option>
<option value='63'>Forte contro mostri</option>
<option value='64'>Valore d'attacco</option>
<option value='65'>Difesa</option>
<option value='66'>EXP</option>
<option value='67'>Possibilità di drop oggetti</option>
<option value='68'>Possibilità di drop yang</option>
<option value='71'>Danni Abilità</option>
<option value='72'>Danni Medi</option>
<option value='73'>Resistenza ai danni abilità</option>
<option value='74'>Resistenza ai danni medi</option>
<option value='76'>iCaffe exp bonus</option>
<option value='77'>iCaffe possibilità di razziare oggetti</option>
<option value='78'>Possibilità di difesa ai attacchi guerrieri</option>
<option value='79'>Possibilità di difesa ai attacchi ninja</option>
<option value='80'>Possibilità di difesa ai attacchi sura</option>
<option value='81'>Possibilità di difesa ai attacchi shamana</option>
</select></td>
</tr>

<tr>
<td>Valore del Bonus n°7</td><td> 
<input tabindex='2' name='attrvalue6' class='application' size='30' /></td>
</tr>


<tr>

</tr>

</table>
<button tabindex='6' name='submit' value='submit' class='eingabe-button' type='submit'>Invio</button></td>
</FORM>";

}
