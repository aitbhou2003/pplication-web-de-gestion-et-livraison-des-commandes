<?php

require_once '..\services\authovalidation.php';
require_once '..\repositories\authrRespositories.php';
require_once '..\..\database\database.php';

if (!isset($_POST)) {
    echo "nothing here";
} else {
    if ($_POST['authType'] == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        var_dump($_POST);
        $database = new Database();
        $authRepo = new AuthrRespositories($database);
        $login = new Authovalidation($authRepo);
        $login->login($email, $password);
    } elseif ($_POST['authType'] == 'register') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];
        $role = $_POST['role'];
        $nom = $_POST['last_name'];
        $prenom = $_POST['first_name'];
        $database = new Database();
        $authRepo = new AuthrRespositories($database);
        $signUp = new Authovalidation($authRepo);
        $signUp->register(
            $email,
            $password,
            $confirmPassword,
            $nom,
            $prenom,
            $role
        );
    } else {
        echo 'nothing';
    }


}