<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "reserveringssysteem";

//Maak connectie
$connect = mysqli_connect($servername,  $username, $password, $db_name)
    or die("Kan geen connectie maken met de database:" . $connect->connect_error);
?>