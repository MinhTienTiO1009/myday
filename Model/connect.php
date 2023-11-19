<?php

$servername = "localhost";
$database = "mydayhandbook";
$username = "root";
$password = "";
    $conn = mysqli_connect($servername, $username, $password , $database);
    mysqli_set_charset($conn,'utf8');
?>