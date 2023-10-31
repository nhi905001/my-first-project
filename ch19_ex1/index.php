<?php
require('util/main.php');

require('model/database.php');
require('model/product_db.php');

/*********************************************
 * Select some products
 **********************************************/

// Sample data
$cat_id = 1;

// Get the products
$products = get_products_by_category($cat_id);

/***************************************
 * Delete a product
 ****************************************/

// Sample data
$product_name = 'Gibson Les Paul';
// Delete the product and display an appropriate messge
// $delete_message = "No rows were deleted.";
$product = get_product_by_name($product_name);
if($product!=null) {
    $product_id = $product['productID'];
    $rs = delete_product($product_id);
    if($rs!=0) {
        $delete_message = "$rs rows was deleted.";
    } else {
        $delete_message = "No rows was deleted.";
    }
} else {
    $delete_message = "There is no product with that name.";
}


/***************************************
 * Insert a product
 ****************************************/

// Sample data
$category_id = 1;
$code = 'telett';
$name = 'Fender Telecaster';
$description = 'NA';
$price = '949.99';
$discount_percent = 10;

// Insert the data
$newProduct = add_product($category_id, $code, $name, $description, $price, $discount_percent);
if($newProduct!=null) {
    $insert_message = "A new product was inserted";
} else {
    $insert_message = "No rows were inserted.";
}


include 'home.php';
?>