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
    
    <div class="heartContainer"><br><br>
        <div class="heart"></div>
    </div>

    <?php
            if (!isset($_SESSION["userid"])) {
                echo 
                "<div class='indexDiv2 enlarge'>
                    <div>
                        Set up your profile <a href='signup.php' class='indexLink'>here</a>, or log in <a href='login.php' class='indexLink'>here!</a>
                    </div>
                </div>";
            }

            if (isset($_SESSION["userid"])) {
                echo "<div class='indexDiv2 enlarge'>Edit your profile and search <a href='userProfile.php' class='indexLink'>here!</a></div>";
            }
        ?>

<?php
    include_once 'footer.php';
?>