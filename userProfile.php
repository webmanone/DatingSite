<?php
    include_once 'header.php';
?>

<div class="userGridContainer">

<div class="header"><div class="pad"></div><h1>
    <?php
            echo $_SESSION["userFirstname"] . " " . $_SESSION["userLastname"];
    ?>
    </h1></div>

    <div class="about">
        
        <img src="images/emptyProfile.png" class="bioPic">
        
        
        <div class="bioGrid">
            <div class="firstName bioItem capitaliseFirst"><?php echo $_SESSION["userFirstname"]?></div>
            <div class="age bioItem" id="userDob">
                <?php 
                    $dob = $_SESSION["userDob"];
                    $age = floor((time() - strtotime($dob)) / (60 * 60 * 24 * 365));
                    echo $age;
                ?>
            </div>
            <div class="gender bioItem capitaliseFirst"><?php echo $_SESSION["userGender"]?></div>
            <div class="orientation bioItem capitaliseFirst"><?php echo $_SESSION["userOrientation"]?></div>
            <div class="location bioItem capitaliseFirst"><?php echo $_SESSION["userLocation"]?></div>
        </div>

    </div>
    <div class="interestsWrapper">
        <button class="interestModalButton" id="interestModalButton">+</button>
        <div id="addInterestModal" class="modal">
        
    
        </div>

        <div class="interestsTitle">Interests</div>
            <div class="interestsBox">
                <div class="bioItem">Books</div>
                <div class="bioItem">Video Games</div>
                <div class="bioItem">Anime</div>
                <div class="bioItem">Sports</div>
                <div class="bioItem">Movies</div>
                <div class="bioItem">TV Shows</div>
            </div>
    </div>
    <div class="interestsContainer">
        
        <div>
            Add
    
        </div>


    </section>


</div>

<?php
    include_once 'footer.php';
?>