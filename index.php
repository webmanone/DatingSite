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
<?php
    include_once 'footer.php';
?>