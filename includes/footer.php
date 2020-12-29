<?php
include("includes/db.php");

?>

<div id="footer"><!--footer section start-->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 START -->
                <h4>Pages</h4>
                <ul>
                    <li><a href="cart.php">Shoppping Cart</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="checkout.php">My Account</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="cart.php">Shoppping Cart</a></li>
                    <li><a href="customer-registration.php">Register</a></li>
                </ul>
                <hr class="hidden-lg hidden-md hidden-sm">

            </div><!--col-md-3 col-sm-6 FINISH -->

            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 START -->
                <h4>Top Prodcut Categories</h4>
                <ul>
                    <?php
                        $get_p_cats="SELECT * FROM product_categories";
                        $run_p_cats=mysqli_query($con,$get_p_cats);
                        while($row_p_cat=mysqli_fetch_array($run_p_cats)){
                            $p_cat_id=$row_p_cat['p_cat_id'];
                            $p_cat_title=$row_p_cat['p_cat_title'];
                            echo "<li><a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a></li>";
                        }

                    ?>
                </ul>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div><!--col-md-3 col-sm-6 FINISH -->

            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 START -->
                <h4>Where To Find Us</h4>
                <p>
                    <strong>MALL-9.com</strong>
                    <br>Abbottabad
                    <br>KPK
                    <br>Pakistan
                    <br>mall_9@gmail.com
                    <br>+92 348 9883726
                </p>
                <a href="contact.php">Goto Contact Us Page</a>
                <hr class="hidden-md hidden-lg hidden-sm">
            </div><!--col-md-3 col-sm-6 FINISH -->

            <div class="col-md-3 col-sm-6"><!--col-md-3 col-sm-6 START -->
                <h4>Get The News</h4>
                <p class="text-muted">
                    subscribe here for getting news of Mall-9 latest Products   
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" name="email" class="form-control">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-default" value="Subscribe">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Stay In Touch</h4>
                <p class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </p>
            </div><!--col-md-3 col-sm-6 FINISH -->
        </div>
    </div>
</div><!--footer section end-->

<div id="copyright"><!--copyright section start-->
    <div class="container">
        <div class="col-md-12">
            <p>&copy; 2020 MALL-9.com</p>
        </div>
    </div>
</div><!--copyright section end-->