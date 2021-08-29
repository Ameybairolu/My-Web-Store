<?php
//Common is used to get login to the database and perform the upload command 
require("includes/common.php");

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
//to code the password for security purposes
$password = MD5($password);

//To check if the email and password are present in the database
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
//If the email or password isnt present, display the error message else navigate the user to the products page
if ($num == 0) {
  $error = $$_GET['error'];
  $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}
?>
