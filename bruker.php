<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bruker</title>
</head>
<body>
    <?php
    include "azure.php";

    #$id_fra_link = $_GET['bruker_id'];

    $sql = "SELECT*FROM bruker Where idbruker='1'";
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

    echo "<h1>$brukernavn</h1>
        <h3>$fornavn, $etternavn</h3>
        <p>$bio</p>
        <p>$fodselsdato</p>
        <p>$epost, $tlf</p>
        <p>$skole, $bosted</p>";
    ?>
</body>
</html>