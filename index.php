<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed</title>
</head>
<body>
    <?php include "meny.php";
    include "azure.php";
    

    $sql = "SELECT idbruker, brukernavn FROM bruker ";
    $resultat = $con->query($sql);

    while($rad = $resultat->fetch_assoc()){
        $idbruker = $rad['idbruker'];
        $brukernavn = $rad['brukernavn'];

        echo "<br><a href='bruker.php?bruker_id=$idbruker'>$brukernavn</a>";
    }
    ?>
</body>
</html>