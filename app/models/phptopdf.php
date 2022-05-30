<?php

namespace app\models;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

session_start();

$mpdf = new \Mpdf\Mpdf();

$data = '';

$data .= '<h1>CV Generator</h1>';
$data .= '<h2>Profile</h2>';
$data .= '<h3>Name: ' . $_SESSION['showName'] . '</h3>';
$data .= '<h3>Highest position: ' . $_SESSION['showPosition'] . '</h3>';
$data .= '<h3>Age: ' . $_SESSION['showAge'] . '</h3>';
$data .= '<h3>Address: ' . $_SESSION['showAddreess'] . '</h3>';
$data .= '<h2>Details</h2>';
$data .= '<h3>Other Jobs: ' . $_SESSION['showJob'] . '</h3>';
$data .= '<h3>Performance: ' . $_SESSION['showDetails'] . '</h3>';
$data .= '<h2>Contact</h2>';
$data .= '<h3>Email: ' . $_SESSION['showEmail'] . '</h3>';
$data .= '<h3>Telephone: ' . $_SESSION['showTel'] . '</h3>';

$mpdf->WriteHTML($data);
$mpdf->Output('myCV.pdf', 'D');

header('location: ../show.php');