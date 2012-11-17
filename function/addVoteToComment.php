<?php
$id = isset($_POST['commentid']) ? $_POST['commentid'] : 0;
$type = isset($_POST['type']) ? $_POST['type'] : 'dislike'; //like or dislike
$type.="s";
include_once '../main.config.php';

if (is_numeric($id) && ($type == 'likes' || $type == 'dislikes'))
	$db->execute("UPDATE `backend`.`comment` 
				SET $type = $type +1
				WHERE id = $id");
?>