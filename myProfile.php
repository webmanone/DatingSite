<?php
    include_once 'header.php';
?>

<div class="gridContainer">
    
    <div class="header"><div class="pad"></div><h1>
        Luke's Profile
    </h1></div>

    <div class="about">
        
        <img src="https://i.imgur.com/NsutHnG.jpg" title="source: imgur.com" class="bioPic">
        
        
        <div class="bioGrid">
            <div class="firstName">Luke</div>
            <div class="age">24</div>
            <div class="gender">Male</div>
            <div class="orientation">Straight</div>
            <div class="location">Nottingham</div>
        </div>
        
           <!-- <table class="tableContainer bio">
                <tr>
                    <td>Name: </td><td>Luke</td>
                </tr>
                <tr>
                    <td>Age: </td><td>24</td>
                </tr>
                <tr>
                    <td>Gender: </td><td>Male</td>
                </tr>
                <tr>
                    <td>Location: </td><td>London</td>
                </tr>
                <tr>
                    <td>Orientation: </td><td>Straight</td>
                </tr>
            </table>  
-->

    </div>

    
  <!--  <div class="interest1 container">
        <p class="center">Favourite Books</p>
        <table class="tableContainer fill center">
            <tr>
                <td>1984</td>
                <td>Brave New World</td>
                <td>The Pillars of the Earth</td>
            </tr>
        </table>
    </div>
--> 


<div class="interest1a">
   
    <div class="buttonLeft">
        <img class="buttonSize"src="Images/leftButton.svg" alt="Left" id="leftButton">    
    </div>
    <div class="buttonRight">
        <img class="buttonSize" src="Images/rightButton.svg" alt="Right" id="rightButton">
    </div>

    <p class="interestTitle">Books</p>

<div class="interest1 container" id="interest1">
    <div class="item">1984</div>
    <div class="item">The Pillars of the Earth</div>
    <div class="item">Brave New World</div>
    <div class="item">Catch 22</div>
    <div class="item">A Game of Thrones</div>
    <div class="item">To Kill a Mockingbird</div>
</div>

</div>

    
<div class="interest2a">

    <div class="buttonLeft">
        <img class="buttonSize"src="Images/leftButton.svg" alt="Left" id="leftButton2">    
    </div>
    <div class="buttonRight">
        <img class="buttonSize" src="Images/rightButton.svg" alt="Right" id="rightButton2">
    </div>

    <p class="interestTitle">Video Games</p>

<div class="interest2 container" id="interest2">
    <div class="item">The Last of Us: Part II</div>
    <div class="item">God of War</div>
    <div class="item">FIFA</div>
    <div class="item">NBA 2K</div>
    <div class="item">Rocket League</div>
    <div class="item">Skyrim</div>
</div>
</div>

<!--
    <div class="interest2 container">
        <p class="center">Favourite Video Games</p>
        <table class="tableContainer fill center">
            <tr>
                <td>The Last of Us: Part II</td>
                <td>FIFA</td>
                <td>God of War</td>
            </tr>
        </table>
    </div>
-->

</div>
<?php
    include_once 'footer.php';
?>