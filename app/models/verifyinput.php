<?php

function emptyInputSignUp($username, $email, $password, $age){
    $result;
    if (empty($username) || empty($email) || empty($password) || empty($age)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUN($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function usernameExist($conn, $username, $email){
    $sql = 'SELECT * FROM users WHERE userName = ? OR emailE = ?;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfail1');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function  createUser($conn, $username, $password, $email, $age){
    $sql = 'INSERT INTO users (userName, passWord, emailE, Age) VALUES (?, ?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfail2');
        exit();
    }

    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssi", $username, $hashPassword, $email, $age);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../signup.php?error=none');
    exit();
}

function emptyLogin($username, $password){
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password){
    $userExist = usernameExist($conn, $username, $username);

    if ($userExist === false) {
        header('location: ../login.php?error=userincorrect');
        exit();
    }

    $passwordHash = $userExist["passWord"];

    $checkPass = password_verify($password, $passwordHash);

    if ($checkPass === false) {
        header('location: ../login.php?error=passwordincorrect');
        exit();
    } elseif ($checkPass === true) {
        session_start();

        $_SESSION["userId"] = $userExist["id"];
        $_SESSION["userName"] = $userExist["userName"];
        $_SESSION["emailE"] = $userExist["emailE"];
        $_SESSION["Age"] = $userExist["Age"];
        $_SESSION["createDate"] = $userExist["createDate"];

        header('location: ../home.php');
        exit();
    }
}

function emptyCreate($name, $email, $address, $tel, $position, $age, $details, $job) {
    $result;
    if (empty($name) || empty($email) || empty($address) || empty($tel) || empty($position) || empty($age) || empty($details) || empty($job)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function saveCV($conn, $name, $email, $address, $tel, $position, $age, $details, $job) {
    $sql = 'INSERT INTO cvs (cvName, cvEmail, cvAddress, cvTel, cvPosition, cvAge, cvDetails, cvJob, cvUserId) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../create.php?error=stmtfailCreate');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssisissi", $name, $email, $address, $tel, $position, $age, $details, $job, $_SESSION["userId"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $_SESSION['showName'] = $name;
    $_SESSION['showEmail'] = $email;
    $_SESSION['showAddreess'] = $address;
    $_SESSION['showTel'] = $tel;
    $_SESSION['showPosition'] = $position;
    $_SESSION['showAge'] = $age;
    $_SESSION['showDetails'] = $details;
    $_SESSION['showJob'] = $job;

    if (isset($_SESSION['showName'])) {
        header('location: ../show.php');
        exit();
    }
}

function addReview($conn, $name, $review, $score, $random, $user){
    $sql = 'INSERT INTO reviews (reviewName, reviewText, reviewScore, reviewRandomPhoto, reviewUser) VALUES (?, ?, ?, ?, ?);';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../reviewcreate.php?error=stmtfailReview');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssi", $name, $review, $score, $random, $user);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../reviewcreate.php?error=none');

    exit();
}

function getReviews($conn){
    $sql = 'SELECT * FROM reviews;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../signup.php?error=stmtfail1');
        exit();
    }

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_all($resultData)) {
        return $row;
    }

    mysqli_stmt_close($stmt);
}

?>