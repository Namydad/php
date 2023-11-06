

<?php 
//Aufgabe 69
$jahresverbrauch = 3500; //kWh
$strompreiscent = 35; // Ct pro kWh
$strompreiseuro = ($strompreiscent * $jahresverbrauch);//kWh Eurorechnung
$strompreis = ($strompreiscent*$jahresverbrauch);//kWh Rechnung
$stromsteuer = ($strompreis * 0.057) / 100; //Stromsteuer
$umsatzsteuer = ($strompreis * 0.16) /100; // Umsatzsteuer
$umlageeeg = ($strompreis *0.103 ) /100; // Umlage nach EEG
$umlagenrest = ($strompreis * 0.034) /100; // Umlagen StromNEV KWKG Offshore-Netz
$nettonetzentgelt = ($strompreis * 0.215) /100; // Nettonetzentgelt
$messungsentgelt = ($strompreis * 0.01) /100; //Messungsentgelt
$energiebeschaffung = ($strompreis * 0.257) /100; //Energiebeschaffung
$marge = ($strompreis * 0.118) /100; // Marge
$konzessionsabgabe = ($strompreis * 0.045) /100; //$Konzessionsabgabe
echo "Strompreis in Euro: " . $strompreiseuro . " €<br>";
echo "Stromsteuer: " . $stromsteuer . " €<br>";
echo "Umsatzsteuer: " . $umsatzsteuer . " €<br>";
echo "Umlage nach EEG: " . $umlageeeg . " €<br>";
echo "Umlagen StromNEV KWKG Offshore-Netz: " . $umlagenrest . " €<br>";
echo "Nettonetzentgelt: " . $nettonetzentgelt . " €<br>";
echo "Messungsentgelt: " . $messungsentgelt . " €<br>";
echo "Energiebeschaffung: " . $energiebeschaffung . " €<br>";
echo "Marge: " . $marge . " €<br>";
echo "Konzessionsabgabe: " . $konzessionsabgabe . " €<br>";

?>