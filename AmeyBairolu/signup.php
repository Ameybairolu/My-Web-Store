<!--Sign up page that contains a form and requires the user to enter details.-->
<!--Once the submit button is pressed, the details are sent to signup_script-->
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
        <title>Sign Up page</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body id="div">
         <?php
        include 'includes/header.php';
        ?>
 <center>
        <div class="container" >
            <div id="panel_content" style="text-align: left">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>SIGN UP</h4>
                        </div>
                        <div class="panel-body">
                            <form action="signup_script.php" method="POST">
                                <div class="form-group">
                                <input class="form-control" name="name" placeholder="Name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                                </div>
                                <div class="form-group">
                                <input type="email"  class="form-control" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" pattern=".{6,}" required>
                                </div>
                                <div class="form-group">
                                <input type="text"  class="form-control" name="contact" placeholder="Contact" maxlength="10" size="10" required>
                                <?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                                ?>
                                </div>
                                <div class="form-group">
                                <input type="text"  class="form-control" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                <input type="text"  class="form-control" name="address" placeholder="Address">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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