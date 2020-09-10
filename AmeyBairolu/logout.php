<?php
//logout page to end the session

session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
session_destroy();
header('location: index.php');
?>
