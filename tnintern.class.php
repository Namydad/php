<?php
require_once "teilnehmer.class.php";
class TNintern extends Teilnehmer {
    // Member-Attribute
    private $abteilung;
    //klassen_Attribute
    private static $anzahl = 0;

    // Konstruktor
    public function __construct($n, $vn, $c, $abt) {
            // wenn elternklasse Ã¼bergabe-Parameter hat:
        parent::__construct($n, $vn, $c);
        $this->abteilung = $abt;
        self::$anzahl ++; 
    }
    public function getDaten(){
        return "<p>Name: $this->name<br>
                Vorname: $this->vorname<br>
                Coden: $this->code <br>
                Abteil: $this->abteilung<br>
                ------------------------";
    }
    public static function getAnzahl(){
        return self::$anzahl;
    }
}
?>