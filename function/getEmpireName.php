<?php
function getEmpireName ($empire) {
	switch ($empire):
		case 1:
			return '<b style="color:red">Shinsoo</b>';
			break;
		case 2:
			return '<b style="color:yellow">Chunjo</b>';
			break;
		case 3:
			return '<b style="color:blue">Jinno</b>';
			break;
		default:
			return 'Sconosciuto';
	endswitch;
}
?>