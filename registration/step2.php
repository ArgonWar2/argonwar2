<style type="text/css">
<!--
.empirebox-1,
.empirebox-2,
.empirebox-3,
.empirebox-4 {
	display:none;
}
.empirebox {
	text-align: justify; 
	width:481px;
	font-size: 14px;
}
-->
</style>

<?php $regno = isset($_GET['realm']) ? $_GET['realm'] : '';

//for debug purposes: echo "REGNO: "; var_dump($regno);
/* Appunti: race dopo sarà job
	>>RACES
	RACE_WARRIOR_M = 0
	RACE_ASSASSIN_W = 1
	RACE_SURA_M  = 2
	RACE_SHAMAN_W = 3
	RACE_WARRIOR_W = 4
	RACE_ASSASSIN_M = 5
	RACE_SURA_W  = 6
	RACE_SHAMAN_M = 7

	>>EMPIRES
	EMPIRE_SHINSOO = 1
	EMPIRE_CHUNJO = 2
	EMPIRE_JINNO = 3
//*/
?>

<div class="empires-content">
	<div class="empires-map">
		<div id="empire-img" class="empire-1"></div>

		<img src="<?=ROOT?>img/races/war_off.png" name="boton1" onmouseover="showEmpire(1);entra('boton1');"  onmouseout="sale1('boton1')">
		<img src="<?=ROOT?>img/races/ninja_off.png" name="boton2"  onmouseover="showEmpire(2);entra2('boton2');"  onmouseout="sale2('boton2')">
		<img src="<?=ROOT?>img/races/sura_off.png" name="boton3"  onmouseover="showEmpire(3);entra3('boton3');" onmouseout="sale3('boton3')">
		<img src="<?=ROOT?>img/races/shaman_off.png" name="boton4"  onmouseover="showEmpire(4);entra4('boton4');" onmouseout="sale4('boton4')">
	</div>

	<div class="empirebox empirebox-1">
		<div class="empire-crest"></div>

		<h2>Guerriero</h2>
		<p>Grazie alle loro abilità, armi e pesanti armature, i Guerrieri hanno un ruolo determinante nella <strong>lotta corpo a corpo</strong>. Il loro obiettivo è acquisire una <strong>forza corporale d'acciaio</strong> ed un'equilibrata calma interiore.<br><br>
		A seconda della specializzazione scelta possono provocare danni massicci con le armi a due mani o difendersi abilmente da più nemici con spada e scudo.</p>

		<img src="<?=ROOT?>img/races/guerrero.png" name="boton5" alt="Scegli il Guerriero" usemap="#guerrero">
		<map name="guerrero" id="guerrero">
			<area shape="poly" onmouseover="entra5('boton5');" coords="105,427,120,394,112,381,105,364,116,336,126,321,139,308,158,315,169,298,165,277,155,262,146,242,138,231,154,224,173,240,197,244,219,247,234,241,246,214,221,208,205,194,188,186,175,173,162,167,255,208,242,166,209,146,171,111,152,96,127,72,107,67,96,67,79,57,56,58,56,73,54,102,47,111,41,138,56,159,57,187,63,206,63,224,57,240,44,256,31,272,27,285,14,308,38,329,47,350,55,368,68,390,68,406,76,425,86,433" href="<?=ROOT?>registrazione_step3/<?=$regno?>/0" />
			<area shape="poly" onmouseover="entra6('boton5');" coords="226,50,233,83,240,107,247,131,257,154,275,183,299,216,310,238,316,262,317,295,322,328,318,369,325,405,316,429,328,434,343,435,354,430,365,430,379,434,397,434,420,436,431,435,435,417,431,397,420,376,413,343,413,322,414,298,427,270,420,247,413,224,406,193,402,163,394,152,386,134,384,124,369,112,352,107,341,119,341,133,328,143,313,141,304,134,293,114,290,98,279,86,259,68,249,51,228,36" href="<?=ROOT?>registrazione_step3/<?=$regno?>/4" />
		</map>
	</div>

	<div class="empirebox empirebox-2">
		<div class="empire-crest"></div>
		<h2>Ninja</h2>
		<p>I Ninja sono dei <strong>killer professionisti</strong> in grado di effettuare delle <strong>imboscate</strong> ed attaccare silenziosamente. Per agevolare la loro agilità e velocità questi assassini delle tenebre indossano armature leggere. I loro movimenti rimangono così sinuosi.<br>
		<br>
		A seconda della loro specializzazione riescono ad usare eccellentemente i pugnali oppure sono abilissimi arcieri nella lotta a distanza.</p>
		<img src="<?=ROOT?>img/races/ninja.png" alt="Scegli il Ninja" name="boton6" usemap="#ninja">
		<map name="ninja" id="ninja">
			<area shape="poly" onmouseover="entra7('boton6');" coords="123,322,139,352,157,374,182,399,195,427,206,442,233,446,243,433,240,414,228,375,214,353,200,319,191,281,201,271,197,247,188,230,184,212,193,203,202,176,202,143,191,118,178,104,159,100,151,98,149,82,143,63,130,59,112,58,106,62,100,76,100,101,101,114,83,122,88,141,82,148,82,164,75,184,63,184,51,169,40,152,34,159,25,169,36,190,32,196,35,209,38,223,37,238,41,252,49,268,41,288,38,313,41,329,50,345,58,364,58,379,48,395,50,406,67,413,82,408,94,400,95,391,99,375,100,358,98,344,104,320,108,310,116,309" href="<?=ROOT?>registrazione_step3/<?=$regno?>/5" />
			<area shape="poly" onmouseover="entra8('boton6');" coords="332,100,332,113,316,118,309,127,298,136,291,147,290,161,292,172,277,181,266,195,248,207,232,220,219,228,223,237,234,237,249,226,266,218,284,209,291,210,296,212,294,229,298,244,299,266,302,291,303,308,311,336,322,354,328,373,324,393,317,418,307,437,322,443,338,437,355,432,367,425,374,410,382,395,379,385,373,367,369,353,369,338,369,322,380,314,387,301,386,278,385,259,386,248,389,229,389,220,387,199,383,186,382,173,386,161,390,143,393,125,406,136,412,121,414,112,428,105,432,92,416,88,404,81,401,70,395,60,383,58,365,58,347,58,333,58,320,64,309,67,304,77,300,89,301,101,311,105" href="<?=ROOT?>registrazione_step3/<?=$regno?>/1" />
		</map>
	</div>
	
	<div class="empirebox empirebox-3">
		<div class="empire-crest"></div>
		<h2>Sura</h2>
		<p>I Sura sono <strong>lottatori</strong> che sono entrati in possesso di <strong>forze magiche</strong> facendo un patto con il Diavolo e dichiarandosi disposti di farsi impiantare il <strong>Germe del Diavolo</strong> nel loro braccio. Grazie a ciò sono capaci di primeggiare con la spada nella <strong>lotta corpo a corpo</strong> oppure di ferire i propri nemici con le magie.<br>
		<br>
		Attraverso la specializzazione migliorano le magie d'attacco oppure acquisiscono degli incantesimi che li rendono più potenti.</p>
		<img src="<?=ROOT?>img/races/sura.png" alt="Scegli il Sura" name="boton7" usemap="#sura">
		<map name="sura" id="sura">
			<area shape="poly" onmouseover="entra9('boton7');" coords="156,87,182,76,202,72,227,66,244,69,261,70,272,75,269,89,259,98,241,105,225,106,207,113,190,116,196,123,204,134,210,153,219,178,224,205,225,234,230,251,245,276,250,294,244,308,221,312,200,316,182,319,184,338,184,368,187,394,193,417,184,429,165,428,156,428,153,407,153,383,146,375,141,356,135,343,128,340,122,349,119,355,107,377,111,388,113,405,98,414,83,422,70,423,62,423,61,406,68,402,76,394,79,388,81,371,79,352,80,334,77,325,70,309,72,280,72,262,81,240,81,219,91,207,71,207,56,207,50,197,39,179,41,163,28,165,18,169,7,169,6,155,6,139,11,134,19,129,22,123,33,111,41,109,52,108,61,104,71,104,80,113,85,113,98,106,111,103,113,94,120,87,127,81" href="<?=ROOT?>registrazione_step3/<?=$regno?>/2" />
			<area shape="poly"   onmouseover="entra10('boton7');" coords="374,75,386,81,393,87,398,102,413,103,422,108,436,125,435,141,439,155,432,163,410,167,405,174,414,193,422,212,435,240,440,267,440,295,439,328,432,346,424,364,420,385,422,409,423,430,406,428,397,425,392,405,386,378,386,351,379,331,376,364,376,393,374,420,361,424,348,424,332,423,336,406,341,387,346,362,332,363,316,348,312,327,312,301,314,271,316,243,311,219,305,254,302,302,296,341,302,382,306,407,307,424,296,433,276,420,270,390,261,352,254,329,254,313,254,285,254,264,250,241,252,207,253,185,249,164,261,133,273,129,297,139,304,166,323,155,327,140,322,125,329,103,345,97,355,75" href="<?=ROOT?>registrazione_step3/<?=$regno?>/6" />
		</map>
	</div>
	<div class="empirebox empirebox-4">
		<div class="empire-crest"></div>
		<h2>Shamano</h2>
		<p>Grazie alla saggezza acquisita con intensivi studi, gli Shamani riescono in battaglia ad utilizzare degli <strong>incantesimi e magie</strong>. Le loro <strong>mistiche abilità</strong> aiutano in battaglia non solo se stessi ma anche i loro compagni.<br>
		<br>
		Con le loro specializzazioni gli Shamani hanno la possibilità di rafforzare gli attacchi o di perfezionare le loro abilità curative o d'aiuto. Risultano spesso indispensabili nelle battaglie per queste loro specialità.</p>
		<img src="<?=ROOT?>img/races/shaman.png" alt="Scegli lo Shamano" name="boton8" usemap="#shaman">
		<map name="shaman" id="shaman">
			<area shape="poly" onmouseover="entra11('boton8');" coords="256,263,215,248,197,249,196,261,196,287,205,315,216,333,228,342,246,351,260,353,279,350,282,356,287,367,288,383,295,395,290,410,303,424,327,431,340,433,346,425,348,403,355,402,373,401,375,392,375,377,379,367,402,364,424,359,429,343,442,335,446,318,449,303,444,291,426,281,418,268,406,263,402,246,399,228,390,203,382,184,379,167,379,152,373,142,356,138,352,124,346,106,336,95,323,94,312,94,303,101,303,120,302,141,304,154,294,153,282,149,285,166,285,185,285,210,276,220,262,237,257,250" href="<?=ROOT?>registrazione_step3/<?=$regno?>/3" />
			<area shape="poly"   onmouseover="entra12('boton8');" coords="133,80,139,97,145,108,145,121,160,131,177,135,186,144,191,160,196,177,200,193,199,204,195,216,186,223,174,229,167,242,167,257,169,278,174,306,176,327,181,360,181,382,177,397,180,420,175,435,164,435,152,435,138,431,136,412,133,391,122,388,119,388,115,405,114,417,107,428,94,429,73,435,63,431,60,416,67,403,77,403,78,390,78,374,69,370,52,371,46,367,46,342,52,322,57,299,61,277,68,248,69,232,60,223,49,223,37,222,28,216,20,204,17,183,13,161,17,143,18,128,35,119,51,113,62,115,72,122,85,124,96,126,103,126,105,113,106,97,108,87,117,77,130,70" href="<?=ROOT?>registrazione_step3/<?=$regno?>/7" />
		</map>
	</div>
</div>