<?php
namespace Src\Models;
include 'User.php';
class Livreur extends User
{
    private $Type_Vehicule;
    private $matrecule;
    public function __construct($nom, $prenom, $email, $password, $phone, $ville, $codePostale, $role)
    {
        parent::__construct($nom, $prenom, $email, $password, $phone, $ville, $codePostale, $role);
    }

}