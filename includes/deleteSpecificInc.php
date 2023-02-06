<?php

include_once 'dbhInc.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
   
    $data = json_decode(file_get_contents("php://input"), true);
    $itemsId = $data['itemsId'];

    $sql = "DELETE FROM items WHERE itemsId = '$itemsId'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("status" => "success"));
      } else {
        echo json_encode(array("status" => "error", "message" => mysqli_error($conn)));
      }
      
    }
    