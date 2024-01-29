<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p = $_GET["Watt"];
    $z = $_GET["Zeit"];
    $preis = $_GET["Preis"];
    $W = ($p * $z) / 1000;
    $K = ($W * $preis) / 100;
    echo "Der Stromverbrauch in Kilowatt-Stunde: " . $W . " kWh" . "<br>";
    echo "Gesamtpreis: " . $K . "€" . "<br>"; 

    ?>
</body>
</html>