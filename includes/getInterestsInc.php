<?php
require_once 'dbhInc.php';

$userId = $_SESSION['userid'];

$sql = "SELECT interestName FROM interests WHERE usersId = '$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $interest = $row['interestName'];
        echo "<div class='bioItem'>$interest
                <button value='Delete' class='delete' id='deleteInterest'>x</button>
              </div>";
    }
} else {
    echo "<div class='bioItem'>No interests added yet.</div>";
}