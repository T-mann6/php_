<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        Brukernavn
        <br><input type="text" name="brukernavn"><br><br>
        Passord
        <br><input type="text" name="passord"><br>
        <input type="submit" name='submit_login' value="Logg på">
    </form><!--form for å logge inn-->
    <?php
        if(isset($_POST['submit_login'])){//sjekker om submit_login er trykket
            include "azure.php";//kobles til databasen
            $brukernavn = $_POST['brukernavn'];
            $passord_skjema = $_POST['passord'];

            $sql = "SELECT fornavn, brukernavn, passord, idbruker FROM bruker WHERE brukernavn='$brukernavn'";//henter ut brukerne fra databasen
            $resultat = $con->query($sql);
            $rad = $resultat->fetch_assoc();

            if($rad['passord'] == $passord_skjema){
                echo "du skal logge inn, passord korrekt";//du blir logget inn

                session_start();//starter session
                $_SESSION['login_id'] = $rad['idbruker'];
                $_SESSION['fornavn'] = $rad['fornavn'];
                header("Refresh:1; url=index.php", true, 303);
            } else {
                echo "Feil brukernavn eller passord";
            }
        }
    ?>
    <a href="leggtil.php">Har ikke bruker?</a><!--linker til leggtil.php-->
</body>
</html>