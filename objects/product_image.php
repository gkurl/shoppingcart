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
    //Read the first product image related to a product
    public function readFirst(){

        //Select query

        $query = "SELECT id, product_id, name
                  FROM  ". $this->table_name . " WHERE product_id = ?
                  ORDER BY name DESC
                  LIMIT 0, 1";

        //prep query stmt
        $stmt = $this->conn->prepare($query);

        //sanitise
        $this->id=htmlspecialchars(strip_tags($this->id));

        //bind product id variable
        $stmt->bindParam(1, $this->product_id);

        //execute query
        $stmt->execute();

        //return values
        return $stmt;
    }

}