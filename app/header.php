
<div class="container-fluid scale">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="home.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="assets/images/logo1.png" width="70" height="70">
            <p class="fs-4 link-dark custom-CV-p">CV Generator</p>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link px-2 fs-4 link-secondary">Home</a></li>
            <?php

            if (isset($_SESSION["userId"])) {
                echo '<li><a href="create.php" class="nav-link px-2 fs-4 link-dark">Create</a></li>';
            }

            ?>
            <li><a href="priceing.php" class="nav-link px-2 fs-4 link-dark">Pricing</a></li>
            <li><a href="faq.php" class="nav-link px-2 fs-4 link-dark">FAQs</a></li>
            <li><a href="about.php" class="nav-link px-2 fs-4 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <?php

                if (isset($_SESSION["userId"])) {
                    echo '<a href="profile.php" class="btn fs-4 btn-outline-warning me-2 text-dark">Profile, '. $_SESSION["userName"] .'</a>';
                    echo '<a href="DBconnect/logoutDB.php" class="btn fs-4 btn-warning">Logout</a>';
                } else {
                    echo '<a href="login.php" class="btn fs-4 btn-outline-warning me-2 text-dark">Login</a>';
                    echo '<a href="signup.php" class="btn fs-4 btn-warning">Sign-up</a>';
                }

            ?>
        </div>
    </header>
</div>