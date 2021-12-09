<?php

require('../settings/core.php');
require('../controllers/product_controller.php');

check_login();
if (check_permission() != 1) {

  //redirect to store.php
  header('Location: ../views/store.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Product</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
    <!-- Preloader start -->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
        <!-- Preloader end -->
        <!-- Main wrapper start -->
    <div id="main-wrapper">
            <!-- Nav header start -->
        <div class="nav-header">
            
        </div>
            <!-- Nav header end -->
            <!-- Header start -->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                    </div>
                </div>
            </div>
        </div>
            <!-- Sidebar start -->
        <?php include('sidebar.php'); ?>  
            <!-- Sidebar end -->

            <!-- Content body start -->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Product</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide"  enctype="multipart/form-data" action="../actions/add_product.php" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="category">Categories <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="product_cat" required="required">
                                                    <option value="">--Select Product Category--</option>
                                                    <?php 
                                                        $categories = select_all_categories_controller();
                                                        foreach($categories as $category){

                                                    ?>
                                                    <option value="<?php echo $category['cat_id']; ?>"> <?php echo $category['cat_name'];?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="brand">Brand <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="product_brand" required="required">
                                                    <option value="">--Select Product Brand--</option>
                                                    <?php 
                                                        $brands = select_all_brands_controller();
                                                        foreach($brands as $brand){

                                                    ?>
                                                    <option value="<?php echo $brand['brand_id']; ?>"> <?php echo $brand['brand_name'];?></option>

                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="product_title">Product Title <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="product_title" placeholder="Product title" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="product_price">Product price <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="product_price" placeholder="Product price" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="product_desc">Product description <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control"  name="product_desc" rows="5" placeholder="Product description" required="required"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="product_image">Product image </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control"  name="product_image" placeholder="Product image" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="product_keywords">Product keywords <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control"  name="product_keywords" placeholder="Product keywords" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="addProduct">Add Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!-- Content body end -->
        <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
            <p>Copyright &copy; 2021</p>
            </div>
        </div>
        <!-- Footer end -->
 
    </div>

        <!-- Main wrapper end -->
        <!-- Scripts -->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>

</body>

</html>