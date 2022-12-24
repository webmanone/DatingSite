<?php
    include_once 'header.php';
?>
    <section class="signupForm">
    <h2 class="pad">Sign Up</h2>
    <div class="signupFormInner">
    <form action="signupInc.php" method="post">
        <input type="text" name="firstname" placeholder="First name...">
        <input type="text" name="lastname" placeholder="Last name...">
        <input type="date" name="birthday" placeholder="Date of birth...">
        <select name="gender">
            <option value="" disabled selected>Gender...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="transmale">Trans Male</option>
            <option value="transfemale">Trans Female</option>
            <option value="nonbinary">Non-Binary</option>
        </select>
        <select name="orientation">
            <option value="" disabled selected>Orientation...</option>    
            <option value="straight">Straight</option>
            <option value="gaylesbian">Gay/Lesbian</option>
            <option value="bisexual">Bisexual</option>
            <option value="other">Other</option>
        </select>
        <input type="text" name="email" placeholder="Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <div><button type="submit" name="submit">Sign Up</button></div>
    </form>
    </div>
    </section>


<?php
    include_once 'footer.php';
?>