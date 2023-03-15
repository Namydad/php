<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaufObjekt</title>
</head>
<body>
    <?php
        require_once("ImmoObjekt.php");
    abstract class KaufObjekt extends ImmoObjekt{
        protected $baujahr;

        protected $preis;

        public function __construct($oid, $plz, $ort, $baujahr, $preis){
            parent::__construct($oid, $plz, $ort);
            $this->baujahr = $baujahr;
            $this->preis = $preis;
        }
    }
    ?>
</body>
</html>