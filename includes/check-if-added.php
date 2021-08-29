<?php

//This code checks if the product is added to cart. 
function check_if_added_to_cart($item_id) {
    //Obtain the user ID from the session
    $user_id = $_SESSION['user_id']; 
    // connecting to the database
    require("common.php"); 
    
    //Query to select the rows that contain id as obtained from session and status "Added to cart"
    $query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    
    // To check if the no.of rows in the result is greater than or equal to 1. If yes then it returns 1 else returns 0 
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}

?>