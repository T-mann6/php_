<?php // Starter php-koden
include "azure.php"; //kobler siden til databasen

session_start(); //starter session
$id = $_SESSION['login_id']; //sjekker hvilken bruker som er logget inn

$sql = "SELECT*FROM bruker Where idbruker='$id'"; //henter informasjon om brukeren som er logget inn fra databasen
$resultat = $con->query($sql);

$rad = $resultat->fetch_assoc(); // bruker informasjonen
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
?><!--avslutter php-kode-->



<!DOCTYPE html><!--starter html-koden-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min bruker</title>
    <link rel="stylesheet" href="style.css"><!-- linker til css dokumentet-->
</head>
<body>
    <div class="php">
        <div class='brukerdiv'>
            <?php // ny php-kode starter
            echo "<h1>$brukernavn</h1>
            <h3>$fornavn $etternavn</h3>
            <p>$bio</p>
            <p>$fodselsdato</p>
            <p>$epost</p>
            <p>$tlf</p>
            <p>$skole</p>
            <p>$bosted</p>
            <img src='img/$bilde' alt='person bilde' height='627'>";//bruker echo for å vise informasjonen hentet ut fra databasen

            include "upload.php"; // opplasting av bilder
            echo "<div class='bilde_div'>";
            $sql = "SELECT * FROM media WHERE idbruker='$id'"; // henter ut bildene lagt ut av brukeren som er logget inn
            $resultat = $con->query($sql);

            while($rad = $resultat->fetch_assoc()) {// looper gjennom alle bildene hentet ut
                $media_navn = $rad['media_navn'];
                echo "<img class='mine_bilder'src='img/$media_navn'>";// viser alle bildene lagt ut av brukeren
            }
            ?><!--avslutter php-koden-->
        </div>
            <div class='innlegg'>
                <?php
                include "oprett_innlegg.php";
                $sql = "SELECT * FROM innlegg WHERE idbruker='$id'";//henter ut innleggene lagt ut av brukeren som er logget inn 
                $resultat = $con->query($sql);

                while($rad = $resultat->fetch_assoc()){//looper gjennom innleggene
                    $tekst = $rad['tekst'];
                    $dato_opprettet = $rad['date'];
                    $idinnlegg = $rad['idinnlegg'];
                    echo "<h4>$dato_opprettet</h4>
                        <p>$tekst</p>";//viser innleggene
                
                include "innlegg_kommentarer.php";//kommentarfelt

                    echo "<form method='POST'>
                        <input name='tekst_kommentar'>
                        <input name='idinnlegg' type='hidden' value='$idinnlegg'>
                        <input type='submit' name='submit_kommentar' value='Svar'>
                    </form>";//form hvor man skriver kommentarer
                }
                if(isset($_POST["submit_kommentar"])){//sjekker om submit knappen er trykket
                    $text = $_POST["tekst_kommentar"];
                    $idinnlegg = $_POST["idinnlegg"];
                    $id = $_SESSION['login_id'];

                    $sql = "INSERT INTO innlegg_kommentar (tekst_kommentar, idbruker, idinnlegg, date) VALUES ('$text', '$id', '$idinnlegg', now() )";//legger kommentaren inn i databasen
                
                    if($con->query($sql)){
                        echo "Kommentar ble lagt til i databasen";//suksess
                    } else {
                        echo "Feilmelding: $con->error";//noe gikk galt
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>