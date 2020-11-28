<?php 
    include_once 'header.php';
?>
     <section class="">
        <h2>Login Page</h2>
        <div class="signup-form-form"> 
            <form action="/includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username/Email..." required>
                <input type="password" name="pwd" placeholder="Password..." required>
                <button type="submit" name="">Log In</button>
            </form>
        </div>
    </section>

    <!-- Error Handing -->
    <?php
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login info</p>";
        }
    }
    ?>

<?php 
    include_once 'footer.php';
?>
