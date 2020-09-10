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
        <title> Order History</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
        <center><div id='orderhist_head'><h2>Order History</h2></div></center>
    <center>
        <div class="container">
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        //Select Query to obtain the list of all the products ordered by the user
                        $query = "SELECT items.price AS Price, items.id, users_items.time AS Time, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Confirmed'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        //Display table only if the user previously had orders 'confirmed' under his name
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                        <table class="table table-striped" id="orderhist_table" style="width: 50%;margin-bottom: 13%">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Order Date and Time</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td>" . $row["Time"]. "</td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td></td>
                                          </tr>";
                                ?>
                            </tbody>
                            </table>
                            <?php
                        } else {
                            //If nothing was ordered previously, display the message
                            echo "<center><div style='text-align:left;margin:5% 0% 25% 0%;width:60%'>No Order has been placed! Start Shopping!</div></center>";
                        }
                        ?>
                        <?php
                        ?>
        </div>
    </center>
        <!--Footer-->
        
            <?php include 'includes/footer.php';?>
        
        <!--Footer end-->    
    </body>
</html>