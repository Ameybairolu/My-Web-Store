<?php
include "includes/common.php";
include 'includes/check-if-added.php';
?>
<!DOCTYPE html>
<!--Please Note: I wasnt provided with the images to be included in the products page. 
So while searching for the images online, I got this link -> http://w4.host22.com/products.php and I downloaded the images from there. 
The images for other pages I couldn't find so I uploaded the images I found appropriate. 
This project I made is with the help of what I learnt from your course and also w3schools for some difficulties I encountered while making the project. -->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container">
        <div class="jumbotron jumbotron_edit">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
            <div class="row text-center">
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/canon_eos.jpg" alt="Cameras">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price Rs. 36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/nikon_dslr.jpg" alt="Cameras">
                    <div class="caption">
                        <h3>Nikon DSLR</h3>
                        <p>Price Rs. 40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/sony_dslr.jpg" alt="Cameras">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price Rs. 50000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/olympus_dslr.jpg" alt="Cameras">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price Rs. 80000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
        </div>
            <div class="row text-center">
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/titan_model_3.jpg" alt="Watches">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price Rs. 13000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/titan_model_2.jpg" alt="Watches">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price Rs. 3000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/hmt_milan.jpg" alt="Watches">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price Rs. 8000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/faber_luba.jpg" alt="Watches">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price Rs. 18000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/h&w.jpg" alt="Shirts">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price Rs. 800.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>  
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/luis_phil.jpg" alt="Shirts">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price Rs. 1000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/john_zok.jpg" alt="Shirts">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price Rs. 1500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
                <div class=" col-md-3 col-sm-6">
                    <div class="thumbnail">
                    <img src="img/jhalsani.jpg" alt="Shirts">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price Rs. 1300.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                            <?php } else { 
                                    //We have created a function to check whether this particular product is added to cart or not. 
                                    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0) 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                    
                                    } else { 
                                        ?> 
                                         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php 
                                    } 
                                        } 
                                    ?>
                </div>
            </div>
        </div>
        </div>
        </div>
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>