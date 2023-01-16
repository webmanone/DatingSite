<?php

require_once 'dbhInc.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    
    $interestsId = $_GET['interestsId'];
    echo $interestsId;
    $sql = "DELETE FROM interests WHERE interestsId = $interestsId";
    $result = $conn->query($sql);

    if ($result) {
        http_response_code(204);
    } else {
        http_response_code(500);
    }
}