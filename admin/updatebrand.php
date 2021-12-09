<?php

require('../settings/core.php');
require('../controllers/product_controller.php');
check_login();
if (check_permission() != 1) {

  //redirect to store.php
  header('Location: ../views/store.php');

}

$brand = select_one_brand_controller($_GET['brand_id']);
 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Update brand</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
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
        <div class="nav-header"></div>
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
                    <div class="input-group icons"></div>
                </div>
            </div>
        </div>


         <!-- Sidebar start -->
         <?php include('sidebar.php'); ?>    
         <!-- Sidebar end  -->

        <!-- Content body start -->
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="#">Update Brand</a></li>
                    </ol>
                </div>
            </div>
            <!-- Add brand form -->

            <div class="container-fluid"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Update Brand</h4>
                                <div class="basic-form">
                                    <form action="../actions/update_brand.php" method = "post">
                                        <div class="input-group mb-3">
                                            <input type="hidden" class="form-control" name= "brand_id" value="<?php echo $brand['brand_id'] ?>">  
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name= "brandname" value="<?php echo $brand['brand_name'] ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-dark" name="updateBrand" type="submit">Update Brand</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Content body end -->
   
        <div class="footer">
            <div class="copyright">
            <p>Copyright &copy; Designed & Developed by Lifestyle101 2021</p>
            </div>
        </div>
        
    </div>

        <!-- Main wrapper end -->
        <!-- Scripts -->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>