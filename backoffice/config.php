<?php
define("B_ROOT","http://localhost/Mt2CMS/backoffice/");

include_once '../class/DB.php';
$db = new DB(HOSTNAME,USERNAME,PASSWORD);
include_once 'session/session.php';

include_once 'hacker_quotes.array.php';
include_once 'actions.array.php';

include_once 'function/getPermissionByAction.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$user = $db->queryUniqueObject("SELECT `user`.`name`, `permission`.`level` AS `permission_level`
FROM `backend`.`user`
INNER JOIN `backend`.`permission` ON `user`.`permission_name` = `permission`.`name`
WHERE `user`.`name` = '".$_SESSION['usr']."'
GROUP BY `user`.`name`
");
