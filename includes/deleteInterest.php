<?php

require_once 'dbhInc.php';

if(isset($_GET['interestsId'])){
    $interestsId = $_GET['interestsId'];
    $sql = "DELETE FROM interests WHERE interestsId = '$interestsId';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        mysqli_close($conn);
        header("location: ../userProfile.php");
        exit();
    }else {
        echo "Error deleting record";
    }
}