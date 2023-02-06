<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/datingSite/header.php';

if(isset($_POST["specificSubmit"])) {

    $interestsId = $_POST["interestsId"];
    $userId = $_SESSION['userid'];
    $itemsTitle = $_POST["interestName"];
    $itemsName = $_POST["specificInterest"];

    require_once 'dbhInc.php';
    require_once 'functionsInc.php';

    addSpecific($conn, $interestsId, $userId, $itemsTitle, $itemsName);
}

