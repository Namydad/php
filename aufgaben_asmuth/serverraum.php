

<?php 
//Aufgabe 3
$grundpreis_monatlich = 249500; //In cent
$mwst = 19;
$grundpreis_jaehrlich = $grundpreis_monatlich * 12;
$serverstromverbrauch = 18000; //kWh
$serverstrompreis = 1850; //Cent pro kWh
$jahresbruttokosten = $grundpreis_jaehrlich + ($serverstromverbrauch * $serverstrompreis);
$jahresbruttokosteneuro = $jahresbruttokosten / 10000; //In Euro
echo "Die jährlichen Bruttokosten betragen für den Serverraum: " . $jahresbruttokosteneuro . " EUR" . "<br>";


?>