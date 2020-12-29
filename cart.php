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
                        <li >
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li class="active">
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
                     <li>Cart</li>
                </ul><!--braeadcrumb finish-->
            </div><!--col-md-12 finish-->
            
            <div class="col-md-9"><!--col-md-9 start-->
                <div class="box" id="cart">
                    <form action="cart.php" method="post" enctype="multipart-form-data" >
                        <h1>Shopping Cart</h1>
                        <p class="text-muted">Currently You Have 3 items in your cart</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                          <th colspan="2">Product</th>
                                          <th>Quantity</th>
                                          <th>Unit Price</th>
                                          <th>Size</th>
                                          <th colspan="1">Delete</th>
                                          <th colspan="1">Sub Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="admin_area/product_images/1.jpg"></td>
                                        <td>Mardaz Pack of 5 Multicolor Cotton V-Neck T-Shirts</td>
                                        <td>2</td>
                                        <td>price</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]"></td>
                                        <td>PKR 350</td>
                                    </tr>
                                    <tr>
                                        <td><img src="admin_area/product_images/1.jpg"></td>
                                        <td>Mardaz Pack of 5 Multicolor Cotton V-Neck T-Shirts</td>
                                        <td>2</td>
                                        <td>price</td>
                                        <td>Large</td>
                                        <td><input type="checkbox" name="remove[]"></td>
                                        <td>PKR 350</td>
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" >Total</th>
                                        <th colspan="2">PKR 398</th>
                                    </tr>
                                </tfoot>

                            </table>
                        </div><!-- table responsive finish-->
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>Continue Shopping
                                </a>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name="update" value="update Cart">
                                    <i class="fa fa-referesh">Update Cart</i>
                                </button>
                                <a href="checkout.php" class="btn btn-primary">
                                    Proceed to Checkout
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
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
            </div><!--col-md-9 end-->

            <div class="col-md-3"><!--col-md-3 start-->
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shipping and Additinal Costs are calculated based on the values you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <th>PKR 399</th>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling Cost</td>
                                    <td>PKR 0</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>PKR 0</td>
                                </tr>
                                <tr class="Total">
                                    <td>Total</td>
                                    <th>PKR 399</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>                        
                    </table>
                </div>
            </div><!--col-md-3 end-->
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