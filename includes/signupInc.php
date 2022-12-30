<?php

if (isset($_POST["submit"])) {
    
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $gender = $_POST["gender"];
    $orientation = $_POST["orientation"];
    $birthday = $_POST["birthday"];
    $location = $_POST["location"];
    $email = $_POST["email"];
    $phone = (preg_replace('/[^0-9]/'), '', $_POST["phone"]);
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    if (emptyInputSignup($firstName, $lastName, $gender, $orientation, $birthday, $location, $email, $phone, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");  
        exit();  
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");  
        exit();  
    }

    if (invalidNumber($phone) !== false) {
        header("location: ../signup.php?error=invalidnumber");  
        exit();  
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=invalidpasswords");  
        exit();  
    }

    if (emailExists($conn, $email) !== false) {
        header("location: ../signup.php?error=emailtaken");  
        exit();  
    }

    if (numberExists($conn, $phone) !== false) {
        header("location: ../signup.php?error=numbertaken");  
        exit();  
    }

    createUser($conn, $firstName, $lastName, $gender, $orientation, $birthday, $location, $email, $phone, $pwd);

}
else {
    header("location: ../signup.php");
    exit();
}