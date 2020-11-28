<!-- Database Handler File -->
<?php  

$serverName = "loginphpdb.c5zf9am4ufkr.us-east-1.rds.amazonaws.com";
$dBUsername = "admin";
$dBPassword = "123456789";
$dbName = "loginPHPDB";
$conn = mysqli_init();

mysqli_real_connect($conn, $serverName, $dBUsername, $dBPassword, $dbName, 3306);

if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ');
}