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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles/style.css" >    
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
                        <a href="checkout.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Goto Cart</a>
                    </li>
                    <li>
                        <a href="login.php">login</a>
                    </li>
                </ul>

            </div>

        </div>

    </div>

    <div class="navbar navbar-default" id="navbar"> <!-------------------------------------- navbar navbar default start-->
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <img src="admin_area/slider_images/logo.png" alt="MALL 9 Logo" class="hidden-xs">
                    <img src="admin_area/slider_images/logo-small.png" alt="MALL 9 Logo" class="visible-xs">
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
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
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

    <div id="content">
        <div class="container"><!--container start-->
            <div class="col-md-12"><!--col-md-12 start-->
                <ul class="breadcrumb"><!--breadcrumb start-->
                    <li><a href="index.php">Home</a></li>
                     <li>Shop</li>
                </ul><!--braeadcrumb finish-->
            </div><!--col-md-12 finish-->

            <div class="col-md-3"><!--col-md-3 start-->
                <?php
                include("includes/sidebar.php");
                ?>
            </div><!--col-md-3 finish-->
        
            <div class="col-md-9"><!--col-md-9 start-->
                <div class="row" id="productmain">
                    <div class="col-sm-6"><!--col-sm-6 slider start-->
                        <div id="mainimage">


                            <div id="myCarousel" class="carousel slide"  data-ride="carousel">
                                <ol class="carousel-indicators">

                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>

                                </ol> 
                                <div class="carousel-inner"><!--carousel inner start-->
                                    <div class="item active">
                                        <img src="admin_area/product_images/1.jpg" class="img-responsive">
                                        
                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/2.jpg" class="img-responsive">

                                    </div>
                                    <div class="item">
                                        <img src="admin_area/product_images/1.jpg" class="img-responsive">

                                    </div>
                                </div><!--carousel inner finish-->      
                            

                                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only"> Previous</span>
                                </a>
                            
                                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only"> Next</span>
                                </a>
                            </div>
                        
                        
                        </div>                
                    </div><!--col-sm-6 slider finish-->
                    <div class="col-sm-6">
                        <div class="box"><!--Box Start-->
                            <h1 class="text-center">Mardaz Pack of 5-multi colour cotton V-Neck T-shirts for men</h1>

                                <form action="details.php" method="post" class="form-horizontal"><!--Form Start-->
                                 <div class="form-group"><!--form-group start-->
                                     <label class="col-md-5" class="control-label">Product Quantity</label>
                                     <div class="col-md-7"><!--col-md-7 start-->
                                         <select name="product_qty" class="form-control">
                                            <options>1</options>
                                            <options>2</options>
                                            <options>3</options>
                                            <options>4</options>
                                            <options>5</options>
                                         </select>
                                     </div><!--col-md-7 finish-->
                                 </div><!--form-group finish-->
                                 <div class="form-group"><!--form-group Start-->
                                     <label class="col-md-5 control-label">Product Size</label>
                                     <div class="col-md-7">
                                         <select name="product_size" class="form-control">
                                            <options>Select a size</options>
                                            <options>Small</options>
                                            <options>Medium</options>
                                            <options>Large </options>
                                            <options>Extra Large</options>
                                         </select>
                                     </div>
                                 </div><!--form-group finish-->
                                 <p class="price">PKR 399</p>
                                 <p class="text-center buttons">
                                     <button class="btn btn-primary" type="submit">
                                         <i class="fa fa-shopping-cart"></i>Add To Cart
                                     </button>
                                 </p>
                            </form><!--Form Finish-->
                        </div><!--Box Finish-->
                        <div class="col-xs-4">
                            <a href="#" id="thumb">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" id="thumb">
                                <img src="admin_area/product_images/2.jpg" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" id="thumb">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                        </div>

                    </div>
                
                
                
                </div>
                <div class="box" id="details"><!-- box product details Start-->
                    <h4>product-details</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nulla voluptatem illum quia atque?
                         Officiis dolorum neque mollitia accusantium ipsam porro. Illum, labore sequi molestiae a nihil 
                         excepturi non fuga quaerat eius ullam voluptas cupiditate culpa! Est cum porro quae?
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam dolore rerum!lorem2
                         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque nulla quam numquam labore vitae.
                    </p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                        <li>Extra Large</li>
                    </ul>
                </div><!-- box product details finish-->


                <div id="row same-height-row"><!--row same-height-row start-->
                    <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 start-->
                        <div class="box same-height headline"><!--box same-height headline start-->
                            <h3 class="text-center">You Also Liked these Products</h3>
                        </div><!--box same-height headline finish-->
                    </div><!--col-md-3 col-sm-6 finish-->
                    <div class="center-responsive col-md-3"><!--center-responsive cocl-md-3 start-->
                        <div class="product same-height">
                            <a href="#">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz Pack of 5-multi colour cotton V-Neck T-shirts for men</a></h3>
                                <p class="price">PKR 350</p>
                            </div>
                        </div>
                    </div><!--center-responsive col-md-3 finish-->

                    <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
                        <div class="product same-height">
                            <a href="#">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz Pack of 5-multi colour cotton V-Neck T-shirts for men</a></h3>
                                <p class="price">PKR 350</p>
                            </div>
                        </div>
                    </div><!--center-responsive col-md-3 finish-->

                    <div class="center-responsive col-md-3"><!--center-responsive col-md-3 start-->
                        <div class="product same-height">
                            <a href="#">
                                <img src="admin_area/product_images/1.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Mardaz Pack of 5-multi colour cotton V-Neck T-shirts for men</a></h3>
                                <p class="price">PKR 350</p>
                            </div>
                        </div>
                    </div><!--center-responsive col-md-3 finish-->
                </div><!--row same-height-row finish-->

            </div><!--col-md-9 finish-->
        
        
        
        </div><!--container finish-->
    </div><!--content finish-->





    <!-- FOOTER START -->

<?php 
    include("includes/footer.php");
?>
<!-- FOOTER FINISH -->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>