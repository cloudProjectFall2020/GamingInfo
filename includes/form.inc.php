<?php
//Code to send game information to database

$Title = $_POST["Title"];
$genre = $_POST["genre"];
$date = $_POST["date"];
$favorite = $_POST["favorite"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

addGame($conn, $Title, $genre, $date, $favorite);