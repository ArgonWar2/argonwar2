<?php
function getRace($race_id) {
	switch ($race_id):
		case 0:
			return "Guerriero";
			break;
		case 1:
			return "Ninja femmina";
			break;
		case 2:
			return "Sura maschio";
			break; 
		case 3:
			return "Shamana";
			break; 
		case 4:
			return "Guerriera";
			break; 
		case 5:
			return "Ninja maschio";
			break; 
		case 6:
			return "Sura femmina";
			break; 
		case 7:
			return "Shamano";
			break;
		default:
			return "N/D";
	endswitch;
}
?>
