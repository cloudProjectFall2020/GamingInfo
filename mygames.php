<?php
include_once 'header.php';
?>

<link rel="stylesheet" href="css/mygames.css" />

<div class="profile-img">
    <img src="profilPlaceHolder.png" alt="" width="50" />

</div>

<div class="MainHeader">
    <h1>MY GAMES</h1>
</div>

<a href="form.php">Add</a>
<button>Delete</button>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Xbox')" id="defaultOpen">Xbox</button>
        <button class="tablinks" onclick="openCity(event, 'PC')">PC</button>
        <button class="tablinks" onclick="openCity(event, 'Playstation')">Playstation</button>
        <button class="tablinks" onclick="openCity(event, 'Switch')">Switch</button>
        <button class="tablinks" onclick="openCity(event, 'Mobile')">Mobile</button>
    </div>

    <div id="Xbox" class="tabcontent">
        <h3>Xbox Games</h3>
        <p>List of games here</p>
    </div>

    <div id="PC" class="tabcontent">
        <h3>PC Games</h3>
        <p>List of games here</p>
    </div>

    <div id="Playstation" class="tabcontent">
        <h3>Playstation Games</h3>
        <p>List of games here</p>
    </div>

    <div id="Switch" class="tabcontent">
        <h3>Switch Games</h3>
        <p>List of games here</p>
    </div>

    <div id="Mobile" class="tabcontent">
        <h3>Mobile Games</h3>
        <p>List of games here</p>
    </div>

    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");

          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");

          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
            document.getElementById(cityName).style.display = "block";

          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

<?php
include_once 'footer.php';
?>