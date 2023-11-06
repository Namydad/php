<!DOCTYPE html>
<html>
<head>
    <title>INTERNATIONAL GMBH</title>
</head>
<body>

<?php
    // Your PHP code goes here
    $produkt_preis = 335.00; //Euro
    $produkt_preis_usd = $produkt_preis * 1.08; //Dollar
    $produkt_preis_gbp = $produkt_preis * 0.85; //Pfund
    $produkt_preis_yen = $produkt_preis * 160.54; //Yen
    echo "Unten sind Unsere regionalisierten Listenpreise wie folgt / Below you can find our regional Prices: <br>";
    echo "Price in the European Union und Deutschland: " . number_format($produkt_preis,2,",",".") . " €<br>";
    echo "Price in the United States: " . number_format($produkt_preis_usd,2,".",",") . " $<br>";
    echo "Price in the United Kingdom: " . number_format($produkt_preis_gbp,2,".",",") . " £<br>";
    echo "Price in Japan and other Asian countries sadly our Bank only accepts USD or YEN from Asia: " . number_format($produkt_preis_yen, 2, ",", ".") . " ¥<br>";
    
?>

</body>
</html>
