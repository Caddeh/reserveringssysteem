<?php
include ("db_connect.php");

$errors = [];
$voornaam = "";
$tussenvoegsel = "";
$achternaam = "";
$telnummer = "";
$email = "";
$datum = "";
$tijd = "";
$opmerkingen = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["voornaam"])){
        $errors['name'] = "Vul a.u.b. uw voornaam in";
    } else {
        $voornaam = htmlspecialchars($_POST['voornaam']);
    }
    if(empty($_POST["achternaam"])){
        $errors['achternaam'] = "Vul a.u.b. uw achternaam in";
    } else {
        $achternaam = htmlspecialchars($_POST['achternaam']);
    }
    if(empty($_POST["telefoonnummer"])){
        $errors['telefoonnummer'] = "Vul a.u.b. uw telefoonnummer in";
    } else {
        $telnummer = htmlspecialchars($_POST['telefoonnummer']);
    }
    if(empty($_POST["datum"])){
        $errors['datum'] = "Vul a.u.b. de datum in";
    } else {
        $datum = htmlspecialchars($_POST['datum']);
    }
    if(empty($_POST["tijd"])){
        $errors['tijd'] = "Vul a.u.b. een tijd in";
    } else {
        $tijd = htmlspecialchars($_POST['tijd']);
    }
    $tussenvoegsel = htmlspecialchars($_POST['tussenvoegs']);
    $email = htmlspecialchars($_POST['email']);
    $opmerkingen = htmlspecialchars($_POST['opmerkingen']);

    if (!$errors) {
        $sql = "INSERT INTO reserveringen (datum, tijd, voornaam, tussenvoegs, achternaam, telefoonnummer, email, opmerkingen)
                VALUES ( '".mysqli_real_escape_string($connect, $datum)."', 
                         '".mysqli_real_escape_string($connect, $tijd)."' , 
                         '".mysqli_real_escape_string($connect, $voornaam). "' , 
                         '".mysqli_real_escape_string($connect, $tussenvoegsel)."' , 
                         '".mysqli_real_escape_string($connect, $achternaam)."' , 
                         '".mysqli_real_escape_string($connect, $telnummer)."' , 
                         '".mysqli_real_escape_string($connect, $email)."' , 
                         '".mysqli_real_escape_string($connect, $opmerkingen)."') ";

        if (mysqli_query($connect, $sql)) {
            header("location: reservation_true.php");
        } else {
            echo "Error:" . $sql . mysqli_error($connect);
        }
        mysqli_close($connect);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveer een tafel</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div>
        <img src="upper_background.jpg" class="page_1">
            <div class = "main_header">
                <h1>Reserveer een tafel</h1>
            </div>
    </div>
    <div>
        <h2 class="tussenstuk"></h2>
    </div>
    <div class = page_2>
        <div class = "form">
            <div>
                <span>
                    <p><?php foreach($errors as $error){echo $error;} ?></p>
                </span>
            </div>
            <form name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <br>
                <input class ="voornaam input" type="text" name="voornaam" placeholder="Voornaam*" value="<?= $voornaam ?>">
                <input class ="tussenvoegs input" type="text" name="tussenvoegs" placeholder="Tussenvoegsel" value="<?= $tussenvoegsel ?>">
                <input class ="achternaam input" type="text" name="achternaam" placeholder="Achternaam*" value="<?= $achternaam ?>">
                <br>
                <input class ="telefoonnummer input" type="tel" name="telefoonnummer" pattern="[0-6]{2}[0-9]{8}" placeholder="0612345678*" value="<?= $telnummer ?>">
                <br>
                <input class ="email input" type="email" name="email" placeholder="email@example.com" value="<?= $email ?>">
                <br>
                <input class="datum_tijd input" type="date" name="datum" placeholder="01-01-2018" value="<?= $datum ?>">
                <input class="tijd input" type="time" name="tijd" placeholder="12:12" value="<?= $tijd ?>">
                <br>
                <textarea placeholder="Graag een kinderzitje, Graag een tafel bij het raam, We zijn met 4+ personen. (Max. 200)" class="opmerkingen input" name="opmerkingen"><?= $opmerkingen?></textarea>
                <br>
                <input type="submit" name="submit" value="Reserveer" class="submit_res">
            </form>
        </div>
    </div>
</body>
</html>