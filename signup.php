<?php
    include_once 'header.php';
?>
    <section class="signupForm">
    <h2>Sign Up</h2>
    <form action="signupInc.php" method="post">
        <input type="text" name="name" placeholder="Name...">
        <input type="birthday" name="birthday" placeholder="Date of birth...">
        <select name="gender" placeholder="Gender...">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="transmale">Trans Male</option>
            <option value="transfemale">Trans Female</option>
            <option value="nonbinary">Non-Binary</option>
        </select>
        <select name="orientation" placeholder="Orientation...">
            <option value="straight">Straight</option>
            <option value="gaylesbian">Gay/Lesbian</option>
            <option value="bisexual">Bisexual</option>
            <option value="other">Other</option>
        </select>
        <input type="text" name="email" placeholder="Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    </section>


<?php
    include_once 'footer.php';
?>