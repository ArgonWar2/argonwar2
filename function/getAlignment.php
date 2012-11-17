<?php
function getAlignment($points) {
	if ($points >= 12000)
		return "<b style=\"color:#00d0f0\">Cavaliere</b>";
	else
	if ($points >= 8000)
		return "<b style=\"color:#00a6ff\">Nobile</b>";
	else
	if ($points >= 4000)
		return "<b style=\"color:#3624ff\">Buono</b>";
	else
	if ($points >= 1000)
		return "<b style=\"color:#6d9ef2\">Gentile</b>";
	else
	if ($points >= 0)
		return "<b>Neutrale</b>";
	else
	if ($points >= -3999)
		return "<b style=\"color:#f79000\">Aggressivo</b>";
	else
	if ($points >= -7999)
		return "<b style=\"color:#ff7700\">Perfido</b>";
	else
	if ($points >= -11999)
		return "<b style=\"color:#ff0000\">Maligno</b>";
	else
		return "<b style=\"color:#de0d0d\">Crudele</b>";
}
?>
