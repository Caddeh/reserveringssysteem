<?php
include ("db_connect.php");

$voornaam = $_POST['admin_voornaam'];
$tussenvoegs = $_POST['admin_tussenvoegs'];
$achternaam = $_POST['admin_achternaam'];
$telefoonnummer = $_POST['admin_telefoonnummer'];
$email = $_POST['admin_email'];
$datum = $_POST['admin_datum'];
$tijd = $_POST['admin_tijd'];
$opmerkingen = $_POST['admin_opmerkingen'];

$sql = "INSERT INTO reserveringen (datum, tijd, voornaam, tussenvoegs, achternaam, telefoonnummer, email, opmerkingen)
        VALUES ('$datum', '$tijd', '$voornaam', '$tussenvoegs' , '$achternaam' , '$telefoonnummer' , '$email' , '$opmerkingen')";

if(mysqli_query($connect, $sql)){
    header("location: back_end.php");
} else{
    echo "Error:" . $sql . mysqli_error($connect);
}
mysqli_close($connect);
?>