<?php
    $preis = 1050;
    $rabatt_kinokarte = 90;
    $preis_rabatt = $preis * ($rabatt_kinokarte/100);
    echo "<h1> Eintrittspreise: </h1>" . "<br>" . 
    "Preis: " . $preis/100 . " EUR" . "<br>" . "mit Kinokarte: " . $preis_rabatt/100 . "EUR";



?>