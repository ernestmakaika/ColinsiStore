<?php
require('../classes/product_class.php');


//brand controllers
function add_brand_controller($brandname){
    //create an instance of the Product class
    $brand_instance = new Product();
    //call the add_brand method from the product class
    return $brand_instance->add_brand($brandname);
}

function update_one_brand_controller($brand_id,$brandname){
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the update_one_brand method from the product class
    return $brand_instance->update_one_brand($brand_id,$brandname);

}

function delete_one_brand_controller($brand_id){
    //create an instance of the product class
   $brand_instance = new Product();
   //call the delete_one_brand method from the class
   return $brand_instance-> delete_one_brand($brand_id);

}

function select_one_brand_controller($brand_id){
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the select_one_brand method from the product class
    return $brand_instance->select_one_brand($brand_id);

}

function select_all_brands_controller(){
    // create an instance of the Product class
    $brand_instance = new Product();
    // call the select_all_brands method from the class
    return $brand_instance->select_all_brands();

}

function select_one_brandname_controller($brandname){
     // create an instance of the Product class
     $brand_instance = new Product();
     // call the select_one_brandname method from the class
     return $brand_instance->select_one_brandname($brandname);
 
}



//category controllers
function add_category_controller($category){
    //create an instance of the Customer class
    $category_instance = new Product();
    //call the add_category method from the product class
    return $category_instance->add_category($category);
}

function select_all_categories_controller(){
    // create an instance of the Product class
    $category_instance = new Product();
    // call the select all categories method from the class
    return $category_instance->select_all_categories();

}

function select_one_category_controller($cat_id){
    // create an instance of the Product class
    $category_instance = new Product();
    // call the select one category method from the class
    return $category_instance->select_one_category($cat_id);

}

function update_one_category_contoller($cat_id, $category){
    // create an instance of the Product class
    $category_instance = new Product();
    // call the update category method from the class
    return $category_instance->update_one_category($cat_id, $category);

}

function delete_one_category_controller($cat_id){
    //create an instance of the product class
   $product_instance = new Product();
   //call the delete_one_category method from the class
   return $product_instance-> delete_one_category($cat_id);

}

function select_one_categoryname_controller($category){
    // create an instance of the Product class
    $category_instance = new Product();
    // call the select_one_categoryname method from the class
    return $category_instance->select_one_categoryname($category);
}



//product controllers
function add_product_controller($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
    // create an instance of the product class
    $product_instance = new Product();
    // call the add_product method form the product class
    return $product_instance->add_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords);
}

function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    //call the select_all_products method from the class
    return $product_instance->select_all_products();
}

function select_one_product_controller($product_id){
    //create an instance of the product class
    $product_instance = new Product();
    //call the select_one_product method from the class
    return $product_instance->select_one_product($product_id);
}

function update_one_product_controller($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
    //create an instance of the product class
    $product_instance = new Product();
    //call the update_one_product method from the class
    return $product_instance-> update_one_product($product_id, $product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords);
}

function delete_one_product_controller($product_id){
    //create an instance of the product class
   $product_instance = new Product();
   //call the delete_one_product method from the class
   return $product_instance-> delete_one_product($product_id);
}

//search products controller

function search_products_controller($searchQuerry){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the search_products method from the class
    return $product_instance->search_products($searchQuerry);
}