<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinocenter Ticketkauf</title>
<?php
    $preis_erwachsene = 11;
    $preis_kinder = 8;
    $anzahl_erwachsene = $_GET["erwachsene"];
    $anzahl_kinder = $_GET["kinder"];
    $gesamtpreis = ($preis_erwachsene * $anzahl_erwachsene) + ($preis_kinder * $anzahl_kinder);

    echo "Gesamtpreis: " . $gesamtpreis . " €<br>";
?>
</html>