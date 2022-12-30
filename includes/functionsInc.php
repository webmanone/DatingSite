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
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i"), $email){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}