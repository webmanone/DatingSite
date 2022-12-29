<?php

if (isset($_POST["submit"])) {
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $gender = $_POST["gender"];
    $orientation = $_POST["orientation"];
    $birthday = $_POST["birthday"];
    $location = $_POST["location"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
}
else {
    header("location: ../signup.php");
}