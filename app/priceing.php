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
    <link href="assets/priceing.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<main class="container custom-container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Pricing</h1>
        <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>2 Free templates</li>
                        <li>PDF include</li>
                        <li>No mail support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="signup.php" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Editor</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$5</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>2 Free templates + 4 Premium templates</li>
                        <li>PDF include</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-white bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>2 Free templates + 6 Premium templates</li>
                        <li>PDF include</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>

    <h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
            <tr>
                <th style="width: 34%;"></th>
                <th style="width: 22%;">Free</th>
                <th style="width: 22%;">Editor</th>
                <th style="width: 22%;">Pro</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-start">Public Pack</th>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            </tr>
            <tr>
                <th scope="row" class="text-start">Premium Pack 1</th>
                <td></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            </tr>
            </tbody>

            <tbody>
            <tr>
                <th scope="row" class="text-start">Premium Pack 2</th>
                <td></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            </tr>
            <tr>
                <th scope="row" class="text-start">Extra options</th>
                <td></td>
                <td></td>
                <td><img src="assets/images/check.jpg" width="24" height="24"><use xlink:href="#check"></use></svg></td>
            </tr>
            </tbody>
        </table>
    </div>
</main>

<?php  include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>