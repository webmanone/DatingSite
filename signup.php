<?php
    include_once 'header.php';
?>
    <section class="signupForm">
        <h2 class="pad">Sign Up</h2>
        <div class="signupFormInner">
            <form action="includes/signupInc.php" method="post">
                <input type="text" name="firstname" placeholder="First name...">
                <input type="text" name="lastname" placeholder="Last name...">
                <div>
                    <select required name="gender">
                        <option value="" disabled selected>Gender...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="transmale">Trans Male</option>
                        <option value="transfemale">Trans Female</option>
                        <option value="nonbinary">Non-Binary</option>
                    </select>
                    <select required name="orientation">
                        <option value="" disabled selected>Orientation...</option>    
                        <option value="straight">Straight</option>
                        <option value="gaylesbian">Gay/Lesbian</option>
                        <option value="bisexual">Bisexual</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <input type="text" name="birthday" placeholder="Date of birth..." id="birthday" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                    <input type="text" name="location" placeholder="Location...">
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email...">
                    <input type="tel" name="phone" placeholder="Phone Number..." pattern="[0-9]{11}" required>
                </div>
                <div>
                    <input type="password" name="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                </div>
                <div>
                    <button type="submit" name="submit">Sign Up</button>
                </div>
            </form>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Please fill in all required fields.</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Please enter a valid email.</p>";
                }
                else if ($_GET["error"] == "invalidnumber") {
                    echo "<p>Please enter a valid phone number.</p>";
                }
                else if ($_GET["error"] == "invalidpasswords") {
                    echo "<p>Password and Repeat Password fields don't match.</p>";
                }
                else if ($_GET["error"] == "userexists") {
                    echo "<p>An account already exists with this email or phone number. Please try again.</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, please try again.</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>Sign up successful. Welcome to the dating site!</p>";
                }
            }
        ?>

    </section>

<?php
    include_once 'footer.php';
?>