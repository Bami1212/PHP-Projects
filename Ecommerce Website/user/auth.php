
<?php
session_start();
if(!isset($_SESSION['type']) || $_SESSION['type'] != 'user') {
    header("Location: login.php");
     //maybe redirect to login page
     exit();
}

?>