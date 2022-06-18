<?php
session_start();
$host = "127.0.0.1";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "projet_fin");

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}


$sql = "SELECT * FROM boutique";
$res = $conn->query($sql);
