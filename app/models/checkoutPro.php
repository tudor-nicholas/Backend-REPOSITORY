<?php

namespace app;

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';

?>

<html>
<head>

    <title>CV Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../assets/header.css" rel="stylesheet">
    <link href="../assets/checkout.css" rel="stylesheet">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>

<section class="center-box border-shadow">
    <div class="product">
        <img src="../assets/images/paint.png" height="200" width="200"/>
        <div class="description">
            <h3>Pro package</h3>
            <h5>$10.00</h5>
        </div>
    </div>
    <form action="create-checkout-session.php" method="POST">
        <input name="price" value="price_1L5U3TD7rQUI4GgbQz00I71i" style="display: none">
        <button class="btn btn-lg btn-primary" type="submit" id="checkout-button">Checkout</button>
    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>