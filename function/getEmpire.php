<?php
function getEmpire ($empire) {
	switch ($empire):
		case 1:
			return 'Shinsoo';
			break;
		case 2:
			return 'Chunjo';
			break;
		case 3:
			return 'Jinno';
			break;
		default:
			return 'Sconosciuto';
	endswitch;
}
?>