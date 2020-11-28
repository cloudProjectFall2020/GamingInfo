<?php 
    include_once 'header.php';
?>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <div class="signup-form-form"> <!-- css styles -->
        <form action="/includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdRepeat" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </div>
    </section>
  
  <!-- Error Messages -->
  <?php  
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidUid") {
            echo "<p>Choose proper username!</p>";
        }
        else if ($_GET["error"] == "invalidEmail") {
            echo "<p>Choose proper email!</p>";
        }
        else if ($_GET["error"] == "passworddontmatch") {
            echo "<p>Passwords dont match!</p>";
        }
    }

  ?>

<?php 
    include_once 'footer.php';
?>