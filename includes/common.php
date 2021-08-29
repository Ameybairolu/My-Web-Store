<?php
    // This file logs in to the database and is required in almost all the pages
    $con = mysqli_connect("localhost", "root", "", "ecommerce")
    //if unable to login, kill the process
    or die(mysqli_error($con));
    // begin the session
    if(!isset($_SESSION)){
      session_start();
    }
?>
