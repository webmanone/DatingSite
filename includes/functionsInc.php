<?php

function emptyInputSignup($firstName, $lastName, $gender, $orientation, $birthday, $location, $email, $phone, $pwd, $pwdRepeat) {
    $result;
    if (empty($firstName) || empty($lastName) || empty($gender) || empty($orientation) || empty($birthday) || empty($location) || empty($email) || empty($phone) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidNumber($phone) {
    $result;
    if (!strlen($phone) === 11){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function userExists($conn, $email, $phone) {
    $sql = "SELECT * FROM users WHERE usersEmail = ? OR usersPhone = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");  
        exit(); 
    }

    mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstName, $lastName, $gender, $orientation, $birthday, $location, $email, $phone, $pwd) {
    $sql = "INSERT INTO users (usersFirstname, usersLastname, usersGender, usersOrientation, usersDob, usersLocation, usersEmail, usersPhone, usersPwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");  
        exit(); 
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssssss", $firstName, $lastName, $gender, $orientation, $birthday, $location, $email, $phone, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");  
    exit(); 
}

function emptyInputLogin($username, $pwd) {
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false; 
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $userExists = userExists($conn, $username, $username);

    if ($userExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $userExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userExists["usersId"];
        $_SESSION["userFirstname"] = $userExists["usersFirstname"];
        $_SESSION["userLastname"] = $userExists["usersLastname"];
        $_SESSION["userGender"] = $userExists["usersGender"];
        $_SESSION["userOrientation"] = $userExists["usersOrientation"];
        $_SESSION["userDob"] = $userExists["usersDob"];
        $_SESSION["userLocation"] = $userExists["usersLocation"];
        header("location: ../index.php");
        exit();
    }
}