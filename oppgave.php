<?php

$tall = array(69, 420, 1008, 0, 1, 5, 8, 10, 69420, 42069);

echo "<h3>svar </h3>";

for($i=0; $i < count($tall); $i ++){
    if ($tall[$i] < 10){
        echo "$tall[$i] <br>";
        echo "tallet er lavere enn 10 <br>";
    }
    
    else if ($tall[$i] > 10) {
        echo "$tall[$i] <br>";
        echo "tallet er høyere enn 10 <br>";
    }

    else {
        echo "$tall[$i] <br>";
        echo "tallet er 10 <br>";
    }
}
?>