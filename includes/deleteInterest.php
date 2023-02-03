<?php

require_once 'dbhInc.php';

if(isset($_GET['interestsId'])){
    $interestsId = $_GET['interestsId'];
    $sql = "DELETE FROM interests WHERE interestsId = '$interestsId';";
    $result = mysqli_query($conn, $sql);//fatal error here when deleting the first item in the interest category list, all others delete fine

    if ($result) {
        mysqli_close($conn);
        header("location: ../userProfile.php");
        exit();
    }else {
        echo "Error deleting record";
    }
}