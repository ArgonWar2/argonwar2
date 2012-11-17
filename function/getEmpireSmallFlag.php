<?php
function getEmpireSmallFlag ($empire) {
	switch($empire):
		case 1:
			echo '<img src="'.ROOT.'img/realms/small_shinsoo.png" alt="Shinsoo">';
			break;
		case 2:
			echo '<img src="'.ROOT.'img/realms/small_chunjo.png" alt="Chunjo">';
			break;
		case 3:
			echo '<img src="'.ROOT.'img/realms/small_jinno.png" alt="Jinno">';
			break;
	endswitch;
}
?>