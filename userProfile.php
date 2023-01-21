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
            <div class="firstName aboutItem capitaliseFirst"><?php echo $_SESSION["userFirstname"]?></div>
            <div class="age aboutItem" id="userDob">
                <?php 
                    $dob = $_SESSION["userDob"];
                    $age = floor((time() - strtotime($dob)) / (60 * 60 * 24 * 365));
                    echo $age;
                ?>
            </div>
            <div class="gender aboutItem capitaliseFirst"><?php echo $_SESSION["userGender"]?></div>
            <div class="orientation aboutItem capitaliseFirst"><?php echo $_SESSION["userOrientation"]?></div>
            <div class="location aboutItem capitaliseFirst"><?php echo $_SESSION["userLocation"]?></div>
        </div>

    </div>
    
    <div class="interestsWrapper">
        <button class="interestModalButton" id="interestModalButton">+</button>
        <div class="interestsTitle">Interests</div>
            <div class="interestsBox" id="interestsBox">
                <?php include 'includes/getInterestsInc.php'; ?>
            </div>
    </div>
    <div id="addInterestModal" class="addInterestModal">
        <div class="interestModalContent">
            <span class="closeModal" id="closeModal">&times;</span>
            <form action="includes/interestsInc.php" method="post" id="interestsModalForm">
                <label for="interestsInput">Add an interests category:</label><br>
                <input type="text" id="interestsInput" name="interestInput"><br>
                <button type="submit" id="interestSubmit" name="interestSubmit">Add</button>
            </form>
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