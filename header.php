<!DOCTYPE html>
<html lang="en" dir="ltr">


    <head>
        <meta charset="utf-8">
        <title>Game Room</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body> 
        
        <!--menu top and refs-->
    <nav>
        <div class="wrapper">
            
            <ul>
            <li><a href="index.php">Home</a></li>
            <?php 
                if (isset($_SESSION["useruid"])) {

                    echo "<li><a href='profile.php'>View Profile</a></li>";
                    echo "<li><a href='dashboard.php'>Dashboard</a></li>";
                    echo "<li><a href='mygames.php'>My Games</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";

                }
                else {
                 echo "<li><a href='login.php'>Login</a></li> ";
                 echo "<li><a href='signUp.php'>Sign Up</a></li> ";
                }
            ?>
            </ul>
        </div>
    </nav>          
    <!--introduction on some page-->
    <div class="wrapper"> 