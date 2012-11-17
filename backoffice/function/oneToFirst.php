<?php
function oneToFirst ($number) {
	switch($number) {
		case 1:
			return 'primo';
			break;
		case 2:
			return 'secondo';
			break;
		case 3:
			return 'terzo';
			break;
		case 4:
			return 'quarto';
			break;
		case 5:
			return 'quinto';
			break;
		case 6:
			return 'sesto';
			break;
		case 7:
			return 'settimo';
			break;
		case 8:
			return 'ottavo';
			break;
		case 9:
			return 'nono';
			break;
		default:
			return '';
	}
}
