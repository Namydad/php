<?php
class schueler {
    private $firstname;
    private $lastname;
    private $class;
    private $year;
	public $classes = ["2BKI11","2BKI12","2BKI21","2BKI22"];

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



    public function __construct($firstname, $lastname, $class, $year){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setClass($class);
        $this->setYear($year);
    }
    public function versetzen($year){
        if($this->year == 1 OR $year == 2){
			$this->year = $year;
		}
    }
    public function ausgabe(){
        echo "Ich bin $this->firstname $this->lastname, Schueler der $this->class und bin nach den Ferien im Jahr $this->year.";
		echo "<br>";
	}
    

}
?>