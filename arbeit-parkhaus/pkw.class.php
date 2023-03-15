<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PKW</title>
</head>
<body>
    <?php
        require_once "fahrzeug.php";
    class PKW extends Fahrzeug
    {
        protected $anzTue;
        protected static $anz = 0;

        public function __construct($knz, $status, $anzTue)
        {
            self::$anz++;
            parent::__construct($knz, $status);
            $this->anzTue = $anzTue;
        }
        public function holeDaten()
        {
            if ($this->verliehen == true) {
                $this->verliehen = "Verliehen";
            }
            else {
                $this->verliehen = "Nicht verliehen";
            }
            return "<div class=PKW> Kennzeichen: " . $this->knz .
            "<br> Anzahl der Türen: " . $this->anzTue .
            "<br> Status: " . $this->verliehen . "</div><br>";
        }
        public static function getAnzahl()
        {
            return "<div>Die Anzahl der PKW's ist " . self::$anz . "</div>";
        }
    }
    ?>
</body>
</html>