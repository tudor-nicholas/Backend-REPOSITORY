<?php

namespace app\DBconnect;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    $position = $_POST['position'];
    $age = $_POST['age'];
    $details = $_POST['details'];
    $job = $_POST['job'];

    $conn = new Connection();
    $conn->connect();

    require_once '../models/verifyinput.php';
    require_once '../show.php';

    if (emptyCreate($name, $email, $address, $tel, $position, $age, $details, $job) !== false){
        header('location: ../create.php?error=emptyinput');
        exit();
    }

    saveCV($conn->connectionE, $name, $email, $address, $tel, $position, $age, $details, $job);

} else {
    header('location: ../create.php');
    exit();
}