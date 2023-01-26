<?php
if(isset($_get["farge"])){
    echo $_get["farge"];
}
?>

<?php
if(isset($_GET ["sendinn"])){
    $navn = $_GET ["dittnavn"] ;
    $film = $_GET ["favorittfilm"] ;

    echo "<p>Du heter $navn, og din favorittfilm er $film.</p>" ;
}
?>