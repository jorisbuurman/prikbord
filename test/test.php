<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mijn eerste PHP pagina</h1>

<?php

    $naam = 'Joris';
    $geheimbericht = "Ik ben Joris sssss!";

    $uur = date("H");

    if ($uur <6) {
        $melding = "Goedenacht";
    } elseif ($uur <12) {
        $melding = "Goedemorgen";
    } elseif ($uur <18) {
        $melding = "Goedemiddag";
    } else {
        $melding = "Goedeavond";
    }

    echo "<p> $melding $naam <p>";

    $getal1 = 5;
    $getal2 = 7;
    $uitkomst = $getal1 + $getal2;
    
    echo "<p> De som van $getal1 en $getal2 is $uitkomst </p>";


    echo "<p>hallo $naam<p>";



    
?>
</body>
</html>