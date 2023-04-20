<?php
include "azure.php";

session_start();
include "security.php";

$id_fra_link = $_GET['bruker_id'];//sender deg til den brukeren du trykte på i index.php

$sql = "SELECT*FROM bruker Where idbruker='$id_fra_link'";
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
    <title>bruker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="php">
        
        <div class='brukerdiv'>
            <?php
            echo "<h1>$brukernavn</h1>
            <h3>$fornavn $etternavn</h3>
            <p>$bio</p>
            <p>$fodselsdato</p>
            <p>$epost</p>
            <p>$tlf</p>
            <p>$skole</p>
            <p>$bosted</p>
            <img src='img/$bilde' alt='person bilde' height='627'>";
            ?>

            <div class='bilde_div'>
                <?php
                $sql = "SELECT * FROM media WHERE idbruker='$id_fra_link'";
                $resultat = $con->query($sql);

                while($rad = $resultat->fetch_assoc()) {
                    $idmedia = $rad['idmedia'];
                    $media_navn = $rad['media_navn'];
                    echo "<a class='bildelink' href='bildevisning.php?media_id=$idmedia'>
                    <img class='bilder'src='img/$media_navn'>
                    </a>";
                }
                ?>
            </div>
            <div class='innlegg'>
                <?php
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id_fra_link' ORDER BY date DESC";
                $resultat = $con->query($sql);

                while($rad = $resultat->fetch_assoc()){
                    $tekst = $rad['tekst'];
                    $dato_opprettet = $rad['date'];
                    $idinnlegg = $rad['idinnlegg'];
                    echo "<h4>$dato_opprettet</h4>
                        <p>$tekst</p>";

                    include "innlegg_kommentarer.php";

                    echo "<form method='POST'>
                        <input name='tekst_kommentar'>
                        <input name='idinnlegg' type='hidden' value='$idinnlegg'>
                        <input type='submit' name='submit_kommentar' value='Svar'>
                    </form>";
                }
                if(isset($_POST["submit_kommentar"])){
                    $text = $_POST["tekst_kommentar"];
                    $idinnlegg = $_POST["idinnlegg"];
                    $id = $_SESSION['login_id'];

                    $sql = "INSERT INTO innlegg_kommentar (tekst_kommentar, idbruker, idinnlegg, date) VALUES ('$text', '$id', '$idinnlegg', now() )";
                
                    if($con->query($sql)){
                        echo "Kommentar ble lagt til i databasen";
                    } else {
                        echo "Feilmelding: $con->error";
                    }
                }
                ?>
            </div>
        </div>        
    </div>
</body>
</html>