<?php

require_once 'dbhInc.php';
require_once 'functionsInc.php';

include_once $_SERVER['DOCUMENT_ROOT'].'/datingSite/header.php';

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $interestsId = $_POST["interestsId"];
    $userId = $_SESSION['userid'];
    $itemsTitle = $_POST["itemsTitle"];
    $itemsName = $_POST["itemsName"];

    addSpecific($conn, $interestsId, $userId, $itemsTitle, $itemsName);


