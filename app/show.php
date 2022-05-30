<?php

namespace app;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

session_start();

?>

<html>
<head>

    <title>CV Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/header.css" rel="stylesheet">
    <link href="assets/show.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<div class="colors mt-5 mb-5">
<div class="container custom-container mt-5 mb-5 border-shadow">
    <div class="photo-box">
        <img src="assets/images/profile.jpg" height="120" width="120">
        <div class="first-box">
            <h2 class="fs-3">Name</h2>
            <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4">' . $_SESSION['showName'] .'</p>';} ?>
            <h2 class="fs-3">Highest position</h2>
            <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4">' . $_SESSION['showPosition'] .'</p>';} ?>
        </div>
    </div>
    <div class="details-box">
        <div class="age">
            <h2 class="fs-3">Age:</h2><?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-1">' . $_SESSION['showAge'] .' de ani</p>';} ?>
        </div>
        <h2 class="fs-3">Address:</h2>
        <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-2">' . $_SESSION['showAddreess'] .'</p>';} ?>
        <h2 class="fs-3">Other jobs:</h2>
        <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-2">' . $_SESSION['showJob'] .'</p>';} ?>
        <h2 class="fs-3">Details:</h2>
        <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-2">' . $_SESSION['showDetails'] .'</p>';} ?>
    </div>
    <div class="contact">
        <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-2">Email: ' . $_SESSION['showEmail'] .'</p>';} ?>
        <a href="models/phptopdf.php" class="btn fs-4 custom-button text-dark">download</a>
        <?php if (isset($_SESSION["userId"])) {echo '<p class="fs-4 mb-2">Telephone: ' . $_SESSION['showTel'] .'</p>';} ?>
    </div>
</div>
</div>

<?php  include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>