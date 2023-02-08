<?php

require_once "person.class.php";

class schueler extends person {
	//vorname und nachname sowie deren getter/setter werden von person geerbt
	private $class;
    private $wage = ["A13", "A14", "A15", "A16"];
	private $position = ["StR","OStR","StD","OStD"];

	public function getWage() {
		return $this->wage;
	}

	public function setWage($wage) {
		$this->class = $wage;
	}

	public function getPosition() {
		return $this->position;
	}

	public function setPosition($position) {
		$this->position = $position;
	}



    public function __construct($firstname, $lastname, $wage, $position){
		//parameter und elternkonstruktur aufrufen
		parent::__construct($firstname, $lastname);

        $this->setWage($wage);
        $this->setPosition($position);
    }
    public function befördern(){

    }
    public function ausgabe(){
        echo "Ich bin $this->firstname $this->lastname, Lehrer mit dem Dienstgrad $this->position Ich verdiene dieses Jahr ".$this->wage.".";
		echo "<br>";
	}
    

}
?>