<?php
class cartItem{

    //DB connection and name

    private $conn;
    private $table_name="cart_items";

    //Cart item object properties

    public $id;
    public $product_id;
    public $quantity;
    public $user_id;
    public $created;
    public $modified;

    //constructor for DB

    public function __construct($db)
    {
        $this->conn=$db;
    }
}