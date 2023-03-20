<?php
include "azure.php";

session_start();
$id = $_SESSION['login_id'];

$sql = "SELECT*FROM bruker Where idbruker='$id'";
$resultat = $con->query($sql);

$rad = $resultat->fetch_assoc();
    $idbruker = $rad['idbruker'];
    $brukernavn = $rad['brukernavn'];
    $fornavn = $rad['fornavn'];
    $etternavn = $rad['etternavn'];
    $bio = $rad['bio'];
    $passord = $rad['passord'];
    $epost = $rad['epost'];
    $tlf = $rad['tlf'];
    $skole = $rad['skole'];
    $bosted = $rad['bosted'];
    $fodselsdato = $rad['fodselsdato'];
    $bilde = $rad['bilde'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min bruker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="php">
        <?php
        echo "<div class='brukerdiv'>
            <h1>$brukernavn</h1>
            <h3>$fornavn $etternavn</h3>
            <p>$bio</p>
            <p>$fodselsdato</p>
            <p>$epost</p>
            <p>$tlf</p>
            <p>$skole</p>
            <p>$bosted</p>
            <img src='img/$bilde' alt='person bilde' height='627'>";

            include "upload.php";
            echo "<div class='bilde_div'>";
            $sql = "SELECT * FROM media WHERE idbruker='$id'";
            $resultat = $con->query($sql);

            while($rad = $resultat->fetch_assoc()) {
                $media_navn = $rad['media_navn'];
                echo "<img class='bilder'src='img/$media_navn'>";
            }
            echo "</div>
            <div class='innlegg'>";
                include "oprett_innlegg.php";
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id'";
                $resultat = $con->query($sql);

                while($rad = $resultat->fetch_assoc()){
                    $tekst = $rad['tekst'];
                    echo "<p>$tekst</p>";
                }
            echo "</div>
        </div>";
        
        ?>
    </div>
    
</body>
</html>