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
    <form class="custom-signin-box" action="DBconnect/signupDB.php" method="post">
        <img class="mb-4 rounded-circle" src="assets/images/signin.png" alt="" width="80" height="75">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div><?php

            if (isset($_GET["error"])) {
                if ($_GET["error"] == 'emptyinput') {
                    echo '<p class="fs-4 text-danger border border-danger p-1">Ai uitat sa completezi unul dintre chenare</p>';
                } elseif ($_GET["error"] == 'invalidusername') {
                    echo '<p class="fs-4 text-danger border border-danger p-1">Username este invalid</p>';
                } elseif ($_GET["error"] == 'invalidemail') {
                    echo '<p class="fs-4 text-danger border border-danger p-1">Email-ul este invalid</p>';
                } elseif ($_GET["error"] == 'usernameoremailtaken') {
                    echo '<p class="fs-5 text-danger border border-danger p-1">Utilizatorul cu numele/email-ul acesta exista deja pe site</p>';
                } elseif ($_GET["error"] == 'none') {
                    echo '<p class="fs-4 text-success border border-success p-1">A-ti fost inregistrat pe site</p>';
                }
            }

            ?></div>

        <div class="form-floating w-100">
            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating w-100">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating w-100">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating w-100">
            <input type="number" name="age" class="form-control" id="floatingInput" placeholder="age">
            <label for="floatingPassword">Age</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
    </form>
</main>

<?php  include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>