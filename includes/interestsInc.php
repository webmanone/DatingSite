<?php

include $_SERVER['DOCUMENT_ROOT'].'/datingSite/header.php';

if(isset($_POST["interestSubmit"])) {

    $userId = $_SESSION['userid'];
    $interest = $_POST["interestInput"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    addInterest($conn, $userId, $interest);

}

