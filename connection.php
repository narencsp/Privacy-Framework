<?php
$host= "localhost";
$user="id905037_sites";
$pass="apple890";
$db = "id905037_db10";

$con = mysqli_connect($host,$user,$pass);
//$db = new PDO('mysql:host=localhost;dbname=poll;charset=utf8mb4', 'root', '');
$db = mysqli_select_db($con,$db);

if(!$db){
die("Connection Error".mysqli_error($con));
}

?>

