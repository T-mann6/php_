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
    </form>
    <?php
        if(isset($_POST['submit_login'])){
            include "azure.php";
            $brukernavn = $_POST['brukernavn'];
            $passord_skjema = $_POST['passord'];

            $sql = "SELECT fornavn, brukernavn, passord, idbruker FROM bruker WHERE brukernavn='$brukernavn'";
            $resultat = $con->query($sql);
            $rad = $resultat->fetch_assoc();

            if($rad['passord'] == $passord_skjema){
                echo "du skal logge inn, passord korrekt";

                session_start();
                $_SESSION['login_id'] = $rad['idbruker'];
                $_SESSION['fornavn'] = $rad['fornavn'];
                header("Refresh:1; url=index.php", true, 303);
            } else {
                echo "Feil passord";
            }
        }
    ?>
</body>
</html>