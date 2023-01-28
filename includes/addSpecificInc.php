<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/datingSite/header.php';

if(isset($_POST["specificSubmit"])) {

    $interestsId = $_POST["interestsName"];
    $userId = $_SESSION['userid'];
    $itemsTitle = $_POST["interestsId"];
    $itemsName = $_POST["specificInterest"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    function addSpecific ($conn, $interestsId, $userId, $itemsTitle, $itemsName) {
        $sql = "INSERT INTO items (interestsId, usersId, itemsTitle, itemsName) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../userProfile.php?error=stmtfailed");  
            exit(); 
        }else {
            mysqli_stmt_bind_param($stmt, "iiss", $interestsId, $userId, $itemsTitle, $itemsName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../userProfile.php?error=none");  
            exit();
        }
    }
}

