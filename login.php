<?php
    include_once 'header.php';
?>
    <section class="signupForm">
        <h2 class="pad">Log In</h2>
        <div class="signupFormInner">
            <form action="includes/loginInc.php" method="post">
                <div>
                    <input type="text" name="uid" placeholder="Email/Phone Number...">
                </div>
                <div>
                    <input type="password" name="pwd" placeholder="Password...">
                </div>
                <div>
                    <button type="submit" name="submit">Log In</button>
                </div>
            </form>
        </div>
    </section>


<?php
    include_once 'footer.php';
?>