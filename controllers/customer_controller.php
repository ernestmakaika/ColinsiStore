
<?php

require('../classes/customer_class.php');

function add_customer_controller($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the add_customer method from the Customer class
    return $customer_instance->add_customer($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact);

}

function select_one_customer_email_controller($customer_email){
    // create an instance of the Customer class
    $customer_instance = new Customer();
    // call the select_one_customer method from the Customer class
    return $customer_instance->select_one_customer_email($customer_email);
}
?>