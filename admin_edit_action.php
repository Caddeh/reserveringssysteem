<?php
include("db_connect.php");

session_start();

//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['naam'])) {
    header('Location: admin_login.php');
    exit;
}

//Get variable from session to use
$name = $_SESSION['naam'];

//--------------------------------------------------------------------------------------------

$id                 = mysqli_real_escape_string($connect, $_POST['id'])                 ;
$edit_voornaam      = mysqli_real_escape_string($connect, $_POST['edit_voornaam'])      ;
$edit_tussenvoegs   = mysqli_real_escape_string($connect, $_POST['edit_tussenvoegs'])   ;
$edit_achternaam    = mysqli_real_escape_string($connect, $_POST['edit_achternaam'])    ;
$edit_telefoonnmmr  = mysqli_real_escape_string($connect, $_POST['edit_telefoonnummer']);
$edit_email         = mysqli_real_escape_string($connect, $_POST['edit_email'])         ;
$edit_datum         = mysqli_real_escape_string($connect, $_POST['edit_datum'])         ;
$edit_tijd          = mysqli_real_escape_string($connect, $_POST['edit_tijd'])          ;
$edit_opmerkingen   = mysqli_real_escape_string($connect, $_POST['edit_opmerkingen'])   ;

$sql = "UPDATE reserveringen 
        SET voornaam = '$edit_voornaam', tussenvoegs = '$edit_tussenvoegs', achternaam = '$edit_achternaam', telefoonnummer = '$edit_telefoonnmmr', email = '$edit_email', datum = '$edit_datum', tijd = '$edit_tijd', opmerkingen = '$edit_opmerkingen'
        WHERE id = '$id'";

if(mysqli_query($connect, $sql)){
    header("location: back_end.php");
} else{
    echo "Error:" . $sql . mysqli_error($connect);
}
mysqli_close($connect);
?>


