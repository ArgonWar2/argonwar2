<?php
function getPermissionByAction($array, $action) {
	foreach($array as $a){
		if ($a['action'] == $action)
			return $a['permission'];
	}
	return false;
}
