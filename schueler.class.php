<?php

require_once "person.test.php";

class schueler extends person {
	//vorname und nachname sowie deren getter/setter werden von person geerbt
    private $class;
    private $year;
	public $classes = ["2BKI11","2BKI12","2BKI21","2BKI22"];

	public function getClass() {
		return $this->class;
	}

	public function setClass($class) {
		$this->class = $class;
	}

	public function getYear() {
		return $this->year;
	}

	public function setYear($year) {
		$this->year = $year;
	}



    public function __construct($firstname, $lastname, $class, $year){
		//parameter und elternkonstruktur aufrufen
		parent::__construct($firstname, $lastname);
        $this->setClass($class);
        $this->setYear($year);
    }
    public function versetzen(){
        if($this->year == 1){
			$this->year++;
		}
    }
    public function ausgabe(){
        echo "Ich bin $this->firstname $this->lastname, Schueler der $this->class und bin nach den Ferien im Jahr $this->year.";
		echo "<br>";
	}
    

}
?>