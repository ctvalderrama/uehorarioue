<?php
session_start(); 
$_SESSION = array();
$params = session_get_cookie_params();
setcookie( session_name(), '', time() - 42000,
$params["username"]);
session_destroy();
exit('OK');
?>
