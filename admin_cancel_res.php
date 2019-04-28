<?php
include ("db_connect.php");

session_start();

//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['naam'])) {
    header('Location: admin_login.php');
    exit;
}

//Get variable from session to use
$name = $_SESSION['naam'];

//---------------------------------------------------------------------

$id = $_GET['id'];

$sql    = "DELETE FROM reserveringen WHERE id = '$id'";

if(mysqli_query($connect, $sql)){
    header("location: back_end.php");
} else {
    echo "Kon niet verwijderen:" . $sql . mysqli_error($connect);
}

mysqli_close($connect);
?>