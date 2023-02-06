<?php
include_once 'dbhInc.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $interestId = mysqli_real_escape_string($conn, $_GET["interestsId"]);

    $sql = "SELECT itemsId, itemsName FROM items WHERE interestsId = '$interestId'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $specificInterests = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $item = array(
                'itemsId' => $row['itemsId'],
                'itemsName' => $row['itemsName']
            );
            array_push($specificInterests, $item);
            //array_push($specificInterests, $row['itemsName']);
        }
        echo json_encode($specificInterests);
    }

}