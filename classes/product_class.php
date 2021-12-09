<?php

require('../settings/connection.php');

//inheriting the methods from connection

class Product extends Connection {

//brand methods
    
//add brand
    function add_brand($brandname){
        //returns true or false
        return $this->query("insert into brands(brand_name) values('$brandname')");
    }

    function update_one_brand($brand_id, $brandname){
		// return true or false
		return $this->query("update brands set brand_name='$brandname' where brand_id = '$brand_id'");
	}

    //delete one brand
    function delete_one_brand($brand_id){
        //returns true or false
        return $this->query("delete from brands where brand_id = '$brand_id'");
    }

    function select_one_brand($brand_id){
		// return associative array or false
		return $this->fetchOne("select * from brands where brand_id='$brand_id'");
	}

    function select_one_brandname($brandname){
        //returns true or false
        return $this->fetchOne("select brand_name from brands where brand_name = '$brandname'");
    }

    
    function select_all_brands(){
        //returns true or false
        return $this->fetch("select * from brands");
    }


//product category methods

function add_category($category){
    // return true or false
    return $this->query("insert into categories(cat_name) values('$category')");
}

function select_all_categories(){
    //returns true or false
    return $this->fetch("select * from categories");
}

function select_one_category($cat_id){
    //returns true or false
    return $this->fetchOne("select * from categories where cat_id = '$cat_id'");
}

function update_one_category($cat_id, $category){
    // return true or false
    return $this->query("update categories set cat_name='$category' where cat_id = '$cat_id'");

}

function delete_one_category($cat_id){
    //returns true or false
    return $this->query("delete from categories where cat_id = '$cat_id'");
}


function select_one_categoryname($category){
    //returns true or false
    return $this->fetchOne("select cat_name from categories where cat_name = '$category'");
}


// products methods

// add product method
    function add_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords){

		return $this->query("insert into products(product_cat, product_brand, product_title, product_price, product_desc, product_image, product_keywords) values('$product_cat', '$product_brand', '$product_title', '$product_price', '$product_desc', '$product_image','$product_keywords')");
	}

// update one product method
    function update_one_product ($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords) {
        // return true or false
        return $this->query("update products set product_cat = '$product_cat', product_brand = '$product_brand', product_title = '$product_title', product_price = '$product_price', product_desc = '$product_desc', product_image = '$product_image', product_keywords = '$product_keywords' where product_id = '$product_id'");

    }

//delete one product method

    function delete_one_product($product_id){
        //returns true or false
        return $this->query("delete from products where product_id = '$product_id'");
    }

//select all products method
//select all products and join with the brands table using an inner join on the brand_id 
//also do an inner join with the categories table on the cat_id
    function select_all_products (){
        //returns true or false
        return $this->fetch("select * from products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id");
    }

//select one product and use an inner join to retrieve its brand and category from respective tables

    function select_one_product($product_id){
        return $this->fetchOne("select * from products inner join brands on product_brand = brand_id inner join categories on product_cat = cat_id where product_id = '$product_id'");
    }

//search products

    function search_products($searchQuerry){

        $sql = "select * from products WHERE product_title LIKE '%$searchQuerry%' OR product_keywords LIKE '%$searchQuerry%'";

        return $this->fetch($sql);

    }

    
}

?>