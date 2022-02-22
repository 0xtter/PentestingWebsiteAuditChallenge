<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
ini_set('display_errors','Off');
session_start();
$servername = "mariadb";
$username = "root";
$password = "Uoc1234U";
$db_name = "ISEN_NEWS";

// Create connection
$con = mysqli_connect($servername, $username, $password, $db_name);

?>
