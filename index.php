<?php
    include_once 'header.php';
?>
    <br><br><br><br><br><br>
    
    <h1>Dating Site</h1>
    
    <section>
        <?php
            if (isset($_SESSION["userid"])) {
                echo "<p>Welcome, " . $_SESSION["userFirstname"] . "!</p>";
                
            }
        ?>
    </section>

    <div class="indexDiv">
        Find someone that likes what you like!
    </div>


    <?php
            if (!isset($_SESSION["userid"])) {
                echo "<div class='indexDiv'>Set up your profile <a href='signup.php'>here!</a></div>";
            }

            if (isset($_SESSION["userid"])) {
                echo "<div class='indexDiv'>Edit your profile and search <a href='userProfile.php'>here!</a></div>";
            }
        ?>

<?php
    include_once 'footer.php';
?>