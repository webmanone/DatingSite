<?php
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script defer src="activePage.js"></script>
    <title>Dating Site</title>
</head>
<body>

<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <?php
            if (isset($_SESSION["userid"])) {
                echo "<li><a href='userProfile.php'>Profile Page</a></li>";
                echo "<li><a href='includes/logoutInc.php'>Log Out</a></li>";
            }
            else {
                echo "<li><a href='login.php'>Log in</a></li>";
                echo "<li><a href='signup.php'>Sign up</a></li>";
            }
        ?>
    </ul>
</nav>    

<div>