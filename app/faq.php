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
    <link href="assets/faq.css" rel="stylesheet">
</head>
<body>

<?php  include 'header.php'; ?>

<div class="container list-group w-auto">
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Ce înseamnă FAQ?</h6>
                <p class="mb-0 opacity-75">O listă de întrebări frecvente (FAQ) este adesea folosită în articole, site-uri web, liste de e-mail și forumuri online în care întrebările obișnuite tind să apară, de exemplu, prin postări sau interogări de la noii utilizatori legate de lacune comune de cunoștințe. Scopul unei întrebări frecvente este, în general, de a oferi informații despre întrebări sau preocupări frecvente; cu toate acestea, formatul este un mijloc util de organizare a informațiilor, iar textul constând din întrebări și răspunsurile acestora poate fi astfel numit Întrebări frecvente, indiferent dacă întrebările sunt de fapt puse frecvent.</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Ce este un CV?</h6>
                <p class="mb-0 opacity-75">În general, Curriculum vitae are un format standard, care sintetizează informații cu privire la: datele personale, postul vizat, experiența profesională, educație și formare profesională (începând cu ultima formă de învățământ absolvită), informații ce țin de aptitudini native sau dobândite (în afară de cele profesionale).</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">De ce este important sa ai un cv?</h6>
                <p class="mb-0 opacity-75">Un CV este un document scurt care vă oferă șansa de a arăta unui potențial angajator tot ce aveți mai bun. Îți vinde abilitățile, experiența și le arată că ești persoana potrivită pentru job.</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Cum sa finalizeaza CV-ul?</h6>
                <p class="mb-0 opacity-75">Dupa ce va introduceti detaliile pe site-ul nostru va vom redirectiona la o pagina splendida unde vi-se va arata cv-ul nou cred plus optiunea de al descara intr-un pdf sau de pe email</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">Ce este un pdf?</h6>
                <p class="mb-0 opacity-75">Fișierele PDF pot conține o varietate de conținut, în afară de text plat și grafice, inclusiv elemente de structurare logică, elemente interactive, cum ar fi adnotări și câmpuri de formular, straturi, rich media (inclusiv conținut video), obiecte tridimensionale care utilizează U3D sau PRC și diverse altele. formate de date. Specificația PDF prevede, de asemenea, criptare și semnături digitale, fișiere atașate și metadate pentru a permite fluxurile de lucru care necesită aceste caracteristici.</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
    <a href="#" class="border-shadow list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="assets/images/question.jpg" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0">De ce trebuie sa ma loghez in site?</h6>
                <p class="mb-0 opacity-75">Deoarece pe site avem obtiunea de a-ti salva toate datele si de a le folosi alta data in caz la nevoie.</p>
            </div>
            <small class="opacity-50 text-nowrap">question</small>
        </div>
    </a>
</div>

<?php  include 'footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>