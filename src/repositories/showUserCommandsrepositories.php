<?php

use LDAP\Result;
require_once '..\..\database\database.php';
class   ShowUserCommandsrepositories{
    private Database $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function showCommandById($userId){
        $stmt = $this->conn->connect()->prepare("SELECT id,DATE_FORMAT(created_at, '%d/%m/%Y') as MDY,DATE_FORMAT(created_at, '%H:%i') as HM,status FROM commands WHERE user_id = :userId");
        $stmt->execute([':userId' => $userId]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        return $result;

    }

    public function showRecentCommand($userId){
        $stmt = $this->conn->connect()->prepare("SELECT id,DATE_FORMAT(created_at, '%d/%m/%Y') as MDY,DATE_FORMAT(created_at, '%H:%i') as HM,status FROM commands WHERE user_id = :userId ORDER BY created_at asc limit 4");
        $stmt->execute([':userId' => $userId]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        return $result;

    }
}
// $conn = new Database();
// $show = new ShowUserCommandsrepositories($conn);
// $show =$show->showRecentCommand(12);

// var_dump($show);