<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinokarte</title>
  </head>
  <body>
<?php

$preis = 11.00;
$rabatt_kinokarte = 10.00;

$preis_kinokarte = $preis - $rabatt_kinokarte / 100.0 * $preis;

echo "Der Preis des Kinotickets ist $preis EUR <br>";
echo "mit Kinokarte: $preis_kinokarte EUR";






?>
</body>
</html>