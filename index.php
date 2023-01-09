<!doctype html>
<html>
    <head>
        <title>Mitt første PHP-dokument</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <a href="operator.php">operator</a><br>
        <?php
        $tall1 = 17;
        $tall2 = 9;
        $tekst1 = "Karl";
        $tekst2 = "Johan";

        $sum = $tall1 + $tall2;
        $differanse = $tall1 - $tall2;
        $produkt = $tall1 * $tall2;
        $kvotient = $tall1 / $tall2;

        $langTekst = $tekst1 . $tekst2;
        $bedreTekst = $tekst1 . " " . $tekst2 . "s gate";

        echo "Summen blir $sum <br>";
        echo "Differansen blir $differanse <br>";
        echo "Produktet blir $produkt <br>";
        echo "Kvotienten blir $kvotient <br>";

        echo "<br><br>";

        echo "$langTekst <br>";
        echo $bedreTekst;
        ?>
    </body>
</html>