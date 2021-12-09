<?php
require('../settings/core.php');
require('../controllers/product_controller.php');
check_login();
if (check_permission() != 1) {
    header('Location: ../views/store.php');
  
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Categories</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Categories</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Categories</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Category Name</th>
                                        
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                        $categories = select_all_categories_controller();
                                        foreach($categories as $category){
                                         echo "
                                            <tr>
                                            <tr>
                                            <td>{$category['cat_id']}</td>
                                            <td>{$category['cat_name']}</td>
                                            <td><a href='../admin/updatecategory.php?cat_id={$category['cat_id']}'>Update</a></td>
                                            <td><a href='../actions/delete_category.php?cat_id={$category['cat_id']}'>Delete</a></td>
                                            </tr>
                                            ";
                                            }
                                            ?>

                                       </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content body end  -->
         <!-- Footer start -->
        <div class="footer">
            <div class="copyright">
            <p>Copyright &copy;2021</p>
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

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>