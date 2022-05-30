<?php

namespace app;

use app\DBconnect\Connection;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

session_start();

?>

<html>
<head>

    <title>CV Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/header.css" rel="stylesheet">
    <link href="assets/review.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<?php
if (isset($_SESSION["userId"])) {
    echo '<div class="create-box">';
    echo '<a href="reviewcreate.php" class="btn fs-4 custom-button-review me-2 text-dark">Add review</a>';
    echo '</div>';
}
?>

<section class="grid-1">
    <div class="items border-shadow">
        <img src="assets/images/person2.png" width="70" height="70" class="rounded-circle border-shadow">
        <h3>Tudor Nicholas</h3>
        <p>Deși poate fi ușor pentru o companie să ia la inimă comentariile negative, este important să recunoaștem că recenziile sunt feedback constructiv. Una peste alta, recenziile sunt de fapt feedback valoros! Ele ajută o companie să-și evalueze performanța și să vadă cum se pot îmbunătăți.</p>
        <p class="star">8/10 <img class="star-png" src="assets/images/star.png" width="22" height="22"></p>
    </div>
    <?php

    require_once 'models/verifyinput.php';
    require_once 'DBconnect/connection.php';

    $conn = new Connection();
    $conn->connect();

    $reviews = getReviews($conn->connectionE);

    foreach($reviews as $value) {
        echo '<div class="items border-shadow">';
        echo '<img src="assets/images/'. $value['4'] .'" width="70" height="70" class="rounded-circle border-shadow">';
        echo '<h3>'. $value['1'] .'</h3>';
        echo '<p>'. $value['2'] .'</p>';
        echo '<p class="star">'. $value['3'] .'<img class="star-png" src="assets/images/star.png" width="22" height="22"></p>';
        echo '</div>';
    }

    ?>
</section>

<?php  include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>