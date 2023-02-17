<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulbasaur</title>
</head>
<body>
    <?php
    include "azure.php";

    $id_fra_link = $_GET['pokemon_id']

    $sql = "SELECT * FROM pokemon WHERE idpokemon='$id_fra_link' ";
    $resultat = $con->query($sql);

    $rad = $resultat->fetch_assoc();
        $idpokemon = $rad['idpokemon'];
        $navn = $rad['navn'];
        $evolution = $rad['evolution'];
        $route1 = $rad['route1'];
        $route2 = $rad['route2'];
        $viridian_forest = $rad['viridianforest'];
        $route3 = $rad['route3'];
        $mt_moon = $rad['mt_moon'];
        $route4 = $rad['route4'];
        $cerulean_city = $rad['ceruleancity'];
        $route24 = $rad['route24'];
        $route25 = $rad['route25'];
        $route5 = $rad['route5'];
        $route6 = $rad['route6'];
        $vermilion_city = $rad['vermilioncity'];
        $route11 = $rad['route11'];
        $diglett_cave = $rad['diglettcave'];
        $route9 = $rad['route9'];
        $route10 = $rad['route10'];
        $rock_tunnel = $rad['rocktunnel'];
        $pokemon_tower = $rad['lavendertower'];
        $route12 = $rad['route12'];
        $route13 = $rad['route13'];
        $route14 = $rad['route14'];
        $route15 = $rad['route15'];
        $route8 = $rad['route8'];
        $route7 = $rad['route7'];
        $route16 = $rad['route16'];
        $route17 = $rad['route17'];
        $route18 = $rad['route18'];
        $route19 = $rad['route19'];
        $route20 = $rad['route20'];
        $seafoam_islands = $rad['seafoamislands'];
        $fossil = $rad['fossil'];
        $cinnabar_mansion = $rad['cinnabarmansion'];
        $route21 = $rad['route21'];
        $route22 = $rad['route22'];
        $route23 = $rad['route23'];
        $victory_road = $rad['victoryroad'];
        $cerulean_cave = $rad['ceruleancave'];
        $air = $rad['air'];
        $powerplant = $rad['powerplant'];
    
        echo "$navn";
    
    ?>
</body>
</html>