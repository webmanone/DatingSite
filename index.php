<?php
    include_once 'header.php';
?>
    <br><br><br><br><br><br>
    
    <h1>Dating Site</h1>
    
    <div class="indexDiv">
        <?php 
        if (isset($_SESSION["userid"])) {
            echo
            "<div> Welcome, " . $_SESSION["userFirstname"] . "!</div>";
        }

        if (!isset($_SESSION["userid"])) {
            echo
            "<div>Find someone that likes what you like!</div>";
        }
        ?>
    </div>


    <?php
            if (!isset($_SESSION["userid"])) {
                echo 
                "<div class='indexDiv'>
                    <div>
                        Set up your profile <a href='signup.php'>here</a>, or log in <a href='login.php'>here!</a>
                    </div>
                </div>";
            }

            if (isset($_SESSION["userid"])) {
                echo "<div class='indexDiv'>Edit your profile and search <a href='userProfile.php'>here!</a></div>";
            }
        ?>

<?php
    include_once 'footer.php';
?>