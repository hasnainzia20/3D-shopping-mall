<?php
include("includes/db.php");
include("functions/functions.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/style.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>MALL-9</title>
</head>
<body>
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success" >Welcome Guest</a>
                <a href="#" >Shopping Cart Total Price: PKR 500, Total Items 2</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Goto Cart</a>
                    </li>
                    <li>
                        <a href="../login.php">login</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="navbar navbar-default" id="navbar"> <!-------------------------------------- navbar navbar default start-->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <img src="admin_area/slider_images/logo.jpg" alt="MALL 9 Logo" class="hidden-xs">
                    <img src="admin_area/slider_images/logo-small.jpg" alt="MALL 9 Logo" class="visible-xs">
                </a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify" ></i>
                </button>

                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search" ></i>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav"><!-----------------------------------------------------------padding nav start-->
                    <ul class="nav navbar-nav navbar-left" >
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="services.php">Services</a>
                        </li>
                        <li>
                            <a href="contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div><!--------------------------------------------------------------------------------padding nav end-->
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>4 items in Cart</span>
                </a>
                <div class="navbar-collapse collapse right">   
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search"> 
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form class="navbar-form" method="get" action="result.php">
                        <div clss="input-group">
                            <input type="text" name="user_query" placeholder="Search" class="form-control" required>
                            
                            <span class="input-group-append">
                                <button type="submit" value="Search" name="search" class="btn btn-primary">
                                    <i class="fas fa-search" ></i>
                                </button>
                            </span>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-------------------------------------------------------------------------------- navbar navbar default finish-->

    <div class="container" id="slider"><!----------------------------------------------------- slider container start-->
        <div class="col-md-12"><!----------------------------------------------------- col-md-12 start-->
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!----------------------------------------- carousel slide start-->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner"><!-------------------------------------------------- Carousel Inner start-->
                    <?php
                    $get_slider= "select * from slider LIMIT 0,1";
                    $run_slider= mysqli_query($con,$get_slider);
                    while($row=mysqli_fetch_array($run_slider)){
                        $slider_name=$row['slider_name'];
                        $slider_image=$row['slider_image'];
                        echo "
                        <div class='item active'>
                        <img src='admin_area/slider_images/$slider_image'>
                        </div>
                        ";
                    }
                    
                    ?>
                    <?php
                        $get_slider="select * from slider LIMIT 1,3";
                        $run_slider=mysqli_query($con,$get_slider);
                        while($row=mysqli_fetch_array($run_slider)){
                            $slider_name=$row['slider_name'];
                            $slider_image=$row['slider_image'];
                            echo "
                                <div class='item'>
                                <img src='admin_area/slider_images/$slider_image'>
                                </div>
                            ";
                        }
                    ?>
                    
                </div><!-------------------------------------------------- Carousel Inner finish-->

                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div><!-------------------------------------------------- Carousel slide finish-->
        </div><!----------------------------------------------------- col-md-12 finish-->
    </div><!----------------------------------------------------- slider container finish-->

    <div id="advantage"><!----------------------------------------------------- advantage start-->
        <div class="container"><!----------------------------------------------------- container start-->
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST</br> PRICES</a></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero. Lorem, ipsum dolor. </p>
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GAURANTEED FROM US</a></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero. Lorem, ipsum dolor. </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero. Lorem, ipsum dolor. </p>
                    </div>
                </div>


            </div>
        </div><!----------------------------------------------------- container finish-->
    </div><!----------------------------------------------------- advantage finish-->

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest This week</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container">
        <div class="row">
            <?php
                getPro();
            ?>
        </div>
    </div>

<!-- FOOTER START -->

<?php 
    include("../3D-shopping-mall/includes/footer.php");
?>
<!-- FOOTER FINISH -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>