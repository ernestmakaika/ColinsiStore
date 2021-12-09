<?php

require("../controllers/cart_controller.php");
require('../settings/core.php');
//check_login();

if(isset($_POST['addToCart'])){

    check_login(); 
    $product_id = $_POST['product_id'];
    $ip_address = $_SERVER['REMOTE_ADDR']; 
    $customer_id = $_SESSION['user_id'];

    //set the default quantity to 1 using a tenary operator if the user does not specify

    $quantity = $_POST['quantity'] ? : 1;

    //select an existing product from the database and store results in a variable
    $existing = select_one_item_controller($customer_id, $product_id);

    //check if a product is already in the cart. if it is already in the cart,  update its quantity in the database

    if ($existing){

        $new_quantity = $existing['qty'] + $quantity;
        $updated_qty = update_quantity_controller($product_id, $customer_id, $new_quantity);
            
        if($updated_qty){
        header("Location:../views/cart.php");

        }
        
        else{
            echo ("<script>alert('Could not add the product to cart'); window.location.href = '../views/store.php';</script>");
        }

    }

    else{

        //add the product to the cart if the prodcut is not there
        $result = add_to_cart_controller($product_id, $ip_address, $customer_id, $quantity); 

         if ($result){
             header("Location: ../views/cart.php");
        
         }else {
             //redirect the user to the store front
            echo ("<script>alert('Could not add the product to cart'); window.location.href = '../views/store.php';</script>");
         } 

    }   
}
   
?>