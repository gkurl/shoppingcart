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

    function read($from_record_num, $records_per_page){
        //Select prods query

        $query = "SELECT id, name, description, price
        FROM
            ". $this->table_name ." ORDER BY created DESC LIMIT ?, ?";
        //prepare query

        $stmt = $this->conn->prepare($query);

        //bind limit clause variables
        $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
        $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);

        //execute

        $stmt->execute();

        //return values

        return $stmt;

    }
}