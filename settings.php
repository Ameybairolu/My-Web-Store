<?php
        include 'includes/common.php';
        if (!isset($_SESSION['email'])) {
            header('location: index.php');
            }
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
        <title>Settings</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <!--Form to update the password of the user. 
    Once the details are filled properly, the data is sent to the settings_script.php-->
    <body>
        <?php
        include 'includes/header.php';
        ?>
 <center>
     <div class="container-fluid" style="margin-top: 10%">
            <div id="panel_content" style="text-align: left">
                <div class="panel panel-default" id="panelnoborder">
                        <div class="panel-body">
                            <h4>Change Password</h4>
                            
                            <form action="settings_script.php" method="POST">
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="oldpassword" placeholder="Old Password" pattern=".{6,}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="newpassword"  placeholder="New Password" pattern=".{6,}" required>
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" name="retypenewpassword" placeholder="Re-type New Password" pattern=".{6,}" required>
                                </div>
                                <div>
                        <?php
                        if(isset($_GET["error"])){
                            $num1 = $_GET["error"];
                          if ($num1==1){
                                  echo '<b style="color:yellow">The Entered New Passwords DONOT Match.</b>';
                          }
                          elseif ($num1==2) {
                              echo '<b style="color:green">Password Updated Successfully</b>';
                      }   else{
                          echo '<b style="color:red">OLD PASSWORD INCORRECT</b>';
                      }
                        }
                        ?>
                                        </div>
                                <button type="submit" class="btn btn-primary">Change</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 </center>   
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>