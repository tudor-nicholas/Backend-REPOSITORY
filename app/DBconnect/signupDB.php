<?php

namespace app\DBconnect;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    $conn = new Connection();
    $conn->connect();

    require_once '../models/verifyinput.php';

    if (emptyInputSignUp($username, $email, $password, $age) !== false){
        header('location: ../signup.php?error=emptyinput');
        exit();
    }

    if (invalidUN($username) !== false){
        header('location: ../signup.php?error=invalidusername');
        exit();
    }
    if (invalidEmail($email) !== false){
        header('location: ../signup.php?error=invalidemail');
        exit();
    }
    if (usernameExist($conn->connectionE, $username, $email) !== false){
        header('location: ../signup.php?error=usernameoremailtaken');
        exit();
    }

    createUser($conn->connectionE, $username, $password, $email, $age);

} else {
    header('location: ../signup.php');
    exit();
}

?>