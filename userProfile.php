<?php
    include_once 'header.php';
?>

<div class="userGridContainer">

    <div class="header"><div class="pad"></div><h1>
        
    </h1></div>

    <div class="about">
        
        <div class="imageHolder">
            <div>
                <form action="uploadPic.php" method="post" enctype="multipart/form-data">
                    <label class="addPicLabel" id="addImg">+
                    <input type="file" name="profilePic" class="addPic">
                    </label>
                    <div class="uploadHolder">
                        <button type="submit" name="submit" id="uploadImg" class="uploadImg">Upload</button>
                    </div>
                </form>
            </div>
<?php 

$sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)){
           $id = $row['id'];
           $sqlImg = "SELECT * FROM profilepic WHERE userid='$id'";
           $resultImg = mysqli_query($conn, $sql);
           while ($rowImg = mysqli_fetch_assoc($resultImg)){
                echo "<div id="imgLink">";
                    if ($rowImg['status' == 0]){
                        echo "<img src="uploads/profile"$id ".jpg" class="bioPic">"
                    } else {
                       echo "<img src="images/emptyProfile.png" class="bioPic">"
                    }
                echo"</div>";
           }
        }
    }

?>
      <!--     <div id="imgLink">
            <img src="images/emptyProfile.png" class="bioPic">
            </div>
        </div>
-->
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
        <div class="interestsTitle">
            Interests
        </div>
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
    
    <div id="addSpecificInterest" class="addSpecificInterest">
        <div class="specificInterestContent">
            <span class="closeModal" id="closeModal">&times;</span>
            <form action="includes/addSpecificInc.php" method="post" id="addSpecificForm">
                <label for="specificInterest">Add a specific interest for this category:</label><br>
                <input type="hidden" id="interestName" name="interestName">
                <input type="hidden" id="interestsId" name="interestsId">
                <input type="text" id="specificInterest" name="specificInterest"><br>
                <button type="submit" id="specificSubmit" name="specificSubmit">Add</button>
            </form>
        </div>
    </div>

    <div id="errorModal" class="errorModal">
        <div class="errorModalContent">
            <span class="closeModal">&times;</span>
            <p>You can select a maximum of 3 interests</p>
        </div>
    </div>

    <div class="selectedInterestsWrapper" id="selectedInterestsWrapper">
        <div class="userNameTitle">
            <?php
                echo 
                $_SESSION["userFirstname"];
            ?>
        </div>
    </div>

<?php
    include_once 'footer.php';
?>