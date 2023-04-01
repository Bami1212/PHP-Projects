<?php
session_start();
// Destroying All Sessions
// if(session_destroy())
// {
// // Redirecting To Home Page
// header("Location: login.php");
// }
$_SESSION = array();
$params= session_get_cookie_params();
setcookie(session_name(),'', time() - 4300,
$params["path"],
$params["domain"],
$params["secure"],
$params["httponly"]);

session_destroy();
header("Location: login.php");
?>