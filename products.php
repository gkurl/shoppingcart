<?php
//connect to db

$database = new Database();
$db = $database->getConnection();

//Initialise products for cart

$product = new Product($db);
$cart_item = new cartItem($db);
$product_image = new productImage($db);

//prevention of undefined index notice

$action = isset($_GET['action'])? $_GET['action'] : "";

//pagination purposes - get current page number if not set default as 1.




include './config/database.php';
include_once './objects/product.php';
include_once './objects/product_image.php';
include_once './objects/cart_item.php';
// set the page title
$page_title = "Products";

//page header include
include './includes/layout_head.php';

//main content goes here

// include footer

include './includes/layout_footer.php';
