<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();

// update category
if(isset($_POST['updateCategory'])){
 
    // retreive the data from the update category form
    $cat_id = $_POST['cat_id'];
    $categoryname = $_POST['categoryname'];
    
    $result = update_one_category_contoller($cat_id, $categoryname);
    if($result) {
        header('Location: ../admin/categories.php');

    }
        

}