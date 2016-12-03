<?php
$host = "127.0.0.1";
$root = "root";
$rootPass = "";
$db = "hms";

// Create connection
$conn = mysqli_connect($host, $root, $rootPass,$db);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}//else echo("connected");



?>