<form method="POST">
    Skriv ditt innlegg
    <br><input type="text" name="text_innlegg">
    <input type="submit" name='submit_innlegg' value='Legg ut'>
</form>
<?php
if(isset($_POST["submit_innlegg"])){
    include "azure.php";
    $tekst = $_POST["text_innlegg"];
    $sql = "INSERT INTO innlegg (tekst, idbruker, date) VALUES ('$tekst', '$id', now() )";

    if($con->query($sql)){
        echo "Innlegg ble lagt til i databasen";
    } else {
        echo "Feilmelding: $con->error";
    }
}
?>