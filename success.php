
<?php
        include 'includes/common.php';
        if (!isset($_SESSION['email'])) {
            header('location: index.php');
            }
        $user_id = $_SESSION['user_id'];

        //Update the status of the items purchased by this user to "Confirmed"
        $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND status='Added to cart'";
        mysqli_query($con, $query) or die($mysqli_error($con));
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
        <title>Success!</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <!--Jumbotron only to display the success message and link which sends user to the products page-->
            <div class="jumbotron jumbotron_edit" style="text-align: center;margin: 21% 0% 21% 0%">
                <p> <h2>Your order is confirmed. Thank you for shopping with us.</h2><br><br> <a href="products.php" id="a_success">Click here</a> to purchase any other item. </p>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>