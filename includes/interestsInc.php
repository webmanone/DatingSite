<?php

if(isset($_POST["interestSubmit"])) {
    require_once 'dbhInc.php';

    $userId = $_SESSION['userid'];
    $interest = $_POST["interestInput"];

    $interest = mysqli_real_escape_string($conn, $interest);

    $sql = "INSERT INTO interests (usersId, interestName) VALUES ('$userId', '$interest');";
    mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
        echo "Record inserted successfully";
     } else{
        echo "Error inserting record: " . mysqli_error($conn);
     }
    exit();

}