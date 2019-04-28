<?php
include ("db_connect.php")
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voeg een reservering toe</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form name="admin_form" method="post" action="admin_get_userdata.php" class="admin_add_res">
        <input type="text" name="admin_voornaam" placeholder="Voornaam" class="voornaam input" required>
        <input type="text" name="admin_tussenvoegs" placeholder="Tussenvoegsel" class=" tussenvoegs input">
        <input type="text" name="admin_achternaam" placeholder="Achernaam" class="achternaam input"required>
        <br>
        <input type="tel" name="admin_telefoonnummer" pattern="[0-6]{2}[0-9]{8}" placeholder="0612345678" class="telefoonnummer input" required>
        <br>
        <input type="email" name="admin_email" placeholder="email@example.com" class="email input">
        <br>
        <input type="date" name="admin_datum" placeholder="01-01-2018" class="datum_tijd input"required>
        <input type="time" name="admin_tijd" class="tijd input"required>
        <br>
        <textarea name="admin_opmerkingen" class="opmerkingen input"></textarea>
        <br>
        <input type="submit" name="admin_submit" value="Maak de nieuwe reservering">
    </form>
</body>
</html>