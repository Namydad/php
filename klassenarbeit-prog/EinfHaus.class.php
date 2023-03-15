<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Einfaches Haus</title>
</head>
<body>
    <?php 
        require_once("KaufObjekt.class.php");
        class EinfHaus extends KaufObjekt{
            private $energAusweis;
    
            public function __construct($oid, $plz, $ort, $baujahr, $preis, $energAusweis){
                parent::__construct($oid, $plz, $ort, $baujahr, $preis);
                $this->energAusweis = $energAusweis;
            }

            public function berechneProvision(){
                $provisionProzent = parent::$provisionsSatz / 1000;
                return $this->preis * $provisionProzent;
            }
            public function datenAusgeben(){

                if ($this->energAusweis == true){
                    $this->energAusweis = "Ja";
                } else {
                    $this->energAusweis = "Nein";
                }

                return 
                 "Objektdaten: <br>" .
                 "===============<br>".
                 "Objekt-ID: " . $this->oid . "<br>" .
                 "PLZ: " . $this->plz . "<br>".
                 "Ort: " . $this->ort . "<br>".
                 "Baujahr: " . $this->baujahr . "<br>".
                 "Preis: " . $this->preis . "€<br>".
                 "Energieausweis: " . $this->energAusweis . "<br>".
                 "Provisionssatz: " . parent::$provisionsSatz/10 . "%<br>".
                 "Provisionsbetrag:" . $this->berechneProvision() . "€<br>"
                 ;
            }
        }
    ?>
    
</body>
</html>