<?php

if(isset($_POST["interestSubmit"])) {
    require_once 'dbhInc.php';

    $userId = $_SESSION['userid'];
    $interest = $_POST["interestInput"];

    $interest = mysqli_real_escape_string($conn, $interest);

    function addInterst ($conn, $userId) {
    $sql = "INSERT INTO interests (usersId, interestName) VALUES (?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");  
        exit(); 
     }
    }
}