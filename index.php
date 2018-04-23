<?php
require_once ('./config/database.php');
require_once ('./includes/layout_head.php');
require_once ('./includes/layout_footer.php');

error_reporting(E_ALL);

class getData {

    function getRow(){

       $conn = new Database();
       $dbh = $conn->getConnection();

        $query = $dbh->prepare("SELECT * FROM products WHERE id = 27 LIMIT 1");
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









