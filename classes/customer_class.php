<?php

require('../settings/connection.php');

// inherit the methods from the connection.php file
class Customer extends Connection{ 
    function add_customer($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city, $customer_contact){
		// returns true or false
		return $this->query("insert into customer(customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role) values('$customer_name', '$customer_email', '$customer_pass', '$customer_country', '$customer_city', '$customer_contact', 2)");
	}

    function select_one_customer_email($customer_email){
		// return associative array or false
		return $this->fetchOne("select * from customer where customer_email='$customer_email'");
	}
}
?>