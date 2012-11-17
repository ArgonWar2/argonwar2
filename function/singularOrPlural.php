<?php
function singularOrPlural ($lastLetter, $value) {
	if ($value == 1) {
		if ($lastLetter == "a")
			return "a";
		else
			return "o";
	} else {
		if ($lastLetter == "a")
			return "e";
		else
			return "i";
	}
}
?>