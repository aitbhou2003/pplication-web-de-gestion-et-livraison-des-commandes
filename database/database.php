<?php

class Database
{
    public function connect()
    {
        $password = '';
        $username = 'root';
        $dbname = 'livraison_commandes';
        try {
            $dsn = 'mysql:host=localhost;dbname=' . $dbname;
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connectio success";
            return $conn ;
        } catch (Exception $e) {
            die('no connection' . $e->getMessage());
        }
    }
}


// $conn = new Database();

// $conn->connect();