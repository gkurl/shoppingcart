<?php
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
//connect to db

$database = new Database();
$db = $database->getConnection();

//Initialise products for cart

$product = new Product($db);
$cart_item = new cartItem($db);
$product_image = new productImage($db);

//prevention of undefined index notice

$action = isset($_GET['action'])? $_GET['action'] : "";

//for pagination

$page = isset($_GET['page']) ? $_GET['page'] : 1; //pagination purposes - get current page number if not set default as 1.
$records_per_page = 6;  //set number of records/rows per page
$from_records_num = ($records_per_page * $page) - $records_per_page; //Calculation for query LIMIT clause

//Read all products from database
$stmt=$product->read($from_records_num, $records_per_page);

//Count number of retrieved products

$num = $stmt->rowCount();

//if products retrieved more than 0

if($num>0){
    //for paging purposes this is required
    $page_url="products.php?";
    $total_rows=$product->count();

    //show products
    include_once "read_products_template.php";
}

//tell user if no products displayed
else{
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-danger'> No Products could be found.</div>";
    echo "</div>";
}


