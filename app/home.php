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
       <link href="assets/home.css" rel="stylesheet">
   </head>
   <body>
   <?php  include 'header.php'; ?>

      <div id="myCarousel" class="carousel slide custom-carousel" data-bs-ride="carousel">
          <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          </div>
          <div class="carousel-inner">
              <div class="carousel-item">
                  <svg class="bd-placeholder-img" width="100%" height="0%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="assets/images/carusel1.png" height="50%" width="100%"></svg>

                  <div class="container">
                      <div class="carousel-caption text-start custom-caption">
                          <h1>Inregistreaza-te pe site acum</h1>
                          <p>Bine ai venit la noi pe site, pentru a accesa tot potențialul site-ului nostru vă rugăm logați-va!</p>
                          <p><a class="btn btn-lg btn-warning" href="signup.php">Sign up today</a></p>
                      </div>
                  </div>
              </div>
              <div class="carousel-item active">
                  <svg class="bd-placeholder-img" width="100%" height="0%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="assets/images/carusel2.png" height="50%" width="100%"></svg>

                  <div class="container">
                      <div class="carousel-caption text-start custom-caption">
                          <h1>Templates</h1>
                          <p>Avem la momentul actual un număr decent de șabloane pentru a te ajuta să îți faci cv-ul, cu multe altele care vor venii în curând!</p>
                          <p><a class="btn btn-lg btn-warning" href="priceing.php">Browse gallery</a></p>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <svg class="bd-placeholder-img" width="100%" height="0%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><img src="assets/images/carusel3.png" height="50%" width="100%"></svg>

                  <div class="container">
                      <div class="carousel-caption text-start custom-caption">
                          <h1>Echipa</h1>
                          <p>Avem o echipă de developeri talentați care chiar acuma lucrează la noi modalități de a-ți îmbunătăți experiența pe site!</p>
                          <p><a class="btn btn-lg btn-warning" href="about.php">Learn more</a></p>
                      </div>
                  </div>
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
          </button>
      </div>
      <div class="container marketing">
          <div class="row custom-row">
              <div class="col-lg-4 border-shadow">
                  <img src="assets/images/cerc1.png" class="rounded-circle border-shadow" width="140" height="140">

                  <h2 class="fw-normal">Features</h2>
                  <p>Oferim o gama larga de optiuni, totul de la culoarea pagini/cv-ului online pana la crearea unui pdf cu cv-ul dumneavoastra pe care mai tarziu il vom putea trimite si pe email.</p>
                  <p><a class="btn btn-warning" href="priceing.php">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 border-shadow">
                  <img src="assets/images/cerc2.png" class="rounded-circle border-shadow" width="140" height="140">

                  <h2 class="fw-normal">FAQs</h2>
                  <p>Pentru mai multe intrebari fregvente legate de platforma pute-ti accesa sectiunea de FAQs.</p>
                  <p><a class="btn btn-warning" href="faq.php">View details »</a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 border-shadow">
                  <img src="assets/images/cerc3.png" class="rounded-circle border-shadow" width="140" height="140">

                  <h2 class="fw-normal">Reviews</h2>
                  <p>Aici puteti vedea ce parere au avut restul clientilor care au folosit serviciile noaste pentru a va documenta adegvat.</p>
                  <p><a class="btn btn-warning" href="review.php">View details »</a></p>
              </div>
          </div>
      </div>

   <?php  include 'footer.php'; ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   </body>
</html>
