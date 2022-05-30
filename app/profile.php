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
    <link href="assets/profile.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<div class="container container-custom">
    <div class="custom-profile border-shadow">
        <img src="assets/images/profile.jpg" class="rounded-cicle" width="100" height="100">
        <h1>Profile</h1>
        <div class="objects border-shadow">
            <p class="fw-bold fs-3">Numele utilizatorului</p>
            <?php echo '<p class="fs-4">'. $_SESSION["userName"] .'</p>'; ?>
            <p class="fw-bold fs-3">Adresa de email</p>
            <?php echo '<p class="fs-4">'. $_SESSION["emailE"] .'</p>'; ?>
            <p class="fw-bold fs-3">Varsta</p>
            <?php echo '<p class="fs-4">'. $_SESSION["Age"] .' de ani</p>'; ?>
            <p class="fw-bold fs-3">Detalii</p>
            <p class="text-center fs-4">Partea aceasta a profilului este inca "work in progress", pentru viitor aceasta sectinune va acomoda un scurt rezumat despre persoana al carui profil apartine.</p>
        </div>
    </div>
</div>

<?php  include 'footer.php'; ?>

</body>
</html>