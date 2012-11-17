<?php
function getAccountStatus ($status) {
	switch ($status):
		case "OK":
			return '<b style="color:#0D0">Attivo</b>';
			break;
		case "PENDING":
			return '<b style="color:yellow">Non confermato</b>';
			break;
		case "BANNED":
			return '<b style="color:red">Bannato</b>';
			break;
		default:
			return '<b>Sconosciuto</b>';
	endswitch;
}
?>
