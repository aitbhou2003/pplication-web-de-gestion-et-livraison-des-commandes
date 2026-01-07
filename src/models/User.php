<?php 
namespace Src\Models;

class User{
    protected $nom ;
    protected $prenom;
    protected $email;
    protected $password;
    protected $phone ;
    protected $ville;
    protected $codePostale;
    protected $role;

    public function __construct($nom,$prenom,$email,$password,$phone,$ville,$codePostale,$role){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone ;
        $this->ville = $ville;
        $this->codePostale = $codePostale;
        $this->role = $role;
    }
}