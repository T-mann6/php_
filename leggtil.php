<form method="POST">
    Navn
    <br><input type="text" name="navn"><br><br>
    Evolution
    <br><input type="text" name="evolution"><br>
    Route 1
    <br><input type="text" name="route1"><br>
    Route 2
    <br><input type="text" name="route2"><br>
    Viridian Forest
    <br><input type="text" name="viridianforest"><br>
    Route 3
    <br><input type="text" name="route3"><br>
    Mt.Moon
    <br><input type="text" name="mt_moon"><br>
    Route 4
    <br><input type="text" name="route4"><br>
    Route 24
    <br><input type="text" name="route24"><br>
    Route 25
    <br><input type="text" name="route25"><br>
    Route 5
    <br><input type="text" name="route5"><br>
    Route 6
    <br><input type="text" name="route6"><br>
    Route 11
    <br><input type="text" name="route11"><br>
    Vermilion City
    <br><input type="text" name="vermilioncity"><br>
    Digletts Cave
    <br><input type="text" name="diglettcave"><br>
    Route 9
    <br><input type="text" name="route9"><br>
    Route 10
    <br><input type="text" name="route10"><br>
    Rock Tunnel
    <br><input type="text" name="rocktunnel"><br>
    Lavender Tower
    <br><input type="text" name="lavendertower"><br>
    Route 12
    <br><input type="text" name="route12"><br>
    Route 13
    <br><input type="text" name="route13"><br>
    Route 14
    <br><input type="text" name="route14"><br>
    Route 15
    <br><input type="text" name="route15"><br>
    Route 8
    <br><input type="text" name="route8"><br>
    Route 7
    <br><input type="text" name="route7"><br>
    Route 16
    <br><input type="text" name="route16"><br>
    Route 17
    <br><input type="text" name="route17"><br>
    Route 18
    <br><input type="text" name="route18"><br>
    Route 19
    <br><input type="text" name="route19"><br>
    Route 20
    <br><input type="text" name="route20"><br>
    Seafoam Islands
    <br><input type="text" name="seafoamislands"><br>
    Fossil
    <br><input type="text" name="fossil"><br>
    Cinnabar Mansion
    <br><input type="text" name="cinnabarmansion"><br>
    Route 21
    <br><input type="text" name="route21"><br>
    Route 22
    <br><input type="text" name="route22"><br>
    Route 23
    <br><input type="text" name="route23"><br>
    Victory Road
    <br><input type="text" name="victoryroad"><br>
    Cerulean Cave
    <br><input type="text" name="ceruleancave"><br>
    Air
    <br><input type="text" name="air"><br>
    Powerplant
    <br><input type="text" name="powerplant"><br>
    <br><input type="submit" name="leggtil" value="Legg til pokémon">
</form>

<?php
include "azure.php";
if(isset($_POST["leggtil"])){
    $navn = $_POST["navn"];
    $evolution = $_POST["evolution"];
    $route1 = $_POST["route1"];
    $route2 = $_POST["route2"];
    $viridian_forest = $_POST["viridianforest"];
    $route3 = $_POST["route3"];
    $mt_moon = $_POST["mt_moon"];
    $route4 = $_POST["route4"];
    $route24 = $_POST["route24"];
    $route25 = $_POST["route25"];
    $route5 = $_POST["route5"];
    $route6 = $_POST["route6"];
    $vermilion_city = $_POST["vermilioncity"];
    $route11 = $_POST["route11"];
    $diglett_cave = $_POST["diglettcave"];
    $route9 = $_POST["route9"];
    $route10 = $_POST["route10"];
    $rock_tunnel = $_POST["rocktunnel"];
    $lavender_tower = $_POST["lavendertower"];
    $route12 = $_POST["route12"];
    $route13 = $_POST["route13"];
    $route14 = $_POST["route14"];
    $route15 = $_POST["route15"];
    $route8 = $_POST["route8"];
    $route7 = $_POST["route7"];
    $route16 = $_POST["route16"];
    $route17 = $_POST["route17"];
    $route18 = $_POST["route18"];
    $route19 = $_POST["route19"];
    $route20 = $_POST["route20"];
    $seafoam_islands = $_POST["seafoamislands"];
    $fossil = $_POST["fossil"];
    $cinnabar_mansion = $_POST["cinnabarmansion"];
    $route21 = $_POST["route21"];
    $route22 = $_POST["route22"];
    $route23 = $_POST["route23"];
    $victory_road = $_POST["victoryroad"];
    $cerulean_cave = $_POST["ceruleancave"];
    $air = $_POST["air"];
    $powerplant = $_POST["powerplant"];

    $sql = "INSERT INTO pokemon (navn, evolution, route1, route2, viridianforest, route3, 
    mt_moon, route4, route24, route25, route5, route6, vermilioncity, route11, diglettcave, route9, route10,
    rocktunnel, lavendertower, route12, route13, route14, route15, route8, route7, route16, route17,
    route18, route19, route20, seafoamislands, fossil, cinnabarmansion, route21, route22, route23, victoryroad,
    ceruleancave, air, powerplant) VALUES ('$navn', '$evolution', '$route1', '$route2',
    '$viridian_forest', '$route3', '$mt_moon', '$route4', '$route24', '$route25', '$route5', '$route6',
    '$vermilion_city', '$route11', '$diglett_cave', '$route9', '$route10', '$rock_tunnel', '$lavender_tower', '$route12',
    '$route13', '$route14', '$route15', '$route8', '$route7', '$route16', '$route17', '$route18', '$route19',
    '$route20', '$seafoam_islands', '$fossil', '$cinnabar_mansion', '$route21', '$route22', '$route23', '$victory_road', '$cerulean_cave', '$air', '$powerplant')";

    if($con->query($sql)) {
        echo "Pokémon ble lagt til i databasen";
    }
}
?>