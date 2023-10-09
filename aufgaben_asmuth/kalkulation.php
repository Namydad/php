<?php

$produkt_preis = 14900; // 149,00 EUR
$lieferrantenrabatt = 7; // 7%
$lieferrantenkonto = 2; // 2%
$bezugskosten = 700; // 7,00 EUR
$handlungskostenzuschlag = 15; // 15%

$produkt_preis_lieferrantenrabatt = $produkt_preis - (($produkt_preis) * ($lieferrantenrabatt/100));
$produkt_preis_lieferrantenkonto = $produkt_preis_lieferrantenrabatt - (($produkt_preis_lieferrantenrabatt) * ($lieferrantenkonto/100));
$produkt_preis_bezugskosten = $produkt_preis_lieferrantenkonto - ($bezugskosten);
$produkt_preis_handlungskostenzuschlag = $produkt_preis_bezugskosten - ($produkt_preis_bezugskosten)*($handlungskostenzuschlag/100);


 echo "Der Grundpreis von 149,00 EUR setzt sich aus folgenden Zahlen zusammen:" . "<br>"
 . "Der Lieferrantenrabatt ist 7% des Preises: " . ($produkt_preis/100) * ($lieferrantenrabatt/100) . " EUR" . "<br>"
 . "Der Lieferrantenkontobetrag ist 2% des Preises: " . ($produkt_preis_lieferrantenrabatt/100) * ($lieferrantenkonto/100) . " EUR" . "<br>"
 . "Die Bezugskosten sind 7€ der Produkt Preis sind ohne diese Abrechnungen wie folgt: " . ($produkt_preis_bezugskosten/100) . " EUR" . "<br>"
 . "Plus die 15% Handlungskostenzuschlag: " . ($produkt_preis_bezugskosten/100) * ($handlungskostenzuschlag/100) . " EUR" . "<br>"
 . "Der volle Produktionspreis ist wie folgt: " . ($produkt_preis_handlungskostenzuschlag/100) . " EUR" . "<br>";
 
?>