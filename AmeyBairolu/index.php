<?php
        //include common so that the page gets the login info
        include 'includes/common.php';
        if (isset($_SESSION['email'])) {
            header('location: products.php');
            }
        ?>

<!DOCTYPE html>
<!--The index page-->
<html>
    <head>
        <!--Minified bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Compiled and Minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Include the CSS file-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of this page-->
        <title>Lifestyle Store</title>
        <!-- add icon link -->
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
        
    </head>
    <body style="padding-top: 50px;">
        <!--Include header-->
        <?php
        include 'includes/header.php';
        ?>
        <div class="content">
            <div class=" banner-image">
                <div class="inner-banner-image">
                    <center>
                    <div class="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <!--Shop Now button to navigate the user to Products page-->
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a> 
                    </div>
                        </center>
                    </div>
            </div>
        </div>
            <div class="container">
        <!--Declaring a row-->
        <div class="row text-center">
                <!--Using the first 4 columns-->
                <div class="col-sm-4">
                <!--using bootstrap's thumbnail class which has some predefined properties to represent images in a particular fashion-->
                    <div class="thumbnail">
                        <a href="" class="nounderline">
                    <img src="img/camera.jpg" alt="Cameras">
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                </div>
                        </a>
            </div>
        </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="" class="nounderline">
                    <!--Display the picture of the watch or else if unable to load, display text Watches-->
                    <img src="img/watch.jpg" alt="Watches">
                    <div class="caption">
                        <h2>Watches</h2>
                        <p>Original watches from the best brands.</p>
                    </div>
                        </a>
            </div>
        </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href="" class="nounderline">
                        <img src="img/shirt.jpg" alt="Shirts">
                    <div class="caption">
                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts.</p>
                </div>
                        </a>
            </div>
        </div>
        </div>
            </div>
        <!--Include footer -->
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
