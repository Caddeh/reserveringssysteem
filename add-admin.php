<?php
require_once "db_connect.php";

//Demo credentials
$gebruikersnaam = "Cadda";
$password = password_hash("Caddah", PASSWORD_DEFAULT);
$naam = "Cadda";
//
$query = "INSERT INTO login (gebruikersnaam, wachtwoord, naam)
          VALUES ('$gebruikersnaam', '$password', '$naam')";
mysqli_query($connect, $query);
?>