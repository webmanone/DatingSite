<?php
require_once 'dbhInc.php';

$userId = $_SESSION['userid'];

$sql = "SELECT interestName, interestsId FROM interests WHERE usersId = '$userId'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $interest = $row['interestName'];
        $interestsId = $row['interestsId'];
        echo "<div class='bioItem'>$interest
                <button value='Delete' class='deleteInterest' onclick='location.href=`includes/deleteInterest.php?interestsId=$interestsId`' id='deleteInterest'>&times;</button>
              </div>";
    }
} else {
    echo "<div class='bioItem'>No interests added yet.</div>";
}