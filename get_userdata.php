<?php
include ("db_connect.php");

$voornaam       = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['voornaam']))       ;
$tussenvoegs    = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['tussenvoegs']))    ;
$achternaam     = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['achternaam']))     ;
$telefoonnummer = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['telefoonnummer'])) ;
$email          = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['email']))          ;
$datum          = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['datum']))          ;
$tijd           = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['tijd']))           ;
$opmerkingen    = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['opmerkingen']))    ;

$sql = "INSERT INTO reserveringen (datum, tijd, voornaam, tussenvoegs, achternaam, telefoonnummer, email, opmerkingen)
        VALUES ('$datum', '$tijd', '$voornaam', '$tussenvoegs' , '$achternaam' , '$telefoonnummer' , '$email' , '$opmerkingen')";

if(mysqli_query($connect, $sql)){
    header("location: reservation_true.php");
} else{
    echo "Error:" . $sql . mysqli_error($connect);
}
mysqli_close($connect);
?>