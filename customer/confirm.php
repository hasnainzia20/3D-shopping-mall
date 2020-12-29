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
                        <a href="../customer_registration.php"> Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="../cart.php">Goto Cart</a>
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
                    <img src="../admin_area/slider_images/logo.jpg" alt="MALL 9 Logo" class="hidden-xs">
                    <img src="../admin_area/slider_images/logo-small.jpg" alt="MALL 9 Logo" class="visible-xs">
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
                            <a href="../index.php">Home</a>
                        </li>
                        <li >
                            <a href="../shop.php">Shop</a>
                        </li>
                        <li class="active">
                            <a href="my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="../cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="../about.php">About Us</a>
                        </li>
                        <li>
                            <a href="../services.php">Services</a>
                        </li>
                        <li>
                            <a href="../contactus.php">Contact Us</a>
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
                     <li>My Account</li>
                </ul><!--braeadcrumb finish-->
            </div><!--col-md-12 finish-->

            <div class="col-md-3"><!--col-md-3 start-->
                <?php
                include("includes/sidebar.php");
                ?>
            </div><!--col-md-3 finish-->
            <div class="col-md-9 ">
                <div class="box">
                    <h1 class="p-2">Please Confirm Your Payment</h1>
                    <form action="confirm.php" method="post"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Invoice Number</label>
                        <input type="text" name="invoice_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="text" name="amount" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Select Payment Mode</label>
                        <select name="payment_mode" class="form-control">
                            <option value="">Bank Transfer</option>
                            <option value="Stripe">Stripe</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Transaction Number</label>
                        <input type="text" name="trfr_number" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
                            Confirm Payment
                        </button>
                    </div>
                    </form> 
                </div>
            </div>

            
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