<?php
$sessionName = session_name();
$sessionCookie = session_get_cookie_params();

session_destroy();

setcookie($sessionName, false, $sessionCookie['lifetime'], $sessionCookie['path'], $sessionCookie['domain'], $sessionCookie['secure']);
header('Location: /index.php');
