<?php

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
</head>
<body>
    
    <div class="row">    <!-- row Begins -->
        
        <div class="col-lg-12">    <!-- col-lg-12 Begins -->
            
            <ol class="breadcrumb">    <!-- breadcrumb Begins -->
                
                <li class="active">    <!-- active Begins -->
                    
                    <i class="fa fa-dashboard"></i> Dashboard/ Insert Products
                    
                </li>    <!-- active Finishs -->
                
            </ol>    <!-- breadcrumb Finishs -->
            
        </div>    <!-- col-lg-12 Finishs -->
        
    </div>    <!-- row Finishs -->
    
    <div class="row">    <!-- row Begins -->
        
        <div class="col-lg-12">    <!-- col-lg-12 Begins -->
            
            <div class="panel panel-default">    <!-- panel panel-default Begins -->
                
                <div class="panel-heading">    <!-- panel-heading Begins -->
                    
                    <h3 class="panel-title">   <!-- panel-title Begins -->
                         
                        <i class="fa fa-money fa-fw"></i> Insert Product
                        
                    </h3>    <!-- panel-title Finishs -->
                    
                </div>    <!-- panel-heading Finishs -->
                
                <div class="panel-body">    <!-- panel-body Begins -->
                    
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">    <!-- form-horizontal Begins -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label">Product Title</label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_title" type="text" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Category </label>
                            
                            <div class="col-md-6">
                                
                                <select name="product_cat" class="form-control">
                                    
                                    <option> Select a Category Product </option>
                                    
                                    <?php
                                    
                                    $get_p_cats = "select * from product_categories";
                                    $run_p_cats = mysqli_query($con,$get_p_cats);
                                    
                                    while($row_p_cats=mysqli_fetch_array($run_p_cats))
                                    {
                                        $p_cat_id = $row_p_cats['p_cat_id'];
                                        $p_cat_title = $row_p_cats['p_cat_title'];
                                        
                                        echo "
                                        
                                        <option value='$p_cat_id'> $p_cat_title </option>
                                        
                                        ";
                                        
                                    }
                                    
                                    ?>
                                    
                                </select>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs --> <!--  muammo boir shu yerdan 137 gacha-->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Category </label>
                            
                            <div class="col-md-6">
                                
                                <select name="cat" class="form-control">
                                    
                                    <option> Select a Category </option>
                                    
                                    <?php
                                    
                                    $get_cat = "select * from categories";
                                    $run_cat = mysqli_query($con,$get_cat);
                                    
                                    while($row_cat=mysqli_fetch_array($run_cat))
                                    {
                                        $cat_id = $row_cat['cat_id'];
                                        $cat_title = $row_cat['cat_title'];
                                        
                                        echo "
                                        
                                        <option value='$cat_id'> $cat_title </option>
                                        
                                        ";
                                        
                                    }
                                    
                                    ?>
                                    
                                </select>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                         <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Image 1 </label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_img1" type="file" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Image 2 </label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_img2" type="file" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label">Product Image 3</label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_img3" type="file" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Price </label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_price" type="text" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                         <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Keywords </label>
                            
                            <div class="col-md-6">
                                
                                <input name="product_keywords" type="text" class="form-control" required>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                         <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"> Product Desc </label>
                            
                            <div class="col-md-6">
                                
                                <textarea name="product_desc" id="" cols="19" rows="6" class="form-dontrol"></textarea>
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                        <div class="form-group">    <!-- form-group Begins -->
                            
                            <label class="col-md-3 control-label"></label>
                            
                            <div class="col-md-6">
                                
                                <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                                
                            </div>
                            
                        </div>    <!-- form-group Finishs -->
                        
                    </form>    <!-- form-horizontal Finishs -->
                    
                </div>    <!-- panel-body -->
                
            </div>    <!-- panel panel-default Finishs -->
            
        </div>    <!-- col-lg-12 Finishs -->
        
    </div>    <!-- row Finishs -->
    
    
    
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    
</body>
</html>

<?php

if(isset($_POST['submit']))
{
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$temp_name1");
    move_uploaded_file($temp_name2,"product_images/$temp_name2");
    move_uploaded_file($temp_name3,"product_images/$temp_name3");
    
    $insert_product = "insert into products (p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc) values('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product)
    {
        echo"<script>alert('Product has been insert successfully')</script>";
        echo"<script>window.open('insert_product.php','_self')</script>";
            
    }
    
}

?>























<!---->