<?php
require_once "teilnehmer.class.php";
class TNIntern extends Teilnehmer{
    private $abteilung;
    private static $anzahl = 0;

    public function __construct($n, $vn, $c, $abt) {
        parent::__construct($n, $vn, $c);
        $this->abteilung = $abt;
        self::$anzahl++;
    }
    public function getDaten(){
        return "<p>Name: $this->name,<br> Vorname: $this->vorname,<br> Code: $this->code,<br> Abteilung: $this->abteilung,<br> Anzahl: $this->anzahl<br><p>";
    }
}
?>