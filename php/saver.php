<?php
session_start();
$host = "127.0.0.1";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "projet_fin");

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}



$email = $_POST["email"]; 
$password = $_POST["password"];


if( !empty($email) && !empty($password) )
{
    $sql = "SELECT * FROM personne where mail_client = '$email' AND mot_de_pass = '$password'";

    $res = $conn->query($sql);

    if ($res) {
        $_SESSION['personne'] = $res->fetch_assoc();
        header("location: ../."); 
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "vous n'aviez pas un compte,veullez vous inscrire";
}

$conn->close();

?>