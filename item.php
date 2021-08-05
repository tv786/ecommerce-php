<?php
include "db.php";
include "action.php";
session_start();
error_reporting(0);
?>

<?php 

$product_query = query(" SELECT * FROM products WHERE product_id = " .escape_string($_GET['id']). " ");
confirm($product_query);

while($row = fetch_array($product_query)):

?>


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
                <ul class="nav navbar-nav">

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="contact_us.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
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
                                        <!-- CART PRODUCT HERE -->
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


    <!------ PRODUCT DETAILS ------->
    <div class="col-md-12">

        <!--Row For Image and Short Description-->

        <div class="row">
            <div class="col-md-5">

                <!------------ image dislay function -------------->
                <div class="productImg"> <img class="img-responsive product-image" src="../Ecommerce-app/product_images/<?php  echo display_image($row['product_image']); ?>" alt=""> </div>

            </div>

            <p><br /></p>

            <div class="col-md-4">
                <div class="thumbnail productDetail">

                    <div class="caption-full">
                        <h3><?php echo $row['product_title']; ?> </h3>
                        <hr>
                        <p><?php echo $row['short_desc']; ?></p>
                        <br>

                        <?php $pro_id  = $row['product_id']; ?>

                        <!------ design form ---------->
                        <?php if(isset($_POST['submit'])) {	
    
                $filename  = $_FILES["design_file"]["name"];
                $file_size = $_FILES["design_file"]["size"];
                $tempname  = $_FILES["design_file"]["tmp_name"];
                $error     = $_FILES["design_file"]["error"];
                $folder    = "designs_images/".$filename;

                $name        = $_POST['name'];
                $description = $_POST['description'];
                $user_id     = $_SESSION["uid"];
               
                $sql       = "SELECT * FROM user_info WHERE user_id = '$user_id'";
                $run_query = mysqli_query($con,$sql);
                $count     = mysqli_num_rows($run_query);
       
                //if user record is available in database then $count will be equal to 1
                if($count == 1){
                    $row = mysqli_fetch_array($run_query);
                     $_SESSION["uid"] = $row["user_id"];
                    
            
                    $insert = mysqli_query($con,"INSERT INTO `design_details`(`name`, `design_desc`, `pro_id`, `u_id`, `design_img`) VALUES ('$name','$description','$pro_id','$user_id','$folder')");

                    if (move_uploaded_file($tempname, $folder)) {
                       echo "Design added successfully. ADD PRODUCT IN CART TO BUY";
                       

                    }
                    else {
                        echo "Failed to upload image. Image should be atleast 750px width and 1100px height.";
                    }
                    
                } 
                else {
                   $errorLogin = '<div class="alert alert-danger">You are not logged in!</div>';
                  $redirect = '<meta http-equiv="refresh" content="2;url=http://localhost:8080/ecommerce-app/index.php" />';
                }    
            }    
        
                 $user_id = $_SESSION["uid"];

                 $result = "SELECT * FROM design_details WHERE u_id='$user_id' AND pro_id='$pro_id'";
                 $display_query = mysqli_query($con,$result);

                 while ($data = mysqli_fetch_assoc($display_query)) {
                    echo "<h5>Your Name: <b>{$data['name']}</b></h5>";
                    echo '<br><h5>Your Design: <img src="'.$data['design_img'].'" width="70" height="120"></h5>';
                 }
        
           ?>
                        <div id="designContainer">
                            <!--Design Form-->
                            <h4>Design Form</h4>

                            <?php echo $errorLogin; 
                               echo $redirect;?>


                            <form method="POST" enctype="multipart/form-data" class="designForm">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" Required>
                                <br />
                                <label for="description"> Description </label>
                                <textarea type="text" class="form-control designDescription" name="description" placeholder="Enter your design details" Required></textarea>
                                <br />
                                <label for="description"> Upload your design </label>
                                <input class="inputfile" type="file" name="design_file" placeholder="upload design">

                                <ul class="instruction">
                                    <li>Design must be atleast 1000 px by 3000 px.</li>
                                    <li>Shouldn't contain white spaces in Design image.</li>

                                </ul>

                                <input class="designSubmit" type="submit" name="submit" value="Submit">

                            </form>
                        </div>
                        <br>
                        <h4>Price: <b><?php echo CURRENCY . $row['product_price']; ?></b></h4>

                        <!--------------- DESIGN FORM END --------------->
                        <hr>
                        <?php echo"
                 <button pid='$pro_id' id='product' class='btn btn-danger itemCart'>Add To Cart</button>
              "?>


                    </div>
                </div>
            </div>

        </div>
        <!--Row For Image and Short Description END-->

        <hr>

        <!--Row for Tab Panel-->
        <div class="row">
            <div class="col-md-1"></div>
            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

                </ul>

                <!-- Tab panes -->

                <div class="tab-content">

                    <div class="col-md-10"></div>
                    <div role="tabpanel" class="tab-pane active" id="home">

                        <p></p>

                        <div class="col-md-8">
                            <ul>
                                <li>
                                    <p><?php echo $row['product_desc']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">


                    </div>

                </div>


            </div>
            <!--Row for Tab Panel-->

        </div>
        <?php endwhile; ?>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <p><br /></p>
        <!---------- footer ----->

    </div><!-- col-md-9 ends here -->
    <div class="panel-footer col-md-3">
        <span style="color: #EBDEB4">&copy; 2021 Copyright:</span> Sprinter.com
    </div>
