<?php
//Define DB class - use private constants (could do via normal variables also)
class db {
//private const for PHP >= 7.1 servers

/*private const DB_HOST = 'localhost';
private const DB_NAME = 'shoppingcart';
private const DB_USER = 'root';
private const DB_PASSWORD = '';*/

//Normal private variables for PHP < 5.3

private $host = 'localhost';
private $db_name = 'shoppingcart';
private $db_user = 'root';
private $db_pass = '';
public $conn;
//public $conn2;



public function getConnection()
{


            //get and connect to db

         $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);

        } catch (PDOException $exception) {
                echo "Connection Error:" . $exception->getMessage();
            }

            return $this->conn;



       /* $this->conn = null;

        //Create new instance of PDO using $conn object and then try connect to DB using $conn object

        try {
            $this->conn = new PDO("mysql:host=" . $this::DB_HOST . ";dbname=" . $this::DB_NAME, $this::DB_USER, $this::DB_PASSWORD);

        } catch (PDOException $exception) {

            echo "Connection Error:" . $exception->getMessage();

        }

        return $this->conn;
    }*/

}


//get and connect to db - PHP versions above 7.1

/*public function getDatabaseConnection()
{

    if (defined('PHP_VERSION') >= 7.1) {

        //default value or "state" for $conn = null

        $this->conn = null;

        //Create new instance of PDO using $conn object and then try connect to DB using $conn object

        try {
            $this->conn = new PDO("mysql:host=" . $this::DB_HOST . ";dbname=" . $this::DB_NAME, $this::DB_USER, $this::DB_PASSWORD);

        } catch (PDOException $exception) {

            echo "Connection Error:" . $exception->getMessage();

        }


    }
}*/


}
