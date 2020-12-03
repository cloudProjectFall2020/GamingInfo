<?php 
include_once 'header.php';
?>


<div class = "profile-img">
            <img src="profilPlaceHolder.png" alt="" width="50">
        
        </div>

    <div class="mainHeader"><h1>FORM</h1></div>
    
<section class = "wrapper">
    
    <div class="subHeader"><h2>ADD A GAME</h2></div>
    <title>Form</title>

<form action="/includes/form.inc.php" method="POST">
    
    <div class="games-form">
    <label for="Title">Game Title</label>
    <input type="text" name="Title" placeholder="Enter a game title" required><br />
    
    
    
    <label for="genre">Genre</label>
    <input type="text" name="genre" placeholder="Enter genre" required><br />
    

    
    <label for="date">Release Year</label>
    <input type="date" name="date" placeholder="Enter year of game release" required><br />
    
    
    
    <label for="favorite">Favorite</lablel>
    <input name="favorite" type ="checkbox">
    
    
    
    <button type="reset">Clear</button>
    <button type="submit">Add</button>
    </div>
</form> 

</section>

<?php 
include_once 'footer.php';
?>