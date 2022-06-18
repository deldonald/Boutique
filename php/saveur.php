<?php
session_start();
$host = "127.0.0.1";
$username = "root";
$pass = "";
$conn = mysqli_connect($host, $username, $pass, "projet_fin");

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}


$nom = $_POST["nom"];
$email = $_POST["email"]; 
$telephone = $_POST["telephone"];
$message = $_POST["message"];
 
if( !empty($nom) && !empty($email) && !empty($telephone) && !empty($message))
{
    $sql = "INSERT INTO messagerie  VALUES ('$nom','$email','$telephone','$message')";
   
    $res = $conn->query($sql);

    if ($res) {
        header("location: ../index.php"); 
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Merci de nous avoir contacté !";
}

$conn->close();


?>