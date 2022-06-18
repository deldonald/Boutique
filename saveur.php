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
$prenom = $_POST["prenom"]; 
$email = $_POST["email"]; 
$password = $_POST["password"];
$password2 = $_POST["password2"];
$login = $_POST["buttonRegistry"]; 


if( $password == $password2 )
{
    $sql = "INSERT INTO personne (nom_client,prenom_client,mail_client,mot_de_pass) VALUES ('$nom','$prenom','$email','$password')";
   
    $res = $conn->query($sql);


    if ($res) {
        header("location: ../identification.php"); 
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "les mots de passe ne sont pas identiques";
}

$conn->close();

?>