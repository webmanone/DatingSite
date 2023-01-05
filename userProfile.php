<?php
    include_once 'header.php';
?>

<div class="gridContainer">

<div class="header"><div class="pad"></div><h1>
    <?php
            echo $_SESSION["userFirstname"] . " " . $_SESSION["userLastname"];
    ?>
    </h1></div>

    <div class="about">
        
        <img src="images/emptyProfile.png" class="bioPic">
        
        
        <div class="bioGrid">
            <div class="firstName bioItem capitaliseFirst"><?php echo $_SESSION["userFirstname"]?></div>
            <div class="age bioItem"><?php echo $_SESSION["userDob"]?></div>
            <div class="gender bioItem capitaliseFirst"><?php echo $_SESSION["userGender"]?></div>
            <div class="orientation bioItem capitaliseFirst"><?php echo $_SESSION["userOrientation"]?></div>
            <div class="location bioItem capitaliseFirst"><?php echo $_SESSION["userLocation"]?></div>
        </div>

    </div>

    <section class="addInterests">
        <p>Add interests:    


    </section>


</div>

<?php
    include_once 'footer.php';
?>