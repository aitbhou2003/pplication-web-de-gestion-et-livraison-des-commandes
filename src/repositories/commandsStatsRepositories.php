<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once '..\..\database\database.php';
class CommandsStatsRepositories
{
    private Database $conn;
    public function __construct(Database $conn)
    {
        $this->conn = $conn;
    }

    public function  enCours($userId){
        $stmt = $this->conn->connect()->prepare("SELECT COUNT(id) FROM commands WHERE user_id = :id and status = 'En cours'");
        $stmt->execute([':id'=>$userId]);
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        return $result;
    }

    public function  terminees($userId){
        $stmt = $this->conn->connect()->prepare("SELECT COUNT(id) FROM commands WHERE user_id = :id and status = 'terminées'");
        $stmt->execute([':id'=>$userId]);
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        return $result;
    }

    public function enAttende($userId){
        $stmt = $this->conn->connect()->prepare("SELECT COUNT(id) FROM commands WHERE user_id = :id and status = 'En attente'");
        $stmt->execute([':id'=>$userId]);
        $result = $stmt->fetch(PDO::FETCH_COLUMN);
        return $result;
    }
}
// $conn = new Database();
// $encours = new CommandsStatsRepositories($conn);
// echo $encours->enCours(12);
