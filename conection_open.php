<?php
$servername = "localhost";
$username = "db24_044";
$password = "db24_044";
$dbname = "db24_044_cowfarm";
$conn = new mysqli($servername, $username, $password , $dbname);
if($conn->connect_error) {
    die("<br>connect fail". $conn->connect_error);
}
if(mysqli_connect())
{
    echo"connect pass";
}
$conn->set_charset("utf8");
?>