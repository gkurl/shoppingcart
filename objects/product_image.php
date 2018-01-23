<?php
//product image object/class

class productImage {

    //DB and table name

    private $conn;
    private $table_name="product_images";

    //object properties

    public $id;
    public $product_id;
    public $name;
    public $timestamp;

    //constructor for DB

    public function __construct($db)
    {
        $this->conn=$db;
    }

}