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
    <link href="assets/about.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<div class="container">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Echipa <span class="text-muted">"It’ll blow your mind."</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque nulla non velit lacinia euismod. Praesent ut tristique sapien. Pellentesque non ipsum non erat consectetur ultricies non vitae augue. Sed porttitor imperdiet risus, eu sodales enim. Suspendisse commodo ligula vel quam pharetra, et porta dui malesuada. Aenean turpis felis, laoreet quis porttitor sed, mollis et mauris. Mauris in metus egestas, tristique nulla ac, efficitur erat. Vivamus vehicula augue a viverra maximus. Etiam gravida orci sed justo efficitur posuere. Aenean vel elementum arcu. Aliquam consectetur turpis id scelerisque lacinia.</p>
        </div>
        <div class="col-md-5">
            <img src="assets/images/about1.png" class="border-shadow" width="450" height="450">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1">Punctul forte al site-ului <span class="text-muted">"See for yourself."</span></h2>
            <p class="lead">Maecenas hendrerit aliquet tortor, sed pharetra diam. Donec maximus lorem leo, sit amet tempor tellus consectetur quis. Donec vulputate justo at magna tempus, nec ultricies orci iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris vulputate hendrerit arcu, eget posuere mi vulputate in. Aenean vulputate, mi ullamcorper rhoncus tincidunt, ligula sapien condimentum nisl, id volutpat est justo at libero. Etiam et massa eu ipsum condimentum hendrerit. Aenean tempus facilisis ornare. Duis fermentum orci sed felis mollis pulvinar. Mauris consectetur malesuada gravida. Phasellus sapien libero, pretium id leo vitae, cursus mollis nisl. Sed eu interdum magna, sit amet ultricies diam. Nunc ac neque est. Suspendisse porta urna in sollicitudin placerat. Nam velit neque, mollis ac bibendum a, semper in nulla.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="assets/images/about2.png" class="border-shadow" width="450" height="450">

        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading fw-normal lh-1">Customer service <span class="text-muted">"Checkmate."</span></h2>
            <p class="lead">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque accumsan eget elit eget consequat. Pellentesque id nunc a neque finibus malesuada non ut urna. Fusce ac mollis justo, vitae auctor massa. Nullam nibh elit, bibendum vitae diam nec, ornare aliquet ipsum. Proin imperdiet facilisis velit, vel condimentum dolor sagittis at. Nulla facilisi. Praesent massa sapien, consectetur in ex et, sagittis consequat dui. Donec aliquam nisi ut massa ornare, sed pellentesque tortor tempus.</p>
        </div>
        <div class="col-md-5">
            <img src="assets/images/about3.png" class="border-shadow" width="450" height="450">

        </div>
    </div>
</div>

<?php  include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>