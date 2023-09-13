<?php
//rechteck_class.php
// Q: Can you explain this Code?
// A: This is a class for a rectangle. It has two sides and can calculate the area and the circumference.

class Rechteck {
    //Attributes (Member)


    // Datenkampselung: Sicherung der Daten durch Private setting
    private $seiteA;
    private $seiteB;


    //Spezieller Konstruktor
    public function __construct($a, $b){
        $this->setSeiteA($a);
        $this->setSeiteB($b);
    }


    //Öffentlicher Zugriff
    //Setter
    public function setSeiteA($a){
        if($a > 0){
            $this->seiteA = $a;
        }
        else{
            $this->seiteA = 0;
        }
    }
    public function setSeiteB($b){
        if ($b > 0) {
            $this->seiteB = $b;
        }
        else{
            $this->seiteB = 0;
        }
    }


    //Getter
    public function getSeiteA(){
        return $this->seiteA;
    }
    public function getSeiteB(){
        return $this->seiteB;
    }


    //FUNCTION (Member)
    public function berechneUmfang() {
        $u = 2*$this->seiteA + 2*$this->seiteB;
        $u_f = number_format($u, 2, ',', '.');
        echo "<p>Umfang: $u_f cm</p>";
    }
    public function berechneFläche(){
        $f = $this->seiteA * $this->seiteB;
        $f_f = number_format($f, 2, ',', '.');
        echo "<p>Fläche: $f_f cm²</p>";
    }
    //UML: istQuadratisch():boolean
    // return ($this->seiteA == $this->seiteB)
    public function berechneQuadrat(){
        if ($this->seiteA ** 2 == $this->seiteA * $this->seiteB) {
            return true;
        } 
        else {
            return false;
        }
    }   
}



?>