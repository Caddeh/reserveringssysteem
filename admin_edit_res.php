<?php
    require_once("db_connect.php");
session_start();

//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['naam'])) {
    header('Location: admin_login.php');
    exit;
}

//Get variable from session to use
$name = $_SESSION['naam'];

//-----------------------------------------------------------------------------

$id             = $_GET['id']                                       ;
$query          = "SELECT * FROM reserveringen WHERE id = '$id'"    ;
$result         = mysqli_query($connect, $query)                    ;
$row            = mysqli_fetch_assoc($result)                       ;

$voornaam       = htmlspecialchars(mysqli_real_escape_string($connect, $row['voornaam']))         ;
$tussenvoegs    = htmlspecialchars(mysqli_real_escape_string($connect, $row['tussenvoegs']))      ;
$achternaam     = htmlspecialchars(mysqli_real_escape_string($connect, $row['achternaam']))       ;
$telefoonnummer = htmlspecialchars(mysqli_real_escape_string($connect, $row['telefoonnummer']))   ;
$email          = htmlspecialchars(mysqli_real_escape_string($connect, $row['email']))            ;
$datum          = htmlspecialchars(mysqli_real_escape_string($connect, $row['datum']))            ;
$tijd           = htmlspecialchars(mysqli_real_escape_string($connect, $row['tijd']))             ;
$opmerkingen    = htmlspecialchars(mysqli_real_escape_string($connect, $row['opmerkingen']))      ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bewerk een reservering</title>
</head>
<body>
    <form action="admin_edit_action.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="edit_voornaam" value="<?= $voornaam ?>" class="voornaam input">
        <input type="text" name="edit_tussenvoegs" value="<?= $tussenvoegs ?>" class="tussenvoegs input">
        <input type="text" name="edit_achternaam" value="<?= $achternaam ?>" class="achternaam input">
        <br>
        <input type="tel" name="edit_telefoonnummer" pattern="[6]{1}[0-9]{8}" placeholder="612345678" value="<?= $telefoonnummer ?>" class="telefoonnummer input">
        <br>
        <input type="email" name="edit_email" value="<?= $email ?>">
        <br>
        <input type="date" name="edit_datum" value="<?= $datum ?>">
        <input type="time" name="edit_tijd" value="<?= $tijd ?>">
        <br>
        <textarea name="edit_opmerkingen"><?= $opmerkingen ?></textarea>
        <br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>
