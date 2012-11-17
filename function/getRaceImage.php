<?php
function getRaceImage ($race_id) {
	switch ($race_id):
		case 0:
			return '<img src="'.ROOT.'img/races/male_warrior.png" alt="Guerriero">';
			break;
		case 1:
			return '<img src="'.ROOT.'img/races/female_ninja.png" alt="Ninja femmina">';
			break;
		case 2:
			return '<img src="'.ROOT.'img/races/male_sura.png" alt="Sura maschio">';
			break; 
		case 3:
			return '<img src="'.ROOT.'img/races/female_shaman.png" alt="Shamana">';
			break; 
		case 4:
			return '<img src="'.ROOT.'img/races/female_warrior.png" alt="Guerriera">';
			break; 
		case 5:
			return '<img src="'.ROOT.'img/races/male_ninja.png" alt="Ninja maschio">';
			break; 
		case 6:
			return '<img src="'.ROOT.'img/races/female_sura.png" alt="Sura femmina">';
			break; 
		case 7:
			return '<img src="'.ROOT.'img/races/male_shaman.png" alt="Shamano">';
			break;
	endswitch;
}
?>