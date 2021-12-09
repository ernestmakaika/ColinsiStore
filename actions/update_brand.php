<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();

//check if there's a POST variable updateBrand
if(isset($_POST['updateBrand'])){
 
    // retreive the brand data from the update form
    $brand_id = $_POST['brand_id'];
    $brandname = $_POST['brandname'];
   
    
    $result = update_one_brand_controller($brand_id, $brandname);

    if($result) {

        header('Location: ../admin/brands.php');

    }
        

}