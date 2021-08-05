<?php
require "db.php";
session_start();

if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
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
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="admin/login.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                    <li><a href="contact_us.php"> <span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
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


                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
                        <ul class="dropdown-menu">
                            <div style="width:300px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading" style="font-size: 20px; background-color: #EEA236; color: white;">Login</div>
                                    <div class="panel-heading">
                                        <div id="e_msg"></div>
                                        <br>
                                        <form onsubmit="return false" id="login">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required /> <br>
                                            <label for="email">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" required />
                                            <p><br /></p>
                                            <input type="submit" class="btn btn-warning" value="Login">
                                            <a href="customer_registration.php?register=1" style="color:#EEA236; text-decoration:none;"> Create Account </a>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=""><img src="designs_images/topDesign.jpg" style="width:100%; height:80px;"></div>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 col-xs-12 ">
                <div id="get_category" class="catBrand">
                </div>
                <!-- PRODUCT CATEGORIES IN SEQUENCE -->
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="product_msg">
                    </div>
                </div>
                <div class="panel panel-info">


                    <div id="get_product">
                        <!--HERE WE GET PRODUCT JQUERY AJAX REQUEST-->
                    </div>
                    <!-- PRODUCT DETAIL ON PROFILE PAGE -->
                </div>

            </div>
            <div class="col-md-2 col-xs-12 ">
                <div id="get_brand" class="catBrand">
                </div>
                <!-- PRODUCT BRANDS IN SEQUENCE -->
            </div>

        </div>

    </div>
    <br>
    <br>
    <div class="panel-footer col-md-3 ">
        <span style="color: #EBDEB4">&copy; 2021 Copyright:</span> Sprinter.com
    </div>
</body>

</html>
