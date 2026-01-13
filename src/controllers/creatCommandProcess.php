<?php

if (!isset($_SESSION)) {
    session_start();
}

require_once '..\services\creatCommandValidation.php';
require_once '..\repositories\creatCommandRepositorie.php';
require_once '..\..\database\database.php';

if (!isset($_POST)) {
    echo "nothing here";
} else {
    $userId = $_SESSION['id'];
    // $userId, $adressDepart, $adressArrive, $phone, $details, $options
    $adressDepart = $_POST['departure_address'];
    $adressArrive = $_POST['arrival_address'];
    $phone = $_POST['departure_phone'];
    $details = $_POST['package_description'];
    $options = $_POST['options'];
    $conn = new Database();
    $createRepo = new CreatCommandRepositorie($conn);
    $creatValid = new CreatCommandValidation($createRepo);
    $creatValid->creatCommand(
        $userId,
        $adressDepart,
        $adressArrive,
        $phone,
        $details,
        $options,
    );








}
