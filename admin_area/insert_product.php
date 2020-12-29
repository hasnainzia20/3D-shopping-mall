<?php
include("../admin_area/includes/db.php");
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
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
    <title>Insert Product</title>
</head>
<body>
    <div class="row"><!--row start-->

        <div class="col-lg-12"><!--col-lg-12 start-->
            <div class="breadcrumb"><!--breadcrumb start-->
                <ol class="active">
                    <i class="fas fa-dashboard"></i>
                    Dashboard / Insert Product
                </ol>
            </div><!--breadcrumb finish-->
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><!--panel-heading start-->
                            <h3 class="panel-title">
                                <i class="fas fa-money fa-w"></i>Insert Product
                            </h3>
                        </div><!--panel-heading finish  -->
                        <div class="panel-body">
                            <form  action="insert_product.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Title</label>
                                <input type="text" name="product_title" class="from-" required>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Category</label>
                                <select name="product_cat" class="form-control" >
                                    <option>Select a Product Category</option>
                                    <?php
                                    $get_p_cats="SELECT * FROM product_categories";
                                    $run_p_cats=mysqli_query($con,$get_p_cats);
                                    while($row=mysqli_fetch_array($run_p_cats)) {
                                        $id = $row['p_cat_id'];
                                        $cat_title = $row['p_cat_title'];
                                        echo"
                                         <option value='$id'> $cat_title </option>"; 
                                       }
                                    ?>



                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Categories</label>
                                <select name="cat" class="form-control">
                                    <option class="col-md-3">Select Categories</option>
                                    <?php
                                        $get_cats="SELECT * FROM categories";
                                        $run_cats=mysqli_query($con,$get_cats);
                                        while($row=mysqli_fetch_array($run_cats)) {
                                            $id = $row['cat_id'];
                                            $cat_title = $row['cat_title'];
                                            echo"
                                                <option value='$id'> $cat_title </option>
                                            ";
                                        }
    
                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Image 1</label>
                                <input type="file" name="product_img1" class="from-control" required>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Image 2</label>
                                <input type="file" name="product_img2" class="from-control" required>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Image 3</label>
                                <input type="file" name="product_img3" class="from-control" required>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Price</label>
                                <input type="text" name="product_price" class="from-control" required>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Keyword</label>
                                <input type="text" name="product_keyword" class="from-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Description</label>
                               <textarea name="product_desc" class="form-control" cols="19" rows="6"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div><!--col-lg-12-->
    </div><!--row finish-->

    

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $product_title=$_POST['product_title'];
    $product_cat=$_POST['product_cat'];
    $cat=$_POST['cat'];
    $product_price=$_POST['product_price'];
    $product_desc=$_POST['product_desc'];
    $product_keyword=$_POST['product_keyword'];

    $product_img1=$_FILES['product_img1']['name'];
    $product_img2=$_FILES['product_img2']['name'];
    $product_img3=$_FILES['product_img3']['name'];

    $temp_name1=$_FILES['product_img1']['tmp_name'];
    $temp_name2=$_FILES['product_img2']['tmp_name'];
    $temp_name3=$_FILES['product_img3']['tmp_name'];

    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_product= ("INSERT INTO 
    products(p_cat_id,cat_id,dated,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keyword) VALUES
    ('$product_cat','$cat',CURDATE(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keyword')");

    $run_product=mysqli_query($con,$insert_product);
  
    if($run_product){
        echo"<script>alert('Product Inserted Successfully')</script>";
        echo"<script>window.open('insert_product.php')</script>";
    }
// echo $product_title;
// echo $product_cat;
// echo $cat;
// echo $product_price;
// echo $product_desc;
// echo $product_keyword;

}


?>
