<?php
include_once '../config.php';

$article->id = isset($_POST['postid']) ? $_POST['postid'] : '';

if (is_numeric($article->id)) {
	include_once '../comments.php';
}
?>