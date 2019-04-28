<?php
require_once "db_connect.php";
session_start();

//If already logged in, no need to be here
if (isset($_SESSION['naam'])) {
    header('Location: back_end.php');
    exit;
}

//---------------------------------------------------------------------------------------

//On post submit, check the credentials
if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $username = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['gebruikersnaam']))   ;
    $password = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['wachtwoord']))       ;

    //Get password & name from DB
    $query = "SELECT wachtwoord, gebruikersnaam, naam FROM login
              WHERE gebruikersnaam = '$username'";
    $result = mysqli_query($connect, $query);

    $gebruiker = mysqli_fetch_assoc($result);

    //Go on if we got an user (which means email is correct)
    if ($gebruiker) {
        //Validate password
        if (password_verify($password, $gebruiker['wachtwoord'])) {
            //Set session variable, redirect & exit script
            $_SESSION['naam'] = $gebruiker['naam'];
            header('Location: back_end.php');
            exit;
        } else {
            $message = "Je wachtwoord bestaat niet!";
        }
    } else {
        $message = "Deze gebruikersnaam bestaat niet";
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
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php if (isset($message)) { ?>
    <div><?= $message; ?></div>
<?php } ?>
    <div class="login_screen">
        <div class="admin_login_form">
            <form method="post" name="login" action="<?= $_SERVER['PHP_SELF'] ?>" >
                <input class="username input" type="text" name="gebruikersnaam" placeholder="Gebruikersnaam" required>
                <br>
                <input class="password input" type="password" name="wachtwoord" placeholder="Wachtwoord" required>
                <br>
                <input class="submit input" type="submit" name="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>