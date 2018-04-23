<?php
require_once ('./config/database.php');
require_once ('./includes/layout_head.php');
require_once ('./includes/layout_footer.php');

error_reporting(E_ALL);

class getData {

    private $conn;

    function getRow(){

       $this->conn = new Database();
       $dbh = $this->conn->getConnection();

        $query = $dbh->prepare("SELECT * FROM products");
        $query->execute();


        while ($result = $query->fetch()){
            echo "<pre>";
            print_r ($result['name']);
            echo "</pre>";
        }

        $dbh = null;

        }
}

$a = new getData();
$a->getRow();









