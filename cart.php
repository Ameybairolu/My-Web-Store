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
        <title>My Cart</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
    <center>
        <div class="container">

                        <?php
                        $sum = 0;
                        $srnum = 1;
                        $user_id = $_SESSION['user_id'];
                        //Query to select the rows from users_iems that have id as obtained from session and status "added to cart"
                        $query = "SELECT items.price AS price, items.id, items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                        <table>
                            <thead>
                                <tr>
                                    <th>Serial Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                //The while statement below displays a table with details of the items that were added to the cart
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    $sum+= $row["price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    //The Remove link is also added below which will send the product id to the cart-remove.php
                                    echo "<tr>
                                              <td>". $srnum . "</td>
                                              <td>" . $row["name"] . "</td>
                                              <td>Rs " . $row["price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                    $srnum = $srnum+1;
                                }
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                //The Confirm Order button above is used to direct the user to the success page
                   
                                ?>
                            </tbody>
                            </table>
                            <?php
                        } else {
                            //If no items were selected i.e. if the select query returned null value, then display the following message
                            echo "<center><div style='margin:25% 0% 25.1% 0%'><h2>Add items to the cart first!</h2></div></center>";
                        }
                        ?>
                        <?php
                        ?>
        </div>
    </center>
            <?php include 'includes/footer.php';?>   
    </body>
</html>