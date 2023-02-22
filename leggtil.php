<form method="POST">
    Brukernavn
    <br><input type="text" name="brukernavn"><br><br>
    Fornavn
    <br><input type="text" name="fornavn"><br>
    Etternavn
    <br><input type="text" name="etternavn"><br>
    Bio
    <br><input type="text" name="bio"><br>
    Passord
    <br><input type="text" name="passord"><br>
    E-post
    <br><input type="text" name="epost"><br>
    Tlf
    <br><input type="text" name="tlf"><br>
    Skole
    <br><input type="text" name="skole"><br>
    Bosted
    <br><input type="text" name="bosted"><br>
    Fødselsdato
    <br><input type="text" name="fodselsdato"><br>
    <br><input type="submit" name="leggtil" value="Legg til bruker"><br>
</form>
<?php
include "azure.php";

if(isset($_POST["leggtil"])){
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    
}
?>