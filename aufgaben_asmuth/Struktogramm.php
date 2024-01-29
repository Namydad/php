<?php

$Bestellung = 50; //Ureadline("Eingabe");
$Versandkostenpauschale = 4;
if ($Bestellung >= 50)
{
    echo $Bestellung . "€";
} else {
    echo $Bestellung + $Versandkostenpauschale . "€";
}
?>