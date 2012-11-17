<?php
function getEmpireFlag ($empire) {
	switch($empire):
		case 1:
			echo '<img src="'.ROOT.'img/realms/shinsoo.jpg" alt="Shinsoo">';
			break;
		case 2:
			echo '<img src="'.ROOT.'img/realms/chunjo.jpg" alt="Chunjo">';
			break;
		case 3:
			echo '<img src="'.ROOT.'img/realms/jinno.jpg" alt="Jinno">';
			break;
	endswitch;
}
?>