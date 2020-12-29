<?php

$db=mysqli_connect("localhost","root","","ecom");
function getPro(){
    global $db;
    $get_product="SELECT * FROM `products` ORDER BY product_id DESC LIMIT 0,8";
    $run_products=mysqli_query($db,$get_product);
    while($row_product=mysqli_fetch_array($run_products)){

        
        $pro_id=$row_product['product_id'];
        $pro_title=$row_product['product_title'];
        $pro_price=$row_product['product_price'];
        $pro_img1=$row_product['product_img1'];
        
        echo"
            <div class='col-md-3 col-sm-6'>
            <div class='product'>
            <a href='details.php?pro_id=$pro_id'>
            <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
            </a>
            <div class='text'>
            <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
            <p class='price'>
                PKR $pro_price
            </p>
            <p class='buttons'>
                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>
                View Details
                </a> 
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fas fa-shopping-cart'></i>
                Add To Cart
                </a>
            
            </p>
            
            </div>
            </div>
            
            </div>
        
        ";

    }
}

// PRODUCT CATEGORIES

function getPcats(){
    global $db;
    $get_p_cats=" SELECT * FROM product_categories";
    $run_p_cats= mysqli_query($db,$get_p_cats);
    while($row_p_cats=mysqli_fetch_array($run_p_cats)){
        $p_cat_id=$row_p_cats['p_cat_id'];
        $p_cat_title=$row_p_cats['p_cat_title'];
        echo " <li> <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a> </li> ";
}
}

//  CATEGORIES

function getCat(){
    global $db;
    $get_cat= " SELECT * FROM `categories` ";
    $run_cat= mysqli_query($db,$get_cat);
    while( $row_cat = mysqli_fetch_array($run_cat)){
        $cat_id=$row_cat['cat_id'];
        $cat_title=$row_cat['cat_title'];
        echo " <li> <a href='shop.php?cat_id=$cat_id'>$cat_title</a> </li> ";
        

    }
}
?>