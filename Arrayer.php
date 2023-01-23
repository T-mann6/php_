<?php
$figurer = array("Langbein", "Asterix", "Skrue McDuck");

echo "<h3>Noen tegneseriefigurer</h3>";
for($i=0; $i < count($figurer); $i ++){
    echo "Figur med indeks $i: $figurer[$i] <br>";
}

echo '<h3>Arrayen $figurer</h3>';
var_dump($figurer);

echo "<br><br>";

echo $figurer[2];

echo "<br><br>";

$art = array("Langbein"=>"Hund", "Asterix"=>"Menneske", "Skrue McDuck"=>"And");

echo "<p>Langbein er en " . $art["Langbein"] . ".</p>";

echo '<h3>Arrayen $art </h3>';
var_dump($art);
?>