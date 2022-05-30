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
    <link href="assets/create.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<main class="container form-signin w-100 custom-main-box">
    <form class="custom-signin-box" action="DBconnect/cvcreateDB.php" method="post">
        <img class="mb-4" src="assets/images/logo1.png" alt="" width="80" height="75">
        <h1 class="h3 mb-3 fw-normal">Please add your details</h1>
        <div class="form-floating w-100">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating w-100">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="email" value="<?php if (isset($_SESSION["userId"])) {echo $_SESSION["emailE"];} ?>">
            <label for="floatingPassword">Email</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="address" class="form-control" id="floatingInput" placeholder="address">
            <label for="floatingInput">Address</label>
        </div>
        <div class="form-floating w-100">
            <input type="number" name="tel" class="form-control" id="floatingInput" placeholder="tel">
            <label for="floatingInput">Telephone</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="position" class="form-control" id="floatingInput" placeholder="position">
            <label for="floatingInput">Highest position ever had</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="age" class="form-control" id="floatingInput" placeholder="age" value="<?php if (isset($_SESSION["userId"])) {echo $_SESSION["Age"];} ?>">
            <label for="floatingInput">Age</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="details" class="form-control" id="floatingInput" placeholder="details">
            <label for="floatingInput">More details about you</label>
        </div>
        <div class="form-floating w-100">
            <input type="text" name="job" class="form-control" id="floatingInput" placeholder="job">
            <label for="floatingInput">Other jobs you had</label>
        </div>
        <h2 class="h3 mb-3 fw-normal m-0">Select plan</h2>
        <div class="container-fluid border-shadow">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Free
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Premium
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3">
                    Pro
                </label>
            </div>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
    </form>
</main>

<?php  include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>