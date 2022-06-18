 <?php
//connection dbase

$hostname="localhost";
$username="root";
$password="";
$dbname="projet_fin";
$usertable="boutique";
$yourfield="id_client"
mysql_connect("mysql:host=localhost;dbname=projet_fin", "root", "");
or die("html>script langaguage='javascript'>alert('impossible de se connjecter!réessayez .'),history.go(-1)/script>html>");
mysqli_select_db(projet_fin);

//verifIenrregistrements 

$query = "SELECT * FROM boutique";
$result="mysqli_query($query);

if($result){
while($row=mysqli_fetch_array($result)) {
    $name=$row["$yourfield"];
    echo: ".name."br/>
}
}
?>