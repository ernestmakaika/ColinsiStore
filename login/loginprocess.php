<?php
require('../controllers/customer_controller.php');
require('../settings/core.php');

// check for a POST variable with the name 'login'
if(isset($_POST['login'])){
    // retrieve the email and the password submitted in the login form
    $customer_email = $_POST['customer_email'];
    $customer_pass = $_POST['customer_pass'];
    
    //store all data related to one customer's email in one variable
    $email = select_one_customer_email_controller($customer_email);
    
    // check if an account exists with the given email in the database
    if (empty($email)){
        $_SESSION['error'] = 'there is no account with that email';
        $error_message = $_SESSION['error'];
        echo ("<script>alert('$error_message'); window.location.href = 'login.php';</script>");
    }

    else{//check if the password submitted in the form matches the hash that was stored in the database
        if (password_verify($customer_pass, $email['customer_pass'])){
            $_SESSION['user_id'] = $email['customer_id'];
            $_SESSION['user_role'] = $email['user_role'];
            
            //check if the user is an admin; admin = 1, regular user = 2
            if ($_SESSION['user_role'] == 1){
                header("Location: ../admin/products.php");
            }
            
            if ($_SESSION['user_role'] == 2){
                header("Location: ../views/store.php");
                }
        }
        
        else{
            $_SESSION['error'] = 'Your password was incorrect';
            $error_message = $_SESSION['error'];
            echo "<script>alert('$error_message');window.location.href = 'login.php';</script>";
        }
    }	

}

else{
    $_SESSION['error'] = 'Please enter your login details';
    //check_error();
}

?>