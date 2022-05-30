<?php

namespace app\DBconnect;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new Connection();
    $conn->connect();

    require_once '../models/verifyinput.php';

    if (emptyLogin($username, $password) !== false){
        header('location: ../login.php?error=emptyinput');
        exit();
    }

    loginUser($conn->connectionE, $username, $password);

} else {
    header('location: ../login.php');
    exit();
}