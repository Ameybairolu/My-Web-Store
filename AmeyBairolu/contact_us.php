<!--A new table was inserted "contactus" in the ecommerce database which contains the details as acquired by this page.
This page has a form which gets the Name, Email ID and the Comments from a user who has not registered yet. 
The details entered are then sent to the contactus_script page-->
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <link rel = "icon" href = "http://www.hatchwise.com/entry/L969949-20150519113142.png" type = "image/x-icon">
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        ?>
        <div class="container" style="margin:5% 0% 0% 10%" >
            <div class="row">
                <div class="col-sm-9">
            <h1>Live Support</h1>
            <p style="text-align: justify">The contact us page is one of the most visited pages on any website. That seems like a compelling enough reason to redesign your Contacts section to better meet your users' needs and grab their attention. While working on this post, I came across hundreds of beautifully made websites, yet their contact us pages were, for the most part, disappointing. Most contact pages are made for show, with just an email, address, phone, location, and some short boring text on a plain background reason to redesign  your contacts section to better meet your user's needs and grab their attention. While working on this post, I came across hundreds.</p><br>
            </div>
                <div class="col-sm-3">
                    <img src="img/contact-us.jpg" alt="contact us" style="width:210px;height:210px;">
                </div>
        </div>
            <div class="row">
                <div class="col-sm-7">
            <h3>CONTACT US</h3>
            <div style="text-align: left">
                    <div class="panel panel-default" >
                        <div class="panel-body">
                            <form name="contactform" method="POST" action="contactus_script.php">
                                        <div class="form-group">
                                            <input class="form-control" name="name" maxlength="50" size="30" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" maxlength="80" size="30" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="comments" maxlength="1000" cols="25" rows="6" placeholder="Comments"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
            </div>
                </div>
                <div class="col-sm-4">
            
            <h3>COMPANY INFORMATION:</h3>
            <h4>Gurgaon, India - 122018</h4><br>
            <h4>Phone: +91 8888888888</h4><br>
            <h4>Email: amey@xyz.com</h4>
        </div>
            </div>
        </div>
        <?php 
        include 'includes/footer.php';
        ?> 
    </body>
    </html>