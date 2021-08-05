<?php
if (isset($_GET["register"])) {
	
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
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body class="registrationBody">
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                    <img src="product_images/sprinter_logo2.png">
                </a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="contact_us.php"> <span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                <li><a href="about_us.php"><span class="glyphicon glyphicon-list-alt"></span> About Us</a></li>
            </ul>
        </div>
    </div>
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="signup_msg">
                <!--Alert from signup form-->
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-primary registrationBox">
                    <div class="panel-heading text-center productHeading">Customer Registration Form</div>
                    <div class="panel-body">

                        <form id="signup_form" onsubmit="return false">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">First Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">Last Name</label>
                                    <input type="text" id="l_name" name="l_name" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="repassword">Confirm Password</label>
                                    <input type="password" id="repassword" name="repassword" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="mobile">Contact Number</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address1">Town/City/State</label>
                                    <input type="text" id="address1" name="address1" class="form-control" required>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="address2">Landmarks</label>
                                    <input type="text" id="address2" name="address2" class="form-control" required>
                                </div>
                            </div>
                            <p><br /></p>
                            <div class="row">
                                <div class="col-md-12">
                                    <input value="Sign Up" type="submit" name="signup_button" class="btn btn-success btn-lg">
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="panel-footer"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>
<?php
        }
    ?>
