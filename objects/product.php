<?php

// product object to handle single product

class Product{

    //DB and table name

    private $conn;
    private $table_name="products";

    //object properties to retrieve from DB

    public $id;
    public $name;
    public $price;
    public $description;
    public $category_id;
    public $category_name;
    public $timestamp;

    //constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }
}