<?php
class Teilnehmer {
    //member attributes
    protected $name;
    protected $vorname;
    protected $code;

    //constructor
    function __construct($n, $vn, $c) {
        $this->name = $n;
        $this->vorname = $vn;

        if($c)
        $this->code = $c;
    }
}
?>