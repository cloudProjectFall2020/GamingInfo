<?php 
    include_once 'header.php';

?>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    
     <section class="">
        <div class="signup-form-form"> 
            <form action="/includes/login.inc.php" method="POST">
                <h2>Login</h2>
                <input type="text" name="uid" placeholder="Username/Email..." required>
                <input type="password" name="pwd" placeholder="Password..." required>
                <button type="submit" name="submit">Log In</button>
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
