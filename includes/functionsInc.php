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
    if (!strlen($phone) === 10){
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
    $stmt = mysqli_stmt_init($conn)
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