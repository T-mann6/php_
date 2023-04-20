<?php

$sql = "SELECT * FROM innlegg_kommentar
        JOIN bruker ON innlegg_kommentar.idbruker=bruker.idbruker
        WHERE idinnlegg='$idinnlegg' ORDER BY date DESC"; //henter kommentarene ut av databasen
$resultat_kommentar = $con->query($sql);

//
while($kom = $resultat_kommentar->fetch_assoc()) {//looper gjennom kommentarene
    $innlegg_tekst = $kom['tekst_kommentar'];
    $dato_opprettet = $kom['date'];
    $brukernavn = $kom['brukernavn'];

    echo "$brukernavn: $innlegg_tekst, $dato_opprettet<br>";//viser kommentarene
}
?>