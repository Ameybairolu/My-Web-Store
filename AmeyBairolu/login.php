<?php
        include 'includes/common.php';
        ?>
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
        <title>Login Page</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body id="div">
        <?php
        include 'includes/header.php';
        ?>
 <center>
         <!--The panel is used to display the contents of login page-->
         <div class="container">
            <div id="panel_content_login" style="text-align: left">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <!--The form is used here which will take inputs from the user and send the obtained details to the login_submit.php-->
                            <!--Post method is used for extra security-->
                            <form role="form" action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="email"  class="form-control" name="e-mail"  placeholder="E-mail" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="password" placeholder="Password" required>
                                </div>
                                <?php 
                                    if(isset($_GET["error"])){
                                     echo $_GET['error'];} 
                                    ?>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
                        </div>
                        <!--This is the panel footer-->
                        <div class="panel-footer"><a href="signup.php" style="color: black">Don't have an account? Register</a></div>
                    </div>
                </div>
         </div>
 </center>   
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
