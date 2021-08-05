<?php
require "db.php";

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Spinter</title>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body class="fullPage">
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top topbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">
                    <img src="product_images/sprinter_logo2.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">


                </ul>

                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
                        <div class="dropdown-menu" style="width:400px;">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-3">S.No</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="cart_product">
                                        <!-- CART PRODUCT IN SEQUENCE -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class=""><img src="designs_images/topDesign.jpg" style="width:100%; height:80px;"></div>
    <br>
    <!--- CONTCT US ---->
    <div class="col-md-4"> </div>

    <div class="col-md-4 contactField">
        <h2>Contact Us</h2>


        <?php 
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$Subject = $con->real_escape_string($_POST['subject']);
$Message = $con->real_escape_string($_POST['message']);
  //query to insert the variable data into the database
$sql="INSERT INTO contactus (name, email, subject, message, created_date) VALUES ('".$Name."','".$Email."', '".$Subject."', '".$Message."', '".date('Y-m-d')."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured');
}
else
   echo "<div class='alert alert-success'>
                <b>Thank you! We will get in touch with you soon</b>
        </div>";
    
   echo '<meta http-equiv="refresh" content="2;url=http://localhost:8080/ecommerce-app/index.php" />';
    
}
?>

        <form action="" method="POST">

            <p class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
            </p>

            <p class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="mail@example.com">
            </p>

            <p class="form-group">
                <label for="contact">Subject</label>
                <input type="text" name="subject" id="contact" class="form-control" placeholder="subject...">
            </p>

            <p class="form-group">
                <label for="text">Message</label>
                <textarea name="message" class="form-control" placeholder="Write something to us"></textarea>
            </p>

            <p class="form-group">
                <input class="btn btn-success" type="submit" name="submit" value="Send">
            </p>

        </form>

    </div>
</body>

</html>
