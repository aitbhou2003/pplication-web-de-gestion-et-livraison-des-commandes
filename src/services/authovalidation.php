<?php
require_once '..\repositories\authrRespositories.php';
if (!isset($_SESSION)) {
    session_start();
}
class Authovalidation
{
    private AuthrRespositories $auth;
    public function __construct(AuthrRespositories $auth)
    {
        $this->auth = $auth;
    }

    public function login($email, $password)
    {
        if ($this->validateLogin($email, $password)) {
            $this->auth->checkLogin($email, $password);
        }
    }


    public function register($email, $password, $confirmPassword, $nom, $prenom, $role)
    {
        if ($this->validateSignUp($email, $password, $confirmPassword, $nom, $prenom, $role)) {
            $this->auth->checkSigneUp($email, $password, $nom, $prenom, $role);
        }

    }
    private function validateLogin($email, $password)
    {
        $this->validateEmail($email);
        $this->validatePassword($password);
        return true;


    }



    private function validateSignUp($email, $password, $confirmPassword, $nom, $prenom, $role)
    {
        $this->validateEmail($email);
        $this->validateTwoPassword($password, $confirmPassword);
        $this->validateNom($nom);
        $this->validatePrenom($prenom);
        $this->validateRole($role);
        return true ;
    }






    private function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "wrong email";
            return false;
        } else {
            return true;
        }
    }

    private function validateNom($nom)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nom) or empty($nom)) {
            echo "unvalid nom";
            return false;
        } else {
            return true;
        }

    }

    private function validatePrenom($prenom)
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $prenom) or empty($prenom)) {
            echo "unvalid prenom";
            return false;
        } else {
            return true;
        }

    }

    private function validatePassword($password)
    {
        if (
            !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)
            or empty($password)
        ) {
            echo "invalid password";
            return false;
        } else {
            return true;
        }
    }

    private function validateRole($role)
    {
        if (empty($role)) {
            echo "please chose a role";
            return false;
        } else {
            return true;
        }
    }

    private function validateTwoPassword($password, $confirmPassword)
    {
        if (!$this->validatePassword($password)) {
            return false;
        }
        
        if (!$this->validatePassword($confirmPassword)) {
            return false;
        }
        
        if ($password !== $confirmPassword) {
            echo "Passwords do not match<br>";
            return false;
        }
        
        return true;
    }
}


// $validation = new Authovalidation();
// $validation->login('abdellahaitbhou@gmail.com', 'Abdellah33@.');

