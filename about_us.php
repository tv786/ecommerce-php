<?php
require "db.php";
session_start();
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
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
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

    <div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <p class="aboutus-text">Welcome to <b>SPRINTER</b>, your number one source for best custom designed products. We're dedicated to giving you the very best of product, with a focus on three characteristics, ie: dependability, customer service and uniqueness.</p>
                        <p class="aboutus-text">India, like myriad parts of the globe, possesses a strong visually driven culture. Irrespective of the geographic location of the country Indians love pomp and pageantry, from their attire, to the food and festivals there’s colour, energy and a story waiting to be told – the perfect elements for a Designs and art.</p>
                        <a class="aboutus-more" href="#">read more</a>
                    </div>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-12">

                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset" style="background: #F6F6F6;">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Work With Heart</h4>
                                    <p>We have some of the best team who work day and night so we can provide you with best of the best services and products.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset" style="background: #F6F6F6;">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Great Support</h4>
                                    <p>We have a team of professional which provides any kind of help to our customers related to website or products any time.</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset" style="background: #F6F6F6;">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Coming Soon</h4>
                                    <p> We are currently working on creating our on collection of design for you to choose from ALL FOR FREE.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
