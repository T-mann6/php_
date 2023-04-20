<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer deg</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php include "meny.php"; ?><!--inkluderer menyen-->

        <form method="POST" class="registrer">
            Brukernavn
            <br><input type="text" name="brukernavn"><br><br>
            Fornavn
            <br><input type="text" name="fornavn"><br>
            Etternavn
            <br><input type="text" name="etternavn"><br>
            Bio
            <br><input type="text" name="bio"><br>
            Passord
            <br><input type="text" name="passord"><br>
            E-post
            <br><input type="text" name="epost"><br>
            Tlf
            <br><input type="text" name="tlf"><br>
            Skole
            <br><input type="text" name="skole"><br>
            Bosted
            <br><input type="text" name="bosted"><br>
            Fødselsdato
            <br><input type="text" name="fodselsdato"><br>
            <br><input type="submit" name="leggtil" value="Legg til bruker"><br>
        </form><!--form hvor man legger informasjon om brukeren du vil legge inn-->
        <?php
        include "azure.php";//kobler seg til databasen

        if(isset($_POST["leggtil"])){//sjekker om leggtil knappen er trykket
            $brukernavn = $_POST["brukernavn"];
            $fornavn = $_POST["fornavn"];
            $etternavn = $_POST["etternavn"];
            $bio = $_POST["bio"];
            $passord = $_POST["passord"];
            $epost = $_POST["epost"];
            $tlf = $_POST["tlf"];
            $skole = $_POST["skole"];
            $bosted = $_POST["bosted"];
            $fødselsdato = $_POST["fodselsdato"];

            $sql = "INSERT INTO bruker (brukernavn, fornavn, etternavn, bio, 
            passord, epost, tlf, skole, bosted, fodselsdato) 
            VALUES ('$brukernavn', '$fornavn', '$etternavn','$bio',
            '$passord', '$epost','$tlf', '$skole', '$bosted', '$fødselsdato')";//legger informasjonen inn i databasen

            if($con->query($sql)) {
                echo "Bruker med navn $brukernavn ble lagt til i databasen";//bruker lagt til
            }
        }
        ?>
    </div>
</body>
</html>