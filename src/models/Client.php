<?php
namespace Src\Models;
include 'User.php';
class Client extends User
{
    public function __construct($nom, $prenom, $email, $password, $phone, $ville, $codePostale, $role)
    {
        parent::__construct($nom, $prenom, $email, $password, $phone, $ville, $codePostale, $role);
    }
}

// $client = new Client('abdellah','aitbhou','abde@gmail.com','123','098738','tantan',
// '37823873','admin');
// var_dump($client);
