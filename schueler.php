<?php
class schueler {
    private $firstname;
    private $lastname;
    private $class;
    private $year;

	public function getFirstname() {
		return $this->firstname;
	}

	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	public function getLastname() {
		return $this->lastname;
	}

	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

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


    public function _construct($firstname, $lastname, $class, $year){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setClass($class);
        $this->setYear($year);
    }
    public function _versetzen(){
        
    }
    public function _ausgabe(){
        echo "Ich bin " + $this->firstname + $this->lastname + " Schueler der " + $this->class + " und bin nach den Ferien im " + $this->year + ".";
    }
    

}
?>