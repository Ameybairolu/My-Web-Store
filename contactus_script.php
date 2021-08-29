<?php
//This page checks if the entered details are in the given format and then uploads the data to the contactus table. 
require("includes/common.php");
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ameybairolu@gmail.com";
    $email_subject = "Contact us"; 
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $name = mysqli_real_escape_string($con,$name);
    $email= $_POST['email']; // required
    $email = mysqli_real_escape_string($con,$email);
    $comments = $_POST['comments']; // required
    $comments = mysqli_real_escape_string($con,$comments);
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 $query = "INSERT INTO contactus(name, email, comments)VALUES('" . $name . "','" . $email . "','" . $comments . "')";
 mysqli_query($con, $query) or die(mysqli_error($con));
    
?>

<!--This displays the success message-->
<!DOCTYPE html>
<html>
 <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products page</title>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div style="text-align: center;margin: 26% 0% 23.8% 0%">
                <p style="font-size: 200%"> Thank you for contacting us. We will be in touch with you very soon.</p>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
<html>
<?php
 
}
?>