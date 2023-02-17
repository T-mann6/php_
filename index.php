<!doctype html>
<html>
    <head>
        <title>Pokémon let's go eevee pokémon locations</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            include "azure.php";
            
            $sql = "SELECT*FROM pokemon";
            $resultat = $con->query($sql);
            
            echo "<table>";
            echo "<tr>
                <th> Navn </th>
                <th> Evolution </th>
                <th> Route 1</th>
                <th> Route 2</th>
                <th> Viridian Forest </th>
                <th> Route 3 </th>
                <th> Mt.Moon </th>
                <th> Route 4 </th>
                <th> Cerulean City </th>
                <th> Route 24 </th>
                <th> Route 25 </th>
                <th> Route 5 </th>
                <th> Route 6 </th>
                <th> Vermilion City </th>
                <th> Route 11 </th>
                <th> Diglett's Cave </th>
                <th> Route 9 </th>
                <th> Route 10 </th>
                <th> Rock Tunnel </th>
                <th> Pokémon Tower </th>
                <th> Route 12 </th>
                <th> Route 13 </th>
                <th> Route 14 </th>
                <th> Route 15 </th>
                <th> Route 8 </th>
                <th> Route 7 </th>
                <th> Route 16 </th>
                <th> Route 17 </th>
                <th> Route 18 </th>
                <th> Route 19 </th>
                <th> Route 20 </th>
                <th> Seafoam Islands </th>
                <th> Fossil </th>
                <th> Cinnabar Mansion </th>
                <th> Route 21 </th>
                <th> Route 22 </th>
                <th> Route 23 </th>
                <th> Victory Road </th>
                <th> Cerulean Cave </th>
                <th> Air </th>
                <th> Powerplant </th>
            </tr>";

            while($rad = $resultat->fetch_assoc()){
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
                

                echo "<tr> 
                    <td><a href='bulbasaur.php?pokemon_id=$idpokemon'> $navn </a></td>
                    <td>$evolution</td>
                    <td>$route1</td>
                    <td>$route2</td>
                    <td>$viridian_forest</td>
                    <td>$route3</td>
                    <td>$mt_moon</td>
                    <td>$route4</td>
                    <td>$cerulean_city</td>
                    <td>$route24</td>
                    <td>$route25</td>
                    <td>$route5</td>
                    <td>$route6</td>
                    <td>$vermilion_city</td>
                    <td>$route11</td>
                    <td>$diglett_cave</td>
                    <td>$route9</td>
                    <td>$route10</td>
                    <td>$rock_tunnel</td>
                    <td>$pokemon_tower</td>
                    <td>$route12</td>
                    <td>$route13</td>
                    <td>$route14</td>
                    <td>$route15</td>
                    <td>$route8</td>
                    <td>$route7</td>
                    <td>$route16</td>
                    <td>$route17</td>
                    <td>$route18</td>
                    <td>$route19</td>
                    <td>$route20</td>
                    <td>$seafoam_islands</td>
                    <td>$fossil</td>
                    <td>$cinnabar_mansion</td>
                    <td>$route21</td>
                    <td>$route22</td>
                    <td>$route23</td>
                    <td>$victory_road</td>
                    <td>$cerulean_cave</td>
                    <td>$air</td>
                    <td>$powerplant</td>
                </tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>