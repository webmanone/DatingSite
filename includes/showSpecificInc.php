<?php
include_once 'dbhInc.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $interestName = mysqli_real_escape_string($conn, $_GET["interestName"]);

    $sql = "SELECT itemsName FROM items WHERE itemsTitle = $interestName";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $specificInterests = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($specificInterests, $row['itemsName']);
        }
        echo json_encode($specificInterests);
    } else {
        echo "No specific interests added yet";
    }

}