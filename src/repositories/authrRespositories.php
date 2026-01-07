<?php
session_start();
require_once '..\..\database\database.php';
class AuthrRespositories
{
    private Database $conn;
    public function __construct(Database $conn)
    {
        $this->conn = $conn;
    }
    public function checkLogin($email, $password)
    {
        // echo "hello login";
        $stmt = $this->conn->connect()->prepare('SELECT * FROM users WHERE email = :email ');
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
        if ($user && $password == $user['password']) {
            // echo 'hello  ' . $user['nom'] . '  your role is ' . $user['role'];
            // var_dump($user['role'] == 'admin');
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['role'] = $user['role'];

            switch (strtolower($user['role'])) {
                case 'admin':
                    $_SESSION['id'] = $user['id'];
                    header('Location:..\..\public\admin\dashboard.php');
                    break;
                case 'client':
                    $_SESSION['id'] = $user['id'];
                    header('Location:..\..\public\client\create-order.php');
                    break;
                case 'livreur':
                    $_SESSION['id'] = $user['id'];
                    header('Location:..\..\public\livreur\dashboard.php');
                    break;


                default:
                    header('Location:..\..\public');
                    break;
            }
        } else {
            header('Location:..\..\public');
        }
    }

    public function checkSigneUp($email, $password, $nom, $prenom, $role)
    {
        $stmt = $this->conn->connect()->prepare('SELECT * FROM users WHERE email = :email ');
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$user) {
            $insert = $this->conn->connect()->
                prepare('INSERT INTO users(`email`,`password`,`nom`,`prenom`,`role`) 
                VALUES (:email,:password,:nom,:prenom,:role)');
            $insert->execute([
                ':email' => $email,
                ':password' => $password,
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':role' => $role
            ]);

            $selectNewUser = $this->conn->connect()->prepare('SELECT * FROM users WHERE email = :email');
            $selectNewUser->execute([':email' => $email]);
            $newUser = $selectNewUser->fetch(PDO::FETCH_ASSOC);
            if ($newUser) {
                $_SESSION['id'] = $newUser['id'];
                $_SESSION['email'] = $newUser['email'];
                $_SESSION['nom'] = $newUser['nom'];
                $_SESSION['prenom'] = $newUser['prenom'];
                $_SESSION['role'] = $newUser['role'];
                switch (strtolower($newUser['role'])) {
                    case 'admin':
                        header('Location:..\..\public\admin\dashboard.php');
                        exit();

                    case 'client':
                        header('Location:..\..\public\client\create-order.php');
                        exit();

                    case 'livreur':
                        header('Location:..\..\public\livreur\dashboard.php');
                        exit();

                    default:
                        header('Location:..\..\public\index.php?error=invalid_role');
                        exit();
                }
            }




        } else {
            echo 'user was exist';
        }
    }




}

// $conn = new Database();
// $auth = new AuthrRespositories($conn);
// $auth->checkSigneUp(
//     'saitito@gmail.com',
//     'bobwfib',
//     'said',
//     'tito',
//     'Client',
// );

// echo $_SESSION['id'];


