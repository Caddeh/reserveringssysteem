<?php
require_once ("db_connect.php");
session_start();

//If our session doesn't exist, redirect & exit script
if (!isset($_SESSION['naam'])) {
    header('Location: admin_login.php');
    exit;
}

//Get variable from session to use
$name = $_SESSION['naam'];

$query  = "SELECT * FROM reserveringen WHERE DATE(datum) = CURDATE() ORDER BY tijd";
$result = mysqli_query($connect, $query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveringen</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>
        Reserveringen voor <?= date("l /d/m/Y") ?>
    </h2>
    <a href="admin_form.php" class="add_res_button">Voeg een reserering toe</a>
      <table class="tabel_reserveringen">
          <tr>
              <th>Tijd</th>
              <th>Naan</th>
              <th>Tussenvoegsel</th>
              <th>Achternaam</th>
              <th>Telefoonnummer</th>
              <th>Email</th>
              <th>Opmerkingen</th>
              <th> </th>
              <th> </th>
          </tr>
            <?php
                while($row = mysqli_fetch_array($result)){?>
            <tr>
                <td> <?= $row['tijd']?> </td>
                <td> <?= $row['voornaam']?> </td>
                <td> <?= $row['tussenvoegs']?> </td>
                <td> <?= $row['achternaam']?> </td>
                <td> <?= $row['telefoonnummer']?> </td>
                <td> <?= $row['email']?> </td>
                <td> <?= $row['opmerkingen']?> </td>
                <td> <a href="admin_edit_res.php?id=<?= $row['id'] ?>">Bewerk</a> </td>
                <td> <a href="admin_cancel_res.php?id=<?= $row['id'] ?>">Verwijder</a></td>
                <?php ;}?>
            </tr>
        </table>
</body>
</html>