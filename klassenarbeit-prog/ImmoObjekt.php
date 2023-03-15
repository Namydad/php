<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImmoObjekt</title>
</head>
<body>
    <?php
    abstract class ImmoObjekt{
        protected $oid;

        protected $plz;

        protected $ort;

        public static $provisionsSatz = 35;

        public function __construct($oid, $plz, $ort){
            $this->oid = $oid;
            $this->plz = $plz;
            $this->ort = $ort;
        }
    }
    ?>
</body>
</html>