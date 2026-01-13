<?php

use LDAP\Result;
require_once '..\..\database\database.php';
class CreatCommandRepositorie
{

    private Database $conn;

    public function __construct(Database $conn)
    {
        $this->conn = $conn;
    }

    public function creatCommand($userId, $adressDepart, $adressArrive, $phone, $details, $options)
    {
        $optionsString = is_array($options) ? json_encode($options) : $options;
        $stmt = $this->conn->connect()->
            prepare('INSERT INTO commands (`adressDepart`,`adressArive`,`description`,`optionn`,`user_id`,`phone`) 
        VALUES (:adressDepart,:adressArive,:description,:option,:userId,:phone)');
        $stmt->execute(
            [
                ':adressDepart' => $adressDepart,
                ':adressArive' => $adressArrive,
                ':description' => $details,
                ':option' => $optionsString,
                ':userId' => $userId,
                ':phone' => $phone
            ]
        );

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        header('Location:..\..\public\client\my-orders.php');

        return $result;

    }
}
// // echo 1;

// $conn = new Database();

// $commande = new CreatCommandRepositorie($conn);
// $commande->creatCommand(
//     12,
//     'tantan rue 16 hay biranzarane tantan',
//     'totio ksj 38 iudd 23',
//     '08368873872',
//     'jebkjfwqbfkbqwlfjblqwbflqblfblqbfoiq',
//     'dokke'
// );

// var_dump($commande);