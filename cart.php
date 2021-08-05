<?php

require "db.php";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sprinter</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
                    <img src="product_images/sprinter_logo2.png">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>

                    <li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
                </ul>
            </div>

        </div>

    </div>
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="cart_msg">
                <!--Cart Message-->
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-primary">
                    <div class="cartTitle">Cart Checkout</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2 col-xs-2"><b>Action</b></div>
                            <div class="col-md-2 col-xs-2"><b>Product Image</b></div>
                            <div class="col-md-2 col-xs-2"><b>Design Image</b></div>
                            <div class="col-md-2 col-xs-2"><b>Product Name</b></div>
                            <div class="col-md-1 col-xs-2"><b>Quantity</b></div>
                            <div class="col-md-1 col-xs-2"><b>Price $</b></div>
                            <div class="col-md-2 col-xs-2"><b>Total Price $</b></div>

                        </div>
                        <hr>
                        <div id="cart_checkout">
                            <!-- CART PRODUCTS DETAILS -->
                        </div>

                    </div> <br>
                    <div class="panel-footer"></div>
                </div>

            </div>
        </div>
        <div class="col-md-1"></div>

    </div>

    <script>
        var CURRENCY = '<?php echo CURRENCY; ?>';

    </script>
</body>

</html>
