<?php

require('../controllers/customer_controller.php');

// check for a POST variable with the name 'register'
if(isset($_POST['register'])){
    // retrieve the name, description and quantity from the form submission
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_pass = password_hash($_POST['customer_pass'], PASSWORD_DEFAULT);
    $customer_country = $_POST['customer_country'];
    $customer_city = $_POST['customer_city'];
    $customer_contact = $_POST['customer_contact'];

    // check if the email is already associated with someone's account
    $customer = select_one_customer_email_controller($customer_email);
    $existingCustomer = $customer['customer_email'];

    if ($existingCustomer){
        $_SESSION['error'] = 'The email used already exists. Please use a different one.';
        $error_message = $_SESSION['error'];
        echo "<script>alert('$error_message');window.location.href = '../login/signup.php';</script>";
    }

    else{
        // call the add_customer_controller function and add a new customer
        $result = add_customer_controller($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact);
        if($result === true) {
            echo "successful";
            header("Location: ../login/login.php");
        }
        else{
            echo ("<script>alert('Could not create account. Please try again.'); window.location.href = '../login/signup.php';</script>");
        }
    }
}
?>