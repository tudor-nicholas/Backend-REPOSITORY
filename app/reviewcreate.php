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
    <link href="assets/signin.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<main class="container form-signin w-100 custom-main-box">
    <form class="custom-signin-box" action="DBconnect/reviewcreateDB.php" method="post">
        <img class="mb-4" src="assets/images/profile.jpg" alt="" width="80" height="75">
        <h1 class="h3 mb-3 fw-normal">Review</h1>
        <div class="form-floating w-100">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="review" class="form-control" id="floatingInput" placeholder="review">
            <label for="floatingPassword">Review</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="nota" class="form-control" id="floatingInput" placeholder="nota">
            <label for="floatingPassword">Nota</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
    </form>
</main>

<?php  include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>