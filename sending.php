<?php
$farge = "blue";
echo "<a href='motta.php?farge=$farge'>meow</a>";
?>

<form action="motta.php" method="GET">
    Ditt navn
    <input type="text" name="dittnavn">

    Hva er din favoritt film?
    <input type="text" name="favorittfilm">
    
    <input type="submit" name="sendinn" value="Send inn">
</form>