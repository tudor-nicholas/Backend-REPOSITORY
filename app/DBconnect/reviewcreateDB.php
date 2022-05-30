<?php

namespace app\DBconnect;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

session_start();

if (isset($_POST["submit"])) {

    $name = $_POST['name'];
    $review = $_POST['review'];
    $score = $_POST['nota'];

    $input = array('person1.png', 'person2.png', 'person3.png', 'person4.png', 'person5.png', 'person6.png', 'person7.png', 'person8.png', 'person9.png', 'person10.png', 'person11.png', 'person12.png', 'person13.png', 'person14.png',);
    $randPhoto = array_rand($input, 1);

    $conn = new Connection();
    $conn->connect();

    require_once '../models/verifyinput.php';

    addReview($conn->connectionE, $name, $review, $score, $input[$randPhoto], $_SESSION["userId"]);

} else {
    header('location: ../reviewcreate.php');
    exit();
}