<?php
include_once 'dbhInc.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if (!isset($_GET["itemsId"])) {
        echo json_encode(array("message" => "Error deleting specific item: No item ID received"));
        exit;
    }
    $itemsId = mysqli_real_escape_string($conn, $_GET["itemsId"]);

    $sql_select = "SELECT * FROM items WHERE itemsId = '$itemsId'";
    $result_select = mysqli_query($conn, $sql_select);
    if (mysqli_num_rows($result_select) > 0) {
        $sql = "DELETE FROM items WHERE itemsId = '$itemsId'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo json_encode(array("message" => "Specific item deleted successfully"));
        } else {
            echo json_encode(array("message" => "Error deleting specific item"));
        }
    } else {
        echo json_encode(array("message" => "Error deleting specific item: Item does not exist"));
    }
}