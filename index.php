<?php
session_start();//starter session
include "security.php";//inkluderer security.php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class='container'>
        <?php echo "<div class='meny_index'>";
            include "meny.php";//inkluderer menyen
        echo "</div>";
        include "azure.php";//nettsiden kobles til databasen 
        ?>
        <div class='list'>
        <?php
        $sql = "SELECT idbruker, brukernavn FROM bruker ";//henter alle brukerne lagt i databasen
        $resultat = $con->query($sql);

        while($rad = $resultat->fetch_assoc()){//looper gjennom brukerne
            $idbruker = $rad['idbruker'];
            $brukernavn = $rad['brukernavn'];

            echo "<br><a href='bruker.php?bruker_id=$idbruker'>$brukernavn</a>";//viser all brukerne i en liste og linker til bruker.php
        }
        ?>
        </div>
    </div>
</body>
</html>