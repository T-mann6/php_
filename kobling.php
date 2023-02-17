<?php
$server = "localhost";
$brukernavn = "root";
$passord = "";
$database = "letsgopokemoneevee";

$kobling = new mysqli($server, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
} else {
    echo "Koblingen virker<br><br>";
}

$sql = "SELECT*FROM bil";
$resultat = $kobling->query($sql);

while($rad = $resultat->fetch_assoc()){
    $idpokemon = $rad['idpokemon'];
    $navn = $rad['navn'];
    $route1 = $rad['route1'];
    $route2 = $rad['route2'];
    $viridian_forest = $rad['viridianforest'];
    $route3 = $rad['route3'];
    $mt_moon = $rad['mt.moon'];
    $route4 = $rad['route4'];
    $route24 = $rad['route24'];
    $route25 = $rad['route25'];
    $route5 = $rad['route5'];
    $route6 = $rad['route6'];
    $route11 = $rad['route11'];
    $diglett_cave = $rad['diglettcave'];
    $route9 = $rad['route9'];
    $route10 = $rad['route10'];
    $rock_tunnel = $rad['rocktunnel'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
    $route2 = $rad['route2'];
}
?>