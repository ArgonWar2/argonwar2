<?php
$id = isset($_POST['postid']) ? $_POST['postid'] : 0;
$type = isset($_POST['type']) ? $_POST['type'] : 'likes'; //likes or hates

include_once '../main.config.php';

if (is_numeric($id) && ($type == 'likes' || $type == 'hates'))
	$db->execute("UPDATE `backend`.`post` 
				SET $type = $type +1
				WHERE id = $id");
?>