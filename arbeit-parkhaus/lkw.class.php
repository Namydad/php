<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKW</title>
</head>
<body>
    <?php
        require_once "fahrzeug.php";
    class LKW extends Fahrzeug
    {
        protected $zzg;
        protected static $anz = 0;

        public function __construct($knz, $status, $zzg)
        {
            self::$anz++;
            parent::__construct($knz, $status);
            $this->zzg = $zzg;
            
        }
        public function holeDaten(){
            if ($this->verliehen == true) {
                $this->verliehen = "Verliehen";
            }
            else {
                $this->verliehen = "Nicht verliehen";
            }
            return "<div class=LKW> Kennzeichen: " . $this->knz .
                "<br> Zulässiges Ladegewicht: " . $this->zzg .
                "t<br> Status: " . $this->verliehen . "</div><br>";

        }
        public static function getAnzahl(){
            return "<div>Die Anzahl der LKW's ist " . self::$anz . "</div><br>";
        }
    }
    ?>
</body>
</html>