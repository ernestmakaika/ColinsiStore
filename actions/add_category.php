<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();

if(isset($_POST['addCategory'])){

    // retrieve the category name from the form
    $category = $_POST['category_name'];
    
    //retrived a category's info and store results in a variable categoryInfo
    $categoryInfo = select_one_categoryname_controller($category);

    $existingCategory = $categoryInfo['cat_name']; 

	if ($existingCategory) {
        echo ("<script>alert('The category already exists. Please use a different name.'); window.location.href = '../admin/addcategory.php';</script>");		
	}

    else {

        $result = add_category_controller($category);
        header("Location: ../admin/categories.php");

    }
}