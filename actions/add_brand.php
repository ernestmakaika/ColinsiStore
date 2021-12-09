<?php
require("../controllers/product_controller.php");
require('../settings/core.php');
check_login();

// check for a POST variable with the name 'addBrand'
if(isset($_POST['addBrand'])){

    // retrieve the brand name from the form
    $brandname = $_POST['brandname'];

    $brandInfo = select_one_brandname_controller($brandname);    
    $existingBrand = $brandInfo['brand_name']; 
    
    if ($existingBrand) {
			echo ("<script>alert('The brandname already exists. Please use a different name.'); window.location.href = '../admin/addbrand.php';</script>");
		
	}
   else{

    $result = add_brand_controller($brandname);
   
     header("Location: ../admin/brands.php"); 

   }
    


}




?>