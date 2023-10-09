<?php

    $brutto_minus = 81;
    $brutto_plus = 19;
    $netto_preisprodukt = 214900;
    $brutto_produktpreis = $netto_preisprodukt * ($brutto_minus/100);

    echo "<h1> Brutto-Netto-Rechner: </h1>" . "<br>" . "Brutto-Preis: " . $brutto_produktpreis/100 . " EUR" . "<br>" . "Netto-Preis: " . $netto_preisprodukt/100 . " EUR";



?>