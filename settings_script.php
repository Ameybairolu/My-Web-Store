<?php
// This page updates the user password
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['oldpassword'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['newpassword'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$retype_pass = $_POST['retypenewpassword'];
$retype_pass = mysqli_real_escape_string($con, $retype_pass);
$retype_pass = MD5($retype_pass);

//query to obtain the password from the database
$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

//check old password and the password as present in the database
if ($new_pass != $retype_pass) {
    header('location: settings.php?error=1');
} else {
    
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=2');
    } else
        header('location: settings.php?error=3');
}
?>
