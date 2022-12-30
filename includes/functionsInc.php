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