<?php
require "db.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sprinter</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
        @media screen and (max-width:480px) {
            #search {
                width: 80%;
            }

            #search_btn {
                width: 30%;
                float: right;
                margin-top: -32px;
                margin-right: 10px;
            }
        }

    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only"> navigation toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">
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
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                    <li><a href="about_us.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>

                    <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge">0</span></a>
                        <div class="dropdown-menu" style="width:400px;">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row cartTitle">
                                        <div class="col-md-2 col-xs-3">S.No</div>
                                        <div class="col-md-3 col-xs-3">Product Image</div>
                                        <div class="col-md-5 col-xs-3">Product Name</div>
                                        <div class="col-md-2 col-xs-3">Price</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="cart_product">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php echo "Hi, ".$_SESSION["name"]; ?> </a>
                        <ul class="dropdown-menu">
                            <li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart"> Cart </span></a></li>
                            <li class="divider"></li>
                            <li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
                            <li class="divider"></li>

                            <li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
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
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="product_msg">
                    </div>
                </div>
                <div class="panel panel-info">

                    <div id="get_product">
                        <!--Here we get product jquery Ajax Request-->
                    </div>

                </div>

            </div>
            <div class="col-md-2 col-xs-12 ">
                <div id="get_brand" class="catBrand">

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <ul class="pagination" id="pageno">
                            <li><a href="#">1</a></li>
                        </ul>
                    </center>
                </div>
                <div class="panel-footer col-md-3">
                    <span style="color: #EBDEB4">&copy; 2021 Copyright:</span> Sprinter.com
                </div>
            </div>

        </div>

</body>

</html>
