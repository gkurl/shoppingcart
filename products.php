<?php
//connect to db
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
